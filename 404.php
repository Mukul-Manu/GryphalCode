<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "404 - Page Not Found | GryphalCode";
$meta_desc = "The page you are looking for does not exist. Return to GryphalCode home for enterprise AI, cloud migration, and custom software engineering solutions. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "404, GryphalCode 404, 404, IT company, software development, AI solutions, cloud infrastructure";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
 <head>
<?php include_once 'seo-engine.php'; ?>
  
  <!-- Official Google Pixel & Analytics Tracking (MEO) -->
  
  <meta charset="utf-8" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="preload" href="<?= $base_url ?>/assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link rel="preload" href="<?= $base_url ?>/assets/css/bootstrap.min.css" as="style">
  <link rel="preload" href="<?= $base_url ?>/assets/css/style.min.css?v=3" as="style">
  
  <meta content="<?= $meta_desc ?>" name="description" />
  
  <!-- GEO Targeting - Service States of India -->

  <meta content="<?= $page_title ?>" property="og:title" />
  <meta content="<?= $meta_desc ?>" property="og:description" />

  <meta content="<?= $page_title ?>" name="twitter:title" />
  <meta content="<?= $meta_desc ?>" name="twitter:description" />
  
  <!-- Security & Integrity -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="preconnect" /><link href="https://www.google-analytics.com" rel="preconnect" /><link href="https://www.googletagmanager.com" rel="dns-prefetch" /><link href="https://www.google-analytics.com" rel="dns-prefetch" />
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/font-awesome.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/jquery-ui.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/lightcase.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/meanmenu.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/nice-select.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/owl.carousel.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/animate.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.min.css?v=3">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.min.css?v=3">
  <link href="/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
</head>
 <body>
  <?php include 'header.php'; ?>
<main id="main-content">
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
   <div class="container">
    <div class="row">
     <div class="col-xl-12">
      <div class="breadcrumb__wrap text-center">
       <h1 class="title">
        Page Not Found
       </h1>
       <div class="breadcrumb__nav">
        <ul>
         <li>
          <a href="<?= $base_url ?>/">
           Home
          </a>
         </li>
         <li>
          <span>
           |
          </span>
         </li>
         <li>
          404
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- breadcrumb area end -->
  <section class="error-area pt-120 pb-120 text-center">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-xl-8">
      <div class="error-content">
       <h1 style="font-size: 150px; font-weight: 900; color: #086AD8; line-height: 1;">
        404
       </h1>
       <h2 class="mt-40 mb-30">
        Page Not Found
       </h2>
       <p class="mb-40">
        The page you are looking for might have been removed, had its name changed, or
                            is temporarily unavailable.
       </p>
       <a class="site-btn" href="<?= $base_url ?>">
        Back to Home
       </a>
      </div>
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
