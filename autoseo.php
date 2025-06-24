<?php
if (PHP_SAPI === 'cli') return;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$root = __DIR__;
$store = "$root/storage";
$config_file = "$store/config.json";

if (!file_exists($config_file)) {
    die("Файл конфигурации не найден: $config_file");
}

$conf = json_decode(file_get_contents($config_file), true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Ошибка в формате config.json: " . json_last_error_msg());
}

$required_keys = ['mode_key', 'title', 'main_topic', 'tags', 'region'];
foreach ($required_keys as $key) {
    if (empty($conf[$key])) {
        die("Не указан обязательный параметр: $key");
    }
}

$stamp = "$store/.last_run";
$lock_file = "$store/.lock";
$log = "$store/seo.log";
$guest_log = "$store/guest.log";

if (!file_exists("$store/articles")) {
    mkdir("$store/articles", 0775, true);
}

function logx($txt, $level = 'INFO') {
    global $log, $conf;
    $levels = ['ERROR' => 1, 'WARN' => 2, 'INFO' => 3, 'DEBUG' => 4];
    $current_level = $levels[$conf['log_level'] ?? 'INFO'] ?? 3;
    
    if ($levels[$level] <= $current_level) {
        $message = sprintf("[%s] %s: %s\n", date('Y-m-d H:i:s'), $level, $txt);
        file_put_contents($log, $message, FILE_APPEND);
    }
}

if (file_exists($stamp)) {
    $last_run = filemtime($stamp);
    $next_run = $last_run + (($conf['frequency'] ?? 1) * 86400);
    if (time() < $next_run) {
        $hours_left = ceil(($next_run - time()) / 3600);
        logx("Следующий запуск через $hours_left часов", 'DEBUG');
        return;
    }
}

$lock = fopen($lock_file, 'c+');
if (!flock($lock, LOCK_EX | LOCK_NB)) {
    logx("Запуск заблокирован - другой процесс уже выполняется", 'WARN');
    return;
}

$random_tag = $conf['tags'][array_rand($conf['tags'])];
$prompt = sprintf(
    "Напиши профессиональную SEO-статью на тему «%s». Основная тема: %s. Ключевое слово: %s. Структура: введение, 3-4 раздела с подзаголовками H2, заключение. Используй списки, факты, примеры. Пиши для региона: %s. Объем: %d слов. Стиль: профессиональный, но доступный.",
    $conf['title'],
    $conf['main_topic'],
    $random_tag,
    $conf['region'],
    $conf['min_words'] ?? 500
);

$api_url = 'https://openrouter.ai/api/v1/chat/completions';
$payload = [
    'model' => str_replace(':free', '', $conf['model']),
    'messages' => [
        ['role' => 'system', 'content' => 'Ты профессиональный SEO-копирайтер, пишешь экспертные статьи.'],
        ['role' => 'user', 'content' => $prompt]
    ],
    'temperature' => 0.7,
    'max_tokens' => $conf['max_tokens'] ?? 2048
];

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $api_url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer {$conf['mode_key']}",
        "Content-Type: application/json"
    ],
    CURLOPT_TIMEOUT => 120,
    CURLOPT_SSL_VERIFYPEER => true
]);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    logx("Ошибка cURL: " . curl_error($ch), 'ERROR');
    flock($lock, LOCK_UN);
    fclose($lock);
    return;
}

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_code !== 200) {
    logx("HTTP ошибка $http_code: " . substr($response, 0, 500), 'ERROR');
    flock($lock, LOCK_UN);
    fclose($lock);
    return;
}

$data = json_decode($response, true);
$text = $data['choices'][0]['message']['content'] ?? '';
if (empty($text)) {
    logx("Пустой ответ от API", 'ERROR');
    flock($lock, LOCK_UN);
    fclose($lock);
    return;
}

// Генерация SVG-обложки
function generate_svg_image($keyword) {
    $keyword = htmlspecialchars($keyword, ENT_QUOTES | ENT_XML1);

    // Случайный градиент
    $colors = [
        ['#3b82f6', '#6366f1'],
        ['#10b981', '#06b6d4'],
        ['#f59e0b', '#ef4444'],
        ['#8b5cf6', '#ec4899'],
        ['#4ade80', '#f472b6']
    ];
    [$color1, $color2] = $colors[array_rand($colors)];

    // Случайные параметры
    $circle_cx = rand(100, 700);
    $circle_cy = rand(50, 200);
    $circle_r = rand(40, 80);
    $circle_opacity = rand(5, 20) / 100;

    $rect_x = rand(500, 650);
    $rect_y = rand(200, 300);
    $rect_w = rand(80, 160);
    $rect_h = rand(80, 160);
    $rect_radius = rand(10, 25);
    $rect_opacity = rand(5, 20) / 100;

    $poly_x1 = rand(200, 300);
    $poly_x2 = $poly_x1 + rand(40, 60);
    $poly_x3 = $poly_x2 + rand(40, 60);
    $poly_y = rand(280, 360);
    $poly_top = rand(200, 260);
    $poly_opacity = rand(5, 20) / 100;

    // Эллипс
    $ellipse_cx = rand(200, 600);
    $ellipse_cy = rand(100, 300);
    $ellipse_rx = rand(60, 100);
    $ellipse_ry = rand(20, 40);
    $ellipse_opacity = rand(5, 15) / 100;

    // Волна (путь)
    $wave_path = "M0,300 C200,280 400,320 800,290 L800,400 L0,400 Z";
    $wave_opacity = rand(5, 15) / 100;

    // Декоративные линии
    $lines = '';
    for ($i = 0; $i < 5; $i++) {
        $x1 = rand(0, 800);
        $y1 = rand(0, 400);
        $x2 = $x1 + rand(-100, 100);
        $y2 = $y1 + rand(-100, 100);
        $stroke_opacity = rand(5, 10) / 100;
        $lines .= "<line x1='{$x1}' y1='{$y1}' x2='{$x2}' y2='{$y2}' stroke='#fff' stroke-opacity='{$stroke_opacity}' stroke-width='2' />\n";
    }

    return <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="800" height="400" viewBox="0 0 800 400" preserveAspectRatio="xMidYMid meet">
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:{$color1};stop-opacity:1" />
      <stop offset="100%" style="stop-color:{$color2};stop-opacity:1" />
    </linearGradient>
  </defs>
  <rect width="800" height="400" fill="url(#grad1)" />
  <path d="{$wave_path}" fill="#ffffff" fill-opacity="{$wave_opacity}" />
  <circle cx="{$circle_cx}" cy="{$circle_cy}" r="{$circle_r}" fill="#ffffff" fill-opacity="{$circle_opacity}" />
  <ellipse cx="{$ellipse_cx}" cy="{$ellipse_cy}" rx="{$ellipse_rx}" ry="{$ellipse_ry}" fill="#ffffff" fill-opacity="{$ellipse_opacity}" />
  <rect x="{$rect_x}" y="{$rect_y}" width="{$rect_w}" height="{$rect_h}" rx="{$rect_radius}" fill="#ffffff" fill-opacity="{$rect_opacity}" />
  <polygon points="{$poly_x1},{$poly_y} {$poly_x2},{$poly_top} {$poly_x3},{$poly_y}" fill="#ffffff" fill-opacity="{$poly_opacity}" />
  {$lines}
  <text x="50%" y="50%" text-anchor="middle" font-size="32" fill="#ffffff" font-family="Segoe UI, sans-serif" font-weight="bold">
    {$keyword}
  </text>
</svg>
SVG;
}


// Сохранение файлов
$slug = 'seo-' . date('Ymd-His');
$article_dir = "$store/articles/$slug";
mkdir($article_dir, 0775, true);

$svg = generate_svg_image($conf['title']);
file_put_contents("$article_dir/cover.svg", $svg);

$html = <<<HTML
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{$conf['title']}</title>
    <meta name="description" content="Статья о {$conf['main_topic']} для региона {$conf['region']}">
</head>
<body>
    <img src="cover.svg" alt="{$conf['title']}" style="max-width:100%;height:auto;margin-bottom:20px">
    $text
    <footer><p>Сгенерировано автоматически. Ключ: $random_tag</p></footer>
</body>
</html>
HTML;

file_put_contents("$article_dir/index.html", $html);
file_put_contents("$article_dir/article.txt", $text);

// Sitemap
$sitemap_file = "$root/sitemap.xml";
try {
    if (file_exists($sitemap_file)) {
        $xml = simplexml_load_file($sitemap_file);
    } else {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"/>');
    }

    $url = $xml->addChild('url');
    $url->addChild('loc', "{$conf['site_url']}/storage/articles/$slug/index.html");
    $url->addChild('lastmod', date('c'));
    $url->addChild('changefreq', 'weekly');
    $url->addChild('priority', '0.8');
    $xml->asXML($sitemap_file);
} catch (Exception $e) {
    logx("Ошибка sitemap: " . $e->getMessage(), 'ERROR');
}

// Ping поисковиков
$ping_services = [
    'google' => "https://www.google.com/ping?sitemap=" . urlencode("{$conf['site_url']}/sitemap.xml"),
    'bing' => "https://www.bing.com/ping?sitemap=" . urlencode("{$conf['site_url']}/sitemap.xml"),
    'yandex' => "https://yandex.com/indexnow?url=" . urlencode("{$conf['site_url']}/storage/articles/$slug/index.html") . "&key={$conf['indexnow_key']}"
];

foreach ($ping_services as $service => $url) {
    $context = stream_context_create(['http' => ['timeout' => 5]]);
    @file_get_contents($url, false, $context);
    logx("Ping $service отправлен", 'DEBUG');
}

// Завершаем
touch($stamp);
logx("Статья создана: $slug. Ключевое слово: $random_tag");
flock($lock, LOCK_UN);
fclose($lock);
