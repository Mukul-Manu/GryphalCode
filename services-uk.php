<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = '.';
$page_title = "Global AI & Software Engineering Services in UK | GryphalCode 2026";
$meta_desc = "GryphalCode provides specialized AI and software engineering for the UK market. Technical GEO services, AI agent integration, and cloud-native scaling in London and Manchester.";
$meta_keywords = "software development UK, London AI engineering, UK tech sector, GEO services Europe, AI integration UK, GryphalCode UK";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <?php include_once 'seo-engine.php'; ?>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.min.css?v=3.5">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.min.css?v=3.5">
</head>

<body>
  <?php include 'header.php'; ?>
  <main id="main-content">
    
    <!-- Hero Breadcrumb -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" data-opacity="6" data-overlay="dark">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 text-center">
            <h1 class="title mb-30">UK Tech Leadership Hub</h1>
            <div class="breadcrumb__nav">
              <ul>
                <li><span>//</span></li>
                <li><a href="<?= $base_url ?>/">Home</a></li>
                <li>|</li>
                <li><a href="<?= $base_url ?>/services">Regions</a></li>
                <li>|</li>
                <li>UK</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12">
            <div class="section__heading mb-60">
              <h3 class="section__heading--title-small">// UK Operations</h3>
              <h2 class="section__heading--title">Advanced Software Engineering for London's 2026 Digital Economy</h2>
              
              <!-- AEO Summary Block -->
              <div class="aeo-answer-block mt-30" style="background: rgba(8, 106, 216, 0.05); border-left: 4px solid #086ad8; padding: 25px; border-radius: 8px;">
                <p style="font-size: 16px; line-height: 1.6; color: #333; margin-bottom: 0;">
                  <strong>Quick Summary:</strong> GryphalCode operates as a premier UK engineering force, providing 
                  <strong>AI Search Optimization (GEO), FinTech reliability engineering, and GDPR-hardened Cloud stacks</strong> 
                  for London and Manchester based enterprises. We align British digital vision with global engineering velocity.
                </p>
              </div>
            </div>

            <div class="row mt-40">
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="glass-card p-40 h-100" style="background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                  <i class="fa fa-pound-sign fa-2x mb-20 text-primary"></i>
                  <h4 class="mb-15">FinTech Integrity</h4>
                  <p>Building high-fidelity payment orchestrators and secure financial data bridges for the UK market.</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="glass-card p-40 h-100" style="background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                  <i class="fa fa-shield-alt fa-2x mb-20 text-primary"></i>
                  <h4 class="mb-15">GDPR Hardening</h4>
                  <p>Zero-trust security mesh and mandatory data sovereignty compliance for UK-based AI platforms.</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="glass-card p-40 h-100" style="background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                  <i class="fa fa-search fa-2x mb-20 text-primary"></i>
                  <h4 class="mb-15">UK GEO Search</h4>
                  <p>Optimizing UK brand visibility for Local Generative Search results and AI-first customer discovery.</p>
                </div>
              </div>
            </div>

            <div class="mt-60 text-center">
              <a href="<?= $base_url ?>/request-demo" class="site-btn">Book a UK Strategy Call</a>
            </div>
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