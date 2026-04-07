<?php
/**
 * GryphalCode: Automated Dynamic Sitemap Generator (2026 AEO Standard)
 * This script scans the project directory and generates a compliant sitemap.xml
 * to satisfy search engines and AI crawlers on a daily basis.
 */

$base_url = "https://gryphalcode.com";
$root_dir = realpath(__DIR__ . '/..');
$exclude_dirs = ['assets', 'cron', 'vendor', '.git', '.vscode'];
$exclude_files = ['header.php', 'footer.php', 'scripts.php', 'whatsapp.php', 'mail.php'];

$sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// 1. Add Core Landing Pages
$files = scandir($root_dir);
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
        }
    }
}

$sitemap .= '</urlset>';

file_put_contents("$root_dir/sitemap.xml", $sitemap);
echo "Sitemap.xml updated successfully!";
?>
