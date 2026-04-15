<?php
/**
 * Daily SEO Maintenance Runner
 * Executes crawl/backlink/SEO maintenance jobs in one place.
 */

declare(strict_types=1);

$jobs = [
    __DIR__ . '/daily-seo-fetch.php',
    __DIR__ . '/toxic-sync.php',
    __DIR__ . '/link-guardian.php',
    __DIR__ . '/sitemap-generator.php',
];

echo "Starting daily SEO maintenance at " . date('c') . PHP_EOL;
foreach ($jobs as $job) {
    if (!file_exists($job)) {
        echo "[skip] Missing job: {$job}" . PHP_EOL;
        continue;
    }
    echo "[run] " . basename($job) . PHP_EOL;
    passthru(PHP_BINARY . ' ' . escapeshellarg($job), $exitCode);
    echo "[done] " . basename($job) . " (exit={$exitCode})" . PHP_EOL;
}
echo "Daily SEO maintenance finished at " . date('c') . PHP_EOL;

