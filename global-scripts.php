<?php if(!isset($base_url)) { $base_url = '.'; } ?>
<!--========= JS Shared Libraries =========-->
<script defer src="<?= $base_url ?>/assets/js/jquery-2.2.4.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/bootstrap.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/jquery.meanmenu.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/jquery.nice-select.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/lightcase.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/owl.carousel.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/js_jquery.knob.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/js_jquery.appear.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/tilt.jquery.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/counterup.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/circle-progress.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/wow.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/waypoint.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/seo-engine.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/main.js"></script>

<!-- Microsoft Clarity Analytic -->
<script nonce="<?= htmlspecialchars($GLOBALS['cspNonce'] ?? '', ENT_QUOTES) ?>" type="text/javascript">
  (function (c, l, a, r, i, t, y) {
    c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
    t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i;
    y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
  })(window, document, "clarity", "script", "rj83dnd19x");
</script>

<!-- Advanced Behavioral Analytics & Event Tracking -->
<script nonce="<?= htmlspecialchars($GLOBALS['cspNonce'] ?? '', ENT_QUOTES) ?>">
  const gryphalGa4Id = '<?= addslashes(getenv('GRYPHAL_GA4_ID') ?: 'G-3J6X1HS36W') ?>';
  const gryphalAdsConversionId = '<?= addslashes(getenv('GRYPHAL_ADS_CONVERSION_ID') ?: '') ?>';
  window.gtag = window.gtag || function () { window.dataLayer.push(arguments); };
  const gryphalParams = new URLSearchParams(window.location.search);
  const utmKeys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
  utmKeys.forEach((key) => {
    const value = gryphalParams.get(key);
    if (value) localStorage.setItem('gryphal_' + key, value);
  });

  let scrollMarks = [25, 50, 75, 100];
  window.addEventListener('scroll', function () {
    const scrollDepth = Math.round((window.scrollY + window.innerHeight) / document.documentElement.scrollHeight * 100);

    if (scrollMarks.length > 0 && scrollDepth >= scrollMarks[0]) {
      const milestone = scrollMarks.shift();
      gtag('event', 'scroll_depth', { 'depth': milestone + '%' });
    }
  }, { passive: true });

  document.querySelectorAll('form').forEach(form => {
    utmKeys.forEach((key) => {
      let input = form.querySelector('input[name="' + key + '"]');
      if (!input) {
        input = document.createElement('input');
        input.type = 'hidden';
        input.name = key;
        form.appendChild(input);
      }
      input.value = localStorage.getItem('gryphal_' + key) || '';
    });
    const landingInput = document.createElement('input');
    landingInput.type = 'hidden';
    landingInput.name = 'landing_page';
    landingInput.value = window.location.pathname;
    form.appendChild(landingInput);

    form.addEventListener('focusin', () => {
      gtag('event', 'form_start', { 'form_id': form.id || 'unnamed_form' });
    }, { once: true });

    // Capture Conversion for Google Analytics, Google Ads, Meta Pixel & GTM DataLayer
    form.addEventListener('submit', () => {
      // 1. GA4 Push
      gtag('event', 'conversion', {
        'send_to': gryphalGa4Id,
        'event_category': 'lead',
        'event_label': 'form_submission'
      });
      // 2. Google Ads Conversion Tracker
      if (gryphalAdsConversionId) {
        gtag('event', 'conversion', {
          'send_to': gryphalAdsConversionId
        });
      }
      // 3. Meta / Facebook Pixel Lead
      if (typeof fbq === 'function') {
        fbq('track', 'Lead');
      }
      // 4. DataLayer
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'demo_form_submit',
        'form_id': form.id || 'unnamed_form'
      });
    });
  });

  document.querySelectorAll('a.site-btn, .premium-btn, .whatsapp-float').forEach((el) => {
    el.addEventListener('click', () => {
      const label = (el.textContent || el.getAttribute('aria-label') || 'cta_click').trim();
      gtag('event', 'cta_click', { cta_label: label, page_path: window.location.pathname });
    });
  });

  const stickyMobileCta = document.querySelector('.gryphal-sticky-mobile-cta');
  const setStickyVisibility = () => {
    if (!stickyMobileCta) return;
    const isMobile = window.matchMedia('(max-width: 767px)').matches;
    stickyMobileCta.style.display = isMobile ? 'block' : 'none';
  };
  setStickyVisibility();
  window.addEventListener('resize', setStickyVisibility);

  // Engagement popup for exit-intent and idle users
  if (!sessionStorage.getItem('gryphal_popup_shown')) {
    const popup = document.createElement('div');
    popup.id = 'gryphal-growth-popup';
    popup.style.cssText = 'position:fixed;inset:0;background:rgba(0,0,0,.65);display:none;z-index:99999;align-items:center;justify-content:center;padding:16px;';
    const variant = Math.random() < 0.5 ? 'A' : 'B';
    const title = variant === 'A' ? 'Need faster growth and better conversions?' : 'Want more leads from your current traffic?';
    const desc = variant === 'A'
      ? 'Book a free strategy call and get a practical roadmap for traffic, leads, and sales.'
      : 'Get a no-cost conversion review and discover quick wins for leads and sales.';
    popup.innerHTML = '<div style="max-width:540px;width:100%;background:#fff;border-radius:12px;padding:24px;position:relative;">'
      + '<button id="gryphal-close-popup" aria-label="Close popup" style="position:absolute;right:10px;top:10px;border:none;background:none;font-size:22px;cursor:pointer;">&times;</button>'
      + '<h3 style="margin-bottom:10px;">' + title + '</h3>'
      + '<p style="margin-bottom:18px;">' + desc + '</p>'
      + '<div style="display:flex;gap:10px;flex-wrap:wrap;">'
      + '<a href="<?= $base_url ?>/request-demo" class="site-btn" id="gryphal-popup-primary">Book Free Strategy Call</a>'
      + '<a href="<?= $base_url ?>/contact" class="site-btn transparent" id="gryphal-popup-secondary">Talk to an Expert</a>'
      + '</div></div>';
    document.body.appendChild(popup);
    gtag('event', 'growth_popup_variant', { variant });
    const showPopup = () => {
      popup.style.display = 'flex';
      sessionStorage.setItem('gryphal_popup_shown', '1');
      gtag('event', 'growth_popup_view', { page_path: window.location.pathname });
    };
    setTimeout(showPopup, 35000);
    document.addEventListener('mouseout', (e) => {
      if (e.clientY <= 0 && !sessionStorage.getItem('gryphal_popup_shown')) showPopup();
    });
    popup.addEventListener('click', (e) => {
      if (e.target.id === 'gryphal-growth-popup' || e.target.id === 'gryphal-close-popup') {
        popup.style.display = 'none';
      }
    });
  }

  // Newsletter AJAX Handler
  const newsletterForm = document.getElementById('newsletter-form');
  if (newsletterForm) {
    ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'].forEach((key) => {
      const input = newsletterForm.querySelector('input[name="' + key + '"]');
      if (input) input.value = localStorage.getItem('gryphal_' + key) || '';
    });
    newsletterForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const formData = new FormData(this);
      const email = (formData.get('email') || '').toString();
      const responseDiv = document.getElementById('newsletter-response');
      const submitBtn = this.querySelector('button');

      submitBtn.disabled = true;
      submitBtn.innerText = 'Subscribing...';

      fetch('<?= $base_url ?>/newsletter-handler.php', {
        method: 'POST',
        body: new URLSearchParams(formData).toString(),
        headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
      })
        .then(response => response.json())
        .then(data => {
          responseDiv.style.display = 'block';
          responseDiv.style.color = data.success ? '#12DCA2' : '#FF4C4C';
          responseDiv.innerText = data.message;
          if (data.success) {
            newsletterForm.reset();
            gtag('event', 'newsletter_signup', {
              email_domain: email.includes('@') ? email.split('@')[1] : 'unknown',
              source: localStorage.getItem('gryphal_utm_source') || '(direct)',
              medium: localStorage.getItem('gryphal_utm_medium') || '(none)'
            });
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({ event: 'newsletter_signup_success' });
          }
        })
        .catch(error => {
          responseDiv.style.display = 'block';
          responseDiv.style.color = '#FF4C4C';
          responseDiv.innerText = 'An error occurred. Please try again.';
        })
        .finally(() => {
          submitBtn.disabled = false;
          submitBtn.innerText = 'Subscribe Free';
        });
    });
  }
</script>

<script nonce="<?= htmlspecialchars($GLOBALS['cspNonce'] ?? '', ENT_QUOTES) ?>">
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('<?= $base_url ?>/sw.js').then(reg => {
        console.log('GryphalCode SW registered:', reg);
      }).catch(err => {
        console.log('SW registration failed:', err);
      });
    });
  }
</script>