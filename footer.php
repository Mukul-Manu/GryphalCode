<?php if (!isset($base_url)) {
  $base_url = '.';
} ?>
<footer class="site-footer bg_img pt-100" data-background="<?= $base_url ?>/assets/images/pattern/footer-pattern.webp">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-center">
        <a href="<?= $base_url ?>" class="site-logo mb-20">
          <img loading="lazy" alt="GryphalCode logo" src="<?= $base_url ?>/assets/images/logo/logo.webp" width="180"
            height="50" />
        </a>
      </div>
      <div class="col-xl-12">
        <div class="footer-top mt-50 mb-80">
          <div class="footer__info">
            <div class="footer__info--item d-flex align-items-center">
              <div class="icon mr-20">
                <img loading="lazy" alt="Phone icon" src="<?= $base_url ?>/assets/images/icons/footer-info-icon-1.webp"
                  width="24" height="24" />
              </div>
              <div class="content">
                <h4 class="title">Phone Number</h4>
                <a href="tel:+918072280620">+91 80722-80620</a>
              </div>
            </div>

            <div class="footer__info--item d-flex align-items-center">
              <div class="icon mr-20">
                <img loading="lazy" alt="Email icon" src="<?= $base_url ?>/assets/images/icons/footer-info-icon-2.webp"
                  width="24" height="24" />
              </div>
              <div class="content">
                <h4 class="title">Email Address</h4>
                <a href="mailto:info@gryphalcode.com">info@gryphalcode.com</a>
              </div>
            </div>

            <div class="footer__info--item d-flex align-items-center">
              <div class="icon mr-20">
                <img loading="lazy" alt="Location icon"
                  src="<?= $base_url ?>/assets/images/icons/footer-info-icon-3.webp" width="24" height="24" />
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
                <a href="<?= $base_url ?>/blog">
                  <i class="fal fa-file-alt"></i>
                  <span>Blog</span>
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
    <button class="search-close-btn" aria-label="Close search" style="background:none;border:none;cursor:pointer;"><i
        class="fal fa-times search-close" id="search-close"></i></button>
    <div class="search-cell">
      <form method="get" action="<?= $base_url ?>/blog" role="search">
        <div class="search-field-holder">
          <input type="search" name="q" class="main-search-input" placeholder="Search insights and services..."
            aria-label="Search site content" />
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end fullscreen search -->