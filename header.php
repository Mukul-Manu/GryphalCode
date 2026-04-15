<?php
/**
 * IMPORTANT: No spaces, no HTML, no BOM before this PHP tag
 */

// Set CSRF token if session is already started elsewhere
if (session_status() === PHP_SESSION_ACTIVE && empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

/**
 * GryphalCode Security Layer
 * Real-time Toxic Referral Blocking
 */
$cacheFile = __DIR__ . '/assets/security/spam_domains.json';
if (file_exists($cacheFile) && isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
  $referer = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
  if ($referer) {
    $spamDomains = json_decode(file_get_contents($cacheFile), true);
    if (is_array($spamDomains)) {
      // Check if referer domain or its parent exists in the spam list
      foreach ($spamDomains as $spam) {
        if (stripos($referer, $spam) !== false) {
          header('HTTP/1.1 403 Forbidden');
          die("Access Denied: Toxic Referral Detected.");
        }
      }
    }
  }
}

// Set base URL if not defined
if (!isset($base_url)) {
  $base_url = '.';
}

// Set CSP nonce for security (if not already set)
if (!isset($GLOBALS['cspNonce'])) {
  $GLOBALS['cspNonce'] = bin2hex(random_bytes(16));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= isset($page_title) ? $page_title : 'GryphalCode | Industrial Grade AI & Software Solutions' ?></title>
  <meta name="description"
    content="<?= isset($meta_desc) ? $meta_desc : 'GryphalCode delivers cutting-edge software development, AI solutions, and cloud infrastructure for the modern enterprise.' ?>">
  <meta name="keywords"
    content="<?= isset($meta_keywords) ? $meta_keywords : 'software, ai, cloud, devops, gryphalcode' ?>">
  <meta charset="UTF-8">
  <?php include_once 'seo-engine.php'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSS Assets -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/jquery-ui.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/lightcase.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/nice-select.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/animate.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/style.css?v=2.1">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/responsive.css?v=2.1">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/seo-optimizations.css?v=20260409">

  <!-- Google Tag Manager (noscript) -->
  <?php
  $gtmNoScriptId = getenv('GRYPHAL_GTM_ID') ?: '';
  if (!empty($gtmNoScriptId)): ?>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= urlencode($gtmNoScriptId) ?>" height="0"
        width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <?php endif; ?>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Global Entity Schema (2026 AI-Search Readiness) -->
  <script nonce="<?= htmlspecialchars($GLOBALS['cspNonce'], ENT_QUOTES) ?>" type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "@id": "https://gryphalcode.com/#organization",
      "name": "GryphalCode",
      "url": "https://gryphalcode.com",
      "logo": "https://gryphalcode.com/assets/images/logo/logo.webp",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+918072280620",
        "contactType": "customer service",
        "areaServed": "Worldwide",
        "availableLanguage": "en"
      },
      "sameAs": [
        "https://www.facebook.com/profile.php?id=61570214392615",
        "https://www.instagram.com/gryphal_code/"
      ]
    }
    </script>
  <script nonce="<?= htmlspecialchars($GLOBALS['cspNonce'], ENT_QUOTES) ?>" type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "@id": "https://gryphalcode.com/#website",
      "url": "https://gryphalcode.com",
      "name": "GryphalCode",
      "publisher": { "@id": "https://gryphalcode.com/#organization" }
    }
    </script>

  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/seo-optimizations.css?v=20260409">

  <style>
    /* Global Accessibility 10/10 Focus States */
    :focus-visible {
      outline: 3px solid #086AD8 !important;
      outline-offset: 4px !important;
      box-shadow: 0 0 10px rgba(8, 106, 216, 0.5) !important;
    }

    /* Skip to main content link - appears on focus */
    .skip-nav {
      position: absolute;
      left: -9999px;
      top: auto;
      width: 1px;
      height: 1px;
      overflow: hidden;
      z-index: 10000;
      padding: 8px 16px;
      background: #086AD8;
      color: #fff;
      font-size: 14px;
      text-decoration: none;
    }

    .skip-nav:focus {
      left: 10px;
      top: 10px;
      width: auto;
      height: auto;
    }
  </style>
</head>

<body>
  <!-- Skip to main content link for accessibility -->
  <a class="skip-nav" href="#main-content">Skip to main content</a>

  <header class="header">
    <div class="header__top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-6 col-lg-7 col-md-12">
            <div class="header__top--info">
              <ul>
                <li>
                  <a href="mailto:info@gryphalcode.com">
                    <span class="icon"><i class="fa fa-envelope"></i></span>
                    info@gryphalcode.com
                  </a>
                </li>
                <li>
                  <a href="tel:+918072280620">
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    +91 80722-80620
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-6 col-lg-5 col-md-12 text-xl-right text-lg-right text-center d-none d-lg-block">
            <div class="header__top--social" style="padding-top: 10px;">
              <a href="https://www.facebook.com/profile.php?id=61570214392615" target="_blank" rel="noopener noreferrer"
                aria-label="Facebook" style="color:#fff; margin-left: 15px; font-size: 16px;">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.instagram.com/gryphal_code/" target="_blank" rel="noopener noreferrer"
                aria-label="Instagram" style="color:#fff; margin-left: 15px; font-size: 16px;">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="navarea">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-xl-2 col-lg-2 col-md-4 col-6 d-flex align-items-center">
            <div class="header__logo">
              <a href="<?= $base_url ?>">
                <img loading="lazy" alt="GryphalCode logo" src="<?= $base_url ?>/assets/images/logo/logo.webp"
                  width="140" height="38" style="max-width: 100%; height: auto; display: block;" />
              </a>
            </div>
          </div>

          <div class="col-xl-7 col-lg-7 col-6 d-flex align-items-center justify-content-end">
            <div class="header__menu text-right">
              <nav id="mobile-menu" aria-label="Main navigation">
                <ul>
                  <li><a href="<?= $base_url ?>">Home</a></li>
                  <li><a href="<?= $base_url ?>/about">About</a></li>
                  <li><a href="<?= $base_url ?>/case-studies">Case Studies</a></li>
                  <li><a href="<?= $base_url ?>/blog">Blog</a></li>
                  <li>
                    <a href="<?= $base_url ?>/services">Services <span>+</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?= $base_url ?>/service-details/custom-software-development">Custom Software</a>
                      </li>
                      <li><a href="<?= $base_url ?>/service-details/ai-machine-learning-solutions">AI &amp; ML</a></li>
                      <li><a href="<?= $base_url ?>/service-details/cloud-devops-solutions">Cloud &amp; DevOps</a></li>
                      <li><a href="<?= $base_url ?>/service-details/api-integration-automation">API &amp; Automation</a>
                      </li>
                      <li><a href="<?= $base_url ?>/service-details/whatsapp-business-solutions">WhatsApp Business
                          API</a></li>
                      <li><a href="<?= $base_url ?>/service-details/food-delivery-application">Food Delivery App</a>
                      </li>
                      <li><a href="<?= $base_url ?>/services-india">Services in India</a></li>
                      <li><a href="<?= $base_url ?>/services-uae">Services in UAE</a></li>
                      <li><a href="<?= $base_url ?>/services-uk">Services in UK</a></li>
                      <li><a href="<?= $base_url ?>/services-usa">Services in USA</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Pages <span>+</span></a>
                    <ul class="sub-menu">
                      <li><a href="<?= $base_url ?>/faq">FAQ</a></li>
                      <li><a href="<?= $base_url ?>/careers">Careers</a></li>
                      <li><a href="<?= $base_url ?>/brand-knowledge">Brand Knowledge</a></li>
                      <li><a href="<?= $base_url ?>/author-mukul">Author Profile</a></li>
                      <li><a href="<?= $base_url ?>/why-choose">Why Choose</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= $base_url ?>/contact">Contact</a></li>
                </ul>
              </nav>
              <!-- Custom Gryphal Mobile Trigger -->
              <div class="gryphal-nav-toggle d-lg-none" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-8 my-auto d-none d-xl-block d-lg-block">
            <div class="navarea__right text-right">
              <a href="<?= $base_url ?>/contact" class="site-btn">Get A Quote</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Navigation Panel (Full-screen slide-in) -->
      <div class="gryphal-mobile-nav d-lg-none">
        <div class="gryphal-mobile-nav-inner">

          <!-- Top: Logo + Close Button -->
          <div class="mobile-nav-header">
            <a href="<?= $base_url ?>">
              <img src="<?= $base_url ?>/assets/images/logo/logo.webp" alt="GryphalCode logo" width="130" height="36" />
            </a>
            <div class="mobile-nav-close" aria-label="Close menu">&times;</div>
          </div>

          <!-- Menu Links -->
          <nav class="mobile-main-nav">
            <ul>
              <li><a href="<?= $base_url ?>">Home</a></li>
              <li><a href="<?= $base_url ?>/about">About</a></li>
              <li><a href="<?= $base_url ?>/case-studies">Case Studies</a></li>
              <li class="has-dropdown">
                <a href="<?= $base_url ?>/services">Services</a>
                <div class="dropdown-toggle-btn">+</div>
                <ul class="sub-menu">
                  <li><a href="<?= $base_url ?>/service-details/custom-software-development">Custom Software</a></li>
                  <li><a href="<?= $base_url ?>/service-details/ai-machine-learning-solutions">AI &amp; ML</a></li>
                  <li><a href="<?= $base_url ?>/service-details/cloud-devops-solutions">Cloud &amp; DevOps</a></li>
                  <li><a href="<?= $base_url ?>/service-details/api-integration-automation">API &amp; Automation</a>
                  </li>
                  <li><a href="<?= $base_url ?>/service-details/whatsapp-business-solutions">WhatsApp Business API</a>
                  </li>
                  <li><a href="<?= $base_url ?>/service-details/food-delivery-application">Food Delivery App</a></li>
                </ul>
              </li>
              <li class="has-dropdown">
                <a href="javascript:void(0)">Pages</a>
                <div class="dropdown-toggle-btn">+</div>
                <ul class="sub-menu">
                  <li><a href="<?= $base_url ?>/faq">FAQ</a></li>
                  <li><a href="<?= $base_url ?>/careers">Careers</a></li>
                  <li><a href="<?= $base_url ?>/brand-knowledge">Brand Knowledge</a></li>
                  <li><a href="<?= $base_url ?>/author-mukul">Author Profile</a></li>
                  <li><a href="<?= $base_url ?>/site-map">HTML Sitemap</a></li>
                </ul>
              </li>
              <li><a href="<?= $base_url ?>/contact">Contact</a></li>
            </ul>
          </nav>

          <!-- Contact Info -->
          <div class="mobile-nav-contact">
            <h4>Contact Info</h4>
            <div class="contact-item">
              <i class="fa fa-map-marker-alt"></i>
              <span>12/26 LakshmiPuram, Ganapathy
                Coimbatore, Tamil Nadu - 641006</span>
            </div>
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <a href="mailto:info@gryphalcode.com">info@gryphalcode.com</a>
            </div>
            <div class="contact-item">
              <i class="fa fa-clock"></i>
              <span>Mon-Friday, 10am - 07pm</span>
            </div>
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <a href="tel:+918072280620">+91 80722-80620</a>
            </div>
          </div>

          <!-- CTA Button -->
          <div class="mobile-nav-cta">
            <a href="<?= $base_url ?>/contact" class="site-btn">Contact Us</a>
          </div>

          <!-- Social Icons -->
          <div class="mobile-nav-social">
            <a href="https://www.facebook.com/profile.php?id=61570214392615" target="_blank" rel="noopener noreferrer"
              aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/gryphal_code/" target="_blank" rel="noopener noreferrer"
              aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i
                class="fab fa-linkedin-in"></i></a>
          </div>

        </div>
      </div>
    </div>
  </header>

  <main id="main-content">