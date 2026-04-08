<?php
/**
 * seo-engine.php
 * Generates the full <head> block for GryphalCode pages.
 * It reads cached data from assets/seo/daily_data.json.
 */

$cacheFile = __DIR__ . '/assets/seo/daily_data.json';
$cache = [];
if (file_exists($cacheFile)) {
    $json = file_get_contents($cacheFile);
    $cache = json_decode($json, true);
}

// Fallback defaults
$trends = $cache['trends'] ?? ['AI Solutions', 'Cloud Computing', 'Digital Transformation', 'Software Development', 'Cybersecurity'];
$autocomplete = $cache['autocomplete'] ?? [];
$news = $cache['news'] ?? [];

// Build keyword list
$keywords = array_unique(array_merge($trends, $autocomplete));
$keywords = array_slice($keywords, 0, 15);
$keywordsString = htmlspecialchars(implode(', ', $keywords), ENT_QUOTES);

// Build dynamic title and description
$pageTitle = "GryphalCode - Innovating the Future of Tech";
$description = "Leading the 2026 tech revolution with " . implode(', ', array_slice($trends, 0, 4)) . ". Expert solutions in AI, Cloud, and Software Development.";
$description = htmlspecialchars($description, ENT_QUOTES);

// canonical URL
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http');
$currentUrl = $protocol . '://' . $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'])[0];
$canonicalUrl = rtrim($currentUrl, '/');

// 1. Core WebPage & Organization Schema
$schemas = [];
$schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'GryphalCode',
    'alternateName' => 'GryphalCode Technologies',
    'url' => 'https://gryphalcode.com',
    'logo' => 'https://gryphalcode.com/assets/images/logo/logo.webp',
    'sameAs' => [
        'https://www.linkedin.com/company/gryphalcode',
        'https://twitter.com/gryphalcode'
    ],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+91-8072280620',
        'contactType' => 'customer service',
        'areaServed' => 'IN',
        'availableLanguage' => 'en'
    ]
];

// 2. LocalBusiness Schema (Geo-Trust)
$schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => 'GryphalCode',
    'image' => 'https://gryphalcode.com/assets/images/logo/logo.webp',
    '@id' => 'https://gryphalcode.com',
    'url' => 'https://gryphalcode.com',
    'telephone' => '+91-8072280620',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Coimbatore IT Hub',
        'addressLocality' => 'Coimbatore',
        'addressRegion' => 'Tamil Nadu',
        'postalCode' => '641001',
        'addressCountry' => 'IN'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 11.0168,
        'longitude' => 76.9558
    ]
];

// 3. Dynamic Service Schema for Detail Pages
if (strpos($_SERVER['REQUEST_URI'], 'service-details') !== false) {
    $serviceName = ucwords(str_replace(['-', '.php'], [' ', ''], basename($_SERVER['REQUEST_URI'])));
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $serviceName,
        'provider' => ['@type' => 'Organization', 'name' => 'GryphalCode'],
        'areaServed' => 'IN',
        'description' => $description
    ];
}

// 4. FAQ Schema for FAQ Page
if (strpos($_SERVER['REQUEST_URI'], 'faq.php') !== false) {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'What services does GryphalCode provide?',
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'GryphalCode specializes in Enterprise AI, Custom Software Development, and Cloud Migration.']
            ],
            [
                '@type' => 'Question',
                'name' => 'Where is GryphalCode located?',
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'We are based in Coimbatore, serving clients across Tamil Nadu, Kerala, and globally.']
            ]
        ]
    ];
}

// 5. Build Breadcrumb Schema (Google Rich Results)
$pathParts = array_filter(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
if (isset($pathParts[0]) && $pathParts[0] === 'GryphalCode') array_shift($pathParts);

$breadcrumbItems = [];
$breadcrumbItems[] = [
    "@type" => "ListItem",
    "position" => 1,
    "name" => "Home",
    "item" => 'https://gryphalcode.com'
];

$accumulatedPath = '';
$pCount = 2;
foreach ($pathParts as $part) {
    if (empty($part)) continue;
    $accumulatedPath .= '/' . $part;
    $name = ucwords(str_replace(['-', '.php'], [' ', ''], $part));
    $breadcrumbItems[] = [
        "@type" => "ListItem",
        "position" => $pCount++,
        "name" => $name,
        "item" => 'https://gryphalcode.com' . $accumulatedPath
    ];
}

$schemas[] = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => $breadcrumbItems
];

$schemaHtml = "";
foreach ($schemas as $s) {
    $schemaHtml .= "<script type=\"application/ld+json\">" . json_encode($s, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "</script>\n";
}

// Build the head block
$headBlock = "<!-- 2026 SEO/AEO/AIO Engine (Hardened with Rich Snippets) -->\n";
$headBlock .= "<link rel=\"canonical\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<meta name=\"keywords\" content=\"{$keywordsString}\" />\n";
$headBlock .= "<meta name=\"description\" content=\"{$description}\" />\n";
$headBlock .= "<meta name=\"ai-search-readiness\" content=\"optimized\" />\n";
$headBlock .= "<meta name=\"answer-engine-optimization\" content=\"high-visibility\" />\n";
$headBlock .= "<meta name=\"generative-engine-targeting\" content=\"AI Overviews, SGE, LLM-Search, OpenAI, Claude, Gemini\" />\n";
$headBlock .= "<meta content=\"IN-TN, IN-KL\" name=\"geo.region\" />\n";
$headBlock .= "<meta content=\"11.0168;76.9558\" name=\"geo.position\" />\n";
$headBlock .= "<meta content=\"Coimbatore, Tamil Nadu, Kerala, India\" name=\"geo.placename\" />\n";
$headBlock .= "<meta content=\"11.0168, 76.9558\" name=\"ICBM\" />\n";

// Open Graph & Twitter Card
$headBlock .= "<meta property=\"og:title\" content=\"{$pageTitle}\" />\n";
$headBlock .= "<meta property=\"og:description\" content=\"{$description}\" />\n";
$headBlock .= "<meta property=\"og:type\" content=\"website\" />\n";
$headBlock .= "<meta property=\"og:url\" content=\"{$canonicalUrl}\" />\n";
$headBlock .= "<meta property=\"og:image\" content=\"https://gryphalcode.com/assets/images/logo/logo.webp\" />\n";
$headBlock .= "<meta name=\"twitter:card\" content=\"summary_large_image\" />\n";
$headBlock .= "<meta name=\"twitter:title\" content=\"{$pageTitle}\" />\n";
$headBlock .= "<meta name=\"twitter:description\" content=\"{$description}\" />\n";
$headBlock .= "<meta name=\"twitter:image\" content=\"https://gryphalcode.com/assets/images/logo/logo.webp\" />\n";

// Security & Analytics
$headBlock .= "<meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self' https: data: 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' data: https://fonts.gstatic.com; connect-src 'self' https://trends.google.com https://news.google.com https://suggestqueries.google.com\" />\n";
$headBlock .= "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
$headBlock .= "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
$headBlock .= "<!-- GA4 Optimized -->\n";
$headBlock .= "<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-3J6X1HS36W\"></script>\n";
$headBlock .= "<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-3J6X1HS36W');</script>\n";
$headBlock .= $schemaHtml;

echo $headBlock;
?>
