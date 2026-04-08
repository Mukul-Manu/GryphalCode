<?php
/**
 * sitemap-generator.php
 * Hardened 2026 Admin Console
 */

$is_browser = (php_sapi_name() !== 'cli');

if ($is_browser) {
    include_once __DIR__ . '/../seo-engine.php';
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Sitemap Sync Console | GryphalCode</title>';
    echo '<style>body { background: #0b1120; color: #38bdf8; font-family: monospace; padding: 20px; line-height: 1.5; } .console { background: #020617; border: 1px solid #1e293b; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); } h1 { color: #f8fafc; font-size: 1.2rem; margin-bottom: 20px; border-bottom: 1px solid #1e293b; padding-bottom: 10px; } .log-entry { margin-bottom: 5px; } .status-success { color: #4ade80; }</style></head><body><main id="main-content"><div class="console"><h1>GryphalCode Sitemap Console</h1>';
}

$base_url = "https://gryphalcode.com";
$root_dir = realpath(__DIR__ . '/..');
$exclude_dirs = ['assets', 'cron', 'vendor', '.git', '.vscode'];
$exclude_files = ['header.php', 'footer.php', 'scripts.php', 'whatsapp.php', 'mail.php'];

function logger($msg) {
    global $is_browser;
    if ($is_browser) {
        $cleanMsg = htmlspecialchars($msg);
        $class = (stripos($msg, 'success') !== false) ? 'status-success' : '';
        echo "<div class='log-entry'><span class='$class'>$cleanMsg</span></div>";
    }
}

$sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// 1. Add Core Landing Pages
$files = scandir($root_dir);
$count = 0;
foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php' && !in_array($file, $exclude_files)) {
        $name = pathinfo($file, PATHINFO_FILENAME);
        $priority = ($file === 'index.php') ? '1.0' : '0.8';
        $loc = ($file === 'index.php') ? "$base_url/" : "$base_url/$name";

        $sitemap .= "  <url>" . PHP_EOL;
        $sitemap .= "    <loc>$loc</loc>" . PHP_EOL;
        $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
        $sitemap .= "    <changefreq>daily</changefreq>" . PHP_EOL;
        $sitemap .= "    <priority>$priority</priority>" . PHP_EOL;
        $sitemap .= "  </url>" . PHP_EOL;
        $count++;
    }
}

// 2. Add Service Detail Screens
$service_dir = "$root_dir/service-details";
if (is_dir($service_dir)) {
    $service_files = scandir($service_dir);
    foreach ($service_files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            $name = pathinfo($file, PATHINFO_FILENAME);
            $sitemap .= "  <url>" . PHP_EOL;
            $sitemap .= "    <loc>$base_url/service-details/$name</loc>" . PHP_EOL;
            $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
            $sitemap .= "    <changefreq>weekly</changefreq>" . PHP_EOL;
            $sitemap .= "    <priority>0.7</priority>" . PHP_EOL;
            $sitemap .= "  </url>" . PHP_EOL;
            $count++;
        }
    }
}

// 3. Add Case Study Details
$case_dir = "$root_dir/case-study-details";
if (is_dir($case_dir)) {
    $case_files = scandir($case_dir);
    foreach ($case_files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
            $name = pathinfo($file, PATHINFO_FILENAME);
            $sitemap .= "  <url>" . PHP_EOL;
            $sitemap .= "    <loc>$base_url/case-study-details/$name</loc>" . PHP_EOL;
            $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
            $sitemap .= "    <changefreq>monthly</changefreq>" . PHP_EOL;
            $sitemap .= "    <priority>0.6</priority>" . PHP_EOL;
            $sitemap .= "  </url>" . PHP_EOL;
            $count++;
        }
    }
}

$sitemap .= '</urlset>';

if (file_put_contents("$root_dir/sitemap.xml", $sitemap)) {
    logger("Success: Sitemap updated with $count URLs.");
} else {
    logger("Error: Failed to write sitemap.xml");
}

if ($is_browser) {
    echo '</div></main></body></html>';
} else {
    echo "Sitemap complete.\n";
}
