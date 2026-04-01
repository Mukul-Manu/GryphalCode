<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php 
// Dynamic Base URL Detection
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$base_url = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');?>
<?php 
$page_title = "Why Choose GryphalCode | Excellence in Software Engineering";
$meta_desc = "Learn why leading businesses trust GryphalCode for their critical IT infrastructure, AI solutions, and full-stack software development needs. Serving Coimbatore, Tamil Nadu, and Kerala.";
 
$meta_keywords = "Why Choose, GryphalCode Why Choose, Why, Choose, IT company, software development, AI solutions, cloud infrastructure";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <title><?= $page_title ?></title>
  <link href="https://gryphalcode.com/why-choose" rel="canonical">
  <meta content="<?= $meta_desc ?>" name="description" />
  <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
  
  <!-- GEO Targeting - Service States of India -->
  <meta content="IN-TN, IN-KL" name="geo.region" />
  <meta content="11.0168;76.9558" name="geo.position" />
  <meta content="Coimbatore, Tamil Nadu, Kerala, India - Serving All States Nationwide" name="geo.placename" />
  <meta content="11.0168, 76.9558" name="ICBM" />
  
  <!-- Open Graph / Social Transparency -->
  <meta content="website" property="og:type" />
  <meta content="https://gryphalcode.com/why-choose" property="og:url" />
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
    "url": "https://gryphalcode.com/why-choose",
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
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/lightcase.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/meanmenu.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/nice-select.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/animate.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css?v=3">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.css?v=3">
  <link href="<?= $base_url ?>/manifest.json" rel="manifest" />
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
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp"
    data-opacity="5" data-overlay="dark">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb__wrap text-center">
            <h1 class="title">
              Why Choose GryphalCode
            </h1>
            <div class="breadcrumb__nav">
              <ul>
                <li>
                  <a href="<?= $base_url ?>/index">
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
            <img alt="GryphalCode Team and Expertise Overview" src="<?= $base_url ?>/assets/images/bg/about-bg-6.webp"  loading="lazy">
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
                <h1 class="title">
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
  <div class="cta__area cta__area--4 bg_img" data-background="<?= $base_url ?>/assets/images/bg/cta-bg-3.webp" data-opacity="5"
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
          <a class="site-btn" href="<?= $base_url ?>/contact">
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
  </main>
<?php include 'footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
  
</body>

</html>