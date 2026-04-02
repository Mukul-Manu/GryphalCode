<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "GryphalCode | #1 Enterprise AI & Custom Software Development Coimbatore";
$meta_desc = "GryphalCode delivers precision-engineered AI integration, custom software development, and scalable cloud solutions. The preferred IT partner for businesses in Coimbatore, Tamil Nadu, and Kerala.";

$meta_keywords = "GryphalCode, Enterprise AI, Custom Software, IT company, software development, cloud devops, AI solutions";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <link href="assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
  <link href="assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <title><?= $page_title ?></title>
  <link href="https://gryphalcode.com/index" rel="canonical">
  <meta content="<?= $meta_desc ?>" name="description" />
  <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
  
  <!-- GEO Targeting - Service States of India -->
  <meta content="IN-TN, IN-KL" name="geo.region" />
  <meta content="11.0168;76.9558" name="geo.position" />
  <meta content="Coimbatore, Tamil Nadu, Kerala, India - Serving All States Nationwide" name="geo.placename" />
  <meta content="11.0168, 76.9558" name="ICBM" />
  
  <!-- Open Graph / Social Transparency -->
  <meta content="website" property="og:type" />
  <meta content="https://gryphalcode.com/index" property="og:url" />
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
    "url": "https://gryphalcode.com/index",
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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="assets/css/lightcase.css">
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/style.css?v=3">
  <link rel="stylesheet" href="assets/css/responsive.css?v=3">
  <link href="/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
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
                                                                                disabled="" type="text" value="0"  aria-label="Percentage Display">
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
                                                                                disabled="" type="text" value="0"  aria-label="Percentage Display">
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
                        <img alt="Custom software illustration" src="assets/images/banner/banner-1.webp" width="636" height="550" fetchpriority="high" />
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
                                                </h3>
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
                                                                src="assets/images/service-previews/custom-software.webp" width="370" height="246" />
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
                                                        <a href="request-demo" class="site-btn mt-10" style="padding: 10px 20px; font-size: 14px;">Request Demo</a>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                        <div class="service__box service__box--compact">
                                                <div class="thumb mb-10">
                                                        <img alt="Cloud &amp; DevOps Solutions 3D Illustration"
                                                                loading="lazy"
                                                                src="assets/images/service-previews/cloud-devops.webp" width="370" height="246" />
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
                                                        <a href="request-demo" class="site-btn mt-10" style="padding: 10px 20px; font-size: 14px;">Request Demo</a>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 mt-30">
                                        <div class="service__box service__box--compact">
                                                <div class="thumb mb-10">
                                                        <img alt="WhatsApp Business API 3D Illustration" loading="lazy"
                                                                src="assets/images/service-previews/whatsapp-business.webp" width="370" height="246" />
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
                                                        <a href="request-demo" class="site-btn mt-10" style="padding: 10px 20px; font-size: 14px;">Request Demo</a>
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
                                                        <a href="request-demo" class="site-btn mt-10" style="padding: 10px 20px; font-size: 14px;">Request Demo</a>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                        <div class="product-card" onmouseleave="this.classList.remove('active')">
                                                <div class="product-thumb">
                                                        <img alt="Logistics &amp; Supply Chain 3D Illustration"
                                                                loading="lazy"
                                                                src="assets/images/service-previews/automation.webp" width="370" height="246"
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
                                                        <a href="request-demo" class="site-btn mt-10" style="padding: 10px 20px; font-size: 14px;">Request Demo</a>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                        <div class="product-card" onmouseleave="this.classList.remove('active')">
                                                <div class="product-thumb">
                                                        <img alt="WhatsApp Business CRM 3D Illustration" loading="lazy"
                                                                src="assets/images/service-previews/api-integration.webp" width="370" height="246"
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
                                                        <a href="request-demo" class="site-btn mt-10" style="padding: 10px 20px; font-size: 14px;">Request Demo</a>
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
                                                                                src="assets/images/bg/about-bg-1.webp"/>
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
                                                </h3>
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
                                                                </h3>
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
                                                                </h3>
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
                                                                </h3>
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
                                                        </h3>
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
                                                                                alt="Testimonial Author Mukul - Founder"  loading="lazy">
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
                                                                                                src="assets/images/news/news-small-2.webp"  loading="lazy">
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
