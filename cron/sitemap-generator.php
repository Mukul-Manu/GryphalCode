<?php
/**
 * sitemap-generator.php
 * Hardened 2026 Admin Console
 */

$is_browser = (php_sapi_name() !== 'cli');
$syncKey = getenv('GRYPHAL_CRON_SYNC_KEY') ?: '';

if ($is_browser && (empty($syncKey) || !hash_equals($syncKey, (string)($_GET['key'] ?? '')))) {
    header('HTTP/1.1 403 Forbidden');
    die("Access Denied.");
}

if ($is_browser) {
    include_once __DIR__ . '/../seo-engine.php';
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Sitemap Sync Console | GryphalCode</title>';
    echo '<style>body { background: #0b1120; color: #38bdf8; font-family: monospace; padding: 20px; line-height: 1.5; } .console { background: #020617; border: 1px solid #1e293b; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1); } h1 { color: #f8fafc; font-size: 1.2rem; margin-bottom: 20px; border-bottom: 1px solid #1e293b; padding-bottom: 10px; } .log-entry { margin-bottom: 5px; } .status-success { color: #4ade80; }</style></head><body><main id="main-content"><div class="console"><h1>GryphalCode Sitemap Console</h1>';
}

$base_url = "https://gryphalcode.com";
$root_dir = realpath(__DIR__ . '/..');

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
$count = 0;

$rootPages = [
    '/' => ['changefreq' => 'daily', 'priority' => '1.0'],
    '/about' => ['changefreq' => 'daily', 'priority' => '0.8'],
    '/services' => ['changefreq' => 'daily', 'priority' => '0.8'],
    '/case-studies' => ['changefreq' => 'daily', 'priority' => '0.8'],
    '/blog' => ['changefreq' => 'daily', 'priority' => '0.8'],
    '/contact' => ['changefreq' => 'daily', 'priority' => '0.8'],
    '/request-demo' => ['changefreq' => 'daily', 'priority' => '0.8'],
    '/support' => ['changefreq' => 'daily', 'priority' => '0.7'],
    '/faq' => ['changefreq' => 'daily', 'priority' => '0.7'],
    '/careers' => ['changefreq' => 'weekly', 'priority' => '0.6'],
    '/why-choose' => ['changefreq' => 'weekly', 'priority' => '0.7'],
    '/privacy-policy' => ['changefreq' => 'monthly', 'priority' => '0.4'],
    '/terms-conditions' => ['changefreq' => 'monthly', 'priority' => '0.4'],
    '/editorial-policy' => ['changefreq' => 'monthly', 'priority' => '0.5'],
    '/brand-knowledge' => ['changefreq' => 'weekly', 'priority' => '0.7'],
    '/author-mukul' => ['changefreq' => 'monthly', 'priority' => '0.6'],
    '/site-map' => ['changefreq' => 'weekly', 'priority' => '0.6'],
    '/services-india' => ['changefreq' => 'weekly', 'priority' => '0.8'],
    '/services-uae' => ['changefreq' => 'weekly', 'priority' => '0.8'],
    '/services-uk' => ['changefreq' => 'weekly', 'priority' => '0.8'],
    '/services-usa' => ['changefreq' => 'weekly', 'priority' => '0.8'],
];

$serviceSlugs = [
    'custom-software-development',
    'ai-machine-learning-solutions',
    'cloud-devops-solutions',
    'api-integration-automation',
    'automation',
    'process-delivery',
    'security',
    'whatsapp-business-solutions',
    'food-delivery-application'
];

$caseStudySlugs = [
    'ai-powered-erm-platform',
    'cicd-observability',
    'cloud-migration',
    'food-delivery-platform',
    'gdpr-security-overhaul',
    'whatsapp-business-crm'
];

$blogSlugs = [
    'enterprise-generative-ai-integration',
    'zero-trust-cloud-security',
    'next-gen-devops-automation',
    'enterprise-ai-roadmap-2026',
    'ai-copilot-rollout-framework',
    'cloud-cost-optimization-model',
    'technical-seo-for-ai-overviews',
    'conversion-tracking-for-b2b-websites',
    'security-hardening-sprint-plan',
    'llm-ready-content-architecture'
];

foreach ($rootPages as $path => $meta) {
    $loc = ($path === '/') ? "$base_url/" : "$base_url$path";
    $sitemap .= "  <url>" . PHP_EOL;
    $sitemap .= "    <loc>$loc</loc>" . PHP_EOL;
    $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
    $sitemap .= "    <changefreq>{$meta['changefreq']}</changefreq>" . PHP_EOL;
    $sitemap .= "    <priority>{$meta['priority']}</priority>" . PHP_EOL;
    $sitemap .= "  </url>" . PHP_EOL;
    $count++;
}

foreach ($serviceSlugs as $slug) {
    $sitemap .= "  <url>" . PHP_EOL;
    $sitemap .= "    <loc>$base_url/service-details/$slug</loc>" . PHP_EOL;
    $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
    $sitemap .= "    <changefreq>weekly</changefreq>" . PHP_EOL;
    $sitemap .= "    <priority>0.7</priority>" . PHP_EOL;
    $sitemap .= "  </url>" . PHP_EOL;
    $count++;
}

foreach ($caseStudySlugs as $slug) {
    $sitemap .= "  <url>" . PHP_EOL;
    $sitemap .= "    <loc>$base_url/case-study-details/$slug</loc>" . PHP_EOL;
    $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
    $sitemap .= "    <changefreq>monthly</changefreq>" . PHP_EOL;
    $sitemap .= "    <priority>0.6</priority>" . PHP_EOL;
    $sitemap .= "  </url>" . PHP_EOL;
    $count++;
}

foreach ($blogSlugs as $slug) {
    $sitemap .= "  <url>" . PHP_EOL;
    $sitemap .= "    <loc>$base_url/blog-details/$slug</loc>" . PHP_EOL;
    $sitemap .= "    <lastmod>" . date('Y-m-d') . "</lastmod>" . PHP_EOL;
    $sitemap .= "    <changefreq>weekly</changefreq>" . PHP_EOL;
    $sitemap .= "    <priority>0.7</priority>" . PHP_EOL;
    $sitemap .= "  </url>" . PHP_EOL;
    $count++;
}

$sitemap .= '</urlset>';

if (file_put_contents("$root_dir/sitemap.xml", $sitemap)) {
    logger("Success: Sitemap updated with $count URLs.");
} else {
    logger("Error: Failed to write sitemap.xml");
}

// 4. Generate Google News Sitemap (NEO Compliance)
$newsSitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$newsSitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">' . PHP_EOL;

// NEO feed from known blog detail pages
foreach ($blogSlugs as $slug) {
    $newsSitemap .= "  <url>" . PHP_EOL;
    $newsSitemap .= "    <loc>$base_url/blog-details/$slug</loc>" . PHP_EOL;
    $newsSitemap .= "    <news:news>" . PHP_EOL;
    $newsSitemap .= "      <news:publication>" . PHP_EOL;
    $newsSitemap .= "        <news:name>GryphalCode</news:name>" . PHP_EOL;
    $newsSitemap .= "        <news:language>en</news:language>" . PHP_EOL;
    $newsSitemap .= "      </news:publication>" . PHP_EOL;
    $newsSitemap .= "      <news:publication_date>" . date('c') . "</news:publication_date>" . PHP_EOL;
    $newsSitemap .= "      <news:title>GryphalCode Insight: " . ucwords(str_replace('-', ' ', $slug)) . "</news:title>" . PHP_EOL;
    $newsSitemap .= "    </news:news>" . PHP_EOL;
    $newsSitemap .= "  </url>" . PHP_EOL;
}
$newsSitemap .= '</urlset>';

if (file_put_contents("$root_dir/news-sitemap.xml", $newsSitemap)) {
    logger("Success: News Sitemap (NEO) generated.");
}

if ($is_browser) {
    echo '</div></main></body></html>';
} else {
    echo "Sitemap complete.\n";
}
