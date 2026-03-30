<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Why Choose | GryphalCode";
$meta_desc = "GryphalCode specializes in Why Choose services. We build secure, high-performance web and mobile software tailored for your business needs.";
 
$meta_keywords = "Why Choose, GryphalCode Why Choose, Why, Choose, IT company, software development, AI solutions, cloud infrastructure";
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
    Why Choose GryphalCode | Your Trusted Technology Partner
  </title>
  <link href="https://gryphalcode.com/why-choose" rel="canonical" />
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
  <meta content="https://gryphalcode.com/why-choose" property="og:url" />
  <meta content="Why Choose GryphalCode | Your Trusted Technology Partner" property="og:title" />
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
  <meta content="Why Choose GryphalCode | Your Trusted Technology Partner" name="twitter:title" />
  <meta
    content="GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality."
    name="twitter:description" />
  <script type="application/ld+json">
   {
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Why Choose GryphalCode | Your Trusted Technology Partner",
  "description": "GryphalCode | Enterprise-grade AI integration, custom software engineering, and scalable cloud solutions. Transform your digital vision into reality.",
  "url": "https://gryphalcode.com/why-choose",
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
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.webp"
    data-opacity="5" data-overlay="dark">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb__wrap text-center">
            <h2 class="title">
              Why Choose GryphalCode
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
                  Why Choose Us
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->
  <!-- breadcrumb area end -->
  <!-- why choose area start -->
  <section class="whychoose-area pt-100">
    <div class="container">
      <div class="row mt-none-30">
        <div class="col-xl-3 col-lg-6 mt-30">
          <div class="whychoose__box whychoose__box--2">
            <div class="icon">
              <i class="fal fa-users">
              </i>
            </div>
            <div class="content mt-25">
              <h4 class="title">
                Operational Excellence
              </h4>
              <p>
                We deliver precision-engineered software and AI solutions
                built on performance, reliability, and innovation every
                project, every time.
              </p>
            </div>
            <span class="big-text">
              01
            </span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 mt-30">
          <div class="whychoose__box whychoose__box--2">
            <div class="icon">
              <i class="fal fa-paper-plane">
              </i>
            </div>
            <div class="content mt-25">
              <h4 class="title">
                Customer-First Approach
              </h4>
              <p>
                Your vision drives our roadmap. We craft each solution around
                your unique business goals, ensuring measurable success and
                long-term partnerships.
              </p>
            </div>
            <span class="big-text">
              02
            </span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 mt-30">
          <div class="whychoose__box whychoose__box--2">
            <div class="icon">
              <i class="fal fa-cogs">
              </i>
            </div>
            <div class="content mt-25">
              <h4 class="title">
                24/7 Technical Support
              </h4>
              <p>
                Stay confident with real-time monitoring, proactive
                maintenance, and 24/7 technical support handled by our
                dedicated engineers.
              </p>
            </div>
            <span class="big-text">
              03
            </span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 mt-30">
          <div class="whychoose__box whychoose__box--2">
            <div class="icon">
              <i class="fal fa-crown">
              </i>
            </div>
            <div class="content mt-25">
              <h4 class="title">
                Quality-Driven Delivery
              </h4>
              <p>
                We build scalable, secure, and future-ready systems that meet
                the highest quality standards and deliver lasting business
                value.
              </p>
            </div>
            <span class="big-text">
              04
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- why choose area end -->
  <!-- about area start -->
  <section class="about__area about__area--2 about__area--3 pt-100 pb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6">
          <div class="about__bg about__bg--2 about__bg--3 about__bg--5">
            <img alt="GryphalCode Team and Expertise Overview" src="assets/images/bg/about-bg-6.webp" / loading="lazy">
          </div>
        </div>
        <div class="col-xl-6">
          <div class="section__heading mb-30 mt-50">
            <h3 class="section__heading--title-small">
              <span class="mr-10">
                //
              </span>
              About GryphalCode
            </h3>
            <h2 class="section__heading--title">
              Building the Future, Together
              <span>
                .
              </span>
            </h2>
            <div class="section__heading--content mt-20">
              <p>
                At GryphalCode, we combine innovation, technology, and
                creativity to design world-class digital products. Whether
                it's AI automation, cloud infrastructure, or enterprise
                applications we transform ideas into impactful solutions
                that scale globally.
              </p>
            </div>
          </div>
          <div class="about__box about__box--2 about__box--3 about__box--4">
            <ul class="nav" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab">
                  Our Values
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab">
                  Our Skills
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab">
                  Our Mission
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active show" id="tab-1" role="tabpanel">
                <p>
                  We believe technology should simplify life. Our core values
                  Integrity, Innovation, and Impact shape how we work,
                  build, and collaborate with our clients. We deliver with
                  honesty and always aim to create meaningful, measurable
                  change.
                </p>
              </div>
              <div class="tab-pane fade" id="tab-2" role="tabpanel">
                <p>
                  Our expertise spans AI &amp; Machine Learning, Cloud Solutions,
                  API Integrations, and DevOps Automation. With cutting-edge
                  tools and a passion for excellence, we solve complex
                  challenges through intelligent design and engineering.
                </p>
              </div>
              <div class="tab-pane fade" id="tab-3" role="tabpanel">
                <p>
                  Our mission is to bridge innovation and impact. We empower
                  startups and enterprises with scalable digital systems that
                  accelerate growth, optimize performance, and future-proof
                  success.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about area end -->
  <!-- counter area start -->
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="counter__wrap counter__wrap--2">
          <div class="row mt-none-30">
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
              <div class="counter__box">
                <h2 class="title">
                  <span class="counter big">
                    70
                  </span>
                  <span class="big">
                    +
                  </span>
                </h2>
                <p>
                  Successful Deployments
                </p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
              <div class="counter__box">
                <h2 class="title">
                  <span class="counter big">
                    50
                  </span>
                  <span class="big">
                    +
                  </span>
                </h2>
                <p>
                  Lines of Code Delivered
                </p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
              <div class="counter__box">
                <h2 class="title">
                  <span class="counter big">
                    80
                  </span>
                  <span class="big">
                    +
                  </span>
                </h2>
                <p>
                  Global Clients &amp; Partners
                </p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
              <div class="counter__box">
                <h2 class="title">
                  <span class="counter big">
                    40
                  </span>
                  <span class="big">
                    +
                  </span>
                </h2>
                <p>
                  End-Users Empowered
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- counter area end -->
  <!-- cta area start -->
  <div class="cta__area cta__area--4 bg_img" data-background="assets/images/bg/cta-bg-4.webp" data-opacity="5"
    data-overlay="dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 text-center text-white">
          <h2 class="mb-30">
            Ready to Build the Future with Us?
          </h2>
          <p class="mb-40">
            From startups to global enterprises, we help ambitious teams turn
            bold ideas into impactful, scalable software solutions.
          </p>
          <a class="site-btn" href="contact">
            Let's Collaborate
            <span>
              +
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- cta area end -->
  <!-- news-feed area start -->
  <!-- <section class="news-feed-area pt-95 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="newsfeedwrap newsfeedwrap--3">
            <div class="section__heading mb-40">
              <h3 class="section__heading--title-small"><span class="mr-10">//</span>Insights</h3>
              <h2 class="section__heading--title">Latest From GryphalCode<span>.</span></h2>
            </div>
            <div class="news__items mt-none-30">
              <div class="news__item mt-30">
                <div class="thumb">
                  <img src="assets/images/news/news-small-1.webp" alt="News Small 1" loading="lazy">
                </div>
                <div class="content">
                  <ul class="meta">
                    <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th Oct 2025</a></li>
                    <li><a href="#0"><i class="fal fa-user"></i> By Admin</a></li>
                  </ul>
                  <h4 class="title"><a href="news-details">How AI Automation is Transforming Business
                      Operations</a></h4>
                </div>
              </div>
              <div class="news__item mt-30">
                <div class="thumb">
                  <img src="assets/images/news/news-small-2.webp" alt="News Small 2" loading="lazy">
                </div>
                <div class="content">
                  <ul class="meta">
                    <li><a href="#0"><i class="fal fa-calendar-alt"></i> 12th Oct 2025</a></li>
                    <li><a href="#0"><i class="fal fa-user"></i> By Admin</a></li>
                  </ul>
                  <h4 class="title"><a href="news-details">Cloud & DevOps Solutions that Drive Modern
                      Innovation</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="news__item news__item--transparent mt-30">
            <div class="thumb" data-overlay="dark" data-opacity="6">
              <img src="assets/images/news/news-big-2.webp" alt="News Big 2" loading="lazy">
            </div>
            <div class="content">
              <ul class="meta">
                <li><a href="#0"><i class="fal fa-calendar-alt"></i> 05th Oct 2025</a></li>
                <li><a href="#0"><i class="fal fa-user"></i> By Admin</a></li>
              </ul>
              <h4 class="title"><a href="news-details">GryphalCode Expands AI & Cloud Division to Support Global
                  Clients</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- news-feed area end -->
  </main>
<?php include 'footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
  
</body>

</html>