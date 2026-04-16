<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = '.';
$page_title = "Editorial Policy | GryphalCode";
$meta_desc = "Read GryphalCode's editorial policy for content quality, fact-checking, review workflows, and transparency standards.";
$meta_keywords = "editorial policy, content standards, eeat gryphalcode";
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
        <h1 class="mb-20">Editorial Policy</h1>
        <p class="mb-20">We publish practical technology content focused on software delivery, cloud, AI, security, and
          growth engineering. This policy explains how we maintain quality and trust.</p>

        <h3 class="mt-30 mb-15">How content is created</h3>
        <ul>
          <li>Content is drafted by practitioners with implementation experience in the covered topic.</li>
          <li>Each page is mapped to search intent and reviewed for factual clarity before publishing.</li>
          <li>Claims about outcomes are based on internal delivery evidence or clearly cited external sources.</li>
        </ul>

        <h3 class="mt-30 mb-15">Review and updates</h3>
        <ul>
          <li>High-traffic pages are reviewed on a recurring schedule and updated when practices change.</li>
          <li>Security, compliance, and platform-specific recommendations are rechecked periodically.</li>
          <li>Major updates include a visible update date so users can assess freshness.</li>
        </ul>

        <h3 class="mt-30 mb-15">Transparency standards</h3>
        <ul>
          <li>Promotional language is separated from educational guidance wherever possible.</li>
          <li>User trust and safety take priority over short-term conversion tactics.</li>
          <li>Feedback or correction requests can be shared through our <a href="<?= $base_url ?>/contact">contact
              page</a>.</li>
        </ul>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <?php include 'global-scripts.php'; ?>
</body>

</html>