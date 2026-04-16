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
$page_title = "Business Process Automation & RPA | GryphalCode";
$meta_desc = "Streamline your workflows with custom RPA solutions, AI-driven triggers, and automated data processing to increase operational efficiency. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Automation, GryphalCode Automation, Automation, IT company, software development, AI solutions, cloud infrastructure";
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
              Automation
            </h1>
            <div class="breadcrumb__nav">
              <ul>
                <li><span>//</span></li>
                <li><a href="<?= $base_url ?>/">Home</a></li>
                <li>|</li>
                <li><a href="<?= $base_url ?>/services">Services</a></li>
                <li>|</li>
                <li>Automation</li>
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
            <img alt="Automation &amp; SRE Visualization" src="../assets/images/service-previews/automation.webp"  loading="lazy">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 pl-20">
          <div class="about__wrap about__wrap--4">
            <div class="section__heading mb-35">
              <h3 class="section__heading--title-small">
                <span class="mr-10">
                  //
                </span>
                Operational Excellence
              </h3>
              <h2 class="section__heading--title">
                Streamlined Workflows
                <br />
                Maximum Output
                <span>
                </span>
              </h2>
              <div class="section__heading--content mt-20">
                <p>
                  We eliminate toil and inefficiency through intelligent
                  automation. By automating repetitive tasks and optimizing
                  workflows, we free your team to focus on high-value innovation
                  serving your core business goals.
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
                    Workflow Automation
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    CI/CD Pipelines
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
                    Site Reliability Eng. (SRE)
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Infrastructure as Code
                  </li>
                </ul>
              </div>
            </div>
            <a class="site-btn" href="../contact">
              Optimize Your Operations
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
              <img alt="3D Shield Illustration" src="../assets/images/service-features/automation/feature-1.webp"  loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Monitoring &amp; Observability
              </h2>
              <p>
                You can't fix what you can't see. We implement comprehensive
                monitoring and observability stacks that provide real-time
                insights into system health and performance.
              </p>
              <ul class="service__box--lists mt-45">
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Real-time Dashboards
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Log Aggregation
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Proactive Alerting
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 mt-30">
          <div class="service__box">
            <div class="thumb mb-35">
              <img alt="3D Cloud Optimization Illustration"
                src="../assets/images/service-features/automation/feature-2.webp"  loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Resource Optimization
              </h2>
              <p>
                We analyze your infrastructure usage and implement strategies to
                optimize costs without sacrificing performance, ensuring you get
                maximum value from your cloud investment.
              </p>
              <ul class="service__box--lists mt-45">
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Cloud Cost Management
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Auto-scaling Solutions
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Legacy Modernization
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
