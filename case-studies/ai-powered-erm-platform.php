<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '..';
$page_title = "Ai Powered Erm Platform | GryphalCode";
$meta_desc = "GryphalCode specializes in Ai Powered Erm Platform services. We build secure, high-performance web and mobile software tailored for your business needs.";
 
$meta_keywords = "Ai Powered Erm Platform, GryphalCode Ai Powered Erm Platform, Powered, Erm, Platform, IT company, software development, AI solutions, cloud infrastructure";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
 <head>
  <meta charset="utf-8"/>
  <link href="../assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/png"/>
  <link href="../assets/images/logo/favicon.webp" rel="apple-touch-icon"/>
  <link href="../assets/images/logo/favicon.webp" rel="shortcut icon" type="images/x-icon">
   <meta content="ie=edge" http-equiv="x-ua-compatible"/>
   <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
   <title>
    Case Study: AI-Powered ERM Platform | GryphalCode Portfolio
   </title>
   <link href="https://gryphalcode.com/case-studies/ai-powered-erm-platform" rel="canonical">
    <meta content="Enterprise risk management system with real-time AI anomaly detection, reducing false positives by 73%." name="description">
     <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
     <link href="../assets/css/font-awesome.min.css" rel="stylesheet"/>
     <link href="../assets/css/jquery-ui.min.css" rel="stylesheet"/>
     <link href="../assets/css/lightcase.css" rel="stylesheet"/>
     <link href="../assets/css/meanmenu.css" rel="stylesheet"/>
     <link href="../assets/css/nice-select.css" rel="stylesheet"/>
     <link href="../assets/css/owl.carousel.min.css" rel="stylesheet"/>
     <link href="../assets/css/animate.css" rel="stylesheet"/>
     <link href="../assets/css/style.css?v=3" rel="stylesheet"/>
     <link href="../assets/css/responsive.css?v=3" rel="stylesheet"/>
     <link href="/manifest.json" rel="manifest"/>
     <meta content="#086ad8" name="theme-color"/>
    </meta>
   </link>
  </link>
  <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
  <meta content="GryphalCode" name="author"/>
  <meta content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" name="robots"/>
  <meta content="IN-TN" name="geo.region"/>
  <meta content="11.0168;76.9558" name="geo.position"/>
  <meta content="Coimbatore, Tamil Nadu, India - Serving All States Nationwide" name="geo.placename"/>
  <meta content="11.0168, 76.9558" name="ICBM"/>
  <meta content="website" property="og:type"/>
  <meta content="https://gryphalcode.com/case-studies/ai-powered-erm-platform" property="og:url"/>
  <meta content="Case Study: AI-Powered ERM Platform | GryphalCode Portfolio" property="og:title"/>
  <meta content="Enterprise risk management system with real-time AI anomaly detection, reducing false positives by 73%." property="og:description"/>
  <meta content="https://gryphalcode.com/assets/images/logo/logo.webp" property="og:image"/>
  <meta content="summary_large_image" name="twitter:card"/>
  <meta content="@GryphalCode" name="twitter:site"/>
  <meta content="Case Study: AI-Powered ERM Platform | GryphalCode Portfolio" name="twitter:title"/>
  <meta content="Enterprise risk management system with real-time AI anomaly detection, reducing false positives by 73%." name="twitter:description"/>
  <meta content="https://gryphalcode.com/assets/images/logo/og-image.webp" name="twitter:image"/>
  <script type="application/ld+json">
   {
  "@context": "https://schema.org",
  "@type": "CaseStudy",
  "name": "Case Study: AI-Powered ERM Platform | GryphalCode Portfolio",
  "description": "Enterprise risk management system with real-time AI anomaly detection, reducing false positives by 73%.",
  "url": "https://gryphalcode.com/case-studies/ai-powered-erm-platform",
  "provider": {
    "@type": "Organization",
    "name": "GryphalCode",
    "logo": "https://gryphalcode.com/assets/images/logo/logo.webp"
  }
}
  </script>
 
  <!-- Analytics & Tracking -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-3J6X1HS36W"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-3J6X1HS36W');
  </script>

  

  <style>
    /* Absolute Refactor For Mobile Progress Bars - Permanent Native Fix */
    @media (max-width: 575px) {
      .skill__box { 
        position: relative !important; 
        margin-bottom: 40px !important; 
        display: block !important;
      }
      .skill__box .title { 
        max-width: 75% !important; 
        line-height: 1.4 !important; 
        white-space: normal !important; 
        word-wrap: break-word !important; 
        margin-bottom: 20px !important;
        display: block !important;
      }
      .skill__box .progress { 
        position: static !important; 
        overflow: visible !important; 
      }
      .skill__box .progress-bar { 
        position: static !important; 
      }
      .skill__box .progress-bar span { 
        position: absolute !important; 
        right: 0 !important; 
        top: 0 !important; /* Anchors the 95% horizontally flush with the first line of the title */
        font-weight: bold !important;
      }
    }
  </style>

  <style id="global-mobile-fix">
    /* GLOBAL MOBILE RESPONSIVENESS OVERRIDE */
    @media (max-width: 575px) {
      /* 1. Prevent Horizontal Scroll Globally */
      html, body {
        overflow-x: hidden !important;
        width: 100% !important;
        max-width: 100vw !important;
        margin: 0 !important;
        padding: 0 !important;
      }
      
      /* 2. Container Bounds */
      .container {
        width: 100% !important;
        max-width: 100vw !important;
        padding-left: 15px !important;
        padding-right: 15px !important;
        overflow-x: hidden !important;
        margin: 0 auto !important;
      }

      /* 3. Fluid Images */
      img {
        max-width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
      }

      /* 4. Text Wrapping Assurance */
      h1, h2, h3, h4, h5, h6, p, a, span, .title, .section__heading--title {
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        white-space: normal !important;
      }

      /* 5. About Box UI Repair */
      .about__box {
        margin-left: 0 !important;
        padding: 15px !important;
        height: auto !important;
        overflow: visible !important;
      }
      .about__box p {
        margin-bottom: 20px !important;
      }

      /* 6. Site Button Auto-Height Fix */
      .site-btn {
        white-space: normal !important;
        height: auto !important;
        line-height: 1.5 !important;
        padding: 12px 20px !important;
        display: inline-block !important;
        width: 100% !important;
        text-align: center !important;
      }

      /* 7. WhatsApp Floating Optimization for 320px Screens */
      .whatsapp-float {
        width: 45px !important;
        height: 45px !important;
        bottom: 15px !important;
        right: 15px !important;
        padding: 8px !important;
        z-index: 9999 !important;
      }
      .whatsapp-float svg {
        width: 25px !important;
        height: 25px !important;
        margin: 0 auto !important;
      }
      
      /* 8. Fix Row Negative Margins causing overflow */
      .row {
        margin-left: 0 !important;
        margin-right: 0 !important;
      }
      [class*="col-"] {
        padding-left: 10px !important;
        padding-right: 10px !important;
        width: 100% !important;
      }
    }
  </style>

</head>
 <body>
  <?php include '../header.php'; ?>
<main id="main-content">
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="../assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
   <div class="container">
    <div class="row">
     <div class="col-xl-12">
      <div class="breadcrumb__wrap">
       <h1 class="title">
        AI-Powered ERM Platform
       </h1>
       <div class="breadcrumb__nav">
        <ul>
         <li>
          <span>
           //
          </span>
         </li>
         <li>
          <a href="../index">
           Home
          </a>
         </li>
         <li>
          |
         </li>
         <li>
          <a href="../case-studies">
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
        <img alt="ERM Case Study Main Image" class="w-100 project-overview-img" src="../assets/images/service-previews/ai-ml.webp"/ loading="lazy">
       </div>
       <h2 class="title mb-25">
        Project Overview
       </h2>
       <p class="mb-30">
        Our client, a leading logistics enterprise, faced significant challenges in resource
                            allocation and data visibility across their global operations. Legacy systems were creating
                            data silos, leading to a 25% inefficiency rate in supply chain management.
       </p>
       <p class="mb-40">
        GryphalCode was tasked with re-engineering their core ERM platform. We architectural a
                            microservices-based solution integrated with predictive AI models to forecast demand and
                            automate inventory routing.
       </p>
       <h3 class="sub-title mb-20">
        The Challenge
       </h3>
       <ul class="list-unstyled check-list mb-40">
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         Disconnected legacy
                                databases slowing down decision-making.
        </li>
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         Lack of real-time
                                visibility into inventory levels.
        </li>
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         High operational
                                costs due to manual scheduling.
        </li>
       </ul>
       <h3 class="sub-title mb-20">
        The Solution
       </h3>
       <p class="mb-30">
        We implemented a React-based frontend for intuitive user interaction, backed by a Node.js
                            and Python (Django) backend handling heavy data processing. The core innovation was a custom
                            Machine Learning model deployed via Docker containers that analyzed historical data to
                            predict resource needs.
       </p>
       <h3 class="sub-title mb-20">
        Key Results
       </h3>
       <div class="result-badge mb-30">
        <p>
         Post-deployment, the client observed a
         <strong>
          40% reduction in operational
                                    overhead
         </strong>
         and a
         <strong>
          15% increase in order fulfillment speed
         </strong>
         within
                                the first quarter. The system now processes over 10TB of data monthly with 99.99%
                                uptime.
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
           AI &amp;
                                        Enterprise
          </span>
         </li>
         <li class="mb-15">
          <span class="label">
           Timeline:
          </span>
          <span class="value">
           6
                                        Months
          </span>
         </li>
         <li class="mb-15">
          <span class="label">
           Core Result:
          </span>
          <span class="value">
           73% Red.
                                        in False Positives
          </span>
         </li>
        </ul>
       </div>
       <div class="project-cta mt-40 text-center bg-white p-4 rounded shadow-sm border">
        <h4 class="mb-15">
         Ready for Next-Gen AI?
        </h4>
        <p class="mb-20">
         Let's discuss how we can transform your business with custom AI solutions.
        </p>
        <a class="site-btn" href="../contact">
         Get a Quote
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  </main>
<?php include '../footer.php'; ?>
  <?php include '../whatsapp.php'; ?>
<?php include '../scripts.php'; ?>
  
 </body>
</html>
