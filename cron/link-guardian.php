<?php
/**
 * cron/link-guardian.php
 * Automated Link Sanitizer & Relevance Guard
 * Scans all project files and removes/neuters harmful or non-IT links.
 */

$is_browser = (php_sapi_name() !== 'cli');
$syncKey = getenv('GRYPHAL_CRON_SYNC_KEY') ?: '';

if ($is_browser && (empty($syncKey) || !hash_equals($syncKey, (string)($_GET['key'] ?? '')))) {
    header('HTTP/1.1 403 Forbidden');
    die("Access Denied.");
}

// IT/Software Relevance Keywords (Allowlist heuristics)
$relevanceKeywords = ['software', 'tech', 'code', 'dev', 'cloud', 'ai', 'data', 'it', 'engine', 'solutions', 'app', 'github', 'stackoverflow', 'microsoft', 'google', 'amazon', 'aws', 'azure'];

function isRelevant($url) {
    $host = parse_url($url, PHP_URL_HOST);
    if (!$host) return true; // Relative link
    
    // Check hostname for keywords
    foreach ($GLOBALS['relevanceKeywords'] as $kw) {
        if (stripos($host, $kw) !== false) return true;
    }
    
    // Check known safe domains
    $safeList = ['facebook.com', 'linkedin.com', 'instagram.com', 'twitter.com', 'x.com', 'youtube.com'];
    foreach ($safeList as $safe) {
        if (stripos($host, $safe) !== false) return true;
    }
    
    return false;
}

$root_dir = realpath(__DIR__ . '/..');
$screens = array_merge(
    glob("$root_dir/*.php"),
    glob("$root_dir/service-details/*.php"),
    glob("$root_dir/case-study-details/*.php")
);

if ($is_browser) echo "<h1>GryphalCode Link-Guardian</h1><pre>";

foreach ($screens as $screen) {
    $content = file_get_contents($screen);
    $original = $content;
    
    // Regex to find all hrefs
    preg_match_all('/<a\b[^>]*href=["\'](http[s]?:\/\/.*?)["\'][^>]*>(.*?)<\/a>/is', $content, $matches, PREG_SET_ORDER);
    
    $modified = false;
    foreach ($matches as $match) {
        $fullTag = $match[0];
        $url = $match[1];
        
        if (!isRelevant($url)) {
            echo "Non-Relevant/Harmful link detected: $url in $screen\n";
            // Check if it already has nofollow
            if (stripos($fullTag, 'rel="nofollow"') === false) {
                $newTag = str_replace('<a ', '<a rel="nofollow" ', $fullTag);
                $content = str_replace($fullTag, $newTag, $content);
                $modified = true;
                echo " -> Action: Added rel='nofollow' (Neutered)\n";
            }
            
            // If it's a known toxic/blacklisted domain, remove it entirely
            // (Assuming we check against our spam_domains.json)
            $spamFile = __DIR__ . '/../assets/security/spam_domains.json';
            if (file_exists($spamFile)) {
                $spamList = json_decode(file_get_contents($spamFile), true);
                $host = parse_url($url, PHP_URL_HOST);
                foreach ($spamList as $spam) {
                    if (stripos($host, $spam) !== false) {
                        $content = str_replace($fullTag, "<!-- REMOVED HARMFUL LINK: $url --> " . $match[2], $content);
                        $modified = true;
                        echo " -> Action: REMOVED (Blacklisted Domain)\n";
                        break;
                    }
                }
            }
        }
    }
    
    if ($modified) {
        file_put_contents($screen, $content);
    }
}

if ($is_browser) echo "</pre>";
echo "Automatic Audit & Cleaning Complete: " . date('Y-m-d H:i:s') . "\n";
