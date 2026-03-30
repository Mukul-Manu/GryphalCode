<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "About | GryphalCode";
$meta_desc = "GryphalCode specializes in About services. We build secure, high-performance web and mobile software tailored for your business needs.";
 
$meta_keywords = "About, GryphalCode About, About, IT company, software development, AI solutions, cloud infrastructure";
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
    About GryphalCode | AI &amp; Software Engineering Experts
  </title>
  <link href="https://gryphalcode.com/about" rel="canonical" />
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
  <meta content="https://gryphalcode.com/about" property="og:url" />
  <meta content="About GryphalCode | AI &amp; Software Engineering Experts" property="og:title" />
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
  <meta content="About GryphalCode | AI &amp; Software Engineering Experts" name="twitter:title" />
  <meta
    content="GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality."
    name="twitter:description" />
  <script type="application/ld+json">
   {
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "About GryphalCode | AI & Software Engineering Experts",
  "description": "GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality.",
  "url": "https://gryphalcode.com/about",
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
            <h1 class="title">
              About Us
            </h1>
            <div class="breadcrumb__nav">
              <ul>
                <li>
                  <span>
                    //
                  </span>
                </li>
                <li>
                  <a href="index">
                    Home
                  </a>
                </li>
                <li>
                  |
                </li>
                <li>
                  about us
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->
  <!-- about area start -->
  <section class="about__area about__area--4 pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="about__bg about__bg--4">
            <img alt="Our Approach" data-tilt="" data-tilt-perspective="3000" src="assets/images/bg/about-bg-3.webp" / loading="lazy">
            <img alt="Our Approach" class="f-right" data-tilt="" data-tilt-perspective="3000"
              src="assets/images/bg/about-bg-4.webp" / loading="lazy">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 pl-20 mt-70">
          <div class="section__heading mb-30">
            <h3 class="section__heading--title-small">
              <span class="mr-10">
                //
              </span>
              about us
            </h3>
            <h2 class="section__heading--title">
              Accelerating Digital Success
              <br />
              Since 2021
              <span>
              </span>
            </h2>
            <div class="section__heading--content mt-20">
              <p>
                We transform complex technological challenges into competitive
                advantages. Our team of certified AI &amp; Cloud experts delivers
                future-proof solutions that drive measurable business
                outcomes, from Generative AI adoption to Scalable Microservices.
              </p>
            </div>
          </div>
          <div class="about__box about__box--2">
            <p>
              Continuous R&amp;D ensures we deliver cutting-edge solutions ahead
              of market trends
            </p>
            <a class="site-btn" href="#">
              Read More
              <span>
                +
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about area end -->
  <!-- department area start -->
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="department__wrap department__wrap--2">
          <div class="row no-gutters mt-none-30">
            <div class="col-xl-6 mt-30">
              <div class="department__box department__box--border pr-50">
                <div class="department__box--icon">
                  <img alt="Development Icon" src="assets/images/icons/department-1.webp" / loading="lazy">
                </div>
                <div class="department__box--content">
                  <h4 class="title mb-15">
                    Innovation &amp; R&amp;D Labs
                  </h4>
                  <p>
                    Our innovation ecosystem combines R&amp;D labs with industry
                    partnerships to deliver future-proof solutions. We
                    maintain 40+ technology certifications and invest 20% of
                    revenue in emerging tech research (GenAI, AI&amp;ML, IoT).
                    This commitment ensures our clients always stay ahead of the curve.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-6 mt-30">
              <div class="department__box pl-50">
                <div class="department__box--icon">
                  <img alt="Design Icon" src="assets/images/icons/department-2.webp" / loading="lazy">
                </div>
                <div class="department__box--content">
                  <h4 class="title mb-15">
                    Client-Centric Engineering
                  </h4>
                  <p>
                    We measure success by your business outcomes. Our dedicated
                    success teams work alongside your leadership to align
                    technology with strategic goals. Through continuous
                    optimization and proactive innovation, we've delivered 97%
                    client retention and 3.8x average ROI across engagements.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- department area end -->
  <!-- support area start -->
  <section class="support__area support__area--2 pt-95 pb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 text-center">
          <div class="section__heading white mb-60">
            <h3 class="section__heading--title-small">
              <span class="mr-10">
                //
              </span>
              services
              <span class="ml-10">
                //
              </span>
            </h4>
            <div class="section__heading--transparent h1-style">
              Hire Us
            </div>
            <h2 class="section__heading--title">
              IT Services &amp; Support For Business
              <span>
                .
              </span>
            </h2>
          </div>
        </div>
      </div>
      <div class="row custom-row mt-none-30">
        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
          <div class="support__box">
            <div class="icon">
              <img alt="Strategic Partnership Icon" class="default" src="assets/images/icons/support-icon-1.webp" / loading="lazy">
              <img alt="Strategic Partnership Icon Hover" class="hover"
                src="assets/images/icons/support-icon-h-1.webp" / loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Our Approach
              </h2>
              <p>
                Strategic technology partnerships tailored to your business
                goals. We align IT solutions with your vision for measurable
                impact.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
          <div class="support__box">
            <div class="icon">
              <img alt="Core Values Icon" class="default" src="assets/images/icons/support-icon-2.webp" / loading="lazy">
              <img alt="Core Values Icon Hover" class="hover" src="assets/images/icons/support-icon-h-2.webp" / loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Our Values
              </h2>
              <p>
                Integrity-first solutions with transparency at every step. We
                prioritize security, reliability, and ethical technology
                practices.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
          <div class="support__box">
            <div class="icon">
              <img alt="Technical Resources Icon" class="default" src="assets/images/icons/support-icon-3.webp" / loading="lazy">
              <img alt="Technical Resources Icon Hover" class="hover" src="assets/images/icons/support-icon-h-3.webp" / loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Our Resources
              </h2>
              <p>
                Cutting-edge infrastructure powered by certified experts.
                Enterprise-grade tools with 24/7 monitoring capabilities.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
          <div class="support__box">
            <div class="icon">
              <img alt="Growth Process Icon" class="default" src="assets/images/icons/support-icon-4.webp" / loading="lazy">
              <img alt="Growth Process Icon Hover" class="hover" src="assets/images/icons/support-icon-h-4.webp" / loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Growth Process
              </h2>
              <p>
                Scalable technology frameworks designed for expansion.
                Future-proof solutions that evolve with your business needs.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
          <div class="support__box">
            <div class="icon">
              <img alt="Global Support Icon" class="default" src="assets/images/icons/support-icon-5.webp" / loading="lazy">
              <img alt="Global Support Icon Hover" class="hover" src="assets/images/icons/support-icon-h-5.webp" / loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Our Support
              </h2>
              <p>
                Proactive maintenance with dedicated account management.
                Resolution-focused assistance with 99.9% uptime guarantee.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- support area end -->
  <!-- tema area start -->
  <!-- <section class="team-area pt-95 pb-95">
      <div class="container">
        <div class="row">
          <div class="col-xl-7">
            <div class="section__heading mb-50">
              <h3 class="section__heading--title-small">
                <span class="mr-10">//</span>Team
              </h3>
              <h2 class="section__heading--title">
                Our Buddys Always Ready <br />
                To Solve Your Issues<span>.</span>
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="team-carousel owl-carousel">
              <div class="team__box">
                <div class="thumb">
                  <img src="assets/images/team/team-1.webp" alt="Team 1" / loading="lazy">
                  <div class="social__icons">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#0"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
                <div class="content">
                  <span class="designation">Founder</span>
                  <h4 class="name">Rosalina D. William</h4>
                </div>
              </div>
              <div class="team__box">
                <div class="thumb">
                  <img src="assets/images/team/team-2.webp" alt="Team 2" / loading="lazy">
                  <div class="social__icons">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#0"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
                <div class="content">
                  <span class="designation">CEO</span>
                  <h4 class="name">Miranda H. Halim</h4>
                </div>
              </div>
              <div class="team__box">
                <div class="thumb">
                  <img src="assets/images/team/team-3.webp" alt="Team 3" / loading="lazy">
                  <div class="social__icons">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#0"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
                <div class="content">
                  <span class="designation">Designer</span>
                  <h4 class="name">Alim D. Dhario</h4>
                </div>
              </div>
              <div class="team__box">
                <div class="thumb">
                  <img src="assets/images/team/team-4.webp" alt="Team 4" / loading="lazy">
                  <div class="social__icons">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#0"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
                <div class="content">
                  <span class="designation">Developer</span>
                  <h4 class="name">Rosalina D. William</h4>
                </div>
              </div>
              <div class="team__box">
                <div class="thumb">
                  <img src="assets/images/team/team-1.webp" alt="Team 1" / loading="lazy">
                  <div class="social__icons">
                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#0"><i class="fab fa-twitter"></i></a>
                    <a href="#0"><i class="fab fa-behance"></i></a>
                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#0"><i class="fab fa-youtube"></i></a>
                  </div>
                </div>
                <div class="content">
                  <span class="designation">Founder</span>
                  <h4 class="name">Rosalina D. William</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
  <!-- tema area end -->
  <!-- timeline area start -->
  <section class="timeline-area pt-95 pb-100 bg_img" data-background="assets/images/pattern/timeline-pattern.webp">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 text-center">
          <div class="section__heading white mb-60">
            <h3 class="section__heading--title-small">
              <span class="mr-10">
                //
              </span>
              Our Journey
              <span class="ml-10">
                //
              </span>
            </h4>
            <div class="section__heading--transparent h1-style">
              Milestones
            </div>
            <h2 class="section__heading--title">
              Forging the Future Through &amp; Technological Mastery
              <span>
                .
              </span>
            </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="timeline">
            <span class="shape">
            </span>
            <span class="shape shape--2">
            </span>
            <div class="timeline__box">
              <span class="year">
                2021
              </span>
              <div class="timeline__box--inner">
                <div class="thumb">
                  <img alt="Company Foundation 2021" src="assets/images/others/timeline-1.webp" / loading="lazy">
                </div>
                <div class="content">
                  <h4 class="title">
                    Founded Company
                  </h4>
                  <p>
                    Established in 2021 to bridge the enterprise
                    digitalization gap. Our founding team of engineers
                    created.
                  </p>
                  <span class="number">
                    01
                  </span>
                </div>
              </div>
            </div>
            <div class="timeline__box">
              <span class="year">
                2022
              </span>
              <div class="timeline__box--inner">
                <div class="thumb">
                  <img alt="Partnership with ElCodamics 2022" src="assets/images/others/timeline-2.webp" / loading="lazy">
                </div>
                <div class="content">
                  <h4 class="title">
                    ElCodamics
                  </h4>
                  <p>
                    joined partneship with ElCodamics.
                  </p>
                  <span class="number">
                    02
                  </span>
                </div>
              </div>
            </div>
            <div class="timeline__box">
              <span class="year">
                2023
              </span>
              <div class="timeline__box--inner">
                <div class="thumb">
                  <img alt="Innovation Powerhouse 2023" src="assets/images/others/timeline-3.webp" / loading="lazy">
                </div>
                <div class="content">
                  <h4 class="title">
                    Innovation Powerhouse
                  </h4>
                  <p>
                    This critical mass of expertise enabled breakthrough
                    developments in AI&amp;ML computing applications and
                    AI-driven analytics platforms.
                  </p>
                  <span class="number">
                    03
                  </span>
                </div>
              </div>
            </div>
            <div class="timeline__box">
              <span class="year">
                2025
              </span>
              <div class="timeline__box--inner">
                <div class="thumb">
                  <img alt="Enterprise Transformation Leader 2025" src="assets/images/others/timeline-4.webp" / loading="lazy">
                </div>
                <div class="content">
                  <h4 class="title">
                    Enterprise Transformation Leader
                  </h4>
                  <p>
                    Recognized by Gartner as a "Visionary Provider" for our
                    industry-redefining AI integration frameworks adopted.
                  </p>
                  <span class="number">
                    04
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- timeline area end -->
  </main>
<?php include 'footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
  
</body>

</html>