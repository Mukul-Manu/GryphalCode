<!--========= JS Shared Libraries =========-->
<script src="<?= $base_url ?>/assets/js/jquery-2.2.4.min.js"></script>
<script src="<?= $base_url ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= $base_url ?>/assets/js/jquery.meanmenu.min.js"></script>
<script src="<?= $base_url ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?= $base_url ?>/assets/js/lightcase.min.js"></script>
<script src="<?= $base_url ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= $base_url ?>/assets/js/js_jquery.knob.min.js"></script>
<script src="<?= $base_url ?>/assets/js/js_jquery.appear.min.js"></script>
<script src="<?= $base_url ?>/assets/js/tilt.jquery.min.js"></script>
<script src="<?= $base_url ?>/assets/js/counterup.min.js"></script>
<script src="<?= $base_url ?>/assets/js/circle-progress.min.js"></script>
<script src="<?= $base_url ?>/assets/js/wow.min.js"></script>
<script src="<?= $base_url ?>/assets/js/waypoint.min.js"></script>
<script src="<?= $base_url ?>/assets/js/seo-engine.min.js"></script>
<script src="<?= $base_url ?>/assets/js/main.js"></script>

<!-- Microsoft Clarity Analytic -->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "rj83dnd19x");
</script>

<!-- Advanced Behavioral Analytics & Event Tracking -->
<script>
  // Google Ads conversion tracking for Phase 6 (AEO & Pixel)
  window.gtag = window.gtag || function() { window.dataLayer.push(arguments); };
  gtag('js', new Date());
  // Enhanced Conversions (2026 Privacy Standard)
  gtag('config', 'G-3J6X1HS36W', {
    'allow_enhanced_conversions': true,
    'restricted_data_processing': true
  });
  // Google Ads Base Segment (placeholder for AW-ID if provided)
  // gtag('config', 'AW-XXXXXXX'); 

  window.addEventListener('scroll', function() {
    const scrollDepth = Math.round((window.scrollY + window.innerHeight) / document.documentElement.scrollHeight * 100);
    if (scrollDepth % 25 === 0) {
      gtag('event', 'scroll_depth', { 'depth': scrollDepth + '%' });
    }
  }, { passive: true });

  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('focusin', () => {
      gtag('event', 'form_start', { 'form_id': form.id || 'unnamed_form' });
    }, { once: true });
    
    // Capture Conversion for Google Pixel (10/10 Lead Metric)
    form.addEventListener('submit', () => {
      gtag('event', 'conversion', {
        'send_to': 'G-3J6X1HS36W',
        'event_category': 'lead',
        'event_label': 'form_submission'
      });
    });
  });
</script>

<script>
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
