<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Thank You | We Will Be In Touch - GryphalCode";
$meta_desc = "Thank you for contacting GryphalCode. Our experts will review your request and get back to you within 24 business hours to discuss your digital vision. Serving Coimbatore, Tamil Nadu, and Kerala.";
$meta_keywords = "Thank You, GryphalCode Thank You, Thank, You, IT company, software development, AI solutions, cloud infrastructure";
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
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/jquery-ui.min.css" media="print" onload="this.media='all'">
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
  <?php include 'header.php'; ?>
  <main id="main-content">
    <section class="thankyou-hero">
      <div class="thankyou-card">
        <div class="thankyou-icon">
          <i class="fal fa-check">
          </i>
        </div>
    </section>
    <section class="thank-you-area pt-100 pb-100 text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <div class="thank-you-content">
              <div class="icon mb-30">
                <i class="fal fa-check-circle" style="font-size: 80px; color: #086AD8;"></i>
              </div>
              <h1 class="section__heading--title mb-20">We've Received Your Inquiry</h1>
              <p class="mb-40">Thank you for reaching out to GryphalCode. Our enterprise solutions team will review your
                request and get back to you within 24 business hours.</p>
              <div class="buttons">
                <a href="<?= $base_url ?>" class="site-btn">Back to Home</a>
                <a href="services" class="site-btn transparent">Explore Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'footer.php'; ?>
  <?php include 'whatsapp.php'; ?>
  <?php include 'global-scripts.php'; ?>
  <script nonce="<?= htmlspecialchars($GLOBALS['cspNonce'] ?? '', ENT_QUOTES) ?>">
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'lead_thank_you_view' });
    if (typeof gtag === 'function') {
      gtag('event', 'generate_lead', {
        event_category: 'lead',
        event_label: 'thank_you_page',
        value: 1
      });
    }
  </script>
</body>

</html>