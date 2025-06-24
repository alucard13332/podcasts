<?php
// blog.php — отображение статей из /storage/articles/seo-YYYYMMDD-HHMMSS/
$store = __DIR__ . '/storage/articles';
$articles = glob("$store/seo-*/article.txt");

// Сортируем по дате убывания
usort($articles, function($a, $b) {
    return filemtime($b) - filemtime($a);
});

// Пагинация
$page = max(1, (int)($_GET['page'] ?? 1));
$per_page = 6;
$total_pages = ceil(count($articles) / $per_page);
$offset = ($page - 1) * $per_page;
$current_articles = array_slice($articles, $offset, $per_page);

function get_article_title($path) {
    $lines = file($path);
    return trim($lines[4] ?? $lines[0] ?? 'SEO Статья');
}
?>
<?php require_once __DIR__ . '/autoseo.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Canonical -->
    <link rel="canonical" href="https://прекрасная-подкастная.рф/">

    <!-- SEO -->
    <meta name="description"
        content="Видеостудия в центре Москвы для записи подкастов и коммерческого видео. Профессиональное оборудование. Идеальная локация в центре Москвы на Кутузовском проспекте с бесплатной парковкой. Скидки до 50%. WhatsApp: +7 (985) 924-35-34">
    <meta name="yandex-verification" content="b9b679576df4dce1">
    <meta name="google-site-verification" content="74NqRpVhE8-JUK8_WGdomxBVl9tEIX4devXRyks8r7s">
    <meta name="p:domain_verify" content="c11fd3451048c4a58a0c8b945b2947ba">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://прекрасная-подкастная.рф/">
    <meta property="og:title" content="Студия подкастов и видеозаписи в Москве">
    <meta property="og:description"
        content="Снимем подкаст и коммерческое видео в 4К на Sony FX30, звук — Shure SM7DB. Студия видеозаписи рядом с Москва-Сити. Скидка 50% для новых клиентов. WhatsApp: +7(985)924-35-34">
    <meta property="og:image" content="https://прекрасная-подкастная.рф/img/og_cover.webp">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Студия подкастов и видеозаписи">
    <meta name="twitter:description"
        content="Запишите идеальный подкаст или видео в 4К. Студия записи в центре Москвы на Кутузовском проспекте. Бесплатная парковка. Скидка 50% для новых клиентов. WhatsApp: +7(985)924-35-34">
    <meta name="twitter:image" content="https://прекрасная-подкастная.рф/img/og_cover.webp">

    <!-- JSON-LD -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["Organization", "LocalBusiness", "AudioVisualStudio"],
    "name": "Прекрасная Подкастная",
    "alternateName": "Студия записи подкастов в Москве",
    "description": "Профессиональная студия для записи подкастов и видеоконтента с современным оборудованием и звукоизоляцией. Находимся на Кутузовском проспекте. Есть бесплатная парковка. Скидка 50% для новых клиентов. Пишите в WhatsApp: +7(985)924-35-34",
    "url": "https://прекрасная-подкастная.рф",
    "logo": "https://прекрасная-подкастная.рф/img/logo.webp",
    "telephone": "+7 (985) 924-35-34",
    "email": "402332@mail.ru",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "ул. Студенческая, д. 22, корпус 1",
      "addressLocality": "Москва",
      "postalCode": "119899",
      "addressCountry": "RU"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "55.738",
      "longitude": "37.53"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "21:00"
    },
    "priceRange": "$$",
    "sameAs": [
      "https://vk.com/prekrasnaya_podkastnaya",
      "https://t.me/prekrasnaya_podkastnaya"
    ]
  }
  </script>

    <!-- Preconnect to CDN -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">


    <!-- Preload critical images -->
    <link rel="preload" href="/img/back_ofer.webp" as="image" fetchpriority="high">
    <link rel="preload" href="/img/logo.webp" as="image">
    <link rel="preload" href="/img/icons/podcast.webp" as="image">
    <link rel="preload" href="/img/icons/studio-mixer.webp" as="image">

    <!-- Fonts (inline critical CSS) -->
    <style>
        @font-face {
            font-family: "Inter";
            src: url("/css/fonts/Inter/Inter-Bold.woff2") format("woff2");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Soyuz Grotesk";
            src: url("/css/fonts/SoyuzGrotesk/Soyuz_Grotesk_Bold.woff2") format("woff2");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">

    <noscript>
        <link rel="stylesheet" href="/css/style.css">
    </noscript>

    <link rel="stylesheet" href="/css/lightboxjs.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Title -->
    <title>Студия подкастов и видеозаписи в Москве | Прекрасная Подкастная</title>

    <?php $main = 'active'; ?>
</head>


<body>
    <?php include 'include/header.php'; ?>
    <main>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --primary-light: #818cf8;
            --gradient: linear-gradient(135deg, var(--primary), var(--primary-dark));
            --text: #1e293b;
            --card-bg: rgba(255, 255, 255, 0.9);
            --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            --shadow-card: 0 4px 6px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --radius: 16px;
            --radius-sm: 8px;
            --radius-lg: 24px;
            --glass: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.2);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        
        @media (max-width: 768px) {
            body {
                background-image: none;
            }
        }
        
        .container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 24px;
        }
        
        /* Header */
        .header {
            background: var(--gradient);
            color: var(--white);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: var(--shadow);
            border-bottom: 1px solid var(--glass-border);
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.45rem;
            font-weight: 700;
            margin: 0;
            background: linear-gradient(to right, #fff, #e0e7ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.5px;
        }
        
        .logo span {
            font-weight: 300;
        }
        
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--white);
            text-decoration: none;
            font-size: 1rem;
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius);
            transition: var(--transition);
            background-color: var(--glass);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(5px);
            font-weight: 500;
        }
        
        .back-btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        /* Main content */
        .page-title {
            margin: 3rem 0 2rem;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text);
            line-height: 1.2;
            letter-spacing: -0.025em;
            text-align: center;
            background: linear-gradient(to right, var(--primary), var(--text));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
                margin: 2rem 0 1.5rem;
            }
        }
        
        /* Articles grid */
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }
        
        @media (max-width: 768px) {
            .articles-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
        
        .article-card {
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-card);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid var(--glass-border);
            position: relative;
        }
        
        .article-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }
        
        .article-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }
        
        .article-image-container {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .article-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .article-card:hover .article-image {
            transform: scale(1.05);
        }
        
        .article-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .article-date {
            font-size: 0.85rem;
            color: var(--text-light);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
            font-weight: 500;
        }
        
        .article-title {
            font-size: 1.375rem;
            margin: 0.5rem 0 1rem;
            color: var(--text);
            flex-grow: 1;
            font-weight: 700;
            line-height: 1.3;
        }
        
        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: auto;
            padding: 0.75rem 1.5rem;
            background: var(--gradient);
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border-radius: var(--radius-sm);
            align-self: flex-start;
            box-shadow: 0 4px 6px rgba(99, 102, 241, 0.2);
        }
        
        .read-more:hover {
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(99, 102, 241, 0.3);
        }
        
        .read-more:active {
            transform: translateY(0);
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.75rem;
            margin: 4rem 0;
            flex-wrap: wrap;
        }
        
        .page-link {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 48px;
            height: 48px;
            border-radius: var(--radius-sm);
            text-decoration: none;
            color: var(--text);
            font-weight: 600;
            transition: var(--transition);
            background-color: var(--card-bg);
            border: 1px solid var(--glass-border);
            font-size: 1rem;
        }
        
        .page-link:hover:not(.active, .disabled) {
            background-color: rgba(99, 102, 241, 0.1);
            border-color: var(--primary-light);
            color: var(--primary);
            transform: translateY(-2px);
        }
        
        .page-link.active {
            background: var(--gradient);
            color: var(--white);
            box-shadow: 0 4px 6px rgba(99, 102, 241, 0.2);
        }
        
        .page-link.disabled {
            opacity: 0.5;
            pointer-events: none;
        }
        
        .page-link i {
            font-size: 0.9rem;
        }
        
        /* Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }
        
        .modal-overlay.active {
            display: flex;
            opacity: 1;
        }
        
        .modal {
            background: var(--card-bg);
            width: 100%;
            max-width: 900px;
            max-height: 90vh;
            overflow-y: auto;
            border-radius: var(--radius-lg);
            position: relative;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transform: translateY(20px);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--glass-border);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        .modal-overlay.active .modal {
            transform: translateY(0);
        }
        
        .modal-header {
            padding: 2rem 2rem 1rem;
            position: sticky;
            top: 0;
            background: var(--card-bg);
            z-index: 10;
            border-bottom: 1px solid var(--glass-border);
        }
        
        .modal-title {
            font-size: 1.75rem;
            margin-bottom: 0.75rem;
            color: var(--text);
            font-weight: 700;
            line-height: 1.3;
        }
        
        .modal-date {
            color: var(--text-light);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .modal-close {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--text-light);
            transition: var(--transition);
            background: none;
            border: none;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .modal-close:hover {
            color: var(--text);
            background-color: rgba(0, 0, 0, 0.05);
        }
        
        .modal-body {
            padding: 1rem 2rem 2rem;
        }
        
        .modal-body p {
            margin-bottom: 1.25rem;
            line-height: 1.7;
        }
        
        /* Loading animation */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .loader {
            display: inline-block;
            width: 24px;
            height: 24px;
            border: 3px solid rgba(99, 102, 241, 0.2);
            border-radius: 50%;
            border-top-color: var(--primary);
            animation: spin 1s ease-in-out infinite;
        }
        
        /* Footer */
        .footer {
            background-color: var(--white);
            color: var(--text);
            padding: 4rem 0 2rem;
            margin-top: 4rem;
            border-top: 1px solid var(--glass-border);
        }
        
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .footer-logo {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .footer-links {
            display: flex;
            gap: 2rem;
            margin: 1.5rem 0;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .footer-link {
            color: var(--text-light);
            text-decoration: none;
            transition: var(--transition);
            font-weight: 500;
        }
        
        .footer-link:hover {
            color: var(--primary);
        }
        
        .social-links {
            display: flex;
            gap: 1.5rem;
            margin: 1.5rem 0;
        }
        
        .social-link {
            color: var(--text-light);
            font-size: 1.25rem;
            transition: var(--transition);
        }
        
        .social-link:hover {
            color: var(--primary);
            transform: translateY(-2px);
        }
        
        .copyright {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-top: 1.5rem;
        }
        
        /* Theme toggle button */
        .theme-toggle {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--gradient);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: var(--shadow);
            z-index: 99;
            border: none;
            transition: var(--transition);
        }
        
        .theme-toggle:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
        }
        
        .theme-toggle:active {
            transform: translateY(0) scale(1);
        }
        
        /* Floating action button animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .theme-toggle {
            animation: float 4s ease-in-out infinite;
        }
        
        /* Badge for new articles */
        .badge-new {
            position: absolute;
            top: 16px;
            right: 16px;
            background: #10b981;
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            z-index: 1;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        /* Tooltip */
        .tooltip {
            position: relative;
        }
        
        .tooltip::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: var(--text);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: var(--radius-sm);
            font-size: 0.875rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            margin-bottom: 10px;
        }
        
        .tooltip:hover::after {
            opacity: 1;
            visibility: visible;
            margin-bottom: 0;
        }
    </style>


<main class="container">
    <h1 class="page-title">Полезные статьи </h1>
    
    <div class="articles-grid">
        <?php 
        foreach ($current_articles as $article): 
            $slug = basename(dirname($article));
            $title = get_article_title($article);
            $date = date('d.m.Y', filemtime($article));
            $isNew = (time() - filemtime($article)) < 86400 * 3; // Новые статьи (до 3 дней)
        ?>
        <article class="article-card" data-article="<?= $slug ?>">
            <?php if ($isNew): ?>
                <span class="badge-new">Новое</span>
            <?php endif; ?>
            <div class="article-image-container">
                <img src="/storage/articles/<?= $slug ?>/cover.svg" alt="<?= htmlspecialchars($title) ?>" class="article-image" loading="lazy">
            </div>
            <div class="article-content">
                <div class="article-date">
                    <i class="far fa-calendar-alt"></i>
                    <?= $date ?>
                </div>
                <h3 class="article-title"><?= htmlspecialchars($title) ?></h3>
                <a href="#" class="read-more" data-article="<?= $slug ?>">
                    Читать статью
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </article>
        <?php endforeach; ?>
    </div>

    <?php if ($total_pages > 1): ?>
    <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?= $page-1 ?>" class="page-link tooltip" data-tooltip="Предыдущая страница">
                <i class="fas fa-chevron-left"></i>
            </a>
        <?php endif; ?>

        <?php 
        // Показываем ограниченное количество страниц вокруг текущей
        $start = max(1, $page - 2);
        $end = min($total_pages, $page + 2);
        
        if ($start > 1) echo '<span class="page-link disabled">...</span>';
        
        for ($i = $start; $i <= $end; $i++): ?>
            <a href="?page=<?= $i ?>" class="page-link <?= $i == $page ? 'active' : '' ?>">
                <?= $i ?>
            </a>
        <?php endfor; 
        
        if ($end < $total_pages) echo '<span class="page-link disabled">...</span>';
        ?>

        <?php if ($page < $total_pages): ?>
            <a href="?page=<?= $page+1 ?>" class="page-link tooltip" data-tooltip="Следующая страница">
                <i class="fas fa-chevron-right"></i>
            </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</main>


<!-- Модальное окно -->
<div class="modal-overlay" id="modalOverlay">
    <div class="modal">
        <div class="modal-header">
            <h2 class="modal-title" id="modalTitle">Заголовок статьи</h2>
            <div class="modal-date" id="modalDate">
                <i class="far fa-calendar-alt"></i>
                <span id="modalDateText">Дата публикации</span>
            </div>
            <button class="modal-close" id="modalClose" aria-label="Закрыть">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal-body" id="modalBody">
            <div style="display: flex; justify-content: center; padding: 3rem;">
                <div class="loader"></div>
            </div>
        </div>
    </div>
</div>



<script>
    // Загрузка статьи в модальное окно
    document.querySelectorAll('.article-card, .read-more').forEach(element => {
        element.addEventListener('click', function(e) {
            // Проверяем, является ли кликнутый элемент ссылкой
            if (e.target.tagName === 'A' && !e.target.classList.contains('read-more')) {
                return;
            }
            
            // Отменяем стандартное поведение для всех случаев
            e.preventDefault();
            
            // Получаем slug статьи из ближайшего элемента с data-article
            const card = this.closest('[data-article]') || this;
            const slug = card.getAttribute('data-article');
            
            if (slug) {
                loadArticle(slug);
            }
        });
    });

    // Остальной код остается без изменений
    document.getElementById('modalClose').addEventListener('click', closeModal);
    document.getElementById('modalOverlay').addEventListener('click', function(e) {
        if (e.target === this) closeModal();
    });

    function loadArticle(slug) {
        const modal = document.getElementById('modalOverlay');
        const modalBody = document.getElementById('modalBody');
        
        modalBody.innerHTML = `
            <div style="display:flex;justify-content:center;align-items:center;min-height:200px;">
                <div class="loader"></div>
            </div>
        `;
        
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        fetch(`/storage/articles/${slug}/article.txt`)
            .then(response => {
                if (!response.ok) throw new Error('Статья не найдена');
                return response.text();
            })
            .then(content => {
                const lines = content.split('\n');
                const title = lines[4] || lines[0] || 'SEO Статья';
                const date = new Date().toLocaleDateString('ru-RU', {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                });

                document.getElementById('modalTitle').textContent = title;
                document.getElementById('modalDateText').textContent = date;

                let formatted = '';
                lines.forEach(line => {
                    if (line.trim()) {
                        formatted += `<p>${line.trim()
                            .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                            .replace(/\*(.*?)\*/g, '<em>$1</em>')}</p>`;
                    }
                });

                modalBody.innerHTML = formatted;
                modalBody.style.opacity = '0';
                modalBody.style.transition = 'opacity 0.3s ease';
                setTimeout(() => {
                    modalBody.style.opacity = '1';
                }, 10);
            })
            .catch(error => {
                modalBody.innerHTML = `
                    <div style="text-align:center;padding:2rem;">
                        <i class="fas fa-exclamation-triangle" style="font-size:2.5rem;color:#ef4444;"></i>
                        <h3 style="margin:1rem 0;font-weight:600;">Ошибка загрузки</h3>
                        <button onclick="loadArticle('${slug}')" style="
                            background: var(--gradient);
                            color: white;
                            border: none;
                            padding: 0.75rem 1.5rem;
                            border-radius: var(--radius-sm);
                            cursor: pointer;
                            font-weight: 600;
                            margin-top: 1rem;
                        ">Попробовать снова</button>
                    </div>
                `;
                console.error('Ошибка:', error);
            });
    }

    function closeModal() {
        const modal = document.getElementById('modalOverlay');
        modal.classList.remove('active');
        setTimeout(() => {
            document.body.style.overflow = 'auto';
        }, 300);
    }


    // Закрытие по ESC
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeModal();
    });

    // Переключение темы с сохранением в localStorage
    const themeToggle = document.getElementById('themeToggle');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
    
    // Инициализация темы
    function initTheme() {
        const currentTheme = localStorage.getItem('theme') || 
                           (prefersDarkScheme.matches ? 'dark' : 'light');
        
        if (currentTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        } else {
            document.documentElement.removeAttribute('data-theme');
            themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
        }
    }
    
    // Переключение темы
    function toggleTheme() {
        const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
        
        if (isDark) {
            document.documentElement.removeAttribute('data-theme');
            themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            localStorage.setItem('theme', 'light');
        } else {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            localStorage.setItem('theme', 'dark');
        }
        
        // Анимация кнопки
        themeToggle.style.transform = 'scale(1.1)';
        setTimeout(() => {
            themeToggle.style.transform = 'scale(1)';
        }, 200);
    }
    
    // Инициализация
    initTheme();
    themeToggle.addEventListener('click', toggleTheme);
    
    // Следим за изменением системных предпочтений
    prefersDarkScheme.addEventListener('change', e => {
        if (!localStorage.getItem('theme')) {
            initTheme();
        }
    });

    // Плавный скролл для якорей
    document.querySelectorAll('a[href^="#"]:not([data-article])').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Загрузка Font Awesome если не загружен
    if (!window.FontAwesome) {
        const faScript = document.createElement('script');
        faScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js';
        document.head.appendChild(faScript);
    }
</script>

<style>
    /* Дополнительные стили для форматирования */
    #modalBody strong {
        color: var(--primary);
        font-weight: 700;
    }
    
    #modalBody em {
        font-style: italic;
        color: var(--primary-light);
    }
    
    #modalBody code {
        background: rgba(99, 102, 241, 0.1);
        padding: 0.2rem 0.4rem;
        border-radius: 4px;
        font-family: monospace;
    }
    
    #modalBody u {
        text-decoration: underline;
        text-decoration-color: var(--primary);
    }
    
    .modal-retry-btn {
        background: var(--gradient);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: var(--radius-sm);
        cursor: pointer;
        font-weight: 600;
        transition: var(--transition);
        box-shadow: 0 4px 6px rgba(99, 102, 241, 0.2);
    }
    
    .modal-retry-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 8px rgba(99, 102, 241, 0.3);
    }
</style>
    </main>
    <?php include 'include/footer.php'; ?>
    <!-- Swiper и ваши модули -->
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script defer src="js/swiper_oborydovanie.js"></script>
    <script defer src="js/swiper_location.js"></script>
    <script defer src="js/swiper_reviews.js"></script>
    <script defer src="js/share-modal.js"></script>
    <script src="js/fslightboxx.js?v=<?= time() ?>"></script>

    <!-- Yandex.Metrika (часть юзеров = AdBlock  → ok) -->
    <script async src="https://mc.yandex.ru/metrika/tag.js"></script>
    <script>
        window.ym = window.ym || function () { (ym.a = ym.a || []).push(arguments) };
        ym(101462745, 'init', { clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true });

        /* пример безопасной цели */
        function goal(btn) {
            if (typeof ym === 'function') ym(101462745, 'reachGoal', btn);
        }
    </script>
    <noscript><img src="https://mc.yandex.ru/watch/101462745" style="position:absolute;left:-9999px" alt=""></noscript>

    <script async src='//widjet.matomba.ru/quiz/0c409d0fe4178a457834e477337024bc'></script>


</body>

</html>