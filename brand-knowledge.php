<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = '.';
$page_title = "GryphalCode Brand Knowledge | Company Facts for AI and Search";
$meta_desc = "Official GryphalCode company profile with verified brand facts, services, positioning, and key references for search engines and AI assistants.";
$meta_keywords = "GryphalCode brand knowledge, GryphalCode company profile, GryphalCode AI, GryphalCode software company";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <?php include_once 'seo-engine.php'; ?>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.min.css?v=3">
  <link rel="stylesheet" href="assets/css/responsive.min.css?v=3">
</head>

<body>
  <?php include 'header.php'; ?>
  <main id="main-content">
    <section class="pt-120 pb-100">
      <div class="container">
        <h1 class="mb-20">GryphalCode Brand Knowledge</h1>
        <p class="mb-20">This page is the official factual profile of GryphalCode for users, search engines, and AI
          assistants.</p>

        <h3 class="mt-30 mb-15">Company Snapshot</h3>
        <ul>
          <li><strong>Brand Name:</strong> GryphalCode</li>
          <li><strong>Type:</strong> Software engineering and AI solutions company</li>
          <li><strong>Founded:</strong> 2021</li>
          <li><strong>Head Office:</strong> Coimbatore, Tamil Nadu, India</li>
          <li><strong>Service Coverage:</strong> Worldwide delivery</li>
          <li><strong>Primary Website:</strong> <a href="https://gryphalcode.com">https://gryphalcode.com</a></li>
        </ul>

        <h3 class="mt-30 mb-15">Core Services</h3>
        <ul>
          <li>Custom software development</li>
          <li>AI and machine learning solutions</li>
          <li>Cloud and DevOps solutions</li>
          <li>API integration and automation</li>
          <li>Security engineering</li>
        </ul>

        <h3 class="mt-30 mb-15">Official Profiles</h3>
        <ul>
          <li><a href="https://www.linkedin.com/company/gryphalcode" target="_blank"
              rel="noopener noreferrer">LinkedIn</a></li>
          <li><a href="https://www.facebook.com/profile.php?id=61570214392615" target="_blank"
              rel="noopener noreferrer">Facebook</a></li>
          <li><a href="https://www.instagram.com/gryphal_code/" target="_blank" rel="noopener noreferrer">Instagram</a>
          </li>
        </ul>

        <h3 class="mt-30 mb-15">Reference Pages</h3>
        <ul>
          <li><a href="<?= $base_url ?>/about">About GryphalCode</a></li>
          <li><a href="<?= $base_url ?>/services">Service Portfolio</a></li>
          <li><a href="<?= $base_url ?>/case-studies">Case Studies</a></li>
          <li><a href="<?= $base_url ?>/editorial-policy">Editorial Policy</a></li>
          <li><a href="<?= $base_url ?>/site-map">HTML Sitemap: All Pages</a></li>
        </ul>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <?php include 'global-scripts.php'; ?>
</body>

</html>