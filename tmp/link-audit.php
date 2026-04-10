<?php
/**
 * tmp/link-audit.php
 * Automated Link Auditor
 */

function checkLink($url) {
    if (strpos($url, '#') === 0) return 200;
    if (strpos($url, 'mailto:') === 0 || strpos($url, 'tel:') === 0) return 200;
    
    // Internal relative links
    if (strpos($url, 'http') !== 0) {
        $path = __DIR__ . '/../' . ltrim($url, '/');
        // Handle PHP extension-less links if needed
        if (!file_exists($path) && !file_exists($path . ".php")) {
            return 404;
        }
        return 200;
    }
    
    // External links
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_NOBODY, true); // Head request
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $code;
}

$files = glob(__DIR__ . '/../{*.php,service-details/*.php,case-study-details/*.php}', GLOB_BRACE);
$report = [];

foreach ($files as $file) {
    if (basename($file) == 'audit-research.php' || basename($file) == 'link-audit.php') continue;
    
    $content = file_get_contents($file);
    preg_match_all('/(href|src)=["\'](.*?)["\']/i', $content, $matches);
    
    $fileStatus = [];
    foreach ($matches[2] as $link) {
        if (empty($link)) continue;
        $status = checkLink($link);
        if ($status >= 400 || $status == 0) {
            $fileStatus[] = ["link" => $link, "status" => $status];
        }
    }
    
    if (!empty($fileStatus)) {
        $report[basename($file)] = $fileStatus;
    }
}

header('Content-Type: application/json');
echo json_encode($report, JSON_PRETTY_PRINT);
