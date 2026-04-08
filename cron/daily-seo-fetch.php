<?php
/**
 * daily-seo-fetch.php
 * Hardened 2026 Admin Console
 */

$is_browser = (php_sapi_name() !== 'cli');

if ($is_browser) {
    include_once __DIR__ . '/../seo-engine.php';
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>SEO Fetch Console | GryphalCode</title>';
    echo '<style>body { background: #0b1120; color: #38bdf8; font-family: monospace; padding: 20px; line-height: 1.5; } .console { background: #020617; border: 1px solid #1e293b; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); } h1 { color: #f8fafc; font-size: 1.2rem; margin-bottom: 20px; border-bottom: 1px solid #1e293b; padding-bottom: 10px; } .log-entry { margin-bottom: 5px; } .status-success { color: #4ade80; }</style></head><body><main id="main-content"><div class="console"><h1>GryphalCode SEO Sync Console</h1>';
}

// Secret key for security
define('SYNC_KEY', 'GryphalSecurity2026');

if (($_GET['key'] ?? '') !== SYNC_KEY && php_sapi_name() !== 'cli') {
    header('HTTP/1.1 403 Forbidden');
    die("Access Denied: Please provide the security key.");
}

$logFile = __DIR__ . '/../assets/seo/seo_fetch.log';
$dataFile = __DIR__ . '/../assets/seo/daily_data.json';

function logger($msg) {
    global $logFile, $is_browser;
    $timestamp = date('[Y-m-d H:i:s] ');
    file_put_contents($logFile, $timestamp . $msg . "\n", FILE_APPEND);
    if ($is_browser) {
        $cleanMsg = htmlspecialchars($msg);
        $class = (stripos($msg, 'success') !== false || stripos($msg, 'Fetched') !== false) ? 'status-success' : '';
        echo "<div class='log-entry'>$timestamp <span class='$class'>$cleanMsg</span></div>";
    }
}

logger("Starting daily SEO data fetch...");

$data = [
    'trends' => [],
    'autocomplete' => [],
    'timestamp' => date('c')
];

// 1. Fetch Google Trends
$trendsUrl = "https://trends.google.com/trends/api/dailytrends?hl=en-US&tz=-480&geo=US&ns=15";

// Set a browser-like User-Agent to avoid being blocked
$options =  [
    'http' => [
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
                    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36\r\n"
    ]
];
$context = stream_context_create($options);

$trendsRaw = @file_get_contents($trendsUrl, false, $context);
if ($trendsRaw) {
    $cleanJson = str_replace(")]}',", "", $trendsRaw);
    $decoded = json_decode($cleanJson, true);
    if (isset($decoded['default']['trendingSearchesDays'][0]['trendingSearches'])) {
        foreach ($decoded['default']['trendingSearchesDays'][0]['trendingSearches'] as $item) {
            $data['trends'][] = $item['title']['query'];
        }
        logger("Fetched " . count($data['trends']) . " trending topics.");
    } else {
        logger("Error: Failed to parse Google Trends JSON.");
    }
} else {
    logger("Error: Failed to fetch Google Trends raw data.");
}

// 2. Fetch Google Autocomplete
$seeds = ['software development', 'AI solutions', 'cloud computing', 'cybersecurity services'];
foreach ($seeds as $seed) {
    $suggestUrl = "https://suggestqueries.google.com/complete/search?client=firefox&q=" . urlencode($seed);
    $suggestRaw = file_get_contents($suggestUrl);
    if ($suggestRaw) {
        $decoded = json_decode($suggestRaw, true);
        if (isset($decoded[1]) && is_array($decoded[1])) {
            $data['autocomplete'] = array_merge($data['autocomplete'], array_slice($decoded[1], 0, 3));
        }
    }
}
$data['autocomplete'] = array_unique($data['autocomplete']);
logger("Fetched " . count($data['autocomplete']) . " autocomplete suggestions.");

if (file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT))) {
    logger("Daily data saved successfully to assets/seo/daily_data.json");
} else {
    logger("ERROR: Failed to save daily_data.json");
}

if ($is_browser) {
    echo '</div></main></body></html>';
} else {
    echo "Fetch complete.\n";
}
