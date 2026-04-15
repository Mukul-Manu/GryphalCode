<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$page_title = "Security Hardening Sprint Plan for Web Platforms | GryphalCode";
$meta_desc = "A sprint-ready security hardening plan covering CSP, input validation, dependency scanning, and incident readiness.";
$meta_keywords = "security hardening sprint, web app security plan, csp hardening, gryphalcode";
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
    <h1 class="mb-20">Security Hardening Sprint Plan</h1>
    <p>Security improves fastest when teams run focused sprints with clear scope, measurable controls, and ownership.</p>
    <h3 class="mt-30 mb-15">Two-week sprint structure</h3>
    <ul>
      <li>Week 1: Attack-surface inventory and highest-risk fixes.</li>
      <li>Week 1: Header hardening, CSRF validation, and abuse controls.</li>
      <li>Week 2: Dependency/SAST scans and remediation loop.</li>
      <li>Week 2: Logging quality, runbooks, and drill simulation.</li>
    </ul>
    <p class="mt-20">GryphalCode recommends quarterly hardening sprints to keep pace with release velocity and threat evolution.</p>
    <p class="mt-30"><strong>Written by Rohith</strong> <a href="<?= $base_url ?>/contact">Start a security sprint</a>.</p>
  </div>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
<?php include __DIR__ . '/../whatsapp.php'; ?>
<?php include __DIR__ . '/../global-scripts.php'; ?>
</body>
</html>
