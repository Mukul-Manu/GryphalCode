<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = '.';
$page_title = "Software Development & AI Services in USA | GryphalCode";
$meta_desc = "GryphalCode helps US teams ship AI, cloud, and custom software projects with fast delivery, secure architecture, and measurable business impact.";
$meta_keywords = "software development usa, ai development usa, cloud consulting usa, gryphalcode usa";
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
            <h1 class="mb-20">Enterprise AI & Custom Software Engineering for the US market</h1>
            <p class="mb-30 lead">GryphalCode partners with US-based product teams to ship resilient, scalable
              architecture with high-velocity engineering and transparent execution.</p>

            <div class="row mt-40">
              <div class="col-md-6 mb-30">
                <h4 class="mb-15"><i class="fal fa-clock mr-10" style="color:#086AD8;"></i>Timezone-Aligned Delivery
                </h4>
                <p>Optimized overlap for US Eastern, Central, and Mountain times to ensure seamless daily communication
                  and rapid feedback cycles.</p>
              </div>
              <div class="col-md-6 mb-30">
                <h4 class="mb-15"><i class="fal fa-cubes mr-10" style="color:#086AD8;"></i>SaaS Product Development</h4>
                <p>Specialized architecture for multi-tenant SaaS platforms, focusing on scalability, cost-optimization,
                  and performance.</p>
              </div>
              <div class="col-md-6 mb-30">
                <h4 class="mb-15"><i class="fal fa-user-shield mr-10" style="color:#086AD8;"></i>Enterprise-Grade
                  Security</h4>
                <p>Implementing Zero-Trust architectures and robust security standards aligned with US enterprise
                  requirements.</p>
              </div>
              <div class="col-md-6 mb-30">
                <h4 class="mb-15"><i class="fal fa-chart-network mr-10" style="color:#086AD8;"></i>Full-Stack AI
                  Integration</h4>
                <p>From RAG-based LLM applications to custom ML models, we integrate AI into your existing US product
                  stack with precision.</p>
              </div>
            </div>
            <a href="<?= $base_url ?>/request-demo" class="site-btn mt-20">Book a USA Strategy Call</a>
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