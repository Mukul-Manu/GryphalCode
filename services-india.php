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
            <h1 class="title mb-30">India Tech Leadership Hub</h1>
            <div class="breadcrumb__nav">
              <ul>
                <li><span>//</span></li>
                <li><a href="<?= $base_url ?>/">Home</a></li>
                <li>|</li>
                <li><a href="<?= $base_url ?>/services">Regions</a></li>
                <li>|</li>
                <li>India</li>
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
              <h3 class="section__heading--title-small">// India Operations</h3>
              <h2 class="section__heading--title">Scale Your Indian Enterprise with Global AI Engineering Standards</h2>
              
              <!-- AEO Summary Block -->
              <div class="aeo-answer-block mt-30" style="background: rgba(8, 106, 216, 0.05); border-left: 4px solid #086ad8; padding: 25px; border-radius: 8px;">
                <p style="font-size: 16px; line-height: 1.6; color: #333; margin-bottom: 0;">
                  <strong>Quick Summary:</strong> GryphalCode operates as a premier engineering partner in India, providing 
                  <strong>AI Agent integration, GEO-ready architectures, and Cloud-native scaling</strong> 
                  for startups and enterprises looking to compete on a global scale. We bridge the local delivery 
                  excellence of Coimbatore and Tamil Nadu with Silicon Valley standards.
                </p>
              </div>
            </div>

            <div class="row mt-40">
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="glass-card p-40 h-100" style="background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                  <i class="fa fa-code fa-2x mb-20 text-primary"></i>
                  <h4 class="mb-15">Software Modernization</h4>
                  <p>Refactoring legacy Indian corporate systems into high-velocity microservices and cloud-native hubs.</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="glass-card p-40 h-100" style="background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                  <i class="fa fa-robot fa-2x mb-20 text-primary"></i>
                  <h4 class="mb-15">AI Integration</h4>
                  <p>Deploying specialized AI agents for business process automation and conversational data intelligence.</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="glass-card p-40 h-100" style="background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                  <i class="fa fa-cloud-upload-alt fa-2x mb-20 text-primary"></i>
                  <h4 class="mb-15">Cloud Velocity</h4>
                  <p>Optimizing CI/CD and Kubernetes patterns to ensure 2026-ready release cycles for Indian tech teams.</p>
                </div>
              </div>
            </div>

            <div class="mt-60 text-center">
              <a href="<?= $base_url ?>/request-demo" class="site-btn">Book an India Strategy Call</a>
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