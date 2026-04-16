<?php
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: geolocation=(), microphone=(), camera=()");
$base_url = "..";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <?php include_once "../seo-engine.php"; ?>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css?v=3.5">
    <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.css">
</head>
<body>
<?php 
$base_url = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
?>
<?php 
$page_title = "Case Study: CI/CD Pipeline & Infrastructure Observability | GryphalCode";
$meta_desc = "See how GryphalCode implemented automated CI/CD pipelines and real-time observability to reduce deployment errors by 70%. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Cicd Observability, GryphalCode Cicd Observability, Cicd, Observability, IT company, software development, AI solutions, cloud infrastructure";
?>


 
 
  <?php include __DIR__ . '/../header.php'; ?>
<main id="main-content">
  <!-- breadcrumb area start -->
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
   <div class="container">
    <div class="row">
     <div class="col-xl-12">
      <div class="breadcrumb__wrap">
       <h1 class="title">
        CI/CD &amp; Observability
       </h1>
       <div class="breadcrumb__nav">
              <ul>
                <li><span>//</span></li>
                <li><a href="<?= $base_url ?>/">Home</a></li>
                <li>|</li>
                <li><a href="<?= $base_url ?>/case-studies">Case Studies</a></li>
                <li>|</li>
                <li>CI/CD &amp; Observability</li>
              </ul>
            </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- breadcrumb area end -->
  <section class="project-details-area pt-100 pb-100">
   <div class="container">
    <div class="row">
     <div class="col-xl-8 col-lg-8">
      <div class="project-details__content">
       <div class="thumb mb-40">
        <img loading="lazy" alt="Automation Case Study Main Image" class="w-100 project-overview-img" src="<?= $base_url ?>/assets/images/service-previews/automation.webp" loading="lazy">
       </div>
       <h2 class="title mb-25">
        Project Overview
       </h2>
       <p class="mb-30">
        A high-growth SaaS platform suffered from frequent production outages caused by manual
                            deployment errors. Each release took two weeks of planning and execution, which stalled
                            their product innovation.
       </p>
       <p class="mb-40">
        GryphalCode implemented a GitOps-based CI/CD pipeline using GitLab CI, ArgoCD, and
                            Kubernetes. We also set up a full observability stack (Prometheus, Grafana, ELK) to monitor
                            system health and detect issues before they impact users.
       </p>
       <h3 class="sub-title mb-20">
        The Challenge
       </h3>
       <ul class="list-unstyled check-list mb-40">
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         Fragile, manual
                                deployment process.
        </li>
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         No visibility into
                                application metrics or performance.
        </li>
        <li class="mb-15">
         <i class="fal fa-check-circle text-primary mr-10">
         </i>
         High MTTR (Mean
                                Time To Recovery) after failures.
        </li>
       </ul>
       <h3 class="sub-title mb-20">
        The Solution
       </h3>
       <p class="mb-30">
        We automated everything. From unit tests to staging deployments, every commit is now
                            verified. The new observability stack provides real-time alerting, and automated rollbacks
                            ensure that a "bad" commit never stays in production.
       </p>
       <h3 class="sub-title mb-20">
        Key Results
       </h3>
       <div class="result-badge mb-30">
        <p>
         Deployment failures dropped by
         <strong>
          89%
         </strong>
         , and release cycles were slashed
                                from
         <strong>
          2 weeks to daily releases
         </strong>
         . The engineering team now spends 50% more
                                time on
                                features rather than firefighting.
        </p>
       </div>
      </div>
     </div>
     <div class="col-xl-4 col-lg-4">
      <div class="project-details__sidebar detail-sidebar-glass">
       <div class="project-info mb-30">
        <h4 class="sidebar-title mb-25">
         Project Stats
        </h4>
        <ul class="list-unstyled">
         <li class="mb-15">
          <span class="label">
           Category:
          </span>
          <span class="value">
           DevOps /
                                        SaaS
          </span>
         </li>
         <li class="mb-15">
          <span class="label">
           Failures Reduced:
          </span>
          <span class="value">
           89%
          </span>
         </li>
         <li class="mb-15">
          <span class="label">
           Release Frequency:
          </span>
          <span class="value">
           Daily
          </span>
         </li>
        </ul>
       </div>
       <div class="project-cta mt-40 text-center bg-white p-4 rounded shadow-sm border">
        <h4 class="mb-15">
         Innovate Faster!
        </h4>
        <p class="mb-20">
         Stop worrying about manual deployments. Let's automate your path to
                                production.
        </p>
        <a class="site-btn" href="<?= $base_url ?>/contact">
         Get a Quote
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  </main>
<?php include __DIR__ . '/../footer.php'; ?>
  <?php include __DIR__ . '/../whatsapp.php'; ?>
<?php include __DIR__ . '/../global-scripts.php'; ?>
</body>
</html>
