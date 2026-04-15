<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = '.';
$page_title = "Software Development & AI Services in UAE | GryphalCode";
$meta_desc = "GryphalCode helps UAE organizations accelerate digital transformation with custom software, AI workflows, cloud migration, and secure enterprise delivery.";
$meta_keywords = "software development uae, ai development dubai, cloud engineering uae, gryphalcode uae";
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
          <h1 class="mb-20">Enterprise AI & Software Engineering Partner for the UAE Market</h1>
          <p class="mb-30 lead">GryphalCode empowers organizations in Dubai, Abu Dhabi, and across the Emirates to lead the 2026 digital landscape through scalable AI integration and cloud-native architecture.</p>
          
          <div class="row mt-40">
            <div class="col-md-6 mb-30">
              <h4 class="mb-15"><i class="fal fa-city mr-10" style="color:#086AD8;"></i>Smart City AI Solutions</h4>
              <p>Specialized AI models for logistics tracking, energy efficiency, and predictive maintenance tailored for UAE infrastructure.</p>
            </div>
            <div class="col-md-6 mb-30">
              <h4 class="mb-15"><i class="fal fa-building mr-10" style="color:#086AD8;"></i>Fintech & Compliance</h4>
              <p>Secure software architectures designed for the UAE's evolving regulatory framework, focusing on data sovereignty and security.</p>
            </div>
            <div class="col-md-6 mb-30">
              <h4 class="mb-15"><i class="fal fa-users mr-10" style="color:#086AD8;"></i>Global Delivery, Local Support</h4>
              <p>Experience seamless collaboration with timezone-aligned communication and on-shore architectural support for critical rollouts.</p>
            </div>
             <div class="col-md-6 mb-30">
              <h4 class="mb-15"><i class="fal fa-rocket mr-10" style="color:#086AD8;"></i>Rapid Scaling</h4>
              <p>From MVP to enterprise-scale deployment in record time, leveraging our pre-built DevOps and internal engineering frameworks.</p>
            </div>
          </div>
          <a href="<?= $base_url ?>/request-demo" class="site-btn mt-20">Book a UAE Strategy Call</a>
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
