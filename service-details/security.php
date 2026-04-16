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
  $page_title = "Cybersecurity & Data Privacy Solutions | GryphalCode";
  $meta_desc = "Protect your digital assets with GryphalCode's comprehensive security audits, encryption protocols, and GDPR-compliant infrastructure hardening. Serving Coimbatore, Tamil Nadu, and Kerala.";
  $meta_keywords = "Security, GryphalCode Security, Security, IT company, software development, AI solutions, cloud infrastructure";
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
                Security
              </h1>
              <div class="breadcrumb__nav">
                <ul>
                  <li><span>//</span></li>
                  <li><a href="<?= $base_url ?>/">Home</a></li>
                  <li>|</li>
                  <li><a href="<?= $base_url ?>/services">Services</a></li>
                  <li>|</li>
                  <li>Security</li>
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
              <img alt="Cyber Security Solutions Visualization" src="../assets/images/service-previews/security.webp"
                loading="lazy">
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 pl-20">
            <div class="about__wrap about__wrap--4">
              <div class="section__heading mb-35">
                <h3 class="section__heading--title-small">
                  <span class="mr-10">
                    //
                  </span>
                  Secure Architecture
                </h3>
                <h2 class="section__heading--title">
                  Proactive Protection
                  <br />
                  Total Compliance
                  <span>
                  </span>
                </h2>
                <div class="section__heading--content mt-20">
                  <p>
                    We presume a hostile environment and build defenses accordingly.
                    Our "Security by Design" philosophy ensures that security is not
                    an afterthought, but a foundational element of your digital
                    ecosystem.
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
                      DevSecOps Integration
                    </li>
                    <li>
                      <span class="icon">
                        <i class="fal fa-check">
                        </i>
                      </span>
                      Penetration Testing
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
                      Compliance Management
                    </li>
                    <li>
                      <span class="icon">
                        <i class="fal fa-check">
                        </i>
                      </span>
                      Data Encryption
                    </li>
                  </ul>
                </div>
              </div>
              <a class="site-btn" href="../contact">
                Secure Your Assets
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
                <img alt="3D Monitoring Illustration" src="../assets/images/service-features/security/feature-1.webp"
                  loading="lazy">
              </div>
              <div class="content">
                <h2 class="title mb-15">
                  Vulnerability Management
                </h2>
                <p>
                  We continuously monitor and assess your systems for
                  vulnerabilities, prioritizing remediation based on risk to
                  ensure your attack surface remains minimal.
                </p>
                <ul class="service__box--lists mt-45">
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Automated Scanning
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Risk Assessment
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Patch Management
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 mt-30">
            <div class="service__box">
              <div class="thumb mb-35">
                <img alt="3D Intelligence Illustration" src="../assets/images/service-features/security/feature-2.webp"
                  loading="lazy">
              </div>
              <div class="content">
                <h2 class="title mb-15">
                  Compliance &amp; Governance
                </h2>
                <p>
                  Navigating the complex landscape of regulatory requirements can be
                  challenging. We help you achieve and maintain compliance with
                  standards like GDPR, HIPAA, and SOC2.
                </p>
                <ul class="service__box--lists mt-45">
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Regulatory Audits
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Policy Development
                  </li>
                  <li>
                    <span class="icon">
                      <i class="fal fa-check">
                      </i>
                    </span>
                    Security Training
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