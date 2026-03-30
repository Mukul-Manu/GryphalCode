<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Home | GryphalCode";
$meta_desc = "GryphalCode specializes in Home services. We build secure, high-performance web and mobile software tailored for your business needs.";
 
$meta_keywords = "GryphalCode, Enterprise AI, Custom Software, IT company, software development, cloud devops, AI solutions";
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
                GryphalCode | Enterprise AI &amp; Software Innovation
        </title>
        <meta content="Empowering businesses with precision-engineered AI integration, custom software, and scalable cloud solutions. Transform your digital vision into reality."
                name="description">
        <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
        <meta content="https://gryphalcode.com/assets/images/logo/og-image.webp" name="twitter:image" />
        <meta content="IN-TN" name="geo.region" />
        <meta content="IN-TN" name="geo.region" />
        <meta content="11.0168;76.9558" name="geo.position" />
        <meta content="Coimbatore, Tamil Nadu, India - Serving All States Nationwide" name="geo.placename" />
        <meta content="11.0168, 76.9558" name="ICBM" />
        <meta content="default-src 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com https://maps.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://maxcdn.bootstrapcdn.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https://www.google-analytics.com https://td.doubleclick.net; connect-src 'self' https://www.google-analytics.com; frame-src 'self' https://td.doubleclick.net;"
                http-equiv="Content-Security-Policy" />
        <meta content="DENY" http-equiv="X-Frame-Options" />
        <meta content="strict-origin-when-cross-origin" name="referrer" />
        <meta content="camera=(), microphone=(), geolocation=(), interest-cohort=()" name="permissions-policy" />
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
        <link href="https://gryphalcode.com/index" rel="canonical" />
        <link href="assets/images/logo/favicon.webp" rel="shortcut icon" type="images/x-icon" />
        <!-- Google tag (gtag.js) -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-3J6X1HS36W">
        </script>
        <script>
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }
                gtag('js', new Date());
                gtag('config', 'G-3J6X1HS36W');
        </script>
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
        <script type="application/ld+json">
   {
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "GryphalCode | Enterprise AI & Software Innovation",
  "description": "Empowering businesses with precision-engineered AI integration, custom software, and scalable cloud solutions. Transform your digital vision into reality.",
  "url": "https://gryphalcode.com/index",
  "provider": {
    "@type": "Organization",
    "name": "GryphalCode",
    "logo": "https://gryphalcode.com/assets/images/logo/logo.webp"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "12/26 LakshmiPuram, Ganapathy",
    "addressLocality": "Coimbatore",
    "addressRegion": "TN",
    "postalCode": "641006",
    "addressCountry": "IN"
  }
}
  </script>

        <!-- Open Graph Tags -->
        <meta property="og:title" content="GryphalCode | Enterprise AI &amp; Software Innovation" />
        <meta property="og:description" content="Empowering businesses with precision-engineered AI integration, custom software, and scalable cloud solutions. Transform your digital vision into reality." />
        <meta property="og:url" content="https://gryphalcode.com/index" />
        <meta property="og:image" content="https://gryphalcode.com/assets/images/logo/og-image.webp" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="GryphalCode" />

  

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
        <?php include 'header.php'; ?>
<main id="main-content">
        <!-- banner area start -->
        <section class="banner__area pt-135 pb-135 bg_img" data-background="assets/images/bg/banner-bg-1.webp">
                <div class="banner-wrap">
                        <div class="container-fluid">
                                <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-7">
                                                <div class="bannertext banner-max-width">
                                                        <h5 class="subheading mb-10">
                                                                <span class="mr-10">
                                                                        //
                                                                </span>
                                                                Next-Gen Digital Transformation
                                                        </h5>
                                                        <h1 class="heading heading-custom-style">
                                                                Intelligent Software
                                                                <br />
                                                                Driving Business Growth
                                                                <span>
                                                                        .
                                                                </span>
                                                        </h1>
                                                        <p
                                                                class="p-custom-style-banner">
                                                                GryphalCode delivers enterprise-grade software
                                                                engineering: from Generative AI
                                                                and Cloud-Native architectures to Omni-channel customer
                                                                engagement.
                                                                We build for scale, security, and speed.
                                                        </p>
                                                        <div class="buttons mt-35">
                                                                <a class="site-btn" href="contact">
                                                                        Get In Touch
                                                                </a>
                                                                <a class="site-btn transparent" href="about">
                                                                        Learn More
                                                                </a>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 offset-xl-2 col-md-5 mmt-auto">
                                                <div class="banner__rightbox">
                                                        <div class="banner__rightbox--item">
                                                                <div class="circle">
                                                                        <input class="knob" data-bgcolor="#DEF5FF"
                                                                                data-fgcolor="#086AD8" data-height="75"
                                                                                data-linecap="round"
                                                                                data-readonly="true" data-rel="75"
                                                                                data-thickness=".10" data-width="75"
                                                                                disabled="" type="text" value="0" / aria-label="Percentage Display">
                                                                </div>
                                                                <div class="content">
                                                                        <h3 class="title">
                                                                                SLA-backed Delivery
                                                                        </h3>
                                                                        <p>
                                                                                Reliable timelines &amp; engineering
                                                                                discipline
                                                                        </p>
                                                                </div>
                                                        </div>
                                                        <div class="banner__rightbox--item mt-110 ml-30">
                                                                <div class="circle">
                                                                        <input class="knob" data-bgcolor="#DEF5FF"
                                                                                data-fgcolor="#086AD8" data-height="75"
                                                                                data-linecap="round"
                                                                                data-readonly="true" data-rel="80"
                                                                                data-thickness=".10" data-width="75"
                                                                                disabled="" type="text" value="0" / aria-label="Percentage Display">
                                                                </div>
                                                                <div class="content">
                                                                        <h3 class="title">
                                                                                Customer Satisfaction
                                                                        </h3>
                                                                        <p>
                                                                                Long-term partnerships, not transactions
                                                                        </p>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="banner-img">
                        <img alt="Custom software illustration" src="assets/images/banner/banner-1.webp" />
                </div>
        </section>
        <!-- banner area end -->
        <!-- service area start -->
        <section class="service-area pt-95 pb-100">
                <div class="container">
                        <div class="row justify-content-center">
                                <div class="col-xl-7 text-center">
                                        <div class="section__heading mb-60">
                                                <h3 class="section__heading--title-small">
                                                        <span class="mr-10">
                                                                //
                                                        </span>
                                                        Services
                                                        <span class="ml-10">
                                                                //
                                                        </span>
                                                </h4>
                                                <div class="section__heading--transparent h1">
                                                        Our Capabilities
                                                </div>
                                                <h2 class="section__heading--title">
                                                        AI, Cloud &amp; Mobile Solutions
                                                        <br />
                                                        Engineered for Tomorrow
                                                        <span>
                                                                .
                                                        </span>
                                                </h2>
                                        </div>
                                </div>
                        </div>
                        <div class="row mt-none-30">
                                <div class="col-xl-4 col-lg-6 mt-30">
                                        <div class="service__box service__box--compact">
                                                <div class="thumb mb-10">
                                                        <img alt="Custom Software Development 3D Illustration"
                                                                loading="lazy"
                                                                src="assets/images/service-previews/custom-software.webp" />
                                                </div>
                                                <div class="content">
                                                        <h2 class="title mb-15">
                                                                <a
                                                                        href="service-details/custom-software-development">
                                                                        Custom Web &amp; Mobile Apps
                                                                </a>
                                                        </h2>
                                                        <p
                                                                class="service-box-p-style">
                                                                Scalable, cloud-native applications built with React,
                                                                Node.js, and Python.
                                                                We deliver Progressive Web Apps (PWAs) and
                                                                cross-platform mobile solutions
                                                                designed for high performance.
                                                        </p>
                                                        <ul class="service__box--lists mt-45">
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Product discovery &amp; roadmap
                                                                </li>
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Native &amp; cross-platform mobile apps
                                                                </li>
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Scalable backend &amp; APIs
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                        <div class="service__box service__box--compact">
                                                <div class="thumb mb-10">
                                                        <img alt="Cloud &amp; DevOps Solutions 3D Illustration"
                                                                loading="lazy"
                                                                src="assets/images/service-previews/cloud-devops.webp" />
                                                </div>
                                                <div class="content">
                                                        <h2 class="title mb-15">
                                                                <a href="service-details/cloud-devops-solutions">
                                                                        Cloud &amp; DevOps
                                                                </a>
                                                        </h2>
                                                        <p
                                                                class="service-box-p-style">
                                                                Cloud-native architecture, Kubernetes orchestration, and
                                                                automated CI/CD pipelines.
                                                                We ensure secure, resilient infra with
                                                                Infrastructure-as-Code (IaC).
                                                        </p>
                                                        <ul class="service__box--lists mt-45">
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Cloud migration &amp; optimization
                                                                </li>
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Automated pipelines &amp; deployment
                                                                </li>
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Observability &amp; cost efficiency
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                        <div class="service__box service__box--compact">
                                                <div class="thumb mb-10">
                                                        <img alt="WhatsApp Business API 3D Illustration" loading="lazy"
                                                                src="assets/images/service-previews/whatsapp-business.webp" />
                                                </div>
                                                <div class="content">
                                                        <h2 class="title mb-15">
                                                                <a
                                                                        href="service-details/whatsapp-business-solutions">
                                                                        WhatsApp Business API
                                                                </a>
                                                        </h2>
                                                        <p>
                                                                Official WhatsApp Business API solutions. Leverage
                                                                AI-powered chatbots
                                                                and automated workflows to drive customer engagement and
                                                                sales 24/7.
                                                        </p>
                                                        <ul class="service__box--lists mt-45">
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Automated Chatbots &amp; Support
                                                                </li>
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Bulk Notifications &amp; Alerts
                                                                </li>
                                                                <li>
                                                                        <span class="icon">
                                                                                <i class="fal fa-check">
                                                                                </i>
                                                                        </span>
                                                                        Secure API Integration
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- service area end -->
        <!-- Product Showcase Area Start -->
        <section class="product-showcase-area pt-100 pb-100 bg-light">
                <div class="container">
                        <div class="row justify-content-center">
                                <div class="col-xl-8 text-center">
                                        <div class="section__heading mb-60">
                                                <h3 class="section__heading--title-small">
                                                        <span class="mr-10">
                                                                //
                                                        </span>
                                                        Our Products
                                                        <span class="ml-10">
                                                                //
                                                        </span>
                                                </h3>
                                                <h2 class="section__heading--title">
                                                        Powerful Solutions Built for
                                                        <br />
                                                        Specific Industry Needs
                                                        <span>
                                                                .
                                                        </span>
                                                </h2>
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                        <div class="product-card" onmouseleave="this.classList.remove('active')">
                                                <div class="product-thumb">
                                                        <!-- Placeholder for generated image -->
                                                        <img alt="E-Commerce Management Suite 3D Illustration"
                                                                loading="lazy"
                                                                src="assets/images/service-previews/food-delivery.webp"
                                                                class="product-thumb-img" />
                                                </div>
                                                <div class="product-content mt-20 text-center product-content-padding">
                                                        <h3 class="title product-title-style">
                                                                E-Commerce Management Suite
                                                        </h3>
                                                        <p
                                                                class="product-desc-clamp">
                                                                Comprehensive dashboard for tracking sales, inventory,
                                                                and customer analytics.
                                                        </p>
                                                </div>
                                                <!-- Overlay Content -->
                                                <div class="product-details-overlay">
                                                        <h4>
                                                                E-Commerce Features
                                                        </h4>
                                                        <ul>
                                                                <li>
                                                                        inventory Tracking
                                                                </li>
                                                                <li>
                                                                        Sales Analytics
                                                                </li>
                                                                <li>
                                                                        Customer Insights
                                                                </li>
                                                                <li>
                                                                        Automated Reporting
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                        <div class="product-card" onmouseleave="this.classList.remove('active')">
                                                <div class="product-thumb">
                                                        <img alt="Logistics &amp; Supply Chain 3D Illustration"
                                                                loading="lazy"
                                                                src="assets/images/service-previews/automation.webp"
                                                                class="product-thumb-img" />
                                                </div>
                                                <div class="product-content mt-20 text-center product-content-padding">
                                                        <h3 class="title product-title-style">
                                                                Logistics &amp; Supply Chain
                                                        </h3>
                                                        <p
                                                                class="product-desc-clamp">
                                                                Real-time vehicle tracking, route optimization, and
                                                                delivery management system.
                                                        </p>
                                                </div>
                                                <!-- Overlay Content -->
                                                <div class="product-details-overlay">
                                                        <h4>
                                                                Logistics Features
                                                        </h4>
                                                        <ul>
                                                                <li>
                                                                        Real-time Tracking
                                                                </li>
                                                                <li>
                                                                        Route Optimization
                                                                </li>
                                                                <li>
                                                                        Driver Management
                                                                </li>
                                                                <li>
                                                                        Proof of Delivery
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                        <div class="product-card" onmouseleave="this.classList.remove('active')">
                                                <div class="product-thumb">
                                                        <img alt="WhatsApp Business CRM 3D Illustration" loading="lazy"
                                                                src="assets/images/service-previews/api-integration.webp"
                                                                class="product-thumb-img" />
                                                </div>
                                                <div class="product-content mt-20 text-center product-content-padding">
                                                        <h3 class="title product-title-style">
                                                                WhatsApp Business CRM
                                                        </h3>
                                                        <p
                                                                class="product-desc-clamp">
                                                                Unified inbox for customer support, automated replies,
                                                                and lead management.
                                                        </p>
                                                </div>
                                                <!-- Overlay Content -->
                                                <div class="product-details-overlay">
                                                        <h4>
                                                                CRM Features
                                                        </h4>
                                                        <ul>
                                                                <li>
                                                                        Unified Inbox
                                                                </li>
                                                                <li>
                                                                        Auto-Replies
                                                                </li>
                                                                <li>
                                                                        Lead Tagging
                                                                </li>
                                                                <li>
                                                                        Broadcast Msgs
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- Product Showcase Area End -->
        <!-- about area start -->
        <section class="about__area">
                <div class="container">
                        <div class="row">
                                <div class="col-xl-12">
                                        <div class="about__wrap pt-95 pb-95" data-overlay="">
                                                <div class="row justify-content-end">
                                                        <div class="col-xl-6 col-lg-6">
                                                                <div class="about__bg">
                                                                        <img alt="Team collaborating on software project"
                                                                                loading="lazy"
                                                                                src="assets/images/bg/about-bg-1.webp" />
                                                                </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 mt-30">
                                                                <div class="section__heading mb-35">
                                                                        <h3 class="section__heading--title-small">
                                                                                <span class="mr-10">
                                                                                        //
                                                                                </span>
                                                                                About GryphalCode
                                                                        </h3>
                                                                        <h2 class="section__heading--title">
                                                                                Accelerating Digital Success
                                                                                <br />
                                                                                Since 2021
                                                                                <span>
                                                                                </span>
                                                                        </h2>
                                                                        <div class="section__heading--content mt-20">
                                                                                <p
                                                                                        class="p-custom-style-about">
                                                                                        GryphalCode partners with
                                                                                        startups and enterprises to
                                                                                        build reliable software that
                                                                                        solves real business
                                                                                        problems. We combine product
                                                                                        strategy, UX design and
                                                                                        disciplined engineering to
                                                                                        deliver measurable results.
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <div class="about__box">
                                                                        <div class="row mt-none-30">
                                                                                <div class="col-xl-6 mt-30">
                                                                                        <div class="about__box--item">
                                                                                                <div
                                                                                                        class="about__box--icon">
                                                                                                        <img alt="Product &amp; Strategy Icon"
                                                                                                                loading="lazy"
                                                                                                                src="assets/images/icons/about-icon-1.webp" />
                                                                                                </div>
                                                                                                <div
                                                                                                        class="about__box--content">
                                                                                                        <h3
                                                                                                                class="about__box--title">
                                                                                                                Product
                                                                                                                &amp;
                                                                                                                Strategy
                                                                                                        </h3>
                                                                                                        <p
                                                                                                                class="about-box-p-style">
                                                                                                                Discovery
                                                                                                                workshops
                                                                                                                and
                                                                                                                product
                                                                                                                roadmaps
                                                                                                                to align
                                                                                                                development
                                                                                                                with
                                                                                                                market
                                                                                                                value.
                                                                                                        </p>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-xl-6 mt-30">
                                                                                        <div class="about__box--item">
                                                                                                <div
                                                                                                        class="about__box--icon">
                                                                                                        <img alt="Engineering Excellence Icon"
                                                                                                                loading="lazy"
                                                                                                                src="assets/images/icons/about-icon-2.webp" />
                                                                                                </div>
                                                                                                <div
                                                                                                        class="about__box--content">
                                                                                                        <h3
                                                                                                                class="about__box--title">
                                                                                                                Engineering
                                                                                                                Excellence
                                                                                                        </h3>
                                                                                                        <p
                                                                                                                class="about-box-p-style">
                                                                                                                Modern
                                                                                                                tech
                                                                                                                stacks,
                                                                                                                secure
                                                                                                                coding
                                                                                                                and
                                                                                                                test-driven
                                                                                                                development
                                                                                                                for
                                                                                                                predictable
                                                                                                                outcomes.
                                                                                                        </p>
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
                </div>
        </section>
        <!-- about area end -->
        <!-- why choose area start -->
        <section class="whychoose-area pt-95 pb-55">
                <div class="container">
                        <div class="row justify-content-center">
                                <div class="col-xl-7 text-center">
                                        <div class="section__heading mb-100">
                                                <h3 class="section__heading--title-small">
                                                        <span class="mr-10">
                                                                //
                                                        </span>
                                                        Hire us, why not
                                                        <span class="ml-10">
                                                                //
                                                        </span>
                                                </h4>
                                                <!-- <div class="section__heading--transparent h1">Why Choose Us</div> -->
                                                <h2 class="section__heading--title">
                                                        Delivery, Reliability and Long-term value
                                                </h2>
                                        </div>
                                </div>
                        </div>
                        <div class="row mt-none-30">
                                <div class="col-xl-4 col-lg-6 mt-30">
                                        <div class="whychoose__box">
                                                <div class="thumb-wrap">
                                                        <div class="thumb">
                                                                <img alt="Process &amp; Delivery Management 3D Illustration"
                                                                        loading="lazy"
                                                                        src="assets/images/service-previews/project-delivery.webp" />
                                                        </div>
                                                        <div class="cat">
                                                                <div class="icon">
                                                                        <i class="fal fa-cogs">
                                                                        </i>
                                                                </div>
                                                                <h3 class="cat-ttile">
                                                                        Process &amp; Delivery
                                                                </h3>
                                                        </div>
                                                </div>
                                                <div class="content text-center mt-25">
                                                        <div class="cat__inner">
                                                                <div class="icon">
                                                                        <i class="fal fa-cogs">
                                                                        </i>
                                                                </div>
                                                                <h3 class="cat-ttile">
                                                                        Reliable Delivery
                                                                </h4>
                                                        </div>
                                                        <p
                                                                class="whychoose-p-style">
                                                                Agile teams, clear reporting and predictable releases
                                                                aligned
                                                                with business KPIs.
                                                        </p>
                                                        <a class="inline-btn"
                                                                href="service-details/process-delivery">
                                                                Read More
                                                        </a>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                        <div class="whychoose__box">
                                                <div class="thumb-wrap">
                                                        <div class="thumb">
                                                                <img alt="Security by Design 3D Illustration"
                                                                        loading="lazy"
                                                                        src="assets/images/service-previews/security.webp" />
                                                        </div>
                                                        <div class="cat">
                                                                <div class="icon">
                                                                        <i class="fal fa-lock">
                                                                        </i>
                                                                </div>
                                                                <h3 class="cat-ttile">
                                                                        Security
                                                                </h3>
                                                        </div>
                                                </div>
                                                <div class="content text-center mt-25">
                                                        <div class="cat__inner">
                                                                <div class="icon">
                                                                        <i class="fal fa-lock">
                                                                        </i>
                                                                </div>
                                                                <h3 class="cat-ttile">
                                                                        Secure by Design
                                                                </h4>
                                                        </div>
                                                        <p
                                                                class="whychoose-p-style">
                                                                Security and compliance baked into the development
                                                                lifecycle.
                                                        </p>
                                                        <a class="inline-btn" href="service-details/security">
                                                                Read More
                                                        </a>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                        <div class="whychoose__box">
                                                <div class="thumb-wrap">
                                                        <div class="thumb">
                                                                <img alt="Automation &amp; Efficiency 3D Illustration"
                                                                        loading="lazy"
                                                                        src="assets/images/service-previews/cloud-devops.webp" />
                                                        </div>
                                                        <div class="cat">
                                                                <div class="icon">
                                                                        <i class="fal fa-globe">
                                                                        </i>
                                                                </div>
                                                                <h3 class="cat-ttile">
                                                                        Automation
                                                                </h3>
                                                        </div>
                                                </div>
                                                <div class="content text-center mt-25">
                                                        <div class="cat__inner">
                                                                <div class="icon">
                                                                        <i class="fal fa-globe">
                                                                        </i>
                                                                </div>
                                                                <h3 class="cat-ttile">
                                                                        Operational Efficiency
                                                                </h4>
                                                        </div>
                                                        <p
                                                                class="whychoose-p-style">
                                                                Automation, monitoring and SRE practices to keep your
                                                                software
                                                                healthy and cost-effective.
                                                        </p>
                                                        <a class="inline-btn" href="service-details/automation">
                                                                Read More
                                                        </a>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- why choose area end -->
        <!-- video section area start -->
        <section class="video__area bg_img pt-100 pb-130" data-background="assets/images/bg/video-bg.webp">
                <div class="container">
                        <div class="row">
                                <div class="col-xl-7 col-lg-8">
                                        <div class="video-content-wrap">
                                                <div class="section__heading mb-35">
                                                        <h3 class="section__heading--title-small">
                                                                <span class="mr-10">
                                                                        //
                                                                </span>
                                                                Case Study
                                                        </h4>
                                                        <div class="section__heading--transparent h1">
                                                                Success Stories
                                                        </div>
                                                        <h2 class="section__heading--title">
                                                                How we helped a logistics provider
                                                                <br />
                                                                cut downtime by
                                                                <span class="highlight-stat">
                                                                        60%
                                                                </span>
                                                                <span>
                                                                </span>
                                                        </h2>
                                                        <div class="section__heading--content mt-20">
                                                                <p class="p-custom-style-about">
                                                                        We engineered a resilient microservices
                                                                        platform, automated
                                                                        CI/CD and introduced observability. The result:
                                                                        faster
                                                                        releases, fewer incidents, and measurable cost
                                                                        savings.
                                                                </p>
                                                        </div>
                                                </div>
                                                <div class="row mt-none-20">
                                                        <div class="col-xl-6 mt-20">
                                                                <ul class="service__box--lists">
                                                                        <li>
                                                                                <span class="icon">
                                                                                        <i class="fal fa-check">
                                                                                        </i>
                                                                                </span>
                                                                                Cloud migration &amp; re-architecture
                                                                        </li>
                                                                        <li>
                                                                                <span class="icon">
                                                                                        <i class="fal fa-check">
                                                                                        </i>
                                                                                </span>
                                                                                24/7 incident reduction
                                                                        </li>
                                                                </ul>
                                                        </div>
                                                        <div class="col-xl-6 mt-20">
                                                                <ul class="service__box--lists">
                                                                        <li>
                                                                                <span class="icon">
                                                                                        <i class="fal fa-check">
                                                                                        </i>
                                                                                </span>
                                                                                AI &amp; Automation Integration
                                                                        </li>
                                                                        <li>
                                                                                <span class="icon">
                                                                                        <i class="fal fa-check">
                                                                                        </i>
                                                                                </span>
                                                                                24/7 End-to-end DevOps automation
                                                                        </li>
                                                                </ul>
                                                        </div>
                                                </div>
                                                <a class="site-btn" href="contact">
                                                        Start Your Transformation
                                                        <span>
                                                        </span>
                                                </a>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- video section area end -->
        <!-- news-feed area start -->
        <section class="news-feed-area grey-bg pt-100 pb-100">
                <div class="container">
                        <div class="row">
                                <div class="col-xl-6">
                                        <div class="testimonials owl-carousel">
                                                <div class="testimonial">
                                                        <h4 class="title mb-20">
                                                                Revolutionized Our Digital Infrastructure
                                                        </h4>
                                                        <p class="p-custom-style-about">
                                                                "GryphalCode's blockchain implementation reduced supply
                                                                chain
                                                                delays by 68% while increasing transparency. Their
                                                                solution
                                                                pays for itself 3x over! The team delivered ahead of
                                                                schedule
                                                                while maintaining rigorous security protocols."
                                                        </p>
                                                        <div class="authore mt-25 d-flex align-items-center">
                                                                <div class="authore--thumb mr-20">
                                                                        <img src="assets/images/others/testimonial-authore-1.webp"
                                                                                alt="Testimonial Author Mukul - Founder" / loading="lazy">
                                                                </div>
                                                                <div class="authore--content">
                                                                        <h5 class="name">
                                                                                Mukul
                                                                        </h5>
                                                                        <span class="designatin">
                                                                                Founder
                                                                        </span>
                                                                </div>
                                                        </div>
                                                        <img alt="Quote" class="quote-icon" loading="lazy"
                                                                src="assets/images/icons/quote.webp" />
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-6">
                                        <div class="newsfeedwrap">
                                                <div class="section__heading mb-30">
                                                        <h3 class="section__heading--title-small">
                                                                <span class="mr-10">
                                                                        //
                                                                </span>
                                                                Tech Insights
                                                        </h3>
                                                        <h2 class="section__heading--title">
                                                                Engineering insights
                                                                <br />
                                                                &amp; Best practices
                                                                <span>
                                                                </span>
                                                        </h2>
                                                </div>
                                                <div class="row">
                                                        <div class="col-xl-12">
                                                                <div class="news__items mt-none-30">
                                                                        <div class="news__item mt-30">
                                                                                <div class="thumb">
                                                                                        <img alt="AI Integration"
                                                                                                loading="lazy"
                                                                                                src="assets/images/news/news-small-1.webp" />
                                                                                </div>
                                                                                <div class="content">
                                                                                        <ul class="meta">
                                                                                                <li>
                                                                                                        <span>
                                                                                                                <i
                                                                                                                        class="fa fa-calendar-alt">
                                                                                                                </i>
                                                                                                                21th
                                                                                                                April
                                                                                                                2024
                                                                                                        </span>
                                                                                                </li>
                                                                                                <li>
                                                                                                        <span>
                                                                                                                <i
                                                                                                                        class="fa fa-user">
                                                                                                                </i>
                                                                                                                By
                                                                                                                Mridhul
                                                                                                        </span>
                                                                                                </li>
                                                                                        </ul>
                                                                                        <h4 class="title">
                                                                                                <span>
                                                                                                        Boosting
                                                                                                        Operational
                                                                                                        Efficiency with
                                                                                                        AI-Powered
                                                                                                        Business
                                                                                                        Automation
                                                                                                </span>
                                                                                        </h4>
                                                                                </div>
                                                                        </div>
                                                                        <div class="news__item mt-30">
                                                                                <div class="thumb">
                                                                                        <img alt="Tax Advice"
                                                                                                src="assets/images/news/news-small-2.webp" / loading="lazy">
                                                                                </div>
                                                                                <div class="content">
                                                                                        <ul class="meta">
                                                                                                <li>
                                                                                                        <span>
                                                                                                                <i
                                                                                                                        class="fa fa-calendar-alt">
                                                                                                                </i>
                                                                                                                24th
                                                                                                                June
                                                                                                                2025
                                                                                                        </span>
                                                                                                </li>
                                                                                                <li>
                                                                                                        <span>
                                                                                                                <i
                                                                                                                        class="fa fa-user">
                                                                                                                </i>
                                                                                                                By
                                                                                                                Karthi
                                                                                                        </span>
                                                                                                </li>
                                                                                        </ul>
                                                                                        <h4 class="title">
                                                                                                <span>
                                                                                                        We are
                                                                                                        specialists in
                                                                                                        both economics
                                                                                                        and
                                                                                                        information
                                                                                                        technologies.
                                                                                                </span>
                                                                                        </h4>
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
        <!-- news-feed area end -->
        </main>
<?php include 'footer.php'; ?>
        <!-- All JS Scripts loaded via loader.js -->
        <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
        
</body>

</html>