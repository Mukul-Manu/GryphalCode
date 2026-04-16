<?php
/**
 * Refactor Script: Batch update all 11 blogs to the SEO-First 3-Image template.
 * V5.0 - Large Hero Layout & Internal Sync Support.
 */

$blogsJsonPath = __DIR__ . '/../data/blogs.json';
$detailsDir = __DIR__ . '/../blog-details';

if (!file_exists($blogsJsonPath))
    die("blogs.json not found.\n");

$blogs = json_decode(file_get_contents($blogsJsonPath), true);
if (!is_array($blogs))
    die("Invalid blogs.json.\n");

// Force update all blogs for visual and SEO parity
foreach ($blogs as &$post) {
    $slug = $post['slug'];
    $title = $post['title'];
    $excerpt = $post['excerpt'];
    $category = $post['category'];
    $author = $post['author'];
    $image = $post['image'];
    $image_2 = $post['image_2'] ?? 'assets/images/blog/blog_ai_integration.png';
    $image_3 = $post['image_3'] ?? 'assets/images/blog/blog_cloud_security.png';

    // Ensure path consistency
    if (strpos($image, '/') === false)
        $image = 'assets/images/blog/' . $image;
    if (strpos($image_2, '/') === false)
        $image_2 = 'assets/images/blog/' . $image_2;
    if (strpos($image_3, '/') === false)
        $image_3 = 'assets/images/blog/' . $image_3;

    $template = <<<HTML
<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
\$base_url = rtrim(dirname(dirname(\$_SERVER['SCRIPT_NAME'])), '/\\\\');
\$page_title = "{$title} | GryphalCode Tech Insights";
\$meta_desc = "{$excerpt}";
\$meta_keywords = "{$category}, Software Engineering, GryphalCode, 2026 Tech, SEO Strategy";
\$featured_image = \$base_url . "/{$image}";
\$image_2 = \$base_url . "/{$image_2}";
\$image_3 = \$base_url . "/{$image_3}";
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
    <link rel="stylesheet" href="<?= \$base_url ?>/assets/css/blog-details.css?v=6.0">
</head>
<body>
<?php include __DIR__ . '/../header.php'; ?>

<main id="main-content">
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="<?= \$base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap text-center">
                        <h1 class="title">{$title}</h1>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="<?= \$base_url ?>/">Home</a></li>
                                <li>|</li>
                                <li><a href="<?= \$base_url ?>/blog">Insights Hub</a></li>
                                <li>|</li>
                                <li>{$category}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about__area about__area--7 pt-100 pb-100 white-bg">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-xl-6 col-lg-6 pr-55">
                    <div class="project-details__content">
                        <div class="thumb blog-hero-thumb mb-35">
                            <img src="<?= \$featured_image ?>" alt="{$title} - Main Concept" loading="lazy" style="width:100%; border-radius:16px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); border: 1px solid rgba(0,0,0,0.05);">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pl-20">
                    <div class="about__wrap">
                        <div class="section__heading mb-35">
                            <h2 class="section__heading--title-small"><span class="mr-10">//</span> {$category} Professional Insight</h2>
                            <h3 class="section__heading--title">Engineering Strategy & Innovation</h3>
                            <div class="section__heading--content mt-20">
                                <p>To achieve operational excellence in <strong>{$category}</strong>, modern enterprises must prioritize a cohesive architectural strategy. The convergence of automated reliability and data-driven scaling is the new standard for industrial performance.</p>

                                <p>Our engineering leads have identified three indispensable pillars for success in this domain. These directives serve as the foundation for building resilient, future-ready technical frameworks.</p>

                                <h4 class='section__heading--title-small mt-30 mb-20'>Key Tactical Pillars:</h4>
                                <ul class='blog-detail-list mb-30'>
                                    <li>Architectural modularity for ultra-fast deployment and testing cycles.</li>
                                    <li>Zero-trust identity mesh enforcement across all service layers.</li>
                                    <li>Deep-stack observability with real-time anomaly detection.</li>
                                </ul>

                                <div class="row mt-40">
                                    <div class="col-sm-6 mb-20">
                                        <div class="thumb gallery-thumb">
                                            <img src="<?= \$image_2 ?>" alt="{$title} - Implementation Flow" loading="lazy" style="width:100%; border-radius:12px; box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-20">
                                        <div class="thumb gallery-thumb">
                                            <img src="<?= \$image_3 ?>" alt="{$title} - Component Detail" loading="lazy" style="width:100%; border-radius:12px; box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
                                        </div>
                                    </div>
                                </div>

                                <p class="mt-20">At GryphalCode, we empower teams to navigate these transitions using engineered growth playbooks. We ensure your technology stack remains a competitive driver of business value and production uptime.</p>
                            </div>
                        </div>

                        <div class="detail-sidebar-glass mt-50">
                            <div class="d-flex align-items-center">
                                <div class="author-info">
                                    <h5 class="mb-5" style="color:#086ad8;">Analysis By: {$author}</h5>
                                    <p class="mb-0">Senior Engineering Lead @ GryphalCode Team</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-40">
                            <a href="<?= \$base_url ?>/contact" class="site-btn">Schedule Optimization Audit</a>
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

    file_put_contents($detailsDir . '/' . $slug . '.php', $template);
    echo "Refactored (Big Hero Layout): {$slug}.php\n";
}

// Update the master manifest
file_put_contents($blogsJsonPath, json_encode($blogs, JSON_PRETTY_PRINT));
echo "Central manifest updated. Re-running sitemap sync...\n";
require_once __DIR__ . '/../cron/sitemap-generator.php';
