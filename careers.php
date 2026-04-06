<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Careers | Join the Elite Tech Team at GryphalCode";
$meta_desc = "Explore career opportunities at GryphalCode. Join a team of innovators driving digital transformation through AI, Cloud, and Software Engineering expert solutions. Serving Coimbatore, Tamil Nadu, and Kerala.";
 
$meta_keywords = "Careers, GryphalCode Careers, Careers, IT company, software development, AI solutions, cloud infrastructure";
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
  <link rel="preload" href="assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/css/bootstrap.min.css" as="style">
  <link rel="preload" href="assets/css/style.css?v=3" as="style">
  <link href="https://gryphalcode.com/careers" rel="canonical">
  <meta content="<?= $meta_desc ?>" name="description" />
  <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
  
  <!-- GEO Targeting - Service States of India -->
  <meta content="IN-TN, IN-KL" name="geo.region" />
  <meta content="11.0168;76.9558" name="geo.position" />
  <meta content="Coimbatore, Tamil Nadu, Kerala, India - Serving All States Nationwide" name="geo.placename" />
  <meta content="11.0168, 76.9558" name="ICBM" />
  
  <!-- Open Graph / Social Transparency -->
  <meta content="website" property="og:type" />
  <meta content="https://gryphalcode.com/careers" property="og:url" />
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
    "url": "https://gryphalcode.com/careers",
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
  <link href="https://www.googletagmanager.com" rel="preconnect" /><link href="https://www.google-analytics.com" rel="preconnect" /><link href="https://www.googletagmanager.com" rel="dns-prefetch" /><link href="https://www.google-analytics.com" rel="dns-prefetch" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/lightcase.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/meanmenu.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/nice-select.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/animate.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/style.css?v=3">
  <link rel="stylesheet" href="assets/css/responsive.css?v=3">

  <link href="/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
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
                                                        Careers
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
                                                                        Careers
                                                                </li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- career image area start -->
        <div class="career-area pt-100 pb-100">
                <div class="container">
                        <div class="row mt-none-30">
                                <div class="col-xl-12">
                                        <div class="career__bg">
                                                <div class="row">
                                                        <div class="col-xl-6 col-lg-6 mt-30">
                                                                <img alt="Company Culture"
                                                                        src="assets/images/bg/careers-bg-1.webp"  loading="lazy">
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 mt-30">
                                                                <img alt="Office Environment"
                                                                        src="assets/images/bg/careers-bg-2.webp"  loading="lazy">
                                                        </div>
                                                </div>
                                                <a class="site-btn" href="<?= $base_url ?>/">
                                                        GryphalCode
                                                </a>
                                        </div>
                                </div>
                        </div>
                        <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10 mt-30">
                                        <img alt="Join Our Team" src="assets/images/bg/careers-bg-3.webp"  loading="lazy">
                                </div>
                        </div>
                </div>
        </div>
        <!-- career image area end -->
        <!-- job list area start -->
        <div class="container">
                <div class="row">
                        <div class="col-xl-12">
                                <div class="job__lists mb-100">
                                        <div class="item">
                                                <h4 class="title">
                                                        Frontend Developer
                                                </h4>
                                                <span class="status">
                                                        Status: Full Time
                                                </span>
                                                <span class="location">
                                                        Location: Coimbatore, India
                                                </span>
                                        </div>
                                        <div class="item">
                                                <h4 class="title">
                                                        UX/UI Designer
                                                </h4>
                                                <span class="status">
                                                        Status: Full Time
                                                </span>
                                                <span class="location">
                                                        Location: Coimbatore, India
                                                </span>
                                        </div>
                                        <div class="item">
                                                <h4 class="title">
                                                        DevOps Engineer
                                                </h4>
                                                <span class="status">
                                                        Status: Full Time
                                                </span>
                                                <span class="location">
                                                        Location: Coimbatore, India
                                                </span>
                                        </div>
                                        <div class="item">
                                                <h4 class="title">
                                                        Data Science Specialist
                                                </h4>
                                                <span class="status">
                                                        Status: Full Time
                                                </span>
                                                <span class="location">
                                                        Location: Coimbatore, India
                                                </span>
                                        </div>
                                        <div class="item">
                                                <h4 class="title">
                                                        Senior AI Engineer
                                                </h4>
                                                <span class="status">
                                                        Status: Full Time
                                                </span>
                                                <span class="location">
                                                        Location: Coimbatore, India
                                                </span>
                                        </div>
                                        <div class="item">
                                                <h4 class="title">
                                                        Cloud Solutions Architect (AWS/Azure)
                                                </h4>
                                                <span class="status">
                                                        Status: Full Time
                                                </span>
                                                <span class="location">
                                                        Location: Coimbatore, India
                                                </span>
                                        </div>
                                        <div class="item">
                                                <h4 class="title">
                                                        Technical Content Writer
                                                </h4>
                                                <span class="status">
                                                        Status: Full Time
                                                </span>
                                                <span class="location">
                                                        Location: Coimbatore, India
                                                </span>
                                        </div>
                                        <div class="item">
                                                <h4 class="title">
                                                        Developer: Software Developer
                                                </h4>
                                                <span class="status">
                                                        Status: Full Time
                                                </span>
                                                <span class="location">
                                                        Location: Coimbatore, India
                                                </span>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        <!-- job list area end -->
        <!-- support area start -->
        <section class="support__area support__area--3 grey-bg pt-95 pb-100">
                <div class="container">
                        <div class="row mb-60 align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-7">
                                        <div class="section__heading">
                                                <h3 class="section__heading--title-small">
                                                        <span class="mr-10">
                                                                //
                                                        </span>
                                                        Perks &amp; Benefits
                                                </h3>
                                                <h2 class="section__heading--title">
                                                        Exceptional Benefits for Exceptional Talent
                                                        <span>
                                                                .
                                                        </span>
                                                </h2>
                                        </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-5 text-right">
                                </div>
                        </div>
                        <div class="row custom-row mt-none-30">
                                <!-- Cutting-Edge Tech -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                                        <div class="support__box support__box--2">
                                                <div class="icon">
                                                        <img alt="Cutting-edge tech icon" class="default"
                                                                src="assets/images/icons/support-icon-6.webp"  loading="lazy">
                                                        <img alt="Cutting-edge tech hover" class="hover"
                                                                src="assets/images/icons/support-icon-h-6.webp"  loading="lazy">
                                                </div>
                                                <div class="content">
                                                        <h2 class="title mb-15">
                                                                Cutting-Edge Tech
                                                        </h2>
                                                        <p>
                                                                Work with the latest frameworks, AI tools, and cloud
                                                                technologies to build real-world impact.
                                                        </p>
                                                </div>
                                        </div>
                                </div>
                                <!-- Flexible Work -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                                        <div class="support__box support__box--2">
                                                <div class="icon">
                                                        <img alt="Flexible work icon" class="default"
                                                                src="assets/images/icons/support-icon-7.webp"  loading="lazy">
                                                        <img alt="Flexible work hover" class="hover"
                                                                src="assets/images/icons/support-icon-h-7.webp"  loading="lazy">
                                                </div>
                                                <div class="content">
                                                        <h2 class="title mb-15">
                                                                Flexible Work
                                                        </h2>
                                                        <p>
                                                                Balance life and work with our hybrid and remote options
                                                                designed for creativity and comfort.
                                                        </p>
                                                </div>
                                        </div>
                                </div>
                                <!-- Career Growth -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                                        <div class="support__box support__box--2">
                                                <div class="icon">
                                                        <img alt="Career growth icon" class="default"
                                                                src="assets/images/icons/support-icon-8.webp"  loading="lazy">
                                                        <img alt="Career growth hover" class="hover"
                                                                src="assets/images/icons/support-icon-h-8.webp"  loading="lazy">
                                                </div>
                                                <div class="content">
                                                        <h2 class="title mb-15">
                                                                Career Growth
                                                        </h2>
                                                        <p>
                                                                Upskill with mentoring, certifications, and leadership
                                                                programs tailored to your career goals.
                                                        </p>
                                                </div>
                                        </div>
                                </div>
                                <!-- Gaming Zone -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                                        <div class="support__box support__box--2">
                                                <div class="icon">
                                                        <img alt="Gaming zone icon" class="default"
                                                                src="assets/images/icons/support-icon-9.webp"  loading="lazy">
                                                        <img alt="Gaming zone hover" class="hover"
                                                                src="assets/images/icons/support-icon-h-9.webp"  loading="lazy">
                                                </div>
                                                <div class="content">
                                                        <h2 class="title mb-15">
                                                                Gaming Zone
                                                        </h2>
                                                        <p>
                                                                Recharge your mind in our creative chill zone featuring
                                                                gaming
                                                                consoles and breakout spaces.
                                                        </p>
                                                </div>
                                        </div>
                                </div>
                                <!-- Lifestyle & Wellness -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                                        <div class="support__box support__box--2">
                                                <div class="icon">
                                                        <img alt="Lifestyle icon" class="default"
                                                                src="assets/images/icons/support-icon-10.webp"  loading="lazy">
                                                        <img alt="Lifestyle hover" class="hover"
                                                                src="assets/images/icons/support-icon-h-10.webp"  loading="lazy">
                                                </div>
                                                <div class="content">
                                                        <h2 class="title mb-15">
                                                                Lifestyle &amp; Wellness
                                                        </h2>
                                                        <p>
                                                                Enjoy health perks, team outings, and a supportive
                                                                culture
                                                                that keeps you inspired and happy.
                                                        </p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <!-- support area end -->
        <!-- footer area start -->
        </main>
<?php include 'footer.php'; ?>
        <!-- All JS Scripts loaded via loader.js -->
        <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
        
</body>

</html>
