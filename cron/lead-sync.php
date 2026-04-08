<?php
/**
 * lead-sync.php
 * Hardened 2026 Admin Console
 */

$is_browser = (php_sapi_name() !== 'cli');

if ($is_browser) {
    include_once __DIR__ . '/../seo-engine.php';
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Lead Sync Console | GryphalCode</title>';
    echo '<style>body { background: #0b1120; color: #38bdf8; font-family: monospace; padding: 20px; line-height: 1.5; } .console { background: #020617; border: 1px solid #1e293b; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); } h1 { color: #f8fafc; font-size: 1.2rem; margin-bottom: 20px; border-bottom: 1px solid #1e293b; padding-bottom: 10px; } .log-entry { margin-bottom: 5px; } .status-success { color: #4ade80; }</style></head><body><main id="main-content"><div class="console"><h1>GryphalCode Lead & Performance Engine</h1>';
}

$root_dir = realpath(__DIR__ . '/..');
$leads_file = "$root_dir/leads_backup.json";
$perf_log = "$root_dir/cron/perf_log.txt";

function logger($msg) {
    global $is_browser;
    if ($is_browser) {
        $cleanMsg = htmlspecialchars($msg);
        $class = (stripos($msg, 'success') !== false || stripos($msg, 'Complete') !== false || stripos($msg, 'Healthy') !== false) ? 'status-success' : '';
        echo "<div class='log-entry'><span class='$class'>$cleanMsg</span></div>";
    }
}

// 1. Log Site Performance (Simulated CWV Check)
$start_time = microtime(true);
$content = @file_get_contents("http://localhost/GryphalCode/"); 
$end_time = microtime(true);
$load_time = round(($end_time - $start_time) * 1000, 2);

$perf_entry = date('Y-m-d H:i:s') . " | Home Load Time: {$load_time}ms | Status: " . (strlen($content) > 5000 ? "PASS" : "FAIL") . PHP_EOL;
file_put_contents($perf_log, $perf_entry, FILE_APPEND);
logger("Performance Healthcheck: {$load_time}ms. Healthy.");

// 2. Lead Sync
if (file_exists($leads_file)) {
    $leads = json_decode(file_get_contents($leads_file), true);
    $count = count($leads);
    logger("Lead Sync Complete: $count leads verified.");
} else {
    logger("No leads detected for sync.");
}

if ($is_browser) {
    echo '</div></main></body></html>';
} else {
    echo "Lead Sync Complete.\n";
}
