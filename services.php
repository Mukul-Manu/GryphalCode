<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Services | GryphalCode";
$meta_desc = "GryphalCode specializes in Services services. We build secure, high-performance web and mobile software tailored for your business needs.";
 
$meta_keywords = "Services, GryphalCode Services, Services, IT company, software development, AI solutions, cloud infrastructure";
?>
﻿<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <link href="assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/png" />
  <link href="assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <title>
    Our Services | Custom AI, Cloud &amp; Mobile App Development
  </title>
  <link href="https://gryphalcode.com/services" rel="canonical" />
  <link href="assets/images/logo/favicon.webp" rel="shortcut icon" type="images/x-icon" />
  <!-- Performance & Scale Metrics -->
  <meta
    content="GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality."
    name="description" />
  <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
  <meta content="GryphalCode" name="author" />
  <meta content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" name="robots" />
  <!-- GEO Targeting - Service States of India -->
  <meta content="IN-TN" name="geo.region" />
  <meta content="11.0168;76.9558" name="geo.position" />
  <meta content="Coimbatore, Tamil Nadu, India - Serving All States Nationwide" name="geo.placename" />
  <meta content="11.0168, 76.9558" name="ICBM" />
  <!-- Open Graph / Social Transparency -->
  <meta content="website" property="og:type" />
  <meta content="https://gryphalcode.com/services" property="og:url" />
  <meta content="Our Services | Custom AI, Cloud &amp; Mobile App Development" property="og:title" />
  <meta
    content="GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality."
    property="og:description" />
  <meta content="https://gryphalcode.com/assets/images/logo/logo.webp" property="og:image" />
  <!-- Security & Integrity -->
  <meta
    content="default-src 'self' https:; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:;"
    http-equiv="Content-Security-Policy" />
  <meta content="DENY" http-equiv="X-Frame-Options" />
  <meta content="strict-origin-when-cross-origin" name="referrer" />
  <!-- Analytics & Tracking -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-3J6X1HS36W">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-3J6X1HS36W');
  </script>
  <link rel="preload" href="assets/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/bootstrap.min.css"></noscript>
  <link rel="preload" href="assets/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/font-awesome.min.css"></noscript>
  <link rel="preload" href="assets/css/jquery-ui.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/jquery-ui.min.css"></noscript>
  <link rel="preload" href="assets/css/lightcase.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/lightcase.css"></noscript>
  <link rel="preload" href="assets/css/meanmenu.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/meanmenu.css"></noscript>
  <link rel="preload" href="assets/css/nice-select.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/nice-select.css"></noscript>
  <link rel="preload" href="assets/css/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/owl.carousel.min.css"></noscript>
  <link rel="preload" href="assets/css/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/animate.css"></noscript>
  <link rel="preload" href="assets/css/style.css?v=3" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/style.css?v=3"></noscript>
  <link rel="preload" href="assets/css/responsive.css?v=3" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="assets/css/responsive.css?v=3"></noscript>
  <!-- Performance: Preconnect -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="dns-prefetch" />
  <!-- PWA Manifest -->
  <link href="/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
  <!-- Twitter Cards -->
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="@GryphalCode" name="twitter:site" />
  <meta content="https://gryphalcode.com/assets/images/logo/og-image.webp" name="twitter:image" />
  <meta content="Our Services | Custom AI, Cloud &amp; Mobile App Development" name="twitter:title" />
  <meta
    content="GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality."
    name="twitter:description" />
  <script type="application/ld+json">
   {
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Our Services | Custom AI, Cloud & Mobile App Development",
  "description": "GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality.",
  "url": "https://gryphalcode.com/services",
  "provider": {
    "@type": "Organization",
    "name": "GryphalCode",
    "logo": "https://gryphalcode.com/assets/images/logo/logo.webp"
  }
}
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
  <!-- header start -->
  <?php include 'header.php'; ?>
<main id="main-content">
  <!-- header end -->
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.webp"
    data-opacity="5" data-overlay="dark">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb__wrap text-center">
            <h2 class="title">
              Our Services
            </h2>
            <div class="breadcrumb__nav">
              <ul>
                <li>
                  <a href="index">
                    Home
                  </a>
                </li>
                <li>
                  <span>
                    |
                  </span>
                </li>
                <li>
                  Services
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->
  <!-- service area start -->
  <section class="service-area pt-100 pb-100">
    <div class="container">
      <div class="row mt-none-30">
        <!-- Custom Software -->
        <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
          <div class="service__box service__box--2 service__box--3 service__box--4">
            <div class="icon">
              <i class="fal fa-code" style="font-size: 50px; color: #086AD8;">
              </i>
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Custom Software
              </h2>
              <p>
                Scalable Web &amp; Mobile Apps, Enterprise Microservices, and Cloud-Native solutions tailored to your
                business needs.
              </p>
            </div>
            <a class="inline-btn mt-15" href="service-details/custom-software-development">
              Read More
            </a>
          </div>
        </div>
        <!-- AI & ML -->
        <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
          <div class="service__box service__box--2 service__box--3 service__box--4">
            <div class="icon">
              <i class="fal fa-brain" style="font-size: 50px; color: #086AD8;">
              </i>
            </div>
            <div class="content">
              <h2 class="title mb-15">
                AI &amp; Machine Learning
              </h2>
              <p>
                Generative AI, Large Language Models (LLMs), and Predictive Analytics to automate processes and unlock
                insights.
              </p>
            </div>
            <a class="inline-btn mt-15" href="service-details/ai-machine-learning-solutions">
              Read More
            </a>
          </div>
        </div>
        <!-- Cloud & DevOps -->
        <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
          <div class="service__box service__box--2 service__box--3 service__box--4">
            <div class="icon">
              <i class="fal fa-cloud" style="font-size: 50px; color: #086AD8;">
              </i>
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Cloud &amp; DevOps
              </h2>
              <p>
                Cloud Migration, Kubernetes Orchestration, and Automated CI/CD pipelines for secure, rapid delivery.
              </p>
            </div>
            <a class="inline-btn mt-15" href="service-details/cloud-devops-solutions">
              Read More
            </a>
          </div>
        </div>
        <!-- API & Automation -->
        <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
          <div class="service__box service__box--2 service__box--3 service__box--4">
            <div class="icon">
              <i class="fal fa-link" style="font-size: 50px; color: #086AD8;">
              </i>
            </div>
            <div class="content">
              <h2 class="title mb-15">
                API &amp; Automation
              </h2>
              <p>
                Secure API development and workflow automation to connect systems and improve efficiency.
              </p>
            </div>
            <a class="inline-btn mt-15" href="service-details/api-integration-automation">
              Read More
            </a>
          </div>
        </div>
        <!-- WhatsApp Business -->
        <div class="col-xl-4 col-lg-6 col-md-12 mt-30 text-center">
          <div class="service__box service__box--2 service__box--3 service__box--4">
            <div class="icon">
              <i class="fal fa-comment-alt" style="font-size: 50px; color: #086AD8;">
              </i>
            </div>
            <div class="content">
              <h2 class="title mb-15">
                WhatsApp Business API
              </h2>
              <p>
                Automate customer support and engagement with AI Chatbots and verified WhatsApp Business solutions.
              </p>
            </div>
            <a class="inline-btn mt-15" href="service-details/whatsapp-business-solutions">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- service area end -->
  <!-- about area start -->
  <section class="about__area about__area--5">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="about__wrap about__wrap--2">
            <div class="row">
              <div class="col-xl-6 col-lg-6 offset-lg-5 offset-xl-5 pr-80">
                <div class="section__heading mb-30">
                  <h3 class="section__heading--title-small">
                    <span class="mr-10">
                      //
                    </span>
                    Core Expertise
                  </h3>
                  <h2 class="section__heading--title">
                    Driving Digital Evolution Through
                    <br />
                    Technical Mastery
                    <span>
                      .
                    </span>
                  </h2>
                </div>
                <div class="skill">
                  <div class="skill__box mb-30">
                    <h4 class="title">
                      Enterprise Software Development
                    </h4>
                    <div class="progress">
                      <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar wow slideInLeft"
                        data-wow-delay=".5s" data-wow-duration="1s" role="progressbar" style="
                            width: 95%;
                            visibility: visible;
                            animation-duration: 1s;
                            animation-delay: 0.5s;
                            animation-name: slideInLeft;
                          ">
                        <span>
                          95%
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="skill__box mb-30">
                    <h4 class="title">
                      Mobile Application Development
                    </h4>
                    <div class="progress">
                      <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar wow slideInLeft"
                        data-wow-delay=".5s" data-wow-duration="1s" role="progressbar" style="
                            width: 92%;
                            visibility: visible;
                            animation-duration: 1s;
                            animation-delay: 0.5s;
                            animation-name: slideInLeft;
                          ">
                        <span>
                          92%
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="skill__box mb-30">
                    <h4 class="title">
                      ERP &amp; Business Solutions
                    </h4>
                    <div class="progress">
                      <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar wow slideInLeft"
                        data-wow-delay=".5s" data-wow-duration="1s" role="progressbar" style="
                            width: 88%;
                            visibility: visible;
                            animation-duration: 1s;
                            animation-delay: 0.5s;
                            animation-name: slideInLeft;
                          ">
                        <span>
                          88%
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="skill__box">
                    <h4 class="title">
                      Cloud Infrastructure
                    </h4>
                    <div class="progress">
                      <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar wow slideInLeft"
                        data-wow-delay=".5s" data-wow-duration="1s" role="progressbar" style="
                            width: 90%;
                            visibility: visible;
                            animation-duration: 1s;
                            animation-delay: 0.5s;
                            animation-name: slideInLeft;
                          ">
                        <span>
                          90%
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about area end -->
  <!-- cta area start -->
  <section class="cta__area cta__area--2 cta__area--3 pt-95 pb-95 bg_img"
    data-background="assets/images/bg/cta-bg-3.webp">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="section__heading mb-40">
            <h3 class="section__heading--title-small">
              <span class="mr-10">
                //
              </span>
              Transform Your Business
            </h3>
            <h2 class="section__heading--title">
              Ready to Accelerate Your Digital Transformation?
              <span>
                .
              </span>
            </h2>
            <div class="section__heading--content mt-20">
              <p>
                Discover how our tailored technology solutions can optimize
                operations, enhance security, and drive innovation. Schedule
                your consultation today to unlock your digital potential.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-6 text-right">
          <a class="site-btn mt-95" href="contact">
            Get Started Now
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- cta area end -->
  </main>
<?php include 'footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
  
</body>

</html>