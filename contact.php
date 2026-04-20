<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<?php $base_url = '.';
$page_title = "How Can Our Global AI & Software Engineers Accelerate Your 2026 Growth?";
$meta_desc = "Connect with GryphalCode for expert consulting on AI Agent integration, Generative Engine Optimization (GEO), and 2026 tech strategy. Serving Coimbatore, Tamil Nadu, Kerala, and European markets.";
$meta_keywords = "Contact GryphalCode, AI consulting global, GEO strategy Coimbatore, software engineers Tamil Nadu, Kerala IT support, Europe software consulting";
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
  <link rel="preload" href="assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/css/bootstrap.min.css" as="style">

  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="preconnect" />
  <link href="https://www.google-analytics.com" rel="preconnect" />
  <link href="https://www.googletagmanager.com" rel="dns-prefetch" />
  <link href="https://www.google-analytics.com" rel="dns-prefetch" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/lightcase.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/meanmenu.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/nice-select.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/animate.css" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="assets/css/style.min.css?v=3">
  <link rel="stylesheet" href="assets/css/responsive.min.css?v=3">
  <link href="/manifest.json" rel="manifest" />
  <meta content="#086ad8" name="theme-color" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="black-translucent" name="apple-mobile-web-app-status-bar-style" />
</head>

<body>
  <!-- ===== Header Include ===== -->
  <?php include 'header.php'; ?>
  <main id="main-content">
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.webp"
      data-opacity="5" data-overlay="dark">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb__wrap text-center">
              <h1 class="title">
                How Can We Help You Scale?
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
                    Contact Us
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb area end -->
    <!-- contact area start -->
    <section class="contact__area pt-100 pb-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="contact__wrap pt-95 pb-95">
              <div class="contact__form">
                <form action="mail.php" aria-label="Contact Form" data-agent-action="submit-contact-inquiry"
                  id="contact-form" method="POST">
                  <input type="hidden" name="csrf_token"
                    value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES) ?>" />
                  <input type="text" name="company_website" tabindex="-1" autocomplete="off"
                    style="position:absolute;left:-9999px;" aria-hidden="true" />
                  <div class="row mt-none-30">
                    <div class="col-xl-6 mt-30">
                      <div class="form__group">
                        <label for="name">
                          Full Name
                          <i class="fal fa-user">
                          </i>
                        </label>
                        <input id="name" name="name" required="" type="text" />
                      </div>
                    </div>
                    <div class="col-xl-6 mt-30">
                      <div class="form__group">
                        <label for="email">
                          Email Address
                          <i class="fal fa-envelope">
                          </i>
                        </label>
                        <input id="email" name="email" required="" type="email" />
                      </div>
                    </div>
                    <div class="col-xl-6 mt-30">
                      <div class="form__group">
                        <label for="tel">
                          Phone Number
                          <i class="fal fa-phone">
                          </i>
                        </label>
                        <input id="tel" name="phone" pattern="[0-9+\-\s]+" required="" type="tel" />
                      </div>
                    </div>
                    <div class="col-xl-6 mt-30">
                      <div class="form__group">
                        <label for="subject">
                          Subject
                          <i class="fal fa-book">
                          </i>
                        </label>
                        <input id="subject" name="subject" required="" type="text" />
                      </div>
                    </div>
                    <div class="col-xl-12 mt-30">
                      <div class="form__group">
                        <label for="message">
                          Message
                          <i class="fal fa-pen">
                          </i>
                        </label>
                        <textarea id="message" name="message" required="" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="col-xl-12 mt-20">
                      <div class="form__group d-flex justify-content-center">
                        <div style="max-width: fit-content; text-align: left;">
                          <label for="privacy_consent"
                            style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; position: relative;">
                            <input id="privacy_consent" name="privacy_consent" required type="checkbox" value="1"
                              style="width: 18px; height: 18px; margin: 0; margin-top: 3px; flex-shrink: 0;" />
                            <span style="color: rgba(255,255,255,0.8); font-size: 14px; line-height: 1.5;">
                              I agree to the processing of my information as per the
                              <a href="<?= $base_url ?>/privacy-policy"
                                style="color: #086AD8; text-decoration: underline; font-weight: 500;">Privacy
                                Policy</a>.
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12 mt-30 text-center">
                      <button class="site-btn" data-agent-label="Submit Consultancy Inquiry" type="submit">
                        Get Free Consultancy
                      </button>
                      <p class="ajax-response mt-15 text-white">
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact area end -->
    <div class="contactinfo__area">
      <div class="container">
        <div class="row mt-none-30">
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="contact__info">
              <div class="icon">
                <i class="fal fa-map">
                </i>
                <span>
                  <i class="fal fa-check">
                  </i>
                </span>
              </div>
              <div class="content">
                <h2 class="title">
                  Office Address
                </h2>
                <p>
                  12/26 LakshmiPuram, Ganapathy
                  <br />
                  Coimbatore, Tamil Nadu -
                  641006
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="contact__info contact__info--black">
              <div class="icon">
                <i class="fal fa-phone">
                </i>
                <span>
                  <i class="fal fa-check">
                  </i>
                </span>
              </div>
              <div class="content">
                <h2 class="title">
                  Phone Number
                </h2>
                <a href="tel:+918072280620">
                  +91 80722-80620
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 mt-30">
            <div class="contact__info contact__info--blue">
              <div class="icon">
                <i class="fal fa-globe">
                </i>
                <span>
                  <i class="fal fa-check">
                  </i>
                </span>
              </div>
              <div class="content">
                <h2 class="title">
                  Web Connect
                </h2>
                <a href="mailto:info@gryphalcode.com">
                  info@gryphalcode.com
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- map area start -->
    <div class="map-area" id="contact-map">
      <iframe allowfullscreen="" height="450" loading="lazy"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.617214964979!2d76.99487591428507!3d11.0376379921498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8573b3b19dc11%3A0x9d41d98c5d68b42!2sGryphalCode!5e0!3m2!1sen!2sin!4v1679469821913"
        style="border: 0" title="GryphalCode Location" width="100%">
      </iframe>
    </div>
    <!-- map area end -->
    <!-- ===== Footer Include ===== -->
  </main>
  <?php include 'footer.php'; ?>

  <?php include 'whatsapp.php'; ?>
  <?php include 'global-scripts.php'; ?>
</body>

</html>