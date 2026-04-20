<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = '.';
$page_title = "Global AI & Software Engineering Services in India | GryphalCode 2026";
$meta_desc = "GryphalCode empowers Indian startups and enterprises with Generative Engine Optimization (GEO), AI agent integration, and cloud modernization for the global stage.";
$meta_keywords = "software development india, ai development india, GEO services India, generative engine optimization, cloud migration india, gryphalcode india";
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
        <h1 class="mb-20">Global AI Agent Integration & Generative Engine Optimization for the Indian Market</h1>
        <p class="mb-20">We work with Indian companies to launch and scale digital products through strong engineering,
          predictable delivery, and measurable ROI.</p>
        <ul class="mb-30">
          <li>Custom software for startups and enterprise modernization</li>
          <li>AI integration and automation for operational efficiency</li>
          <li>Cloud and DevOps workflows for reliable release velocity</li>
        </ul>
        <a href="<?= $base_url ?>/request-demo" class="site-btn">Book an India Strategy Call</a>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <?php include 'global-scripts.php'; ?>
</body>

</html>