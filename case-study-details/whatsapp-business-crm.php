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
$page_title = "Case Study: WhatsApp Business & CRM Integration | GryphalCode";
$meta_desc = "Learn how we integrated WhatsApp Business API with a custom CRM to automate lead management and improve response times by 300%. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Whatsapp Business Crm, GryphalCode Whatsapp Business Crm, Whatsapp, Business, Crm, IT company, software development, AI solutions, cloud infrastructure";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
 <head>
<?php include_once '../seo-engine.php'; ?>
 
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
  <?php include __DIR__ . '/../header.php'; ?>
<main id="main-content">
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
   <div class="container">
    <div class="row">
     <div class="col-xl-12">
      <div class="breadcrumb__wrap">
       <h1 class="title">
        WhatsApp Business CRM
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
        <img alt="CRM Case Study Main Image" class="w-100 project-overview-img" src="<?= $base_url ?>/assets/images/service-previews/whatsapp-business.webp" loading="lazy">
       </div>
       <h2 class="title mb-25">
        Project Overview
       </h2>
       <p class="mb-30">
        A global retail chain struggled with high customer support costs and slow response times on
                            traditional channels (Email/Phone). They wanted to leverage WhatsApp to provide instant,
                            automated support to millions of customers.
       </p>
       <p class="mb-40">
        GryphalCode integrated the WhatsApp Business API with their existing Salesforce CRM. We
                            built an AI chatbot using Dialogflow to handle 85% of common queries, while seamlessly
                            transferring complex issues to live agents.
       </p>
       <h3 class="sub-title mb-20">
        The Challenge
       </h3>
       <ul class="list-unstyled check-list mb-40">
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         Overwhelmed support
                                team with 48h+ wait times.
        </li>
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         No single view of
                                customer interactions across channels.
        </li>
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         Difficulty in
                                broadcast messaging for promotions.
        </li>
       </ul>
       <h3 class="sub-title mb-20">
        The Solution
       </h3>
       <p class="mb-30">
        The solution involved a custom Node.js middleware to bridge the WhatsApp API and
                            Salesforce. We implemented a unified dashboard for agents and a dashboard for marketing teams
                            to manage template-based broadcasts complying with Meta's policies.
       </p>
       <h3 class="sub-title mb-20">
        Key Results
       </h3>
       <div class="result-badge mb-30">
        <p>
         The client automated
         <strong>
          85% of customer queries
         </strong>
         , reducing wait times
                                from days to seconds. Support ROI increased by
         <strong>
          x3
         </strong>
         within 6 months, and
                                customer NPS scores hit an all-time high.
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
           CRM /
                                        E-commerce
          </span>
         </li>
         <li class="mb-15">
          <span class="label">
           Automation:
          </span>
          <span class="value">
           85%
          </span>
         </li>
         <li class="mb-15">
          <span class="label">
           Support ROI:
          </span>
          <span class="value">
           300%
                                        Increase
          </span>
         </li>
        </ul>
       </div>
       <div class="project-cta mt-40 text-center bg-white p-4 rounded shadow-sm border">
        <h4 class="mb-15">
         Talk to Your Customers!
        </h4>
        <p class="mb-20">
         Scale your support and sales on the world's most popular messaging app.
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
<?php include __DIR__ . '/../global-scripts.php'; ?>
 </body>
</html>
