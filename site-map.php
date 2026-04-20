<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
$base_url = '.';
$page_title = "HTML Sitemap | GryphalCode";
$meta_desc = "Browse all GryphalCode pages including services, case studies, blogs, and regional landing pages for better discoverability.";
$meta_keywords = "html sitemap gryphalcode, all pages";
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
        <h1 class="mb-30">HTML Sitemap</h1>
        <div class="row">
          <div class="col-lg-4">
            <h4>Main Pages</h4>
            <ul>
              <li><a href="<?= $base_url ?>/">Home</a></li>
              <li><a href="<?= $base_url ?>/about">About</a></li>
              <li><a href="<?= $base_url ?>/services">Services</a></li>
              <li><a href="<?= $base_url ?>/case-studies">Case Studies</a></li>
              <li><a href="<?= $base_url ?>/blog">Blog</a></li>
              <li><a href="<?= $base_url ?>/contact">Contact</a></li>
              <li><a href="<?= $base_url ?>/request-demo">Request Demo</a></li>
              <li><a href="<?= $base_url ?>/thank-you">Thank You</a></li>
              <li><a href="<?= $base_url ?>/support">Support</a></li>
              <li><a href="<?= $base_url ?>/faq">FAQ</a></li>
              <li><a href="<?= $base_url ?>/careers">Careers</a></li>
              <li><a href="<?= $base_url ?>/why-choose">Why Choose</a></li>
              <li><a href="<?= $base_url ?>/services-india">Services India</a></li>
              <li><a href="<?= $base_url ?>/services-uae">Services UAE</a></li>
              <li><a href="<?= $base_url ?>/services-uk">Services UK</a></li>
              <li><a href="<?= $base_url ?>/services-usa">Services USA</a></li>
              <li><a href="<?= $base_url ?>/brand-knowledge">Brand Knowledge</a></li>
              <li><a href="<?= $base_url ?>/site-map">Site Map</a></li>
            </ul>
            <h4 class="mt-30">Industry Solutions</h4>
            <ul>
              <li><a href="<?= $base_url ?>/solutions-logistics">Logistics Hub</a></li>
              <li><a href="<?= $base_url ?>/solutions-healthcare">Healthcare Hub</a></li>
              <li><a href="<?= $base_url ?>/solutions-fintech">Fintech Hub</a></li>
              <li><a href="<?= $base_url ?>/solutions-manufacturing">Manufacturing Hub</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h4 class="mt-30">Service Details</h4>
            <ul>
              <li><a href="<?= $base_url ?>/service-details/custom-software-development">Custom Software</a></li>
              <li><a href="<?= $base_url ?>/service-details/ai-machine-learning-solutions">AI & ML</a></li>
              <li><a href="<?= $base_url ?>/service-details/cloud-devops-solutions">Cloud & DevOps</a></li>
              <li><a href="<?= $base_url ?>/service-details/api-integration-automation">API & Automation</a></li>
              <li><a href="<?= $base_url ?>/service-details/automation">Automation</a></li>
              <li><a href="<?= $base_url ?>/service-details/process-delivery">Process Delivery</a></li>
              <li><a href="<?= $base_url ?>/service-details/security">Security Engineering</a></li>
              <li><a href="<?= $base_url ?>/service-details/whatsapp-business-solutions">WhatsApp Business</a></li>
              <li><a href="<?= $base_url ?>/service-details/food-delivery-application">Food Delivery App</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h4>Case Studies & Blog</h4>
            <ul>
              <li><a href="<?= $base_url ?>/case-study-details/ai-powered-erm-platform">AI Powered ERM Platform</a></li>
              <li><a href="<?= $base_url ?>/case-study-details/cicd-observability">CI/CD Observability</a></li>
              <li><a href="<?= $base_url ?>/case-study-details/cloud-migration">Cloud Migration</a></li>
              <li><a href="<?= $base_url ?>/case-study-details/food-delivery-platform">Food Delivery Platform</a></li>
              <li><a href="<?= $base_url ?>/case-study-details/gdpr-security-overhaul">GDPR Security Overhaul</a></li>
              <li><a href="<?= $base_url ?>/case-study-details/whatsapp-business-crm">WhatsApp Business CRM</a></li>
              <li class="mt-10"><strong>Latest Insights:</strong></li>
              <li><a href="<?= $base_url ?>/blog-details/enterprise-generative-ai-integration">Enterprise Generative
                  AI</a></li>
              <li><a href="<?= $base_url ?>/blog-details/modern-devops-solutions-for-2026-1776313445">Modern DevOps
                  Solutions for 2026</a></li>
              <li><a href="<?= $base_url ?>/blog-details/zero-trust-cloud-security">Zero Trust Cloud Security</a></li>
              <li><a href="<?= $base_url ?>/blog-details/next-gen-devops-automation">Next Gen DevOps Automation</a></li>
              <li><a href="<?= $base_url ?>/blog-details/enterprise-ai-roadmap-2026">Enterprise AI Roadmap 2026</a></li>
              <li><a href="<?= $base_url ?>/blog-details/ai-copilot-rollout-framework">AI Copilot Rollout Framework</a>
              </li>
              <li><a href="<?= $base_url ?>/blog-details/cloud-cost-optimization-model">Cloud Cost Optimization
                  Model</a></li>
              <li><a href="<?= $base_url ?>/blog-details/technical-seo-for-ai-overviews">Technical SEO for AI
                  Overviews</a></li>
              <li><a href="<?= $base_url ?>/blog-details/conversion-tracking-for-b2b-websites">Conversion Tracking</a>
              </li>
              <li><a href="<?= $base_url ?>/blog-details/security-hardening-sprint-plan">Security Hardening</a></li>
              <li><a href="<?= $base_url ?>/blog-details/llm-ready-content-architecture">LLM-Ready Content</a></li>
            </ul>
            <h4 class="mt-30">Legal</h4>
            <ul>
              <li><a href="<?= $base_url ?>/privacy-policy">Privacy Policy</a></li>
              <li><a href="<?= $base_url ?>/terms-conditions">Terms & Conditions</a></li>
              <li><a href="<?= $base_url ?>/editorial-policy">Editorial Policy</a></li>
            </ul>
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