<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Our Services | Full-Stack Development, AI & Cloud Engineering";
$meta_desc = "Explore our comprehensive tech services, from custom web and mobile apps to Kubernetes orchestration, WhatsApp Business API, and automated CI/CD pipelines. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Services, GryphalCode Services, Services, IT company, software development, AI solutions, cloud infrastructure";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<?php include_once 'seo-engine.php'; ?>
  <!-- 2026 AEO / GEO / SXO / LLMO Optimization Tags (Auto-Updating) -->
  <!-- Security & Integrity -->
  <!-- Official Google Pixel & Analytics Tracking (MEO) -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-3J6X1HS36W');
  </script>
  <meta charset="utf-8" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="preload" href="assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/css/bootstrap.min.css" as="style">
  <link href="https://gryphalcode.com/services" rel="canonical">
  <meta content="<?= $meta_desc ?>" name="description" />

  <!-- GEO Targeting - Service States of India -->
  <!-- Open Graph / Social Transparency -->
  <meta content="website" property="og:type" />
  <meta content="https://gryphalcode.com/services" property="og:url" />
  <meta content="<?= $page_title ?>" property="og:title" />
  <meta content="<?= $meta_desc ?>" property="og:description" />
  <meta content="https://gryphalcode.com/assets/images/logo/logo.webp" property="og:image" />
  <!-- Twitter Cards -->
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="@GryphalCode" name="twitter:site" />
  <meta content="<?= $page_title ?>" name="twitter:title" />
  <meta content="<?= $meta_desc ?>" name="twitter:description" />
  <meta content="https://gryphalcode.com/assets/images/logo/og-image.webp" name="twitter:image" />
  <!-- Security & Integrity -->
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
              Our Services
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
<?php include 'global-scripts.php'; ?>
</body>
</html>
