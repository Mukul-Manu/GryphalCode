<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
?>
<?php $base_url = '.';
$page_title = "Contact GryphalCode | Get a Quote for Your Tech Project";
$meta_desc = "Have a project in mind? Contact the GryphalCode team today for custom software development, AI integration, or cloud consulting services. Serving Coimbatore, Tamil Nadu, and Kerala.";
 
$meta_keywords = "Contact, GryphalCode Contact, Contact, IT company, software development, AI solutions, cloud infrastructure";
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
  <link rel="preload" href="assets/images/logo/logo.webp" as="image" type="image/webp">
  <link rel="preload" href="assets/images/bg/breadcrumb-bg-1.webp" as="image" type="image/webp">
  <link href="https://gryphalcode.com/contact" rel="canonical">
  <meta content="<?= $meta_desc ?>" name="description" />
  <meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : 'Enterprise AI, Software Engineering, Cloud Solutions, Digital Transformation, Coimbatore AI Companies' ?>" />
  
  <!-- GEO Targeting - Service States of India -->
  <meta content="IN-TN, IN-KL" name="geo.region" />
  <meta content="11.0168;76.9558" name="geo.position" />
  <meta content="Coimbatore, Tamil Nadu, Kerala, India - Serving All States Nationwide" name="geo.placename" />
  <meta content="11.0168, 76.9558" name="ICBM" />
  
  <!-- Open Graph / Social Transparency -->
  <meta content="website" property="og:type" />
  <meta content="https://gryphalcode.com/contact" property="og:url" />
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
    "url": "https://gryphalcode.com/contact",
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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="assets/css/lightcase.css">
  <link rel="stylesheet" href="assets/css/meanmenu.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/style.css?v=3">
  <link rel="stylesheet" href="assets/css/responsive.css?v=3">
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
              Contact Us
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
              <form action="mail.php" aria-label="Contact Form" id="contact-form" method="POST">
                <div class="row mt-none-30">
                  <div class="col-xl-6 mt-30">
                    <div class="form__group">
                      <label for="name">
                        <i class="fal fa-user">
                        </i>
                      </label>
                      <input id="name" name="name" placeholder="Enter your full name" required="" type="text" />
                    </div>
                  </div>
                  <div class="col-xl-6 mt-30">
                    <div class="form__group">
                      <label for="email">
                        <i class="fal fa-envelope">
                        </i>
                      </label>
                      <input id="email" name="email" placeholder="Enter email address" required="" type="email" />
                    </div>
                  </div>
                  <div class="col-xl-6 mt-30">
                    <div class="form__group">
                      <label for="tel">
                        <i class="fal fa-phone">
                        </i>
                      </label>
                      <input id="tel" name="phone" pattern="[0-9+\-\s]+" placeholder="Add phone number" required=""
                        type="tel" />
                    </div>
                  </div>
                  <div class="col-xl-6 mt-30">
                    <div class="form__group">
                      <label for="subject">
                        <i class="fal fa-book">
                        </i>
                      </label>
                      <input id="subject" name="subject" placeholder="Enter your subject" required="" type="text" />
                    </div>
                  </div>
                  <div class="col-xl-12 mt-30">
                    <div class="form__group">
                      <label for="message">
                        <i class="fal fa-pen">
                        </i>
                      </label>
                      <textarea id="message" name="message" placeholder="Enter your message" required=""
                        rows="5"></textarea>
                    </div>
                  </div>
                  <div class="col-xl-12 mt-30 text-center">
                    <button class="site-btn" type="submit">
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
              <h1 class="title">
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
  <!-- All JS Scripts loaded via loader.js -->
  <?php include 'whatsapp.php'; ?>
<?php include 'scripts.php'; ?>
  
</body>

</html>
