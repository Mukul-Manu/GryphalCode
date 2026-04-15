<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$page_title = "Conversion Tracking for B2B Websites: Practical Guide | GryphalCode";
$meta_desc = "Set up conversion tracking for B2B websites with clean event taxonomy, attribution capture, and lead quality metrics.";
$meta_keywords = "b2b conversion tracking, ga4 lead tracking, attribution setup, gryphalcode";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<?php include_once '../seo-engine.php'; ?>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.min.css?v=3">
</head>
<body>
<?php include __DIR__ . '/../header.php'; ?>
<main id="main-content" class="pt-120 pb-100">
  <div class="container">
    <h1 class="mb-20">Conversion Tracking for B2B Websites</h1>
    <p>Traffic without reliable conversion data creates false confidence. B2B teams need clean tracking to connect campaigns with qualified pipeline.</p>
    <h3 class="mt-30 mb-15">Minimum analytics stack</h3>
    <ul>
      <li>Define one event taxonomy for forms, calls, and CTA clicks.</li>
      <li>Capture source context with UTM and landing-page persistence.</li>
      <li>Track both micro-conversions and revenue-adjacent actions.</li>
      <li>Use weekly anomaly review to keep event quality high.</li>
    </ul>
    <p class="mt-20">GryphalCode teams implement attribution-ready tracking so growth decisions are based on evidence, not assumptions.</p>
    <p class="mt-30"><strong>Written by Karthi</strong> <a href="<?= $base_url ?>/contact">Request analytics setup</a>.</p>
  </div>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
<?php include __DIR__ . '/../whatsapp.php'; ?>
<?php include __DIR__ . '/../global-scripts.php'; ?>
</body>
</html>
