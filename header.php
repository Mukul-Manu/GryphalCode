<?php 
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

if (!isset($base_url)) { $base_url = '.'; } 
?>
<!-- Global Entity Schema (2026 AI-Search Readiness) -->
<script type="application/ld+json">
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
    "areaServed": "IN",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://www.facebook.com/profile.php?id=61570214392615",
    "https://www.instagram.com/gryphal_code/"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "@id": "https://gryphalcode.com/#website",
  "url": "https://gryphalcode.com",
  "name": "GryphalCode",
  "publisher": { "@id": "https://gryphalcode.com/#organization" }
}
</script>

<link rel="stylesheet" href="<?= $base_url ?>/assets/css/seo-optimizations.css">
<a class="skip-nav" href="#main-content">Skip to main content</a>
<style>
  /* Global Accessibility 10/10 Focus States */
  :focus-visible {
    outline: 3px solid #086AD8 !important;
    outline-offset: 4px !important;
    box-shadow: 0 0 10px rgba(8, 106, 216, 0.5) !important;
  }
</style>
<header class="header">
  <div class="header__top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-12">
          <div class="header__top--info">
            <ul>
              <li>
                <a href="mailto:info@gryphalcode.com"><span class="icon"><i class="fal fa-envelope"></i></span>
                  info@gryphalcode.com</a>
              </li>
              <li>
                <a href="tel:+918072280620"><span class="icon"><i class="fal fa-phone"></i></span>
                  +91 80722-80620</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 text-xl-right text-lg-right text-center d-none d-lg-block">
          <div class="header__top--social">
            <a href="https://www.facebook.com/profile.php?id=61570214392615" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/gryphal_code/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
    </div>
  </div>
  <div class="navarea">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-4 col-6 my-auto">
          <div class="header__logo">
            <a href="<?= $base_url ?>">
              <img src="<?= $base_url ?>/assets/images/logo/logo.webp" alt="GryphalCode Logo" width="180" height="50" />
            </a>
          </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-6 my-auto">
          <div class="header__menu">
            <nav id="mobile-menu" aria-label="Main navigation">
              <ul>
                <li>
                  <a href="<?= $base_url ?>">Home </a>
                </li>
                <li><a href="<?= $base_url ?>/about">About</a></li>
               <li><a href="<?= $base_url ?>/case-studies">Case Studies</a></li>
                <li>
                  <a href="<?= $base_url ?>/services">Services <span>+</span></a>
                  <ul class="sub-menu">
                    
                    <li>
                      <a href="<?= $base_url ?>/service-details/custom-software-development">Custom Software</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/ai-machine-learning-solutions">AI &amp; ML</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/cloud-devops-solutions">Cloud &amp; DevOps</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/api-integration-automation">API &amp; Automation</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/whatsapp-business-solutions">WhatsApp Business API</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/food-delivery-application">Food Delivery App</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">Pages <span>+</span></a>
                  <ul class="sub-menu">
                    <li><a href="<?= $base_url ?>/faq">Faq</a></li>
                    <li><a href="<?= $base_url ?>/careers">Careers</a></li>
                    
                    <li><a href="<?= $base_url ?>/why-choose">Why Choose</a></li>
                    
                  </ul>
                </li>
                
                <li><a href="<?= $base_url ?>/contact">Contact</a></li>
              </ul>
            </nav>
            <div class="mobile-menu"></div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-8 my-auto d-none d-xl-block d-lg-block">
          <div class="navarea__right">
            <a href="<?= $base_url ?>/contact" class="site-btn">Request a Custom Quote</a>
            <button class="search-trigger" aria-label="Open search">
              <i class="fal fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
