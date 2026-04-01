<!--========= JS Shared Libraries =========-->
<script src="<?= $base_url ?>/assets/js/jquery-2.2.4.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/bootstrap.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/jquery.meanmenu.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/jquery.nice-select.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/lightcase.js"></script>
<script defer src="<?= $base_url ?>/assets/js/owl.carousel.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/js_jquery.knob.js"></script>
<script defer src="<?= $base_url ?>/assets/js/js_jquery.appear.js"></script>
<script defer src="<?= $base_url ?>/assets/js/tilt.jquery.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/counterup.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/circle-progress.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/wow.min.js"></script>
<script defer src="<?= $base_url ?>/assets/js/waypoint.js"></script>
<script defer src="<?= $base_url ?>/assets/js/seo-engine.js"></script>
<script defer src="<?= $base_url ?>/assets/js/main.js"></script>
<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('<?= $base_url ?>/sw.js').then(reg => {
      console.log('SW registered:', reg);
    }).catch(err => {
      console.log('SW registration failed:', err);
    });
  });
}
</script>
