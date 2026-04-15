<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Technical Support | 24/7 Managed IT & Software Support - GryphalCode";
$meta_desc = "Need help? GryphalCode provides 24/7 technical support and proactive system monitoring to ensure your business software runs smoothly and securely. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Support, GryphalCode Support, Support, IT company, software development, AI solutions, cloud infrastructure";
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
  <link rel="preload" href="assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/css/bootstrap.min.css" as="style">
  
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="preconnect" /><link href="https://www.google-analytics.com" rel="preconnect" /><link href="https://www.googletagmanager.com" rel="dns-prefetch" /><link href="https://www.google-analytics.com" rel="dns-prefetch" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/lightcase.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/meanmenu.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/nice-select.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/animate.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/style.min.css?v=3">
  <link rel="stylesheet" href="assets/css/responsive.min.css?v=3">
  <link href="/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
</head>
 <body>
  <!-- Header  -->
  <?php include 'header.php'; ?>
<main id="main-content">
  <!-- Breadcrumb -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
   <div class="container">
    <div class="row">
     <div class="col-xl-12">
      <div class="breadcrumb__wrap text-center">
       <h1 class="title">
        Customer Support
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
          Customer Support
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- Main content -->
  <section class="pt-100 pb-100">
   <div class="container text-center">
    <h2 class="fw-bold mb-4">
     Your Success is Our Priority
    </h2>
    <p class="lead mb-5">
     GryphalCode dedicated support team ensures smooth performance, quick
        troubleshooting, and proactive system monitoring for your business
        software and IT operations.
    </p>
    <div class="row g-4">
     <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm p-4">
       <i class="fal fa-clock fa-3x text-primary mb-3">
       </i>
       <h5>
        24/7 Technical Assistance
       </h5>
       <p>
        Access live chat and ticket-based support anytime, anywhere for
              your mission-critical applications.
       </p>
      </div>
     </div>
     <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm p-4">
       <i class="fal fa-user-tie fa-3x text-primary mb-3">
       </i>
       <h5>
        Dedicated Account Manager
       </h5>
       <p>
        Get a single point of contact who understands your projects,
              goals, and SLA commitments.
       </p>
      </div>
     </div>
     <div class="col-md-4">
      <div class="card h-100 border-0 shadow-sm p-4">
       <i class="fal fa-shield-check fa-3x text-primary mb-3">
       </i>
       <h5>
        Security &amp; Reliability
       </h5>
       <p>
        Enterprise-grade monitoring and response ensure your
              infrastructure remains protected and compliant.
       </p>
      </div>
     </div>
    </div>
    <div class="mt-5">
     <a class="site-btn" href="contact">
      Contact Support
     </a>
     <a class="site-btn transparent ms-2" href="request-demo">
      Request a Demo
     </a>
    </div>
   </div>
  </section>
  <!-- <section class="bg-light pt-80 pb-80">
      <div class="container text-center">
        <h3 class="fw-bold mb-4">Trusted by 250+ Businesses Globally</h3>
        <p class="mb-5">
          We partner with startups, enterprises, and government organizations
          across 12 countries offering end-to-end software maintenance and
          scalable IT support.
        </p>
        <div class="row g-4">
          <div class="col-md-3">
            <img
              src="/assets/images/clients/client1.webp"
              alt="Client 1"
              class="img-fluid"
             loading="lazy">
          </div>
          <div class="col-md-3">
            <img
              src="/assets/images/clients/client2.webp"
              alt="Client 2"
              class="img-fluid"
             loading="lazy">
          </div>
          <div class="col-md-3">
            <img
              src="/assets/images/clients/client3.webp"
              alt="Client 3"
              class="img-fluid"
             loading="lazy">
          </div>
          <div class="col-md-3">
            <img
              src="/assets/images/clients/client4.webp"
              alt="Client 4"
              class="img-fluid"
             loading="lazy">
          </div>
        </div>
      </div>
    </section> -->
  <!-- Footer will be injected here -->
  </main>
<?php include 'footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include 'whatsapp.php'; ?>
<?php include 'global-scripts.php'; ?>
 </body>
</html>
