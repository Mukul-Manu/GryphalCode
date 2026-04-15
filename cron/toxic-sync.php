<?php
/**
 * cron/toxic-sync.php
 * Automated Toxic Referrer Database Synchronization
 * Fetches latest blacklist from community-maintained sources.
 */

$is_browser = (php_sapi_name() !== 'cli');
$syncKey = getenv('GRYPHAL_CRON_SYNC_KEY') ?: '';

if ($is_browser && (empty($syncKey) || !hash_equals($syncKey, (string)($_GET['key'] ?? '')))) {
    header('HTTP/1.1 403 Forbidden');
    die("Access Denied.");
}

$cacheFile = __DIR__ . '/../assets/security/spam_domains.json';
$sourceUrl = "https://raw.githubusercontent.com/matomo-org/referrer-spam-list/master/spammers.txt";

if ($is_browser) {
    echo "<h1>GryphalCode Toxic Sync</h1><pre>";
}

echo "Starting sync: " . date('Y-m-d H:i:s') . "\n";

// Fetch the list
$options = [
    'http' => [
        'method' => "GET",
        'header' => "User-Agent: GryphalSecurityRobot/1.0\r\n"
    ]
];
$context = stream_context_create($options);
$rawList = @file_get_contents($sourceUrl, false, $context);

if ($rawList) {
    $domains = explode("\n", $rawList);
    $domains = array_map('trim', $domains);
    $domains = array_filter($domains); // Remove empty lines
    
    // Save as JSON for fast PHP loading
    if (file_put_contents($cacheFile, json_encode(array_values($domains)))) {
        echo "Successfully synced " . count($domains) . " domains.\n";
        echo "Database updated: $cacheFile\n";
    } else {
        echo "ERROR: Failed to write to $cacheFile\n";
    }
} else {
    echo "ERROR: Failed to fetch data from source.\n";
}

if ($is_browser) echo "</pre>";
