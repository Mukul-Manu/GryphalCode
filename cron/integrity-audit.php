<?php
/**
 * GryphalCode: Automated Technical SEO Integrity Audit (2026 Standard)
 * This script runs daily to ensure all 34 screens maintain a 10/10 score.
 */

$root_dir = realpath(__DIR__ . '/..');
$base_url = "https://gryphalcode.com";
$report_file = "$root_dir/cron/audit_report.txt";

$screens = array_merge(
    glob("$root_dir/*.php"),
    glob("$root_dir/service-details/*.php"),
    glob("$root_dir/case-study-details/*.php")
);

$audit_log = "Full Project Automated Audit: " . date('Y-m-d H:i:s') . PHP_EOL;
$audit_log .= str_repeat("=", 50) . PHP_EOL;

$error_count = 0;

foreach ($screens as $screen) {
    if (preg_match('/header|footer|scripts|whatsapp|mail/', basename($screen))) continue;
    
    $content = file_get_contents($screen);
    $name = basename($screen);
    
    $has_meta = preg_match('/meta.*description/', $content);
    $has_schema = preg_match('/application\/ld\+json/', $content);
    $has_gtag = preg_match('/G-3J6X1HS36W/', $content) || preg_match('/scripts\.php/', $content);
    $has_aeo = preg_match('/aeo-answer-block/', $content);
    $has_h1 = preg_match('/<h1.*?>.*?<\/h1>/', $content);
    
    $status = ($has_meta && $has_schema && $has_gtag && $has_aeo && $has_h1) ? "PASS" : "FAIL";
    if ($status === "FAIL") $error_count++;
    
    $audit_log .= "File: $name | Status: $status | AEO: " . ($has_aeo ? '✅' : '🏗️') . " | Schema: " . ($has_schema ? '✅' : '🏗️') . PHP_EOL;
}

$audit_log .= str_repeat("=", 50) . PHP_EOL;
$audit_log .= "Audit Complete: $error_count failures detected." . PHP_EOL;

file_put_contents($report_file, $audit_log);
echo "Integrity Audit complete. Report saved to $report_file";
?>
