<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Terms & Conditions | Business Service Agreements - GryphalCode";
$meta_desc = "Read our terms and conditions for software development and IT services. Clear, transparent agreements for all our enterprise-grade digital solutions. Serving Coimbatore, Tamil Nadu, and Kerala.";
 
$meta_keywords = "Terms Conditions, GryphalCode Terms Conditions, Terms, Conditions, IT company, software development, AI solutions, cloud infrastructure";
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
 <head>
  <meta charset="utf-8" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/webp" />
  <link href="<?= $base_url ?>/assets/images/logo/favicon.webp" rel="apple-touch-icon" />
  <meta content="ie=edge" http-equiv="x-ua-compatible" />
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
  <title><?= $page_title ?></title>
  <link rel="preload" href="<?= $base_url ?>/assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="<?= $base_url ?>/assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link rel="preload" href="<?= $base_url ?>/assets/css/bootstrap.min.css" as="style">
  <link rel="preload" href="<?= $base_url ?>/assets/css/style.css?v=3" as="style">
  <link href="https://gryphalcode.com/terms-conditions" rel="canonical">
  <meta content="<?= $meta_desc ?>" name="description" />
  <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
  
  <!-- GEO Targeting - Service States of India -->
  <meta content="IN-TN, IN-KL" name="geo.region" />
  <meta content="11.0168;76.9558" name="geo.position" />
  <meta content="Coimbatore, Tamil Nadu, Kerala, India - Serving All States Nationwide" name="geo.placename" />
  <meta content="11.0168, 76.9558" name="ICBM" />
  
  <!-- Open Graph / Social Transparency -->
  <meta content="website" property="og:type" />
  <meta content="https://gryphalcode.com/terms-conditions" property="og:url" />
  <meta content="<?= $page_title ?>" property="og:title" />
  <meta content="<?= $meta_desc ?>" property="og:description" />
  <meta content="https://gryphalcode.com/assets/images/logo/logo.webp" property="og:image" />
  <meta property="og:site_name" content="GryphalCode" />

  <!-- Twitter Cards -->
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="@GryphalCode" name="twitter:site" />
  <meta content="<?= $page_title ?>" name="twitter:title" />
  <meta content="<?= $meta_desc ?>" name="twitter:description" />
  <meta content="https://gryphalcode.com/assets/images/logo/og-image.webp" name="twitter:image" />

  <!-- Security & Integrity -->
  <!-- Analytics & Tracking -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-3J6X1HS36W"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-3J6X1HS36W');
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "<?= addslashes($page_title) ?>",
    "description": "<?= addslashes($meta_desc) ?>",
    "url": "https://gryphalcode.com/terms-conditions",
    "provider": {
      "@type": "Organization",
      "name": "GryphalCode",
      "logo": "https://gryphalcode.com/assets/images/logo/logo.webp"
    }
  }
  </script>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="preconnect" /><link href="https://www.google-analytics.com" rel="preconnect" /><link href="https://www.googletagmanager.com" rel="dns-prefetch" /><link href="https://www.google-analytics.com" rel="dns-prefetch" />
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/font-awesome.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/jquery-ui.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/lightcase.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/meanmenu.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/nice-select.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/owl.carousel.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/animate.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css?v=3">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.css?v=3">

  <link href="/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
</head>
 <body>
  <!-- keep header -->
  <?php include 'header.php'; ?>
<main id="main-content">
  <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.webp" data-opacity="5" data-overlay="dark">
   <div class="container">
    <div class="row">
     <div class="col-xl-12">
      <div class="breadcrumb__wrap text-center">
       <h1 class="title">
        Terms &amp; Conditions
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
          Terms
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <div class="terms-shell">
   <div class="legal-grid">
    <!-- Left: modern card (text color black inside) -->
    <article aria-labelledby="terms-title" class="terms-card" role="main">
     <div class="terms-header">
      <h1 id="terms-title">
       Terms &amp; Conditions
      </h1>
      <div class="terms-meta">
       Effective Date:
       <strong>
        January 1, 2026
       </strong>
      </div>
     </div>
     <section class="terms-section" id="introduction">
      <h2>
       1. Introduction
      </h2>
      <p>
       Welcome to
       <strong>
        GryphalCode
       </strong>
       . By accessing or using our
            website (
       <a href="https://gryphalcode.com/" rel="noopener noreferrer" target="_blank">
        gryphalcode.com
       </a>
       ), products, or services, you agree to comply with these
            Terms
            &amp; Conditions. Please read them carefully before using our
            services.
      </p>
     </section>
     <section class="terms-section" id="company">
      <h2>
       2. Company Information
      </h2>
      <p>
       <strong>
        GryphalCode
       </strong>
       is a technology and software
            development company based in Coimbatore, India, providing digital
            solutions, API integrations, marketing automation, and IT
            consulting services for businesses.
      </p>
     </section>
     <section class="terms-section" id="use">
      <h2>
       3. Use of Our Services
      </h2>
      <ul>
       <li>
        You must use our services only for lawful business purposes.
       </li>
       <li>
        You agree not to misuse or attempt to gain unauthorized access
              to our systems or data.
       </li>
       <li>
        We reserve the right to suspend or terminate accounts violating
              our policies.
       </li>
      </ul>
     </section>
     <section class="terms-section" id="ip">
      <h2>
       4. Intellectual Property
      </h2>
      <p>
       All content, code, designs, trademarks, and assets displayed on
            this website are the intellectual property of GryphalCode and its
            partners. You may not copy, modify, or redistribute any materials
            without written consent.
      </p>
     </section>
     <section class="terms-section" id="thirdparty">
      <h2>
       5. Third-Party Services
      </h2>
      <p>
       Our website may link to third-party sites (like Meta, Google,
            etc.). GryphalCode is not responsible for the content or privacy
            practices of such third parties.
      </p>
     </section>
     <section class="terms-section" id="liability">
      <h2>
       6. Limitation of Liability
      </h2>
      <p>
       GryphalCode shall not be liable for any indirect, incidental, or
            consequential damages resulting from the use or inability to use
            our services.
      </p>
     </section>
     <section class="terms-section" id="law">
      <h2>
       7. Governing Law
      </h2>
      <p>
       These Terms are governed by the laws of the Republic of India. Any
            disputes will be subject to the exclusive jurisdiction of the
            courts in Coimbatore, Tamil Nadu.
      </p>
     </section>
     <section class="terms-section" id="updates">
      <h2>
       8. Updates
      </h2>
      <p>
       We may update these Terms periodically. Updated versions will be
            posted on this page with a new effective date.
      </p>
     </section>
     <section class="terms-section" id="contact">
      <h2>
       9. Contact Us
      </h2>
      <p>
       If you have any questions about these Terms, please email us at
       <a href="mailto:info@gryphalcode.com">
        info@gryphalcode.com
       </a>
       .
      </p>
     </section>
     <div class="note" role="note">
      <strong>
       Note:
      </strong>
      These Terms are provided for informational
          purposes and do not constitute legal advice. For legal questions,
          please consult a licensed attorney.
     </div>
    </article>
    <!-- Right: small TOC (also scoped) -->
    <nav aria-label="Terms contents" class="toc" style="align-self: start">
     <div style="padding: 12px 8px">
      <strong style="display: block; margin-bottom: 8px; color: #000">
       Contents
      </strong>
      <a href="#introduction">
       1. Introduction
      </a>
      <a href="#company">
       2. Company Info
      </a>
      <a href="#use">
       3. Use of Services
      </a>
      <a href="#ip">
       4. Intellectual Property
      </a>
      <a href="#thirdparty">
       5. Third-Party
      </a>
      <a href="#liability">
       6. Liability
      </a>
      <a href="#law">
       7. Governing Law
      </a>
      <a href="#updates">
       8. Updates
      </a>
      <a href="#contact">
       9. Contact
      </a>
     </div>
    </nav>
   </div>
  </div>
  <!-- keep footer/header includes same as before -->
  </main>
<?php include 'footer.php'; ?>
  <!-- All JS Scripts loaded via loader.js -->
  <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
  
 </body>
</html>

