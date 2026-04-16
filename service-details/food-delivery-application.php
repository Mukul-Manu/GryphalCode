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
$page_title = "Custom Food Delivery App Development | GryphalCode";
$meta_desc = "Build a high-performance food delivery platform with real-time tracking, secure payments, and seamless vendor management systems. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Food Delivery Application, GryphalCode Food Delivery Application, Food, Delivery, Application, IT company, software development, AI solutions, cloud infrastructure";
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
              Food Delivery Solution
            </h1>
            <div class="breadcrumb__nav">
              <ul>
                <li><span>//</span></li>
                <li><a href="<?= $base_url ?>/">Home</a></li>
                <li>|</li>
                <li><a href="<?= $base_url ?>/services">Services</a></li>
                <li>|</li>
                <li>Food Delivery Solution</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb area end -->
  <!-- main -->
  <section class="about__area about__area--7 pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 pr-55">
          <div class="service-preview-img">
            <img alt="Food Delivery Application Visualization"
              src="../assets/images/service-previews/food-delivery.webp"  loading="lazy">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 pl-20">
          <div class="about__wrap about__wrap--4">
            <div class="section__heading mb-35">
              <h3 class="section__heading--title-small">
                <span class="mr-10">
                  //
                </span>
                On-Demand Solutions
              </h3>
              <h2 class="section__heading--title">
                Scalable On-Demand
                <br />
                Delivery Solutions
              </h2>
              <div class="section__heading--content mt-20">
                <p>
                  Launch your own branded food delivery business with our comprehensive suite of applications. We
                  provide dedicated apps for customers, restaurant partners, and delivery drivers, all managed through a
                  powerful admin dashboard.
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
                    Native iOS &amp; Android Apps
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Restaurant Merchant Panel
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
                    Delivery Driver App
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Admin Dashboard
                  </li>
                </ul>
              </div>
            </div>
            <a class="site-btn" href="../contact">
              Launch My App
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
              Everything You Need to
              <br />
              Run &amp; Grow
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
              <img alt="3D Delivery Fleet Illustration"
                src="../assets/images/service-features/food-delivery/feature-1.webp"  loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Real-Time Fleet Management
              </h2>
              <p>
                Optimize delivery routes and keep customers informed with live GPS tracking. Our system ensures
                efficient dispatching and minimizes delivery times.
              </p>
              <ul class="service__box--lists mt-45">
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Live Order Tracking
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  AI-Driven Route Optimization
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Automated Driver Assignment
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-30">
          <div class="service__box">
            <div class="thumb mb-35">
              <img alt="3D Payment Gateway Illustration"
                src="../assets/images/service-features/food-delivery/feature-2.webp"  loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Ordering &amp; Payments
              </h2>
              <p>
                Provide a smooth ordering experience with intuitive menus, customization options, and secure
                multi-channel payment gateways.
              </p>
              <ul class="service__box--lists mt-45">
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Multiple Payment Gateways
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Menu Management
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Offers &amp; Promotions
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 mt-30">
          <div class="service__box">
            <div class="thumb mb-35">
              <img alt="3D Analytics Illustration"
                src="../assets/images/service-features/food-delivery/feature-3.webp"  loading="lazy">
            </div>
            <div class="content">
              <h2 class="title mb-15">
                Analytics &amp; Insights
              </h2>
              <p>
                Make data-driven decisions with comprehensive reports on sales, customer behavior, and delivery
                performance.
              </p>
              <ul class="service__box--lists mt-45">
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Sales Performance Reports
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Customer Behavior Analysis
                </li>
                <li>
                  <span class="icon">
                    <i class="fal fa-check">
                    </i>
                  </span>
                  Heatmaps &amp; Trends
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
              How It Works
              <span class="ml-10">
                //
              </span>
            </h3>
            <h2 class="section__heading--title">
              Simple &amp; Efficient
              <br />
              Work Process
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
              <i class="fal fa-mobile-alt">
              </i>
              <span class="process__box--count">
                01
              </span>
            </div>
            <h4 class="process__box--title">
              Order Placed
            </h4>
            <p>
              Customer browses menu and places an order via the app.
            </p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mt-30">
          <div class="process__box text-center">
            <div class="process__box--icon">
              <i class="fal fa-utensils">
              </i>
              <span class="process__box--count">
                02
              </span>
            </div>
            <h4 class="process__box--title">
              Prep &amp; Pack
            </h4>
            <p>
              Restaurant accepts the order and prepares the food.
            </p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mt-30">
          <div class="process__box text-center">
            <div class="process__box--icon">
              <i class="fal fa-map-marked-alt">
              </i>
              <span class="process__box--count">
                03
              </span>
            </div>
            <h4 class="process__box--title">
              Route Optimized
            </h4>
            <p>
              Our AI assigns the best driver and optimizes the route.
            </p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mt-30">
          <div class="process__box text-center">
            <div class="process__box--icon">
              <i class="fal fa-shipping-fast">
              </i>
              <span class="process__box--count">
                04
              </span>
            </div>
            <h4 class="process__box--title">
              Swift Delivery
            </h4>
            <p>
              Driver picks up and delivers the order to the customer.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer (full template footer) -->
  </main>
<?php include '../footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include '../whatsapp.php'; ?>
<?php include '../global-scripts.php'; ?>
  <!-- footer helpers -->
  <script nonce="<?= htmlspecialchars($GLOBALS['cspNonce'] ?? '', ENT_QUOTES) ?>">
    (function () {
      const toggles = document.querySelectorAll(
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
