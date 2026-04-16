<?php
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: geolocation=(), microphone=(), camera=()");
$base_url = "..";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php include_once "../seo-engine.php"; ?>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css?v=3.5">
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.css">
</head>
<body>
<?php $base_url = '..';
$page_title = "Agile Software Process & Delivery | GryphalCode";
$meta_desc = "Discover our proven agile delivery framework that ensures transparent project management, rapid prototyping, and high-quality software releases. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Process Delivery, GryphalCode Process Delivery, Process, Delivery, IT company, software development, AI solutions, cloud infrastructure";
?>




  <!-- header start -->
  <?php include '../header.php'; ?>
<main id="main-content">
  <!-- header end -->
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="../assets/images/bg/breadcrumb-bg-1.webp"
    data-opacity="5" data-overlay="dark">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb__wrap text-center">
            <h1 class="title">
              Our Process
            </h1>
            <div class="breadcrumb__nav">
              <ul>
                <li><span>//</span></li>
                <li><a href="<?= $base_url ?>/">Home</a></li>
                <li>|</li>
                <li><a href="<?= $base_url ?>/services">Services</a></li>
                <li>|</li>
                <li>Our Process</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->
  <!-- about area start -->
  <section class="about__area about__area--7 pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 pr-55">
          <div class="service-preview-img">
            <img alt="Project Delivery &amp; Agile Process Visualization"
              src="../assets/images/service-previews/project-delivery.webp"  loading="lazy">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 pl-20">
          <div class="about__wrap about__wrap--4">
            <div class="section__heading mb-35">
              <h3 class="section__heading--title-small">
                <span class="mr-10">
                  //
                </span>
                Agile Delivery
              </h3>
              <h2 class="section__heading--title">
                Predictable Releases
                <br />
                Measurable Success
                <span>
                </span>
              </h2>
              <div class="section__heading--content mt-20">
                <p>
                  We leverage agile methodologies to deliver software that meets
                  your business goals. Our process emphasizes transparency,
                  collaboration, and continuous improvement, ensuring that
                  every release delivers tangible value.
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
                    Agile &amp; Scrum Frameworks
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Transparent Reporting
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
                    KPI-Driven Development
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Continuous Feedback
                  </li>
                </ul>
              </div>
            </div>
            <a class="site-btn" href="../contact">
              Start Your Project
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about area end -->
  <!-- service area start -->
  <section class="service-area pb-95">
    <div class="container">
      <div class="row mt-none-30">
        <div class="col-xl-6 col-lg-6 mt-30">
          <div class="service__box">
            <div class="thumb mb-35">
              <img alt="3D Workflow Illustration" src="../assets/images/service-features/process/feature-1.webp"  loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Strategic Planning
              </h2>
              <p>
                We start by understanding your vision and breaking it down into
                actionable milestones. Our strategic planning ensures that
                development efforts are always aligned with your long-term
                business objectives.
              </p>
              <ul class="service__box--lists mt-45">
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Roadmap Development
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Resource Allocation
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Risk Management
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 mt-30">
          <div class="service__box">
            <div class="thumb mb-35">
              <img alt="3D Intelligence Illustration" src="../assets/images/service-features/process/feature-2.webp"  loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Quality Assurance
              </h2>
              <p>
                Quality is baked into our process from day one. We employ
                rigorous testing standards to ensure that your software is
                robust, secure, and performs flawlessly under pressure.
              </p>
              <ul class="service__box--lists mt-45">
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Automated Testing
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Performance Tuning
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  User Acceptance Testing
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- service area end -->
  <!-- footer area start -->
  </main>
<?php include '../footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include '../whatsapp.php'; ?>
<?php include '../global-scripts.php'; ?>
</body>
</html>
