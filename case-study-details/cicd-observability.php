<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php 
$base_url = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
?>
<?php 
$page_title = "Case Study: CI/CD Pipeline & Infrastructure Observability | GryphalCode";
$meta_desc = "See how GryphalCode implemented automated CI/CD pipelines and real-time observability to reduce deployment errors by 70%. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Cicd Observability, GryphalCode Cicd Observability, Cicd, Observability, IT company, software development, AI solutions, cloud infrastructure";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
 <head>
  <meta charset="utf-8" />
  <link href="../assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
  <link href="../assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <title><?= $page_title ?></title>
  <link rel="preload" href="$base_url/assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="$base_url/assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link href="https://gryphalcode.com/case-study-details/cicd-observability" rel="canonical">
  <meta content="<?= $meta_desc ?>" name="description" />
  <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
  
  <!-- GEO Targeting - Service States of India -->
  <meta content="IN-TN, IN-KL" name="geo.region" />
  <meta content="11.0168;76.9558" name="geo.position" />
  <meta content="Coimbatore, Tamil Nadu, Kerala, India - Serving All States Nationwide" name="geo.placename" />
  <meta content="11.0168, 76.9558" name="ICBM" />
  
  <!-- Open Graph / Social Transparency -->
  <meta content="website" property="og:type" />
  <meta content="https://gryphalcode.com/case-study-details/cicd-observability" property="og:url" />
  <meta content="<?= $page_title ?>" property="og:title" />
  <meta content="<?= $meta_desc ?>" property="og:description" />
  <meta content="https://gryphalcode.com/assets/images/logo/logo.webp" property="og:image" />
  <meta property="og:site_name" content="GryphalCode" />

  <!-- Twitter Cards -->
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="@GryphalCode" name="twitter:site" />
  <meta content="<?= $page_title ?>" name="twitter:title" />
  <meta content="<?= $meta_desc ?>" name="twitter:description" />
  <meta content="https://gryphalcode.com/assets/images/logo/og-image.webp" name="twitter:image" />

  <!-- Security & Integrity -->
  <!-- Analytics & Tracking -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-3J6X1HS36W"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-3J6X1HS36W');
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "<?= addslashes($page_title) ?>",
    "description": "<?= addslashes($meta_desc) ?>",
    "url": "https://gryphalcode.com/case-study-details/cicd-observability",
    "provider": {
      "@type": "Organization",
      "name": "GryphalCode",
      "logo": "https://gryphalcode.com/assets/images/logo/logo.webp"
    }
  }
  </script>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="dns-prefetch" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="../assets/css/lightcase.css">
  <link rel="stylesheet" href="../assets/css/meanmenu.css">
  <link rel="stylesheet" href="../assets/css/nice-select.css">
  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/animate.css">
  <link rel="stylesheet" href="../assets/css/style.css?v=3">
  <link rel="stylesheet" href="../assets/css/responsive.css?v=3">
  <link href="/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
</head>
 <body>
  <?php include __DIR__ . '/../header.php'; ?>
<main id="main-content">
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
   <div class="container">
    <div class="row">
     <div class="col-xl-12">
      <div class="breadcrumb__wrap">
       <h1 class="title">
        CI/CD &amp; Observability
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
          <a href="<?= $base_url ?>/case-studies">
           case studies
          </a>
         </li>
         <li>
          |
         </li>
         <li>
          details
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- breadcrumb area end -->
  <section class="project-details-area pt-100 pb-100">
   <div class="container">
    <div class="row">
     <div class="col-xl-8 col-lg-8">
      <div class="project-details__content">
       <div class="thumb mb-40">
        <img alt="Automation Case Study Main Image" class="w-100 project-overview-img" src="<?= $base_url ?>/assets/images/service-previews/automation.webp" loading="lazy">
       </div>
       <h2 class="title mb-25">
        Project Overview
       </h2>
       <p class="mb-30">
        A high-growth SaaS platform suffered from frequent production outages caused by manual
                            deployment errors. Each release took two weeks of planning and execution, which stalled
                            their product innovation.
       </p>
       <p class="mb-40">
        GryphalCode implemented a GitOps-based CI/CD pipeline using GitLab CI, ArgoCD, and
                            Kubernetes. We also set up a full observability stack (Prometheus, Grafana, ELK) to monitor
                            system health and detect issues before they impact users.
       </p>
       <h3 class="sub-title mb-20">
        The Challenge
       </h3>
       <ul class="list-unstyled check-list mb-40">
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         Fragile, manual
                                deployment process.
        </li>
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         No visibility into
                                application metrics or performance.
        </li>
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         High MTTR (Mean
                                Time To Recovery) after failures.
        </li>
       </ul>
       <h3 class="sub-title mb-20">
        The Solution
       </h3>
       <p class="mb-30">
        We automated everything. From unit tests to staging deployments, every commit is now
                            verified. The new observability stack provides real-time alerting, and automated rollbacks
                            ensure that a "bad" commit never stays in production.
       </p>
       <h3 class="sub-title mb-20">
        Key Results
       </h3>
       <div class="result-badge mb-30">
        <p>
         Deployment failures dropped by
         <strong>
          89%
         </strong>
         , and release cycles were slashed
                                from
         <strong>
          2 weeks to daily releases
         </strong>
         . The engineering team now spends 50% more
                                time on
                                features rather than firefighting.
        </p>
       </div>
      </div>
     </div>
     <div class="col-xl-4 col-lg-4">
      <div class="project-details__sidebar detail-sidebar-glass">
       <div class="project-info mb-30">
        <h4 class="sidebar-title mb-25">
         Project Stats
        </h4>
        <ul class="list-unstyled">
         <li class="mb-15">
          <span class="label">
           Category:
          </span>
          <span class="value">
           DevOps /
                                        SaaS
          </span>
         </li>
         <li class="mb-15">
          <span class="label">
           Failures Reduced:
          </span>
          <span class="value">
           89%
          </span>
         </li>
         <li class="mb-15">
          <span class="label">
           Release Frequency:
          </span>
          <span class="value">
           Daily
          </span>
         </li>
        </ul>
       </div>
       <div class="project-cta mt-40 text-center bg-white p-4 rounded shadow-sm border">
        <h4 class="mb-15">
         Innovate Faster!
        </h4>
        <p class="mb-20">
         Stop worrying about manual deployments. Let's automate your path to
                                production.
        </p>
        <a class="site-btn" href="<?= $base_url ?>/contact">
         Get a Quote
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  </main>
<?php include __DIR__ . '/../footer.php'; ?>
  <?php include __DIR__ . '/../whatsapp.php'; ?>
<?php include __DIR__ . '/../scripts.php'; ?>
  
 </body>
</html>
