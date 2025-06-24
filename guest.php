<?php
// guest.php - Статистика посещений сайта

$root = __DIR__;
$store = "$root/storage";
$guest_log = "$store/guest.log";

// Функция для безопасного вывода
function safe_output($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// Чтение данных из лога
$visitors = [];
$total_visits = 0;

if (file_exists($guest_log)) {
    $lines = file($guest_log, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $parts = explode("\t", $line);
        if (count($parts) >= 5) {
            $visitors[] = [
                'number' => $parts[0],
                'date' => $parts[1],
                'ip' => $parts[2],
                'ua' => $parts[3],
                'count' => $parts[4]
            ];
            $total_visits += (int)$parts[4];
        }
    }
}

// Сортировка по количеству посещений (от большего к меньшему)
usort($visitors, function($a, $b) {
    return $b['count'] <=> $a['count'];
});

// Определение браузера по User-Agent
function get_browser_name($ua) {
    if (strpos($ua, 'MSIE') !== false || strpos($ua, 'Trident') !== false) return 'Internet Explorer';
    if (strpos($ua, 'Edge') !== false) return 'Microsoft Edge';
    if (strpos($ua, 'Chrome') !== false) return 'Google Chrome';
    if (strpos($ua, 'Firefox') !== false) return 'Mozilla Firefox';
    if (strpos($ua, 'Safari') !== false) return 'Apple Safari';
    if (strpos($ua, 'Opera') !== false || strpos($ua, 'OPR') !== false) return 'Opera';
    if (strpos($ua, 'YaBrowser') !== false) return 'Yandex Browser';
    return 'Неизвестный';
}

// SVG иконки браузеров (Font Awesome аналоги)
function get_browser_icon($browser) {
    $icons = [
        'Google Chrome' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#4285F4"><path d="M12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/><path d="M11.27 3.5A9.96 9.96 0 0 1 16 2a10 10 0 0 1 5.92 16.5 10 10 0 0 1-15.85 0L12 12l-.73-8.5z" opacity=".3"/><path d="M12 2a10 10 0 0 0-9.85 12.5 10 10 0 0 0 15.7 0A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-6.3-12.5L12 12l6.3-4.5A8 8 0 0 1 12 20z"/></svg>',
        'Mozilla Firefox' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#FF7139"><path d="M12 2a10 10 0 0 0-9.9 11.5 10 10 0 0 0 18.4-1.5 10 10 0 0 0-8.5-10z" opacity=".3"/><path d="M12 2a10 10 0 0 0-9.9 11.5 10 10 0 0 0 18.4-1.5 10 10 0 0 0-8.5-10zm0 18a8 8 0 0 1-7.4-10.5 8 8 0 0 1 14.7-1.5 8 8 0 0 1-7.3 12z"/></svg>',
        'Apple Safari' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#1E88E5"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z" opacity=".3"/><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm-1-9V8h2v3h3v2h-3v3h-2v-3H8v-2z"/></svg>',
        'Microsoft Edge' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#0078D7"><path d="M12 2a10 10 0 0 0-9.8 12.2 10 10 0 0 0 16.4-1.2A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-7.6-10.5 8 8 0 0 1 15.2-1.3A8 8 0 0 1 12 20z" opacity=".3"/><path d="M12 2a10 10 0 0 0-9.8 12.2 10 10 0 0 0 16.4-1.2A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-7.6-10.5 8 8 0 0 1 15.2-1.3A8 8 0 0 1 12 20z"/></svg>',
        'Internet Explorer' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#0076D6"><path d="M12 2a10 10 0 0 0-9.8 12.2 10 10 0 0 0 16.4-1.2A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-7.6-10.5 8 8 0 0 1 15.2-1.3A8 8 0 0 1 12 20z" opacity=".3"/><path d="M12 2a10 10 0 0 0-9.8 12.2 10 10 0 0 0 16.4-1.2A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-7.6-10.5 8 8 0 0 1 15.2-1.3A8 8 0 0 1 12 20z"/></svg>',
        'Opera' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#FF1B2D"><path d="M12 2a10 10 0 0 0-9.8 12.2 10 10 0 0 0 16.4-1.2A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-7.6-10.5 8 8 0 0 1 15.2-1.3A8 8 0 0 1 12 20z" opacity=".3"/><path d="M12 2a10 10 0 0 0-9.8 12.2 10 10 0 0 0 16.4-1.2A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-7.6-10.5 8 8 0 0 1 15.2-1.3A8 8 0 0 1 12 20z"/></svg>',
        'Yandex Browser' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#FC3F1D"><path d="M12 2a10 10 0 0 0-9.8 12.2 10 10 0 0 0 16.4-1.2A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-7.6-10.5 8 8 0 0 1 15.2-1.3A8 8 0 0 1 12 20z" opacity=".3"/><path d="M12 2a10 10 0 0 0-9.8 12.2 10 10 0 0 0 16.4-1.2A10 10 0 0 0 12 2zm0 18a8 8 0 0 1-7.6-10.5 8 8 0 0 1 15.2-1.3A8 8 0 0 1 12 20z"/></svg>'
    ];
    return $icons[$browser] ?? '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#9E9E9E"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/><path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"/></svg>';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статистика AutoSeoBox посещений</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-light: #6366f1;
            --secondary: #64748b;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #e2e8f0;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --radius: 0.5rem;
            --shadow: 0 1px 3px rgba(0,0,0,0.1);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.5;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
            color: var(--dark);
            -webkit-font-smoothing: antialiased;
        }
        
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        
        .card {
            background: white;
            border-radius: var(--radius);
            box-shadow: var(--shadow-md);
            overflow: hidden;
        }
        
        .card-header {
            padding: 1.5rem 2rem;
            border-bottom: 1px solid var(--gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-title {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            padding: 2rem;
        }
        
        .stat-item {
            background: var(--light);
            border-radius: var(--radius);
            padding: 1.5rem;
            text-align: center;
        }
        
        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 0.875rem;
            color: var(--secondary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .table-container {
            padding: 0 2rem 2rem;
            overflow-x: auto;
        }
        
        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            min-width: 600px;
        }
        
        .data-table thead th {
            position: sticky;
            top: 0;
            background-color: white;
            padding: 1rem 1.25rem;
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--secondary);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--gray);
            z-index: 10;
        }
        
        .data-table tbody td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid var(--gray);
            font-size: 0.875rem;
            vertical-align: middle;
        }
        
        .data-table tbody tr:last-child td {
            border-bottom: none;
        }
        
        .data-table tbody tr:hover {
            background-color: rgba(79, 70, 229, 0.03);
        }
        
        .badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 24px;
            height: 24px;
            padding: 0 6px;
            border-radius: 12px;
            background-color: var(--primary-light);
            color: white;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .browser-cell {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .browser-icon {
            flex-shrink: 0;
            color: var(--secondary);
        }
        
        .card-footer {
            padding: 1.25rem 2rem;
            text-align: center;
            font-size: 0.75rem;
            color: var(--secondary);
            border-top: 1px solid var(--gray);
            background-color: var(--light);
        }
        
        @media (max-width: 768px) {
            .container {
                margin: 1rem auto;
                padding: 0 0.5rem;
            }
            
            .card-header, 
            .stats-grid, 
            .table-container,
            .card-footer {
                padding: 1rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
            
            .stat-item {
                padding: 1rem;
            }
            
            .stat-value {
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Статистика посещений</h1>
                <div class="card-actions">
                    <span class="stat-label">Обновлено: <?= date('d.m.Y H:i') ?></span>
                </div>
            </div>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-value"><?= count($visitors) ?></div>
                    <div class="stat-label">Уникальных посетителей</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-value"><?= $total_visits ?></div>
                    <div class="stat-label">Всего визитов</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-value"><?= date('d.m.Y', file_exists($guest_log) ? filemtime($guest_log) : time()) ?></div>
                    <div class="stat-label">Сбор данных с</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-value"><?= round($total_visits / max(count($visitors), 1), 1) ?></div>
                    <div class="stat-label">Среднее на посетителя</div>
                </div>
            </div>
            
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IP-адрес</th>
                            <th>Браузер</th>
                            <th>Последний визит</th>
                            <th>Визитов</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($visitors as $visitor): ?>
                        <?php $browser = get_browser_name($visitor['ua']); ?>
                        <tr>
                            <td><?= safe_output($visitor['number']) ?></td>
                            <td><?= safe_output($visitor['ip']) ?></td>
                            <td>
                                <div class="browser-cell">
                                    <span class="browser-icon"><?= get_browser_icon($browser) ?></span>
                                    <?= safe_output($browser) ?>
                                </div>
                            </td>
                            <td><?= safe_output($visitor['date']) ?></td>
                            <td><span class="badge"><?= safe_output($visitor['count']) ?></span></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <div class="card-footer">
                AutoSeoBox Visitor Statistics • v1.0 • <?= date('Y') ?>
            </div>
        </div>
    </div>
</body>
</html>