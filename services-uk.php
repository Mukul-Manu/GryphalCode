<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = '.';
$page_title = "Global AI & Software Engineering Services in UK | GryphalCode 2026";
$meta_desc = "GryphalCode empowers UK organizations with Generative Engine Optimization (GEO), Enterprise AI agents, and high-latency web app development tailored for global reach.";
$meta_keywords = "software development uk, ai development uk, GEO services UK, generative engine optimization, cloud devops uk, gryphalcode uk";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <?php include_once 'seo-engine.php'; ?>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.min.css?v=3">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.min.css?v=3">
</head>

<body>
  <?php include 'header.php'; ?>
  <main id="main-content">
    <section class="pt-120 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1 class="mb-20">Global AI Agent Integration & Generative Engine Optimization for UK Organizations</h1>
            <p class="mb-30 lead">GryphalCode partners with UK businesses to deliver high-performance, cloud-native
              solutions that align with the competitive 2026 digital landscape.</p>

            <div class="row mt-40">
              <div class="col-md-6 mb-30">
                <h4 class="mb-15"><i class="fal fa-shield-check mr-10" style="color:#086AD8;"></i>UK GDPR & Security
                  Compliance</h4>
                <p>Engineering secure platforms with rigorous UK GDPR compliance and data privacy standards as
                  foundational requirements.</p>
              </div>
              <div class="col-md-6 mb-30">
                <h4 class="mb-15"><i class="fal fa-chart-line mr-10" style="color:#086AD8;"></i>Scale-up Acceleration
                </h4>
                <p>Empowering UK tech startups and established firms to accelerate their product roadmaps with dedicated
                  high-velocity teams.</p>
              </div>
              <div class="col-md-6 mb-30">
                <h4 class="mb-15"><i class="fal fa-laptop-code mr-10" style="color:#086AD8;"></i>Cloud-Native
                  Modernization</h4>
                <p>Modernizing legacy systems into resilient, serverless, or microservices-based architectures on AWS,
                  Azure, or GCP.</p>
              </div>
              <div class="col-md-6 mb-30">
                <h4 class="mb-15"><i class="fal fa-sync mr-10" style="color:#086AD8;"></i>Agile UK Delivery</h4>
                <p>Outcome-focused engineering with weekly transparent reporting, automated testing, and zero-downtime
                  deployment cycles.</p>
              </div>
            </div>
            <a href="<?= $base_url ?>/request-demo" class="site-btn mt-20">Book a UK Strategy Call</a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <?php include 'global-scripts.php'; ?>
</body>

</html>