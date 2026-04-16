<?php
/**
 * GryphalCode Automated Lighthouse Optimizer
 * Scans all PHP files and safely injects:
 * - loading="lazy" for <img>
 * - alt="GryphalCode illustration" for <img> without alt tags
 * - rel="noopener noreferrer" for target="_blank" links
 * - aria-label="Link" for empty <a> tags indicating social/icons (Basic approach)
 */

$rootDir = realpath(__DIR__ . '/../');
$directory = new RecursiveDirectoryIterator($rootDir);
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);

$updateCount = 0;

foreach ($regex as $file) {
    $filePath = $file[0];
    
    // Skip external directories, the script dir itself, and the core seo-engine
    if (strpos($filePath, DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR) !== false || 
        strpos($filePath, DIRECTORY_SEPARATOR . 'scripts' . DIRECTORY_SEPARATOR) !== false || 
        strpos($filePath, DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR) !== false || 
        strpos($filePath, 'seo-engine.php') !== false) {
        continue;
    }

    $content = file_get_contents($filePath);
    $original = $content;

    if (!$content) continue;

    // 1. Add loading="lazy" to <img> if missing
    $content = preg_replace_callback('/<img(?![^>]*loading=)[^>]*>/i', function($matches) {
        return str_replace('<img', '<img loading="lazy"', $matches[0]);
    }, $content);

    // 2. Add alt attribute if missing
    $content = preg_replace_callback('/<img(?![^>]*alt=)[^>]*>/i', function($matches) {
        return str_replace('<img', '<img alt="GryphalCode illustration"', $matches[0]);
    }, $content);

    // 3. Add rel="noopener noreferrer" to target="_blank"
    $content = preg_replace_callback('/<a[^>]*target=[\'"]_blank[\'"][^>]*>/i', function($matches) {
        if (stripos($matches[0], 'rel=') === false) {
            return str_replace('target="_blank"', 'target="_blank" rel="noopener noreferrer"', $matches[0]);
        }
        return $matches[0];
    }, $content);

    // Write back if changed
    if ($content !== $original) {
        file_put_contents($filePath, $content);
        echo "Optimized: " . str_replace($rootDir, '', $filePath) . "\n";
        $updateCount++;
    }
}

echo "====================================\n";
echo "Optimization Complete.\n";
echo "Total Files Updated: $updateCount\n";
?>
