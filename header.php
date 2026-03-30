
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
                <a href="tel:9878768648765"><span class="icon"><i class="fal fa-phone"></i></span>
                  +91 80722-80620</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 text-xl-right text-lg-right text-center d-none d-lg-block">
          <div class="header__top--social" style="padding-top: 10px;">
            <a href="https://www.facebook.com/profile.php?id=61570214392615" target="_blank" rel="noopener noreferrer" style="color:#fff; margin-left: 15px; font-size: 16px;"><i class="fa fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/gryphal_code/" target="_blank" rel="noopener noreferrer" style="color:#fff; margin-left: 15px; font-size: 16px;"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
    </div>
  </div>
  <div class="navarea">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-4 col-6 my-auto">
          <div class="header__logo">
            <a href="<?= $base_url ?>/index.php">
              <img src="<?= $base_url ?>/assets/images/logo/logo.webp" alt="GryphalCode Logo" />
            </a>
          </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-6 my-auto">
          <div class="header__menu">
            <nav id="mobile-menu">
              <ul>
                <li>
                  <a href="<?= $base_url ?>/index.php">Home </a>
                </li>
                <li><a href="<?= $base_url ?>/about.php">About</a></li>
               <li><a href="<?= $base_url ?>/case-studies.php">Case Studies</a></li>
                <li>
                  <a href="<?= $base_url ?>/services.php">Services <span>+</span></a>
                  <ul class="sub-menu">
                    
                    <li>
                      <a href="<?= $base_url ?>/service-details/custom-software-development.php">Custom Software</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/ai-machine-learning-solutions.php">AI &amp; ML</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/cloud-devops-solutions.php">Cloud &amp; DevOps</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/api-integration-automation.php">API &amp; Automation</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/whatsapp-business-solutions.php">WhatsApp Business API</a>
                    </li>
                    <li>
                      <a href="<?= $base_url ?>/service-details/food-delivery-application.php">Food Delivery App</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="javascript:void(0)">Pages <span>+</span></a>
                  <ul class="sub-menu">
                    <li><a href="<?= $base_url ?>/faq.php">Faq</a></li>
                    <li><a href="<?= $base_url ?>/careers.php">Careers</a></li>
                    
                    <li><a href="<?= $base_url ?>/why-choose.php">Why Choose</a></li>
                    
                  </ul>
                </li>
                
                <li><a href="<?= $base_url ?>/contact.php">Contact</a></li>
              </ul>
            </nav>
            <div class="mobile-menu"></div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-8 my-auto d-none d-xl-block d-lg-block">
          <div class="navarea__right">
            <a href="<?= $base_url ?>/contact.php" class="site-btn">Get A Quote </a>
            <button class="search-trigger">
              <i class="fal fa-search"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>