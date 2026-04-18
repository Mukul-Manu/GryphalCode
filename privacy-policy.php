<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Privacy Policy | Data Protection & User Privacy - GryphalCode";
$meta_desc = "Learn how GryphalCode protects your personal data. Our privacy policy outlines our commitment to data security and transparency in all digital operations. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Privacy Policy, GryphalCode Privacy Policy, Privacy, Policy, IT company, software development, AI solutions, cloud infrastructure";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
     <?php include_once 'seo-engine.php'; ?>

     <meta charset="utf-8" />
     <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
     <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="apple-touch-icon" />
     <meta content="ie=edge" http-equiv="x-ua-compatible" />
     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
     <link rel="preload" href="<?= $base_url ?>/assets/images/logo/logo.webp" as="image" type="image/webp">
     <link rel="preload" href="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
     <link rel="preload" href="<?= $base_url ?>/assets/css/bootstrap.min.css" as="style">
     <link rel="preload" href="<?= $base_url ?>/assets/css/style.min.css?v=3" as="style">

     <link href="https://fonts.googleapis.com" rel="preconnect" />
     <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
     <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
     <link href="https://www.googletagmanager.com" rel="preconnect" />
     <link href="https://www.google-analytics.com" rel="preconnect" />
     <link href="https://www.googletagmanager.com" rel="dns-prefetch" />
     <link href="https://www.google-analytics.com" rel="dns-prefetch" />
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/font-awesome.min.css" media="print"
          onload="this.media='all'">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/jquery-ui.min.css" media="print"
          onload="this.media='all'">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/lightcase.css" media="print" onload="this.media='all'">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/meanmenu.css" media="print" onload="this.media='all'">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/nice-select.css" media="print" onload="this.media='all'">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/owl.carousel.min.css" media="print"
          onload="this.media='all'">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/animate.css" media="print" onload="this.media='all'">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.min.css?v=3">
     <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.min.css?v=3">
     <link href="/manifest.json" rel="manifest" />
     <meta content="#086ad8" name="theme-color" />
     <meta content="yes" name="apple-mobile-web-app-capable" />
     <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
</head>

<body>
     <!-- Header include (unchanged) -->
     <?php include 'header.php'; ?>
     <main id="main-content">
          <!-- Breadcrumb -->
          <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.webp"
               data-opacity="5" data-overlay="dark">
               <div class="container">
                    <div class="row">
                         <div class="col-xl-12">
                              <div class="breadcrumb__wrap text-center">
                                   <h1 class="title">
                                        Privacy Policy
                                   </h1>
                                   <div class="breadcrumb__nav">
                                        <ul>
                                             <li>
                                                  <a href="<?= $base_url ?>/">
                                                       Home
                                                  </a>
                                             </li>
                                             <li>
                                                  <span>
                                                       |
                                                  </span>
                                             </li>
                                             <li>
                                                  Privacy Policy
                                             </li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <!-- Policy content (scoped changes only inside .policy-shell) -->
          <div class="policy-shell">
               <article aria-labelledby="policy-title" class="policy-card" role="main">
                    <div class="policy-header">
                         <h2 id="policy-title">
                              Privacy Policy
                         </h2>
                         <div class="policy-meta">
                              Effective Date:
                              <strong>
                                   January 1, 2026
                              </strong>
                         </div>
                    </div>
                    <section class="policy-section" id="p-intro">
                         <h2>
                              1. Introduction
                         </h2>
                         <p>
                              At
                              <strong>
                                   GryphalCode
                              </strong>
                              , your privacy is our priority. This
                              Privacy Policy explains how we collect, use, and protect your
                              personal information when you visit our website (
                              <a href="https://gryphalcode.com/">
                                   gryphalcode.com
                              </a>
                              ) or use
                              our products and services.
                         </p>
                    </section>
                    <section class="policy-section" id="p-info">
                         <h2>
                              2. Information We Collect
                         </h2>
                         <ul>
                              <li>
                                   <strong>
                                        Personal Data:
                                   </strong>
                                   Name, email, phone number, company
                                   details (when you contact us or request a quote).
                              </li>
                              <li>
                                   <strong>
                                        Technical Data:
                                   </strong>
                                   IP address, browser type, device
                                   information, and usage data collected through analytics tools.
                              </li>
                              <li>
                                   <strong>
                                        Cookies:
                                   </strong>
                                   We use cookies to enhance user
                                   experience and analyze website performance.
                              </li>
                         </ul>
                    </section>
                    <section class="policy-section" id="p-use">
                         <h2>
                              3. How We Use Your Information
                         </h2>
                         <ul>
                              <li>
                                   To provide and improve our software and development services.
                              </li>
                              <li>
                                   To communicate project updates, invoices, or support responses.
                              </li>
                              <li>
                                   To ensure security and prevent fraudulent activities.
                              </li>
                              <li>
                                   To comply with legal or contractual obligations.
                              </li>
                         </ul>
                    </section>
                    <section class="policy-section" id="p-protect">
                         <h2>
                              4. Data Protection
                         </h2>
                         <p>
                              We implement security measures (SSL encryption, secure hosting,
                              limited access controls) to protect your personal information
                              against unauthorized access or misuse.
                         </p>
                    </section>
                    <section class="policy-section" id="p-share">
                         <h2>
                              5. Sharing of Information
                         </h2>
                         <p>
                              We do not sell or rent user information. We may share data only with
                              trusted partners, such as hosting providers or payment processors,
                              solely for operational purposes.
                         </p>
                    </section>
                    <section class="policy-section" id="p-rights">
                         <h2>
                              6. Your Rights
                         </h2>
                         <ul>
                              <li>
                                   Request access or correction of your personal data.
                              </li>
                              <li>
                                   Request deletion of your information from our systems.
                              </li>
                              <li>
                                   Withdraw consent for marketing or data collection.
                              </li>
                         </ul>
                    </section>
                    <section class="policy-section" id="p-cookies">
                         <h2>
                              7. Cookies Policy
                         </h2>
                         <p>
                              Our website uses cookies to provide essential functionality and
                              analytics. You can control or disable cookies through your browser
                              settings.
                         </p>
                    </section>
                    <section class="policy-section" id="p-links">
                         <h2>
                              8. Third-Party Links
                         </h2>
                         <p>
                              Our site may contain links to external websites. GryphalCode is not
                              responsible for their privacy practices or content.
                         </p>
                    </section>
                    <section class="policy-section" id="p-changes">
                         <h2>
                              9. Changes to This Policy
                         </h2>
                         <p>
                              We may update this policy periodically. Updates will be posted on
                              this page with a revised date.
                         </p>
                    </section>
                    <section class="policy-section" id="p-contact">
                         <h2>
                              10. Contact Us
                         </h2>
                         <p>
                              For privacy-related questions or data requests, please contact:
                         </p>
                         <ul>
                              <li>
                                   <strong>
                                        Email:
                                   </strong>
                                   <a href="mailto:info@gryphalcode.com">
                                        info@gryphalcode.com
                                   </a>
                              </li>
                              <li>
                                   <strong>
                                        Phone:
                                   </strong>
                                   +91 80722 80620
                              </li>
                              <li>
                                   <strong>
                                        Address:
                                   </strong>
                                   12/26 LakshmiPuram, Ganapathy,
                                   Coimbatore, Tamil Nadu 641006, India
                              </li>
                         </ul>
                    </section>
                    <div class="note" role="note">
                         <strong>
                              Note:
                         </strong>
                         This Privacy Policy is for informational
                         purposes and does not constitute legal advice. For legal questions,
                         please consult a licensed attorney.
                    </div>
               </article>
          </div>
          <!-- Footer include (unchanged) -->
     </main>
     <?php include 'footer.php'; ?>

     <?php include 'whatsapp.php'; ?>
     <?php include 'global-scripts.php'; ?>
</body>

</html>