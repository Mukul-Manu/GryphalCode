<?php
/**
 * integrity-audit.php
 * Hardened 2026 Admin Console
 */

$is_browser = (php_sapi_name() !== 'cli');

if ($is_browser) {
    include_once __DIR__ . '/../seo-engine.php';
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Integrity Console | GryphalCode</title>';
    echo '<style>body { background: #0b1120; color: #38bdf8; font-family: monospace; padding: 20px; line-height: 1.5; } .console { background: #020617; border: 1px solid #1e293b; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); } h1 { color: #f8fafc; font-size: 1.2rem; margin-bottom: 20px; border-bottom: 1px solid #1e293b; padding-bottom: 10px; } .log-entry { margin-bottom: 2px; font-size: 0.9rem; } .status-pass { color: #4ade80; } .status-fail { color: #f87171; font-weight: bold; }</style></head><body><main id="main-content"><div class="console"><h1>GryphalCode Integrity Engine</h1>';
}

$root_dir = realpath(__DIR__ . '/..');
$report_file = "$root_dir/cron/audit_report.txt";

function logger($msg, $class = '') {
    global $is_browser;
    if ($is_browser) {
        $cleanMsg = htmlspecialchars($msg);
        echo "<div class='log-entry'><span class='$class'>$cleanMsg</span></div>";
    }
}

$screens = array_merge(
    glob("$root_dir/*.php"),
    glob("$root_dir/service-details/*.php"),
    glob("$root_dir/case-study-details/*.php")
);

$audit_log = "Full Project Automated Audit: " . date('Y-m-d H:i:s') . PHP_EOL;
logger("Audit Started: " . date('Y-m-d H:i:s'));

$error_count = 0;
foreach ($screens as $screen) {
    $filename = basename($screen);
    if (preg_match('/header|footer|scripts|whatsapp|mail/', $filename)) continue;

    $content = file_get_contents($screen);
    $has_meta = preg_match('/meta.*description/is', $content) || preg_match('/\$meta_desc/is', $content);
    $has_schema = preg_match('/application\/ld\+json/is', $content);
    $is_engine = stripos($content, 'seo-engine.php') !== false;
    $has_h1 = preg_match('/<h1.*?>.*?<\/h1>/is', $content) || (basename($screen) === 'seo-engine.php');

    $status = (($has_meta || $is_engine) && ($has_schema || $is_engine) && $has_h1) ? "PASS" : "FAIL";
    if ($status === "FAIL") $error_count++;

    $class = ($status === "PASS") ? "status-pass" : "status-fail";
    logger("File: $filename | Status: $status", $class);
    $audit_log .= "File: $filename | Status: $status" . PHP_EOL;
}

logger("--------------------------------------------------");
logger("Audit Complete: $error_count failures detected.", ($error_count === 0 ? 'status-pass' : 'status-fail'));

file_put_contents($report_file, $audit_log);

if ($is_browser) {
    echo '</div></main></body></html>';
} else {
    echo "Audit complete. $error_count failures.\n";
}
