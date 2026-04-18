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
  $page_title = "API Integration & Middleware Automation | GryphalCode";
  $meta_desc = "Connect your software ecosystem with robust custom APIs and middleware solutions that ensure seamless data flow across platforms. Serving Coimbatore, Tamil Nadu, and Kerala.";
  $meta_keywords = "Api Integration Automation, GryphalCode Api Integration Automation, Api, Integration, Automation, IT company, software development, AI solutions, cloud infrastructure";
  ?>

  <?php include '../header.php'; ?>
  <main id="main-content">
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="../assets/images/bg/breadcrumb-bg-1.webp"
      data-opacity="5" data-overlay="dark">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb__wrap text-center">
              <h1 class="title">
                API &amp; Automation
              </h1>
              <div class="breadcrumb__nav">
                <ul>
                  <li><span>//</span></li>
                  <li><a href="<?= $base_url ?>/">Home</a></li>
                  <li>|</li>
                  <li><a href="<?= $base_url ?>/services">Services</a></li>
                  <li>|</li>
                  <li>API &amp; Automation</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- content -->
    <section class="about__area about__area--7 pt-100 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 pr-55">
            <div class="service-preview-img">
              <img alt="API Integration &amp; Automation Visualization"
                src="../assets/images/service-previews/api-integration.webp" loading="lazy">
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 pl-20">
            <div class="about__wrap about__wrap--4">
              <div class="section__heading mb-35">
                <h3 class="section__heading--title-small">
                  <span class="mr-10">
                    //
                  </span>
                  API &amp; Automation
                </h3>
                <h2 class="section__heading--title">
                  Scalable API Management
                  <br />
                  &amp; Event-Driven Integration
                </h2>
                <div class="section__heading--content mt-20">
                  <p>
                    We deliver secure, high-performance APIs and automation workflows that
                    integrate disparate platforms, sync real-time data, and remove manual
                    bottlenecks using modern Event-Driven Architectures.
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
                      Enterprise Service Bus &amp; iPaaS
                    </li>
                    <li>
                      <span class="icon">
                        <i class="fal fa-check">
                        </i>
                      </span>
                      Custom GraphQL &amp; REST API Development
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
                      Workflow Automation
                    </li>
                    <li>
                      <span class="icon">
                        <i class="fal fa-check">
                        </i>
                      </span>
                      Data Sync &amp; ETL
                    </li>
                  </ul>
                </div>
              </div>
              <a class="site-btn" href="../contact">
                Automate Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="service-area pb-95">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 text-center">
            <div class="section__heading mb-60">
              <h3 class="section__heading--title-small">
                <span class="mr-10">
                  //
                </span>
                Why Choose Us
                <span class="ml-10">
                  //
                </span>
              </h3>
              <h2 class="section__heading--title">
                Connect Your Digital
                <br />
                Ecosystem
                <span>
                  .
                </span>
              </h2>
            </div>
          </div>
        </div>
        <div class="row mt-none-30">
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="service__box">
              <div class="thumb mb-35">
                <img alt="3D Illustration" src="../assets/images/service-features/api-integration/feature-1.webp"
                  loading="lazy">
              </div>
              <div class="content">
                <h2 class="title mb-15">
                  Secure API Development
                </h2>
                <p>
                  Secure, versioned APIs with clear contracts and comprehensive
                  documentation for reliable integrations.
                </p>
                <ul class="service__box--lists mt-45">
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    REST
                    &amp; GraphQL
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Rate
                    limiting &amp; OAuth
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Swagger / OpenAPI
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="service__box">
              <div class="thumb mb-35">
                <img alt="3D Cloud Infrastructure Illustration"
                  src="../assets/images/service-features/api-integration/feature-2.webp" loading="lazy">
              </div>
              <div class="content">
                <h2 class="title mb-15">
                  High-Performance Integrations
                </h2>
                <p>
                  Connect your entire software ecosystem with robust API gateways and real-time data pipelines.
                </p>
                <ul class="service__box--lists mt-45">
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Apache Kafka
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    gRPC &amp; Webhooks
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Event-Driven
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="service__box">
              <div class="thumb mb-35">
                <img alt="3D Data Milestones Illustration"
                  src="../assets/images/service-features/api-integration/feature-3.webp" loading="lazy">
              </div>
              <div class="content">
                <h2 class="title mb-15">
                  Legacy Modernization
                </h2>
                <p>
                  Bridge the gap between modern cloud apps and legacy on-premise systems with secure connectors.
                </p>
                <ul class="service__box--lists mt-45">
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Legacy Connectors
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Data Migration
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Hybrid Cloud Sync
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Process Section -->
    <section class="process__area pt-100 pb-100 grey-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 text-center">
            <div class="section__heading mb-60">
              <h3 class="section__heading--title-small">
                <span class="mr-10">
                  //
                </span>
                Implementation Process
                <span class="ml-10">
                  //
                </span>
              </h3>
              <h2 class="section__heading--title">
                Seamless Integration
                <br />
                Workflow
                <span>
                  .
                </span>
              </h2>
            </div>
          </div>
        </div>
        <div class="row mt-none-30">
          <div class="col-xl-3 col-lg-3 col-md-6 mt-30">
            <div class="process__box text-center">
              <div class="process__box--icon">
                <i class="fal fa-chart-line">
                </i>
                <span class="process__box--count">
                  01
                </span>
              </div>
              <h4 class="process__box--title">
                Analysis
              </h4>
              <p>
                We map your data fields and define the integration logic.
              </p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 mt-30">
            <div class="process__box text-center">
              <div class="process__box--icon">
                <i class="fal fa-sitemap">
                </i>
                <span class="process__box--count">
                  02
                </span>
              </div>
              <h4 class="process__box--title">
                Mapping
              </h4>
              <p>
                Visualizing the data flow between source and destination.
              </p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 mt-30">
            <div class="process__box text-center">
              <div class="process__box--icon">
                <i class="fal fa-plug">
                </i>
                <span class="process__box--count">
                  03
                </span>
              </div>
              <h4 class="process__box--title">
                Connector
              </h4>
              <p>
                Building secure connectors with authentication handling.
              </p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 mt-30">
            <div class="process__box text-center">
              <div class="process__box--icon">
                <i class="fal fa-sync">
                </i>
                <span class="process__box--count">
                  04
                </span>
              </div>
              <h4 class="process__box--title">
                Live Sync
              </h4>
              <p>
                Deploying the integration and monitoring for real-time sync.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- footer (same block) -->
  </main>
  <?php include '../footer.php'; ?>

  <?php include '../whatsapp.php'; ?>
  <?php include '../global-scripts.php'; ?>
  <script nonce="<?= htmlspecialchars($GLOBALS['cspNonce'] ?? '', ENT_QUOTES) ?>">
    (function () {
      const toggles = document.querySele c torAll(
        ".widget-collapsible .collapsible-toggle"
      );
      toggles.forEach((toggle) => {
        const content = toggle.nextElementSibling;
        const mq = window.matchMedia("(max-width: 991px)");
        function updateInitial() {
          if (mq.matches) {
            content.hidden = true;
            toggle.setAttribute("aria-expanded", "false");
          } else {
            content.hidden = false;
            toggle.setAttribute("aria-expanded", "true");
          }
        }
        updateInitial();
        mq.addListener(updateInitial);
        toggle.addEventListener("click", () => {
          const expanded = toggle.getAttribute("aria-expanded") === "true";
          toggle.setAttribute("aria-expanded", expanded ? "false" : "true");
          if (content.hidden) {
            content.hidden = false;
            content.style.maxHeight = content.scrollHeight + "px";
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
            requestAnimationFrame(() => {
              content.style.maxHeight = "0px";
              setTimeout(() => (content.hidden = true), 300);
            });
          }
        });
        toggle.addEventListener("keydown", (e) => {
          if (e.key === "Enter" || e.key === " ") {
            e.preventDefault();
            toggle.click();
          }
        });
      });
    })();
  </script>
</body>

</html>