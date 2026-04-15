<?php
/**
 * cron/minify-assets.php
 * Automated Minification Engine for GryphalCode
 * Collapses whitespace and removes comments from JS/CSS.
 */

$is_browser = (php_sapi_name() !== 'cli');
$syncKey = getenv('GRYPHAL_CRON_SYNC_KEY') ?: '';

if ($is_browser && (empty($syncKey) || !hash_equals($syncKey, (string)($_GET['key'] ?? '')))) {
    header('HTTP/1.1 403 Forbidden');
    die("Access Denied.");
}

function minify($content, $type) {
    if ($type === 'css') {
        // Simple CSS Minifier
        $content = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $content);
        $content = str_replace(["\r\n", "\r", "\n", "\t", '  ', '    ', '    '], '', $content);
        $content = str_replace('{ ', '{', $content);
        $content = str_replace(' }', '}', $content);
        $content = str_replace('; ', ';', $content);
    } else {
        // Simple JS Minifier (Whitespace + Comment removal)
        $content = preg_replace('/(?:\/\*(?:[\s\S]*?)\*\/)|(?:^\s*\/\/(?:.*)$)/m', '', $content);
        $content = str_replace(["\r\n", "\r", "\n", "\t"], ' ', $content);
        $content = preg_replace('!\s+!', ' ', $content);
    }
    return trim($content);
}

$dirs = [
    'js' => __DIR__ . '/../assets/js/',
    'css' => __DIR__ . '/../assets/css/'
];

if ($is_browser) echo "<h1>GryphalCode Minification Engine</h1><pre>";

foreach ($dirs as $type => $path) {
    $files = glob($path . "*." . $type);
    foreach ($files as $file) {
        if (strpos($file, '.min.') !== false) continue;
        
        $minFile = str_replace(".$type", ".min.$type", $file);
        $content = file_get_contents($file);
        $minified = minify($content, $type);
        
        if (file_put_contents($minFile, $minified)) {
            $savedPc = round((1 - (strlen($minified) / strlen($content))) * 100, 1);
            echo "Minified: " . basename($file) . " -> " . basename($minFile) . " ($savedPc% saved)\n";
        }
    }
}

if ($is_browser) echo "</pre>";
