<?php
/**
 * CRON JOB TARGET SCRIPT: 
 * Set this script to run daily via Windows Task Scheduler or Linux Cron.
 * V4.0 - SEO-Integrated 3-Image Perfection (Hero Left, 2-Below-Bullets)
 */

require_once __DIR__ . '/../includes/ai_image_generator.php';

// 1. Initial Data and Setup
$detailsDir = __DIR__ . '/../blog-details';
$blogsJsonPath = __DIR__ . '/../data/blogs.json';
$authors = ["Mridhul", "Gowtham", "Karthi", "Rohith", "Hari"];
$categories = ["AI Strategy", "Cloud Security", "DevOps", "Machine Learning", "SEO / AI Search"];

// Ensure directories exist
if (!is_dir($detailsDir)) mkdir($detailsDir, 0755, true);

// Randomize fields
$randomAuthor = $authors[array_rand($authors)];
$randomCategory = $categories[array_rand($categories)];
$currentDate = date('Y-m-d');
$slugId = time();

// --- SEO-Focused Content Generation ---
$generatedTitle = "Optimizing " . $randomCategory . " for Enterprise Scale in " . date('Y');
$generatedSlug = strtolower(str_replace(' ', '-', $generatedTitle)) . '-' . $slugId;
$generatedExcerpt = "Architecting resilient, keyword-rich " . $randomCategory . " solutions using zero-trust and automated observability patterns for 2026.";

$generatedContentHTML = "
<p>In " . date('Y') . ", achieving peak performance in <strong>{$randomCategory}</strong> requires more than just implementation—it demands a strategic alignment of self-healing infrastructure and predictive analytics. For global enterprises, these architectures are the foundation of digital resilience.</p>

<p>Our engineering team has identified three critical pillars that define the next generation of scalable tech stacks. By integrating these patterns, businesses can eliminate operational drift and ensure long-term stability.</p>

<h3 class='section__heading--title-small mt-30 mb-20'>Strategic Technical Roadmap:</h3>
<ul class='blog-detail-list mb-30'>
    <li>Implementing automated telemetry mesh for real-time traffic observability.</li>
    <li>Enforcing decentralized identity protocols within a zero-trust perimeter.</li>
    <li>Leveraging generative AI for automated code-hardening and vulnerability scanning.</li>
</ul>

<!-- SUPPORT GALLERY PLACEHOLDER -->

<p>At GryphalCode, we specialize in building these advanced frameworks that bridge the gap between technical complexity and business growth. Whether you are migrating legacy systems or building new AI-driven platforms, our approach ensures your engineering is future-proof.</p>
";

// --- AI Image Generation (3 Images) ---
echo "Generating SEO Hero Image...\n";
$mainImage = AiImageGenerator::generate($generatedTitle, $generatedSlug, '-hero-seo');

echo "Generating Technical Illustration...\n";
$image2 = AiImageGenerator::generate($generatedTitle . " Context", $generatedSlug, '-context-seo');

echo "Generating Detail Visualization...\n";
$image3 = AiImageGenerator::generate($generatedTitle . " Architecture", $generatedSlug, '-det-seo');

// Fallbacks
if (!$mainImage) $mainImage = 'assets/images/blog/blog_devops_automation.png';
if (!$image2) $image2 = 'assets/images/blog/blog_ai_integration.png';
if (!$image3) $image3 = 'assets/images/blog/blog_cloud_security.png';

// 2. Step 1: Update the blogs.json manifest
$blogs = [];
if (file_exists($blogsJsonPath)) {
    $blogs = json_decode(file_get_contents($blogsJsonPath), true);
}
if (!is_array($blogs)) $blogs = [];

$newPostMeta = [
    "slug" => $generatedSlug,
    "title" => $generatedTitle,
    "excerpt" => $generatedExcerpt,
    "category" => $randomCategory,
    "author" => $randomAuthor,
    "date" => $currentDate,
    "image" => $mainImage,
    "image_2" => $image2,
    "image_3" => $image3
];

array_unshift($blogs, $newPostMeta);
file_put_contents($blogsJsonPath, json_encode($blogs, JSON_PRETTY_PRINT));

// 3. Step 2: Create the individual blog detail page
$blogTemplateSource = <<<HTML
<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
\$base_url = rtrim(dirname(dirname(\$_SERVER['SCRIPT_NAME'])), '/\\\\');
\$page_title = "{$generatedTitle} | GryphalCode - Enterprise Tech Insights";
\$meta_desc = "{$generatedExcerpt}";
\$meta_keywords = "{$randomCategory}, Software Engineering, GryphalCode, 2026 Tech, SEO Strategy";
\$featured_image = "<?= \$base_url ?>/{$mainImage}";
\$image_2 = "<?= \$base_url ?>/{$image2}";
\$image_3 = "<?= \$base_url ?>/{$image3}";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php include_once '../seo-engine.php'; ?>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <link rel="stylesheet" href="<?= \$base_url ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= \$base_url ?>/assets/css/style.css?v=3.5">
    <link rel="stylesheet" href="<?= \$base_url ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?= \$base_url ?>/assets/css/blog-details.css?v=5.0">
</head>
<body>
<?php include __DIR__ . '/../header.php'; ?>

<main id="main-content">
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="<?= \$base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap text-center">
                        <h1 class="title">{$generatedTitle}</h1>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><a href="<?= \$base_url ?>/index">Home</a></li>
                                <li><span>|</span></li>
                                <li><a href="<?= \$base_url ?>/blog">Insights Hub</a></li>
                                <li><span>|</span></li>
                                <li>{$randomCategory}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about__area about__area--7 pt-100 pb-100 white-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 pr-55">
                    <div class="project-details__content">
                        <div class="thumb mb-35">
                            <img src="<?= \$featured_image ?>" alt="{$generatedTitle} - Primary Engineering Concept" loading="lazy" style="width:100%; border-radius:12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pl-20">
                    <div class="about__wrap">
                        <div class="section__heading mb-35">
                            <h2 class="section__heading--title-small"><span class="mr-10">//</span> {$randomCategory} Expert Deep-Dive</h2>
                            <h3 class="section__heading--title">Strategic Architectural Insights</h3>
                            <div class="section__heading--content mt-20">
                                <p>In " . date('Y') . ", achieving peak performance in <strong>{$randomCategory}</strong> requires more than just implementation—it demands a strategic alignment of self-healing infrastructure and predictive analytics. For global enterprises, these architectures are the foundation of digital resilience.</p>

                                <p>Our engineering team has identified three critical pillars that define the next generation of scalable tech stacks. By integrating these patterns, businesses can eliminate operational drift and ensure long-term stability.</p>

                                <h4 class='section__heading--title-small mt-30 mb-20'>Strategic Technical Roadmap:</h4>
                                <ul class='blog-detail-list mb-30'>
                                    <li>Implementing automated telemetry mesh for real-time traffic observability.</li>
                                    <li>Enforcing decentralized identity protocols within a zero-trust perimeter.</li>
                                    <li>Leveraging generative AI for automated code-hardening and vulnerability scanning.</li>
                                </ul>

                                <div class="row mt-40">
                                    <div class="col-sm-6 mb-20">
                                        <div class="thumb">
                                            <img src="<?= \$image_2 ?>" alt="{$generatedTitle} Contextual Process" loading="lazy" style="width:100%; border-radius:8px;">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-20">
                                        <div class="thumb">
                                            <img src="<?= \$image_3 ?>" alt="{$generatedTitle} Technical Detail" loading="lazy" style="width:100%; border-radius:8px;">
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">At GryphalCode, we specialize in building these advanced frameworks that bridge the gap between technical complexity and business growth. Whether you are migrating legacy systems or building new AI-driven platforms, our approach ensures your engineering is future-proof.</p>
                            </div>
                        </div>

                        <div class="detail-sidebar-glass mt-50">
                            <div class="d-flex align-items-center">
                                <div class="author-info">
                                    <h5 class="mb-5" style="color:#086ad8;">Insights By: {$randomAuthor}</h5>
                                    <p class="mb-0">Senior Engineering Analyst @ GryphalCode</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-40">
                            <a href="<?= \$base_url ?>/contact" class="site-btn">Request Discovery Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../footer.php'; ?>
<?php include __DIR__ . '/../whatsapp.php'; ?>
<?php include __DIR__ . '/../global-scripts.php'; ?>
</body>
</html>
HTML;

file_put_contents($detailsDir . '/' . $generatedSlug . '.php', $blogTemplateSource);
echo "Successfully generated: {$generatedSlug}.php with SEO layout.\n";
