<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php
// Dynamic Base URL Detection
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$base_url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\'); ?>
<?php
$page_title = "Case Studies | Enterprise AI & Software Success Stories";
$meta_desc = "Discover how GryphalCode solves complex business challenges through custom AI platforms, cloud migrations, and scalable enterprise software solutions. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "GryphalCode Case Studies, AI Success Stories, Software Engineering Portfolio, Cloud Migration Examples, Enterprise Digital Transformation Success";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <?php include_once 'seo-engine.php'; ?>

  <meta charset="utf-8" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="preload" href="<?= $base_url ?>/assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link rel="preload" href="<?= $base_url ?>/assets/css/bootstrap.min.css" as="style">
  <link rel="preload" href="<?= $base_url ?>/assets/css/style.min.css?v=3" as="style">

  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="preconnect" />
  <link href="https://www.google-analytics.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="dns-prefetch" />
  <link href="https://www.google-analytics.com" rel="dns-prefetch" />
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/font-awesome.min.css" media="print"
    onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/jquery-ui.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/lightcase.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/meanmenu.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/nice-select.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/owl.carousel.min.css" media="print"
    onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/animate.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.min.css?v=3">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.min.css?v=3">
  <link href="<?= $base_url ?>/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
</head>

<body>
  <?php include 'header.php'; ?>
  <main id="main-content">
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img"
      data-background="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb__wrap text-center">
              <h1 class="title">
                Case Studies
              </h1>
              <div class="breadcrumb__nav">
                <ul>
                  <li>
                    <span>
                      //
                    </span>
                  </li>
                  <li>
                    <a href="<?= $base_url ?>/index">
                      Home
                    </a>
                  </li>
                  <li>
                    |
                  </li>
                  <li>
                    case studies
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- Case Studies Grid -->
    <section class="about__area about__area--7 pt-100 pb-100">
      <div class="container">
        <div class="row justify-content-center mb-60">
          <div class="col-xl-7 text-center">
            <div class="section__heading">
              <h3 class="section__heading--title-small">
                <span class="mr-10">
                  //
                </span>
                Proven Results
                <span class="ml-10">
                  //
                </span>
              </h3>
              <h2 class="section__heading--title">
                Transforming Challenges
                <br />
                Into Success
                Stories
                <span>
                  .
                </span>
              </h2>
              <p class="mt-20" style="color:#7a8aab; font-size:18px;">
                Explore how we've helped businesses
                across various industries scale their operations, automate complex workflows, and integrate
                cutting-edge AI into their core logic.
              </p>
            </div>
          </div>
        </div>
        <div class="row mt-none-30">
          <!-- Case Study 1 -->
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="premium-case-card">
              <div class="case-card__img">
                <a href="<?= $base_url ?>/case-study-details/ai-powered-erm-platform">
                  <img loading="lazy" alt="AI-Powered ERM Platform Case Study"
                    src="<?= $base_url ?>/assets/images/service-previews/ai-ml.webp" loading="lazy">
                </a>
              </div>
              <div class="premium-case-card__body">
                <span class="premium-case-tag">
                  AI / Enterprise
                </span>
                <h3>
                  AI-Powered ERM Platform
                </h3>
                <p>
                  Enterprise risk management system with real-time AI anomaly detection, reducing false
                  positives by 73%.
                </p>
                <div class="premium-stat-row">
                  <div class="premium-stat">
                    <div class="number">
                      73%
                    </div>
                    <div class="label">
                      Reduction
                    </div>
                  </div>
                  <div class="premium-stat">
                    <div class="number">
                      99.9%
                    </div>
                    <div class="label">
                      Uptime SLA
                    </div>
                  </div>
                </div>
                <a class="premium-btn" href="<?= $base_url ?>/case-study-details/ai-powered-erm-platform">
                  Read Case Study
                  <i class="fal fa-arrow-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
          <!-- Case Study 2 -->
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="premium-case-card">
              <div class="case-card__img">
                <a href="<?= $base_url ?>/case-study-details/food-delivery-platform">
                  <img loading="lazy" alt="Food Delivery Platform Case Study"
                    src="<?= $base_url ?>/assets/images/service-previews/food-delivery.webp" loading="lazy">
                </a>
              </div>
              <div class="premium-case-card__body">
                <span class="premium-case-tag">
                  Mobile / F&amp;B
                </span>
                <h3>
                  Food Delivery Platform
                </h3>
                <p>
                  Multi-city food delivery app with AI route optimization, serving 50,000+ daily orders
                  with 31% faster delivery.
                </p>
                <div class="premium-stat-row">
                  <div class="premium-stat">
                    <div class="number">
                      50K+
                    </div>
                    <div class="label">
                      Daily Orders
                    </div>
                  </div>
                  <div class="premium-stat">
                    <div class="number">
                      4.8★
                    </div>
                    <div class="label">
                      App Store Rating
                    </div>
                  </div>
                </div>
                <a class="premium-btn" href="<?= $base_url ?>/case-study-details/food-delivery-platform">
                  Read Case Study
                  <i class="fal fa-arrow-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
          <!-- Case Study 3 -->
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="premium-case-card">
              <div class="case-card__img">
                <a href="<?= $base_url ?>/case-study-details/whatsapp-business-crm">
                  <img loading="lazy" alt="WhatsApp CRM Case Study"
                    src="<?= $base_url ?>/assets/images/service-previews/whatsapp-business.webp" loading="lazy">
                </a>
              </div>
              <div class="premium-case-card__body">
                <span class="premium-case-tag">
                  WhatsApp / CRM
                </span>
                <h3>
                  WhatsApp CRM System
                </h3>
                <p>
                  Unified WhatsApp Business CRM for a 200-outlet retail chain, boosting customer
                  re-engagement by 4.2x.
                </p>
                <div class="premium-stat-row">
                  <div class="premium-stat">
                    <div class="number">
                      4.2x
                    </div>
                    <div class="label">
                      Engagement
                    </div>
                  </div>
                  <div class="premium-stat">
                    <div class="number">
                      85%
                    </div>
                    <div class="label">
                      Open Rate
                    </div>
                  </div>
                </div>
                <a class="premium-btn" href="<?= $base_url ?>/case-study-details/whatsapp-business-crm">
                  Read Case Study
                  <i class="fal fa-arrow-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
          <!-- Case Study 4 -->
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="premium-case-card">
              <div class="case-card__img">
                <a href="<?= $base_url ?>/case-study-details/cloud-migration">
                  <img loading="lazy" alt="Cloud Migration Case Study"
                    src="<?= $base_url ?>/assets/images/service-previews/cloud-devops.webp" loading="lazy">
                </a>
              </div>
              <div class="premium-case-card__body">
                <span class="premium-case-tag">
                  Cloud / DevOps
                </span>
                <h3>
                  Zero-Downtime Migration
                </h3>
                <p>
                  Migrated a legacy monolith to AWS microservices with zero downtime, cutting
                  infrastructure costs by 40%.
                </p>
                <div class="premium-stat-row">
                  <div class="premium-stat">
                    <div class="number">
                      40%
                    </div>
                    <div class="label">
                      Cost Saving
                    </div>
                  </div>
                  <div class="premium-stat">
                    <div class="number">
                      8wk
                    </div>
                    <div class="label">
                      Migration Time
                    </div>
                  </div>
                </div>
                <a class="premium-btn" href="<?= $base_url ?>/case-study-details/cloud-migration">
                  Read Case Study
                  <i class="fal fa-arrow-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
          <!-- Case Study 5 -->
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="premium-case-card">
              <div class="case-card__img">
                <a href="<?= $base_url ?>/case-study-details/gdpr-security-overhaul">
                  <img loading="lazy" alt="Security Audit Case Study"
                    src="<?= $base_url ?>/assets/images/service-previews/security.webp" loading="lazy">
                </a>
              </div>
              <div class="premium-case-card__body">
                <span class="premium-case-tag">
                  Security
                </span>
                <h3>
                  GDPR &amp; Security Audit
                </h3>
                <p>
                  Full security audit and GDPR remediation for a fintech, achieving SOC 2 Type II
                  certification in record time.
                </p>
                <div class="premium-stat-row">
                  <div class="premium-stat">
                    <div class="number">
                      100%
                    </div>
                    <div class="label">
                      Remediation
                    </div>
                  </div>
                  <div class="premium-stat">
                    <div class="number">
                      SOC2
                    </div>
                    <div class="label">
                      Certified
                    </div>
                  </div>
                </div>
                <a class="premium-btn" href="<?= $base_url ?>/case-study-details/gdpr-security-overhaul">
                  Read Case Study
                  <i class="fal fa-arrow-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
          <!-- Case Study 6 -->
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="premium-case-card">
              <div class="case-card__img">
                <a href="<?= $base_url ?>/case-study-details/cicd-observability">
                  <img loading="lazy" alt="Automation Case Study"
                    src="<?= $base_url ?>/assets/images/service-previews/automation.webp" loading="lazy">
                </a>
              </div>
              <div class="premium-case-card__body">
                <span class="premium-case-tag">
                  Automation / DevOps
                </span>
                <h3>
                  CI/CD &amp; Observability
                </h3>
                <p>
                  Implemented full GitOps with Kubernetes, cutting deployment failures by 89% and release
                  cycles from 2wk → 1day.
                </p>
                <div class="premium-stat-row">
                  <div class="premium-stat">
                    <div class="number">
                      89%
                    </div>
                    <div class="label">
                      Failure Red.
                    </div>
                  </div>
                  <div class="premium-stat">
                    <div class="number">
                      95%
                    </div>
                    <div class="label">
                      Test Coverage
                    </div>
                  </div>
                </div>
                <a class="premium-btn" href="<?= $base_url ?>/case-study-details/cicd-observability">
                  Read Case Study
                  <i class="fal fa-arrow-right">
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- CTA -->
        <div class="row mt-60">
          <div class="col-12 text-center">
            <p style="color:#7a8aab; margin-bottom:20px;">
              Want to see your project become the next success
              story?
            </p>
            <a class="site-btn" href="<?= $base_url ?>/contact">
              Start Your Project →
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <?php include 'global-scripts.php'; ?>
</body>

</html>