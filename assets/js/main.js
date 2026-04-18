(function ($) {
  "use strict";

  /*------------- preloader js --------------*/
  /*------------- preloader js --------------*/
  function loader() {
    function handleLoad() {
      $("#ctn-preloader").addClass("loaded");
      $("#loading").fadeOut(500);
      // Una vez haya terminado el preloader aparezca el scroll

      if ($("#ctn-preloader").hasClass("loaded")) {
        // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
        $("#preloader")
          .delay(900)
          .queue(function () {
            $(this).remove();
          });
      }
    }

    if (document.readyState === "complete") {
      handleLoad();
    } else {
      $(window).on("load", handleLoad);
      // Fallback: Clear preloader after 3 seconds anyway to avoid stuck UI
      setTimeout(handleLoad, 3000);
    }
  }
  loader();

  $(window).on("load", function () {
    background();
  });

  // background image js
  function background() {
    var img = $(".bg_img");
    img.css("background-image", function () {
      var bg = "url(" + $(this).data("background") + ")";
      return bg;
    });
  }

  // disable legacy mobile-menu
  /*
  jQuery("#mobile-menu").meanmenu({
    meanScreenWidth: "991",
    meanMenuContainer: ".mobile-menu",
  });
  */

  // Gryphal Premium Mobile Nav Logic
  var scrollTopBeforeMenu = 0;

  function isMobileMenuViewport() {
    return window.matchMedia("(max-width: 991px)").matches;
  }

  function lockDocumentScroll() {
    var $body = $("body");
    var $html = $("html");
    scrollTopBeforeMenu = window.pageYOffset || document.documentElement.scrollTop || 0;
    $body.css("top", "-" + scrollTopBeforeMenu + "px");
    $html.addClass("gryphal-nav-open");
    $body.addClass("gryphal-nav-open");
  }

  function unlockDocumentScroll() {
    var $body = $("body");
    var $html = $("html");
    $html.removeClass("gryphal-nav-open");
    $body.removeClass("gryphal-nav-open");
    $body.css("top", "");
    window.scrollTo(0, scrollTopBeforeMenu);
  }

  function openMobileNav() {
    if (!isMobileMenuViewport()) return;
    $(".gryphal-nav-toggle").addClass("active").attr("aria-expanded", "true");
    $(".gryphal-mobile-nav").addClass("active").attr("aria-hidden", "false");
    lockDocumentScroll();
  }

  function closeMobileNav() {
    $(".gryphal-nav-toggle").removeClass("active").attr("aria-expanded", "false");
    $(".gryphal-mobile-nav").removeClass("active").attr("aria-hidden", "true");
    unlockDocumentScroll();
  }

  $(document).on("click", ".gryphal-nav-toggle", function (e) {
    e.preventDefault();
    if ($(".gryphal-mobile-nav").hasClass("active")) {
      closeMobileNav();
      return;
    }
    openMobileNav();
  });

  // Submenu dropdown toggle (the + box)
  $(document).on("click", ".gryphal-mobile-nav .dropdown-toggle-btn", function (e) {
    e.preventDefault();
    e.stopPropagation();
    var $li = $(this).closest("li.has-dropdown");
    $li.toggleClass("open");
    $(this).text($li.hasClass("open") ? "−" : "+");
  });

  // Close button (X circle) inside mobile nav
  $(document).on("click", ".mobile-nav-close", function (e) {
    e.preventDefault();
    closeMobileNav();
  });

  // Close when tapping outside the panel in mobile view
  $(document).on("click", function (e) {
    var $mobileNav = $(".gryphal-mobile-nav");
    if (
      $mobileNav.hasClass("active") &&
      !$(e.target).closest(".gryphal-mobile-nav, .gryphal-nav-toggle").length
    ) {
      closeMobileNav();
    }
  });

  // ESC key close support and cleanup across orientation/viewport changes
  $(document).on("keydown", function (e) {
    if (e.key === "Escape" && $(".gryphal-mobile-nav").hasClass("active")) {
      closeMobileNav();
    }
  });

  $(window).on("resize orientationchange", function () {
    if (!isMobileMenuViewport() && $(".gryphal-mobile-nav").hasClass("active")) {
      closeMobileNav();
    }
  });

  // testimonial carousel
  $(".testimonials").owlCarousel({
    items: 1,
    loop: true,
    smartSpeed: 800,
    nav: false,
    dots: true,
    responsiveClass: true,
  });

  $(".testimonials__2").owlCarousel({
    items: 3,
    loop: true,
    smartSpeed: 800,
    nav: false,
    dots: true,
    responsiveClass: true,
    center: true,
    responsive: {
      0: {
        items: 1,
        margin: 0,
        center: false,
      },
      576: {
        items: 1,
        margin: 0,
        center: false,
      },
      992: {
        items: 2,
        margin: 30,
      },
      1200: {
        margin: 30,
      },
      1500: {
        margin: 40,
      },
    },
  });

  $(".testimonials__3").owlCarousel({
    items: 3,
    loop: true,
    smartSpeed: 800,
    nav: false,
    dots: true,
    responsiveClass: true,
    center: true,
    responsive: {
      0: {
        items: 1,
        margin: 0,
        center: false,
      },
      576: {
        items: 1,
        margin: 0,
        center: false,
      },
      992: {
        items: 2,
        margin: 30,
      },
      1500: {
        margin: 30,
      },
    },
  });

  // team carousel
  $(".team-carousel").owlCarousel({
    items: 4,
    loop: true,
    smartSpeed: 800,
    nav: true,
    navText: [
      "<i class='fal fa-arrow-left'></i>",
      "<i class='fal fa-arrow-right'></i>",
    ],
    dots: false,
    responsiveClass: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  // brand carousel
  $(".brand__carousel").owlCarousel({
    loop: true,
    smartSpeed: 800,
    nav: false,
    dots: false,
    responsiveClass: true,
    margin: 30,
    items: 5,
    responsive: {
      0: {
        items: 1,
        margin: 0,
      },
      768: {
        items: 2,
        margin: 0,
      },
      992: {
        items: 3,
      },
      1200: {
        items: 4,
      },
      1500: {
        items: 5,
      },
    },
  });

  // bannerSlide
  var slider = $(".bannerSlide");
  slider.owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    smartSpeed: 800,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    loop: true,
    slideSpeed: 3000,
    nav: true,
    dots: false,
    navText: [
      "<i class='fal fa-arrow-left'></i>",
      "<i class='fal fa-arrow-right'></i>",
    ],
    //autoplay: true,
  });

  slider.on("translate.owl.carousel", function () {
    var layer = $("[data-animation]");
    layer.each(function () {
      var s_animation = $(this).data("animation");
      $(this)
        .removeClass("animated " + s_animation)
        .css("opacity", "0");
    });
  });

  $("[data-delay]").each(function () {
    var animation_del = $(this).data("delay");
    $(this).css("animation-delay", animation_del);
  });

  $("[data-duration]").each(function () {
    var animation_dur = $(this).data("duration");
    $(this).css("animation-duration", animation_dur);
  });

  slider.on("translated.owl.carousel", function () {
    var layer = slider.find(".owl-item.active").find("[data-animation]");
    layer.each(function () {
      var s_animation = $(this).data("animation");
      $(this)
        .addClass("animated " + s_animation)
        .css("opacity", "1");
    });
  });

  // Activate scroll to top
  $(document).on("click", "#scroll-top", function () {
    $("html , body").animate(
      {
        scrollTop: 0,
      },
      1000,
    );
  });

  // Nice select
  $("select").niceSelect();

  // offcanvas menu
  $(".menu-tigger").on("click", function () {
    $(".extra-info,.offcanvas-overly").addClass("active");
    return false;
  });
  $(".menu-close,.offcanvas-overly").on("click", function () {
    $(".extra-info,.offcanvas-overly").removeClass("active");
  });

  // circle-progress
  if (typeof $.fn.knob != "undefined") {
    $(".knob").each(function () {
      var $this = $(this),
        knobVal = $this.attr("data-rel");

      $this.knob({
        draw: function () {
          $(this.i).val(this.cv + "%");
        },
      });

      $this.appear(
        function () {
          $({
            value: 0,
          }).animate(
            {
              value: knobVal,
            },
            {
              duration: 2000,
              easing: "swing",
              step: function () {
                $this.val(Math.ceil(this.value)).trigger("change");
              },
            },
          );
        },
        {
          accX: 0,
          accY: -150,
        },
      );
    });
  }

  // Search Js
  var $searchWrap = $(".search-wrap");

  $(document).on("click", ".search-trigger", function (e) {
    e.preventDefault();
    e.stopPropagation();
    $searchWrap.stop(true, true).fadeToggle(500);
    $(".search-trigger, #search-close").toggleClass("open");
  });

  $(document).on("click", "#search-close", function (e) {
    e.preventDefault();
    e.stopPropagation();
    closeSearch();
  });

  function closeSearch() {
    $searchWrap.fadeOut(200);
    $(".search-trigger, #search-close").removeClass("open");
  }

  $(document).on("click", function (e) {
    if (!$(e.target).closest(".search-inner, .search-trigger").length) {
      if ($searchWrap.is(":visible")) {
        closeSearch();
      }
    }
  });

  // Prevent closing when clicking inside the search field
  $(document).on("click", ".search-inner", function (e) {
    e.stopPropagation();
  });

  // Activate lightcase
  $("a[data-rel^=lightcase]").lightcase();

  // js - tilt
  if ($(".js-tilt").length) {
    $(".js-tilt").tilt();
  }

  // InHover Active
  $(".pricing").on("mouseenter", function () {
    $(this)
      .addClass("active")
      .parent()
      .siblings()
      .find(".pricing")
      .removeClass("active");
  });

  // Active Odometer Counter
  $(".odometer").appear(function (e) {
    var odo = $(".odometer");
    odo.each(function () {
      var countNumber = $(this).attr("data-count");
      $(this).html(countNumber);
    });
  });

  // Activate counter
  $(".counter").countUp({
    time: 1000,
    delay: 10,
  });

  // postbox_gallery active
  $(".post_gallery").owlCarousel({
    items: 1,
    loop: true,
    smartSpeed: 800,
    nav: false,
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    dots: false,
    nav: true,
    navText: [
      "<i class='fal fa-arrow-left'></i>",
      "<i class='fal fa-arrow-right'></i>",
    ],
    dots: false,
  });

  // map active
  function basicmap() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 13,
      scrollwheel: false,
      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(11.0168, 76.9558), // Coimbatore
      // This is where you would paste any style found on Snazzy Maps.
      styles: [
        {
          stylers: [
            {
              hue: "#AADAFF",
            },
          ],
        },
        {
          featureType: "road",
          elementType: "labels",
          stylers: [
            {
              visibility: "off",
            },
          ],
        },
        {
          featureType: "road",
          elementType: "geometry",
          stylers: [
            {
              lightness: 100,
            },
            {
              visibility: "simplified",
            },
          ],
        },
      ],
    };
    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById("contact-map");

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(11.0168, 76.9558),
      map: map,
      title: "GryphalCode",
    });
  }
  if ($("#contact-map").length != 0) {
    google.maps.event.addDomListener(window, "load", basicmap);
  }
})(jQuery);
