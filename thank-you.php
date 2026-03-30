<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Thank You | GryphalCode";
$meta_desc = "GryphalCode specializes in Thank You services. We build secure, high-performance web and mobile software tailored for your business needs.";
 
$meta_keywords = "Thank You, GryphalCode Thank You, Thank, You, IT company, software development, AI solutions, cloud infrastructure";
?>
﻿
<!DOCTYPE html>
<html class="no-js" lang="en">
 <head>
  <meta charset="utf-8"/>
  <link href="assets/images/logo/favicon.webp" rel="icon" sizes="192x192" type="image/png"/>
  <link href="assets/images/logo/favicon.webp" rel="apple-touch-icon"/>
  <meta content="ie=edge" http-equiv="x-ua-compatible"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <title>
   Thank You | GryphalCode We'll Be In Touch!
  </title>
  <meta content="Thank you for contacting GryphalCode. Our team will get back to you within 24 hours." name="description">
   <meta content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" name="robots"/>
   <link href="https://fonts.googleapis.com" rel="preconnect"/>
   <link href="https://cdnjs.cloudflare.com" rel="preconnect"/>
   <link href="/manifest.json" rel="manifest"/>
   <meta content="#086ad8" name="theme-color"/>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
   <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
   <link href="assets/css/style.css?v=3" rel="stylesheet"/>
   <link href="assets/css/responsive.css?v=3" rel="stylesheet"/>
   

  <style>
    /* Absolute Refactor For Mobile Progress Bars - Permanent Native Fix */
    @media (max-width: 575px) {
      .skill__box { 
        position: relative !important; 
        margin-bottom: 40px !important; 
        display: block !important;
      }
      .skill__box .title { 
        max-width: 75% !important; 
        line-height: 1.4 !important; 
        white-space: normal !important; 
        word-wrap: break-word !important; 
        margin-bottom: 20px !important;
        display: block !important;
      }
      .skill__box .progress { 
        position: static !important; 
        overflow: visible !important; 
      }
      .skill__box .progress-bar { 
        position: static !important; 
      }
      .skill__box .progress-bar span { 
        position: absolute !important; 
        right: 0 !important; 
        top: 0 !important; /* Anchors the 95% horizontally flush with the first line of the title */
        font-weight: bold !important;
      }
    }
  </style>

  <style id="global-mobile-fix">
    /* GLOBAL MOBILE RESPONSIVENESS OVERRIDE */
    @media (max-width: 575px) {
      /* 1. Prevent Horizontal Scroll Globally */
      html, body {
        overflow-x: hidden !important;
        width: 100% !important;
        max-width: 100vw !important;
        margin: 0 !important;
        padding: 0 !important;
      }
      
      /* 2. Container Bounds */
      .container {
        width: 100% !important;
        max-width: 100vw !important;
        padding-left: 15px !important;
        padding-right: 15px !important;
        overflow-x: hidden !important;
        margin: 0 auto !important;
      }

      /* 3. Fluid Images */
      img {
        max-width: 100% !important;
        height: auto !important;
        object-fit: contain !important;
      }

      /* 4. Text Wrapping Assurance */
      h1, h2, h3, h4, h5, h6, p, a, span, .title, .section__heading--title {
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        white-space: normal !important;
      }

      /* 5. About Box UI Repair */
      .about__box {
        margin-left: 0 !important;
        padding: 15px !important;
        height: auto !important;
        overflow: visible !important;
      }
      .about__box p {
        margin-bottom: 20px !important;
      }

      /* 6. Site Button Auto-Height Fix */
      .site-btn {
        white-space: normal !important;
        height: auto !important;
        line-height: 1.5 !important;
        padding: 12px 20px !important;
        display: inline-block !important;
        width: 100% !important;
        text-align: center !important;
      }

      /* 7. WhatsApp Floating Optimization for 320px Screens */
      .whatsapp-float {
        width: 45px !important;
        height: 45px !important;
        bottom: 15px !important;
        right: 15px !important;
        padding: 8px !important;
        z-index: 9999 !important;
      }
      .whatsapp-float svg {
        width: 25px !important;
        height: 25px !important;
        margin: 0 auto !important;
      }
      
      /* 8. Fix Row Negative Margins causing overflow */
      .row {
        margin-left: 0 !important;
        margin-right: 0 !important;
      }
      [class*="col-"] {
        padding-left: 10px !important;
        padding-right: 10px !important;
        width: 100% !important;
      }
    }
  </style>

</head>
 <body>
  <?php include 'header.php'; ?>
<main id="main-content">
  <section class="thankyou-hero">
   <div class="thankyou-card">
    <div class="thankyou-icon">
     <i class="fal fa-check">
     </i>
    </div>
    <h1>
     Thank You! ðŸŽ‰
    </h1>
    <p>
     Your message has been received. Our team will review your request and reach out to you within
     <span class="highlight">
      24 business hours
     </span>
     .
    </p>
    <p>
     In the meantime, explore what we've built for companies like yours.
    </p>
    <div class="btn-group">
     <a class="site-btn" href="portfolio.php">
      View Our Work
     </a>
     <a class="site-btn" href="index.php" style="background: transparent; border: 2px solid rgba(255,255,255,0.2); color: #fff;">
      Back to
                    Home
     </a>
    </div>
    <p class="countdown" id="redirect-countdown">
     Redirecting to homepage in
     <span id="timer">
      10
     </span>
     s...
    </p>
   </div>
  </section>
  </main>
<?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
  <script defer src="assets/js/jquery-2.2.4.min.js">
  </script>
  <script defer src="assets/js/main.js">
  </script>
  <script>
   // Countdown redirect
        var t = 10;
        var interval = setInterval(function () {
            t--; document.getElementById('timer').textContent = t;
            if (t <= 0) { clearInterval(interval); window.location.href = '/index.html'; }
        }, 1000);
  </script>
 </body>
</html>
