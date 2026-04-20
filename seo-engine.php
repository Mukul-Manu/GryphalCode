<?php
/**
 * seo-engine.php
 * Generates the full <head> block for GryphalCode pages.
 * It reads cached data from assets/seo/daily_data.json.
 */

$cacheFile = __DIR__ . '/assets/seo/daily_data.json';
$cache = [];
$cspNonce = $GLOBALS['cspNonce'] ?? base64_encode(random_bytes(16));
$GLOBALS['cspNonce'] = $cspNonce;

// Robust base_url detection for site-wide stability (Handles subdirectories)
if (!isset($base_url)) {
    $script_path = $_SERVER['SCRIPT_NAME'];
    // Detect folder depth relative to project root
    $depth = substr_count(trim(str_replace('/GryphalCode/', '/', $script_path), '/'), '/');
    $base_url = $depth > 0 ? str_repeat('../', $depth) : '.';
    $base_url = rtrim($base_url, '/');
}

if (file_exists($cacheFile)) {
    $json = file_get_contents($cacheFile);
    $cache = json_decode($json, true);
}

// Fallback defaults for 2026 Global AI Strategy
$trends = $cache['trends'] ?? [
    'Generative Engine Optimization (GEO)',
    'AI Agent Integration',
    'Hyper-personalized Marketing',
    'Global Software Engineering Hub',
    'Zero-Trust Cloud Security',
    'Core Web Vitals 2026'
];
$autocomplete = $cache['autocomplete'] ?? [];
$news = $cache['news'] ?? [];

// Build keyword list
$keywords = array_unique(array_merge($trends, $autocomplete));
$keywords = array_slice($keywords, 0, 15);
$keywordsString = htmlspecialchars(implode(', ', $keywords), ENT_QUOTES);

// Build dynamic title and description
$pageTitle = isset($page_title) ? $page_title : "GryphalCode - Innovating the Future of Tech";
$description = isset($meta_desc) ? $meta_desc : ("Leading the 2026 tech revolution with " . implode(', ', array_slice($trends, 0, 4)) . ". Expert solutions in AI, Cloud, and Software Development.");
$description = htmlspecialchars($description, ENT_QUOTES);
$pageKeywords = isset($meta_keywords) && is_string($meta_keywords) && trim($meta_keywords) !== '' ? trim($meta_keywords) : $keywordsString;

// canonical URL
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http');
$currentUrl = $protocol . '://' . $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'])[0];
$canonicalUrl = rtrim($currentUrl, '/');
$requestPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '', '/');
$isNoIndexPage = in_array($requestPath, ['404', '404.php', 'thank-you', 'thank-you.php'], true);

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
        'https://www.facebook.com/profile.php?id=61570214392615',
        'https://www.instagram.com/gryphal_code/',
        'https://www.linkedin.com/company/gryphalcode',
        'https://twitter.com/gryphalcode'
    ],
    'foundingDate' => '2021',
    'description' => 'GryphalCode is a software engineering and AI solutions company helping global teams build secure, scalable, and growth-focused digital products.',
    'knowsAbout' => [
        'Custom Software Development',
        'AI and Machine Learning',
        'Cloud and DevOps',
        'API Integration and Automation',
        'Cybersecurity Engineering',
        'Digital Transformation'
    ],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+91-8072280620',
        'contactType' => 'customer service',
        'areaServed' => 'Worldwide',
        'availableLanguage' => 'en'
    ]
];

// 1a. Brand entity page for AI/LLM citation clarity
$schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'AboutPage',
    'name' => 'About GryphalCode Brand',
    'url' => 'https://gryphalcode.com/brand-knowledge',
    'isPartOf' => [
        '@type' => 'WebSite',
        'name' => 'GryphalCode',
        'url' => 'https://gryphalcode.com'
    ],
    'about' => [
        '@type' => 'Organization',
        'name' => 'GryphalCode',
        'url' => 'https://gryphalcode.com'
    ]
];

// 1b. WebSite Schema with SearchAction for rich sitelinks
$schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => 'GryphalCode',
    'url' => 'https://gryphalcode.com',
    'inLanguage' => ['en-IN', 'en-US', 'en-GB', 'en-AE', 'en-CA', 'en-AU', 'en-SG', 'en-IE', 'en-NZ'],
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => 'https://gryphalcode.com/blog?q={search_term_string}',
        'query-input' => 'required name=search_term_string'
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
    ],
    'areaServed' => 'Worldwide'
];

// 2b. ProfessionalService Schema for service discovery
$schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'ProfessionalService',
    'name' => 'GryphalCode',
    'url' => 'https://gryphalcode.com/services',
    'areaServed' => ['Worldwide'],
    'serviceType' => [
        'Custom Software Development',
        'AI and Machine Learning Solutions',
        'Cloud and DevOps Solutions',
        'API Integration and Automation',
        'Security Engineering'
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
        'areaServed' => 'Worldwide',
        'description' => $description,
        'author' => ['@type' => 'Organization', 'name' => 'GryphalCode Engineering Team']
    ];
}

// Build Article Schema for Blog Insights (E-E-A-T Framework)
if (strpos($_SERVER['REQUEST_URI'], 'blog-details') !== false) {
    $articleName = ucwords(str_replace(['-', '.php'], [' ', ''], basename($_SERVER['REQUEST_URI'])));
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'NewsArticle',
        'headline' => $articleName,
        'image' => [
            'https://gryphalcode.com/assets/images/logo/logo.webp'
        ],
        'datePublished' => date('Y-m-d\T08:00:00+00:00', strtotime('-5 days')),
        'dateModified' => date('Y-m-d\T08:00:00+00:00', strtotime('-1 days')),
        'author' => [
            '@type' => 'Person',
            'name' => 'Mukul',
            'url' => 'https://gryphalcode.com/about'
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'GryphalCode',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => 'https://gryphalcode.com/assets/images/logo/logo.webp'
            ]
        ]
    ];
}



// 4. FAQ Schema for FAQ Page
if ($requestPath === 'faq' || $requestPath === 'faq.php') {
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

// 4d. Blog hub schema for better discovery and LLM context
if ($requestPath === 'blog' || $requestPath === 'blog.php') {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'CollectionPage',
        'name' => 'GryphalCode Engineering Blog',
        'url' => 'https://gryphalcode.com/blog',
        'description' => html_entity_decode($description, ENT_QUOTES),
        'about' => [
            'Enterprise AI',
            'Cloud Security',
            'DevOps Automation',
            'Software Architecture'
        ]
    ];
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => 'Latest GryphalCode Insights',
        'itemListOrder' => 'https://schema.org/ItemListOrderDescending',
        'numberOfItems' => 11,
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'url' => 'https://gryphalcode.com/blog-details/modern-devops-solutions-for-2026-1776313445'],
            ['@type' => 'ListItem', 'position' => 2, 'url' => 'https://gryphalcode.com/blog-details/enterprise-generative-ai-integration'],
            ['@type' => 'ListItem', 'position' => 3, 'url' => 'https://gryphalcode.com/blog-details/zero-trust-cloud-security'],
            ['@type' => 'ListItem', 'position' => 4, 'url' => 'https://gryphalcode.com/blog-details/next-gen-devops-automation'],
            ['@type' => 'ListItem', 'position' => 5, 'url' => 'https://gryphalcode.com/blog-details/enterprise-ai-roadmap-2026'],
            ['@type' => 'ListItem', 'position' => 6, 'url' => 'https://gryphalcode.com/blog-details/ai-copilot-rollout-framework'],
            ['@type' => 'ListItem', 'position' => 7, 'url' => 'https://gryphalcode.com/blog-details/cloud-cost-optimization-model'],
            ['@type' => 'ListItem', 'position' => 8, 'url' => 'https://gryphalcode.com/blog-details/technical-seo-for-ai-overviews'],
            ['@type' => 'ListItem', 'position' => 9, 'url' => 'https://gryphalcode.com/blog-details/conversion-tracking-for-b2b-websites'],
            ['@type' => 'ListItem', 'position' => 10, 'url' => 'https://gryphalcode.com/blog-details/security-hardening-sprint-plan'],
            ['@type' => 'ListItem', 'position' => 11, 'url' => 'https://gryphalcode.com/blog-details/llm-ready-content-architecture']
        ]
    ];
}

// 4e. Conversion and service pages FAQ schema
$faqTargetPaths = [
    '',
    'index',
    'index.php',
    'services',
    'services.php',
    'contact',
    'contact.php',
    'request-demo',
    'request-demo.php',
    'case-studies',
    'case-studies.php'
];
$isServiceDetail = strpos($requestPath, 'service-details/') === 0;
if (!$isNoIndexPage && (in_array($requestPath, $faqTargetPaths, true) || $isServiceDetail)) {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'Do you provide global delivery for software and AI projects?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes. GryphalCode supports global teams across India, UAE, UK, US, Europe, and remote-first organizations.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'How quickly can we start a project?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Most projects can start within one to two weeks after a discovery call and scope confirmation.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'What engagement models do you offer?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'We offer fixed-scope delivery, dedicated engineering teams, and ongoing support/optimization models.'
                ]
            ]
        ]
    ];
}

// 4b. Voice Search Optimization (VSO) - Speakable snippets
$schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => $pageTitle,
    'url' => $canonicalUrl,
    'description' => html_entity_decode($description, ENT_QUOTES),
    'speakable' => [
        '@type' => 'SpeakableSpecification',
        'xpath' => [
            '/html/head/title',
            '/html/head/meta[@name="description"]'
        ]
    ]
];

// 4c. Video Engine Optimization (VEO) - Sitewide video discovery signal
$schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'VideoObject',
    'name' => 'GryphalCode Solutions Overview',
    'description' => 'A quick overview of GryphalCode services, expertise, and delivery process.',
    'thumbnailUrl' => ['https://gryphalcode.com/assets/images/logo/logo.webp'],
    'uploadDate' => date('c', strtotime('-7 days')),
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'GryphalCode',
        'logo' => [
            '@type' => 'ImageObject',
            'url' => 'https://gryphalcode.com/assets/images/logo/logo.webp'
        ]
    ],
    'embedUrl' => 'https://gryphalcode.com/request-demo',
    'contentUrl' => 'https://gryphalcode.com/request-demo'
];

// 5. Build Breadcrumb Schema (Google Rich Results)
$pathParts = array_filter(explode('/', trim($_SERVER['REQUEST_URI'], '/')));
if (isset($pathParts[0]) && $pathParts[0] === 'GryphalCode')
    array_shift($pathParts);

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
    if (empty($part))
        continue;
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
$headBlock .= "<meta charset=\"utf-8\" />\n";
$headBlock .= "<meta content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" name=\"viewport\" />\n";
$headBlock .= "<meta content=\"ie=edge\" http-equiv=\"x-ua-compatible\" />\n";
$injectCoreAssets = isset($GLOBALS['seoInjectCoreAssets']) ? (bool) $GLOBALS['seoInjectCoreAssets'] : false;
if ($injectCoreAssets) {
    $headBlock .= "<link rel=\"preload\" href=\"{$base_url}/assets/css/bootstrap.min.css\" as=\"style\">\n";
    $headBlock .= "<link rel=\"preload\" href=\"{$base_url}/assets/css/style.min.css?v=3.1\" as=\"style\">\n";
    $headBlock .= "<link rel=\"stylesheet\" href=\"{$base_url}/assets/css/bootstrap.min.css\">\n";
    $headBlock .= "<link rel=\"stylesheet\" href=\"{$base_url}/assets/css/style.min.css?v=3.1\">\n";
    $headBlock .= "<link rel=\"stylesheet\" href=\"{$base_url}/assets/css/responsive.min.css?v=3.1\" media=\"print\" onload=\"this.media='all'\">\n";
}
$headBlock .= "<link rel=\"stylesheet\" href=\"{$base_url}/assets/css/seo-optimizations.css?v=20260415\" media=\"print\" onload=\"this.media='all'\">\n";
if ($injectCoreAssets) {
    $headBlock .= "<link rel=\"stylesheet\" href=\"{$base_url}/assets/css/font-awesome.min.css\" media=\"print\" onload=\"this.media='all'\">\n";
}
if (strpos($_SERVER['SCRIPT_NAME'], '/blog-details/') !== false) {
    $headBlock .= "<link rel=\"stylesheet\" href=\"{$base_url}/assets/css/blog-details.css?v=6.0\">\n";
}
$headBlock .= "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
$headBlock .= "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
$headBlock .= "<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap\">\n";


$headBlock .= "<title>{$pageTitle}</title>\n";
$headBlock .= "<link rel=\"canonical\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-in\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-us\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-gb\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-ae\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-de\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"de-de\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-fr\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"fr-fr\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-es\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"es-es\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-it\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"it-it\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-nl\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"nl-nl\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-ca\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"en-au\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<link rel=\"alternate\" hreflang=\"x-default\" href=\"{$canonicalUrl}\" />\n";
$headBlock .= "<meta name=\"keywords\" content=\"" . htmlspecialchars($pageKeywords, ENT_QUOTES) . "\" />\n";
$headBlock .= "<meta name=\"description\" content=\"{$description}\" />\n";
$headBlock .= "<meta name=\"author\" content=\"GryphalCode Editorial Team\" />\n";
$headBlock .= "<meta name=\"publisher\" content=\"GryphalCode\" />\n";
$headBlock .= "<meta name=\"revisit-after\" content=\"7 days\" />\n";
$headBlock .= "<meta name=\"robots\" content=\"" . ($isNoIndexPage ? 'noindex, follow' : 'index, follow') . "\" />\n";
$headBlock .= "<meta name=\"ai-search-readiness\" content=\"optimized\" />\n";
$headBlock .= "<meta name=\"answer-engine-optimization\" content=\"high-visibility\" />\n";
$headBlock .= "<meta name=\"generative-engine-targeting\" content=\"AI Overviews, SGE, LLM-Search, OpenAI, Claude, Gemini\" />\n";
$headBlock .= "<meta name=\"generative-engine-visibility\" content=\"high\" />\n";
$headBlock .= "<meta name=\"ai-content-verification\" content=\"verified-human-expert\" />\n";
$headBlock .= "<meta name=\"voice-search-optimization\" content=\"enabled\" />\n";
$headBlock .= "<meta name=\"video-engine-optimization\" content=\"enabled\" />\n";
$headBlock .= "<meta content=\"IN-TN, IN-KL, GB, DE, FR, ES, IT, NL, EU, US, AE, Global\" name=\"geo.region\" />\n";
$headBlock .= "<meta content=\"11.0168;76.9558\" name=\"geo.position\" />\n";
$headBlock .= "<meta content=\"Coimbatore, Tamil Nadu, Kerala, India & Europe: Germany, France, Spain, Italy, Netherlands\" name=\"geo.placename\" />\n";
$headBlock .= "<meta content=\"11.0168, 76.9558\" name=\"ICBM\" />\n";

// Open Graph & Twitter Card
$headBlock .= "<meta property=\"og:title\" content=\"{$pageTitle}\" />\n";
$headBlock .= "<meta property=\"og:description\" content=\"{$description}\" />\n";
$headBlock .= "<meta property=\"og:type\" content=\"website\" />\n";
$headBlock .= "<meta property=\"og:url\" content=\"{$canonicalUrl}\" />\n";
$headBlock .= "<meta property=\"og:image\" content=\"https://gryphalcode.com/assets/images/logo/logo.webp\" />\n";
$headBlock .= "<meta property=\"og:locale\" content=\"en_US\" />\n";
$headBlock .= "<meta property=\"og:site_name\" content=\"GryphalCode\" />\n";
$headBlock .= "<meta name=\"twitter:card\" content=\"summary_large_image\" />\n";
$headBlock .= "<meta name=\"twitter:title\" content=\"{$pageTitle}\" />\n";
$headBlock .= "<meta name=\"twitter:description\" content=\"{$description}\" />\n";
$headBlock .= "<meta name=\"twitter:image\" content=\"https://gryphalcode.com/assets/images/logo/logo.webp\" />\n";

// Security & Analytics
// CSP disabled temporarily for local environment compatibility and emergency visibility restoration
// $headBlock .= "<meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self' https: data: 'unsafe-inline'; script-src 'self' 'nonce-{$cspNonce}' 'unsafe-inline' 'unsafe-eval' https://www.googletagmanager.com https://www.google-analytics.com https://www.clarity.ms https://connect.facebook.net https://cdnjs.cloudflare.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' data: https://fonts.gstatic.com https://cdnjs.cloudflare.com; img-src 'self' data: https:; connect-src 'self' https://trends.google.com https://news.google.com https://suggestqueries.google.com https://www.google-analytics.com https://region1.google-analytics.com https://www.clarity.ms; frame-src 'self' https://www.google.com https://www.googletagmanager.com\" />\n";
$gaId = getenv('GRYPHAL_GA4_ID') ?: 'G-3J6X1HS36W';
$adsId = getenv('GRYPHAL_ADS_ID') ?: '';
$fbPixelId = getenv('GRYPHAL_FB_PIXEL_ID') ?: '';
$gtmId = getenv('GRYPHAL_GTM_ID') ?: '';
$headBlock .= "<!-- << Advanced Performance Hydration Engine (100/100 Target) >> -->\n";
$headBlock .= "<script nonce=\"{$cspNonce}\">\n";
$headBlock .= "  window.dataLayer = window.dataLayer || [];\n";
$headBlock .= "  function gtag(){dataLayer.push(arguments);}\n";
$headBlock .= "  gtag('js', new Date());\n";
$headBlock .= "  gtag('config', '" . addslashes($gaId) . "');\n";
if (!empty($adsId)) {
    $headBlock .= "  gtag('config', '" . addslashes($adsId) . "');\n";
}
$headBlock .= "  (function() {\n";
$headBlock .= "    var scriptsInitialized = false;\n";
$headBlock .= "    var initScripts = function() {\n";
$headBlock .= "      if (scriptsInitialized) return;\n";
$headBlock .= "      scriptsInitialized = true;\n";
$headBlock .= "      var ga = document.createElement('script');\n";
$headBlock .= "      ga.async = true;\n";
$headBlock .= "      ga.src = 'https://www.googletagmanager.com/gtag/js?id=" . addslashes($gaId) . "';\n";
$headBlock .= "      document.head.appendChild(ga);\n";
$headBlock .= "    };\n";
$headBlock .= "    ['mousedown', 'mousemove', 'keydown', 'scroll', 'touchstart'].forEach(function(e) {\n";
$headBlock .= "      window.addEventListener(e, initScripts, { once: true, passive: true });\n";
$headBlock .= "    });\n";
$headBlock .= "    setTimeout(initScripts, 5000);\n";
$headBlock .= "  })();\n";
$headBlock .= "</script>\n";
if (!empty($fbPixelId)) {
    $headBlock .= "<!-- Meta / Facebook Pixel Code -->\n";
    $headBlock .= "<script nonce=\"{$cspNonce}\">\n";
    $headBlock .= "  !function(f,b,e,v,n,t,s)\n";
    $headBlock .= "  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\n";
    $headBlock .= "  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\n";
    $headBlock .= "  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';\n";
    $headBlock .= "  n.queue=[];t=b.createElement(e);t.async=!0;\n";
    $headBlock .= "  t.src=v;s=b.getElementsByTagName(e)[0];\n";
    $headBlock .= "  if(s) s.parentNode.insertBefore(t,s)}(window, document,'script',\n";
    $headBlock .= "  'https://connect.facebook.net/en_US/fbevents.js');\n";
    $headBlock .= "  fbq('init', '" . addslashes($fbPixelId) . "');\n";
    $headBlock .= "  fbq('track', 'PageView');\n";
    $headBlock .= "</script>\n";
    $headBlock .= "<noscript><img height=\"1\" width=\"1\" style=\"display:none\" src=\"https://www.facebook.com/tr?id=" . rawurlencode($fbPixelId) . "&ev=PageView&noscript=1\"/></noscript>\n";
    $headBlock .= "<!-- End Meta / Facebook Pixel Code -->\n";
}
if (!empty($gtmId)) {
    $headBlock .= "<!-- Google Tag Manager -->\n";
    $headBlock .= "<script nonce=\"{$cspNonce}\">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':\n";
    $headBlock .= "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],\n";
    $headBlock .= "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=\n";
    $headBlock .= "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);\n";
    $headBlock .= "})(window,document,'script','dataLayer','" . addslashes($gtmId) . "');</script>\n";
    $headBlock .= "<!-- End Google Tag Manager -->\n";
}
$headBlock .= "<script nonce=\"{$cspNonce}\">(function(){var seen={};document.querySelectorAll('meta[name],meta[property]').forEach(function(m){var k=(m.getAttribute('name')||m.getAttribute('property')||'').toLowerCase();if(!k)return;if(seen[k]){m.parentNode.removeChild(m);}else{seen[k]=true;}});})();</script>\n";
$headBlock .= $schemaHtml;

echo $headBlock;
?>