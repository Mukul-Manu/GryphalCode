<?php if (!isset($base_url)) { $base_url = '.'; } ?>
<footer class="site-footer bg_img pt-100" data-background="<?= $base_url ?>/assets/images/pattern/footer-pattern.webp">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-center">
        <a href="<?= $base_url ?>" class="site-logo mb-20">
          <img loading="lazy" alt="GryphalCode logo" src="<?= $base_url ?>/assets/images/logo/logo.webp" width="180" height="50" />
        </a>
      </div>
      <div class="col-xl-12">
        <div class="footer-top mt-50 mb-80">
          <div class="footer__info">
            <div class="footer__info--item d-flex align-items-center">
              <div class="icon mr-20">
                <img loading="lazy" alt="Phone icon" src="<?= $base_url ?>/assets/images/icons/footer-info-icon-1.webp" width="24" height="24" />
              </div>
              <div class="content">
                <h4 class="title">Phone Number</h4>
                <a href="tel:+918072280620">+91 80722-80620</a>
              </div>
            </div>

            <div class="footer__info--item d-flex align-items-center">
              <div class="icon mr-20">
                <img loading="lazy" alt="Email icon" src="<?= $base_url ?>/assets/images/icons/footer-info-icon-2.webp" width="24" height="24" />
              </div>
              <div class="content">
                <h4 class="title">Email Address</h4>
                <a href="mailto:info@gryphalcode.com">info@gryphalcode.com</a>
              </div>
            </div>

            <div class="footer__info--item d-flex align-items-center">
              <div class="icon mr-20">
                <img loading="lazy" alt="Location icon" src="<?= $base_url ?>/assets/images/icons/footer-info-icon-3.webp" width="24" height="24" />
              </div>
              <div class="content">
                <h4 class="title">Office Address</h4>
                <span>12/26 LakshmiPuram, Ganapathy<br />Coimbatore, Tamil Nadu -
                  641006</span>
              </div>
            </div>
          </div>

          <button id="scroll-top" class="site-btn transparent" style="margin-left: auto;" aria-label="Scroll to top">
            <i class="fal fa-long-arrow-up"></i>
            <span>Back To Top</span>
            <i class="fal fa-long-arrow-up"></i>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Links Section -->
  <div class="container">
    <div class="row mt-none-30 footer-row">
      <!-- Services -->
      <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
        <div class="footer__widget">
          <h4 class="title mb-30">Services</h4>
          <div class="footer__link-list">
            <ul>
              <li>
                <a href="<?= $base_url ?>/service-details/custom-software-development">
                  <i class="fal fa-code"></i>
                  <span>Custom Software Development</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/service-details/ai-machine-learning-solutions">
                  <i class="fal fa-brain"></i>
                  <span>AI &amp; Machine Learning Solutions</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/service-details/cloud-devops-solutions">
                  <i class="fal fa-cloud"></i>
                  <span>Cloud &amp; DevOps Solutions</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/service-details/api-integration-automation">
                  <i class="fal fa-link"></i>
                  <span>API Integration &amp; Automation</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/service-details/whatsapp-business-solutions">
                  <i class="fal fa-comment-alt"></i>
                  <span>WhatsApp Business API</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/service-details/food-delivery-application">
                  <i class="fal fa-utensils"></i>
                  <span>Food Delivery App</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-30">
        <div class="footer__widget text-center text-lg-left">
          <h4 class="title mb-30">Quick Links</h4>
          <div class="footer__link-list">
            <ul>
              <li>
                <a href="<?= $base_url ?>/about">
                  <i class="fal fa-info-circle"></i>
                  <span>About Us</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/case-studies">
                  <i class="fal fa-file-alt"></i>
                  <span>Case Studies</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/careers">
                  <i class="fal fa-user-tie"></i>
                  <span>Careers</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/privacy-policy">
                  <i class="fal fa-user-secret"></i>
                  <span>Privacy Policy</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/terms-conditions">
                  <i class="fal fa-file-signature"></i>
                  <span>Terms & Conditions</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/editorial-policy">
                  <i class="fal fa-check-circle"></i>
                  <span>Editorial Policy</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/brand-knowledge">
                  <i class="fal fa-building"></i>
                  <span>Brand Knowledge</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/author-mukul">
                  <i class="fal fa-user"></i>
                  <span>Author Profile</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/site-map">
                  <i class="fal fa-sitemap"></i>
                  <span>HTML Sitemap</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Support -->
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-30">
        <div class="footer__widget text-center text-lg-left">
          <h4 class="title mb-30">Support</h4>
          <div class="footer__link-list">
            <ul>
              <li>
                <a href="<?= $base_url ?>/support">
                  <i class="fal fa-headset"></i>
                  <span>Customer Support</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/faq">
                  <i class="fal fa-question-circle"></i>
                  <span>Help &amp; FAQ</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/contact">
                  <i class="fal fa-envelope-open-text"></i>
                  <span>Contact Us</span>
                </a>
              </li>
              <li>
                <a href="<?= $base_url ?>/request-demo">
                  <i class="fal fa-laptop-code"></i>
                  <span>Request a Demo</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="pt-40 pb-40" aria-label="Newsletter and growth updates">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 mt-20">
          <h4 class="title mb-10">Get Weekly Growth Engineering Insights</h4>
          <p class="mb-0">Receive practical playbooks on AI, cloud scaling, and conversion improvements for modern product teams.</p>
        </div>
        <div class="col-lg-5 mt-20">
          <form id="newsletter-form" class="d-flex" style="gap:8px;" aria-label="Newsletter form">
            <input type="email" name="email" required placeholder="Enter work email" aria-label="Work email" style="flex:1; min-height:46px; border:1px solid #dce3ef; border-radius:8px; padding:0 12px;" />
            <input type="text" name="website_url" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;" aria-hidden="true" />
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES) ?>" />
            <input type="hidden" name="utm_source" value="" />
            <input type="hidden" name="utm_medium" value="" />
            <input type="hidden" name="utm_campaign" value="" />
            <input type="hidden" name="utm_term" value="" />
            <input type="hidden" name="utm_content" value="" />
            <button type="submit" class="site-btn" style="min-height:46px;">Subscribe</button>
          </form>
          <small id="newsletter-response" style="display:none; margin-top:8px;"></small>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-40 pb-40" aria-label="Quick quote mini form">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mt-20">
          <h4 class="title mb-10">Need a Quick Project Estimate?</h4>
          <p class="mb-0">Send a short brief and get a practical quote direction from our team.</p>
        </div>
        <div class="col-lg-6 mt-20">
          <form action="<?= $base_url ?>/mail.php" method="POST" class="d-flex flex-column" style="gap:8px;" aria-label="Quick quote form">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES) ?>" />
            <input type="text" name="company_website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;" aria-hidden="true" />
            <input type="hidden" name="subject" value="Quick Quote Request" />
            <input type="text" name="name" required placeholder="Your name" aria-label="Your name" style="min-height:44px; border:1px solid #dce3ef; border-radius:8px; padding:0 12px;" />
            <input type="email" name="email" required placeholder="Work email" aria-label="Work email" style="min-height:44px; border:1px solid #dce3ef; border-radius:8px; padding:0 12px;" />
            <textarea name="message" required rows="3" placeholder="Project goal and timeline" aria-label="Project details" style="border:1px solid #dce3ef; border-radius:8px; padding:10px 12px;"></textarea>
            <label for="quick_privacy_consent" style="display:flex; gap:8px; align-items:flex-start;">
              <input id="quick_privacy_consent" name="privacy_consent" required type="checkbox" value="1" style="margin-top:4px;" />
              <span>I agree to the <a href="<?= $base_url ?>/privacy-policy">Privacy Policy</a>.</span>
            </label>
            <button type="submit" class="site-btn">Get Quick Quote</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Copyright -->
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="copyright-text mt-60 text-center">
          <p>Copyright &copy; <span><?= date('Y') ?></span> GryphalCode. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Fullscreen search -->
<div class="search-wrap">
  <div class="search-inner">
    <button class="search-close-btn" aria-label="Close search" style="background:none;border:none;cursor:pointer;"><i class="fal fa-times search-close" id="search-close"></i></button>
    <div class="search-cell">
      <form method="get" action="<?= $base_url ?>/blog" role="search">
        <div class="search-field-holder">
          <input type="search" name="q" class="main-search-input" placeholder="Search insights and services..." aria-label="Search site content" />
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end fullscreen search -->

