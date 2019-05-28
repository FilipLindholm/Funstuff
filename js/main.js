$(function() {
  // STICKY STUFF

  if ($(window).width() > 700) {
    $(".product-info-wrap").pinBox({
      // Top: "70px",
      Container: "#container",
      MinWidth: "850px"
    });

    $(".product-images").pinBox({
      //Top: "70px",
      Container: "#container",
      MinWidth: "1400px"
    });
  }

  var menu = $(".menu-icon, .menu-mobile-icon");
  nav = $(".nav");
  navItems = $("#products ul li");
  subNav = $(".nav-sub");
  subCategory = $(".sub-category li");
  subHeading = $(".sub-category h3");

  var active = false;

  menu.on("click", function(e) {
    if (!active) {
      $(".hamburger").addClass("open");
      nav.velocity(
        {
          translateX: [0, "-40%"]
        },
        { duration: 400 }
      );
      navItems.velocity("transition.slideUpBigIn", { stagger: 50 });
      overlay.velocity({ opacity: 1 });
      subNav.velocity(
        {
          translateX: [0, "-100%"]
        },

        { duration: 700 }
      );

      subCategory.velocity("transition.fadeIn", { stagger: 20 });
      active = true;
      //$(".products ul li").css({ transition: "all 0.2s ease-in-out" });
    } else {
      navItems.velocity("reverse");
      overlay.velocity("reverse");
      subNav.velocity("reverse");
      nav.velocity("reverse", { delay: 500 });
      $(".hamburger").removeClass("open");
      active = false;
    }
  });

  //TABS MENU

  //figure out which panel to show
  $(".tab").on("click", function() {
    var tabMenu = $(this).closest(".nav");

    tabMenu.find(".nav-tabs, .tabs, .active").removeClass("active");
    $(this).addClass("active");

    var panelToShow = $(this).attr("rel");

    //hide current
    $("#" + panelToShow)
      .siblings()
      .velocity("transition.slideLeftBigOut", {
        duration: 200,
        stagger: 60,
        complete: function() {
          $("#" + panelToShow).velocity("transition.fadeIn", { duration: 300 });
        }
      });
  });

  // ----------- //

  //BLÄDDRA MENY

  // ----------- //

  //SÖK ÖPPNA//

  var searchOpen = false;
  const searchBodyScroll = document.querySelector(".search");

  $(".search-icon, #search-mobile").on("click", function() {
    if (!searchOpen) {
      $(".search-open").css("display", "none");
      $(".search-close").css("display", "block");
      $(".search").velocity("transition.fadeIn");
      $(".main").addClass("search-active");
      $(".search-field").velocity(
        {
          translateX: [0, "-120%"]
        },
        { duration: 900, easing: [50, 8] }
      );
      bodyScrollLock.disableBodyScroll(searchBodyScroll);
      searchOpen = true;
    } else {
      $(".search-field").velocity("reverse");
      $(".search")
        .velocity("reverse")
        .css("display", "none");
      $(".main").removeClass("search-active");
      $(".search-close").css("display", "none");
      $(".search-open").css("display", "block");
      bodyScrollLock.clearAllBodyScrollLocks();
      searchOpen = false;
    }
  });

  var swiperProductsSearch = new Swiper(".swiper-container-products", {
    slidesPerView: 6.2,
    spaceBetween: 30,
    freeMode: true,
    observer: true,
    observeParents: true,
    breakpoints: {
      500: {
        observer: true,
        observeParents: true,
        slidesPerView: 2.2,
        spaceBetween: 10
      }
    }
  });
  var swiperCatManSearch = new Swiper(
    ".swiper-container-category, .swiper-container-brand",
    {
      slidesPerView: 5,
      spaceBetween: 30,
      freeMode: true,
      observer: true,
      observeParents: true,
      breakpoints: {
        500: {
          observer: true,
          observeParents: true,
          slidesPerView: 2.2,
          spaceBetween: 10
        }
      }
    }
  );

  // ----------- //

  // VISA SÖKRESULTAT //

  $(".search").one("keypress", function() {
    $(".products-search .product").velocity("transition.fadeIn", {
      stagger: 100,
      delay: 300
    });

    $(".category-link, .brand, h3").velocity({ opacity: 1 });
  });

  // ----------- //

  //TABS DESCRIPTION/REVIEWS

  $("#panel2, #panel4").hide();

  $(".tabs")
    .find("a")
    .on("click", function(e) {
      var tabs = $(this).closest(".tab-panels");
      e.preventDefault();

      tabs.find(".active").removeClass("active");
      $(this)
        .closest(".tabs li")
        .addClass("active");

      var newTab = $(this.hash);
      var newHeight = newTab.height();
      var container = tabs.find(".tab-content");

      newTab.siblings(":visible").fadeOut("fast");
      container.animate({ height: newHeight }, 300, function() {
        newTab.fadeIn("fast");
      });
      $("html, body").animate(
        {
          scrollTop: container.offset().top - 80
        },
        500
      );
    });

  // ----------- //

  // ============== TABS ALTERNETIVES START ================//

  $(".slider-alt").hide();
  $(".slider-alt:first").show();

  $(".alternetives-title, .box-tabs").click(function() {
    $(".slider-alt").hide();
    var activeTab = $(this).attr("rel");
    $("#" + activeTab).show();

    $(".alternetives-title, .box-tabs").removeClass("active");
    $(this).addClass("active");
  });

  // ============== TABS ALTERNETIVES END ================//

  // ÖPPNA TILLBEHÖR-MODUL //

  /*

  let card = $("#accessories-slide-in");
  let toggler = $(".accessories-button");
  let overlay = $(".overlay-background");
  let product = $(".accessories-slide-in .product-wrap-accessories");

  let animate = toggler.on("click", function() {
    if (!card.is(":visible")) {
      card.velocity("transition.bounceUpIn");
      overlay.velocity({ opacity: 1 });
      product.velocity("transition.slideUpBigIn", {
        stagger: 100,
        delay: 300
      });
    } else {
      product.velocity("transition.slideDownBigOut");
      card.velocity("transition.bounceDownOut");
      overlay.velocity({ delay: 300, opacity: 0 });
    }
  });

*/

  var AccButton = $(".accessories-button");
  var slide = $("#accessories-slide-in");

  var overlay = $(".overlay-background");

  var currentAcc = 1;

  AccButton.on("click", function() {
    var accessoriesRel = $(this).attr("rel");
    var accessoriesId = $("#" + accessoriesRel);

    currentAcc = parseInt(accessoriesRel.replace("accessories-", ""));
    //console.log("current ID:" + currentAcc);
    overlay.velocity({ opacity: 1 });
    slide.velocity("transition.bounceUpIn");

    accessoriesId
      .addClass("active")
      .find(".product-accessories-outer")
      .velocity("transition.slideUpBigIn", {
        stagger: 100,
        delay: 300
      });
  });

  $("#showNext").on("click", function() {
    if (currentAcc < 6) {
      $("#accessories-" + currentAcc)
        .find(".product-accessories-outer")
        .velocity("transition.fadeOut", {});

      $("#accessories-" + (currentAcc + 1))
        .addClass("active")
        .find(".product-accessories-outer")
        .velocity("transition.flipBounceYIn", {
          stagger: 100,
          delay: 450
        });
      currentAcc++;
    }
  });

  $("#showPrev").on("click", function() {
    if (currentAcc > 1) {
      $("#accessories-" + currentAcc)
        .find(".product-accessories-outer")
        .velocity("transition.fadeOut", {});

      $("#accessories-" + (currentAcc - 1))
        .addClass("active")
        .find(".product-accessories-outer")
        .velocity("transition.flipBounceYIn", {
          stagger: 100,
          delay: 450
        });
      currentAcc++;
    }
  });

  // -- //

  // ========================  WAYPOINT ======================== //

  var accessoriesButton = $(".accessories-button");

  $(".product-accessories").waypoint(
    function() {
      accessoriesButton.velocity("transition.bounceRightIn", {
        stagger: 200
      });
      this.destroy();
    },
    {
      offset: "90%"
    }
  );

  // ========================  END WAYPOINT ======================== //

  // ------ ///

  // BLÄDDRA MELLAN TILLBEHÖR //

  // ------ ///

  // KLICK UTANFÖR STÄNGER TILLBEHÖR //

  // ------ ///

  var addInput = "#qty, #qty-mobile";
  var n = 1;

  $(addInput).val(n);

  //On click add 1 to n
  $(".plus-button, .plus-button-mobile").on("click", function() {
    $(addInput).val(++n);
  });

  $(".min-button, .min-button-mobile").on("click", function() {
    //If n is bigger or equal to 1 subtract 1 from n
    if (n >= 1) {
      $(addInput).val(--n);
    } else {
      //Otherwise do nothing
    }
  });

  // ------ ///

  // BACK TO TOP //

  $(".back-to-top").on("click", function() {
    $("header").velocity("scroll", {
      duration: 1200,
      offset: -50
    });
  });

  // ------ ///
  // =========== CLICK COMPARE ================//

  $(".compare-product").on("click", function() {
    $(this).velocity("callout.tada");
    $(this).toggleClass("active");
  });

  // =========== READMORE ================//

  $(".readmore-btn").on("click", function() {
    $(".category-text").toggleClass("readmore");
  });

  // =========== OPEN MOBILE PURCHASE ================//

  if (top.location.pathname == "/produktsida.php") {
    $(".click").on("click", function() {
      $(".purchase-mobile").slideToggle(150);

      $(".main").toggleClass("search-active");
      if ($(this).text() == "stäng") $(this).text("köp");
      else $(this).text("stäng");
    });
  }

  const filterMobile = document.querySelector(".filter-mobile");
  var filterOpenMobile = false;

  if (top.location.pathname == "/kategorisida.php") {
    $(".click span").on("click", function() {
      $(".filter-mobile").slideToggle(150);

      if ($(this).text() == "Visa Resultet") $(this).text("Filtrera");
      else $(this).text("Visa Resultet");

      if (!filterOpenMobile) {
        bodyScrollLock.disableBodyScroll(filterMobile);
        filterOpenMobile = true;
      } else {
        bodyScrollLock.clearAllBodyScrollLocks();
        filterOpenMobile = false;
      }
    });
  }
  // =========== OPEN REVIEWS ================//

  const review = document.querySelector(".form");

  $(".leave-review").on("click", function() {
    $(".reviews-popup").slideDown();
    $(".main").addClass("search-active");
    $(".menu-mobile").hide();
    bodyScrollLock.disableBodyScroll(review);
  });
  $(".reviews-popup")
    .find(".close")
    .on("click", function() {
      $(".reviews-popup").fadeOut();
      $(".main").removeClass("search-active");
      $(".menu-mobile").show();
      bodyScrollLock.enableBodyScroll(review);
    });

  // =========== FILTER ==============//
  $(".filter").addClass("close");

  $(".filter-icon-wrap").on("click", function() {
    if ($(".filter").hasClass("close")) {
      $(".filter").velocity("transition.fadeIn");
      overlay.velocity({ opacity: 1 });

      $(".filter").removeClass("close");
    } else {
      $(".filter").velocity("transition.fadeOut");
      overlay.velocity({ opacity: 0 });
      $(".filter").addClass("close");
    }
  });

  // =========== ================//

  $("#product-content").load("content/box-item.html", function() {
    $.getScript("js/quickview.js");
    $.getScript("js/quickview-long.js");
  });

  $("#view img").click(function() {
    $("#view img").removeClass("active");
    $(this).addClass("active");
    var content = $(this).attr("id");
    $("#product-content").load("content/" + content + ".html", function() {
      $.getScript("js/quickview.js");
      $.getScript("js/quickview-long.js");
    });
  });

  // =========== ================//

  $(".view-wrap-mobile").hide();

  $(".current-view").click(function(e) {
    e.stopPropagation();
    $(".view-wrap-mobile").toggle();

    $("#view-mobile img").click(function(e) {
      e.stopPropagation();
      $("#view-mobile img").removeClass("active");
      $(this).addClass("active");
      $(".view-wrap-mobile").hide();
      $(".current-view img").attr("src", $(this).attr("src"));
      var content = $(this).attr("id");
      $("#product-content").load("content/" + content + ".html");
    });
  });

  $("body").click(function() {
    $(".view-wrap-mobile").hide();
  });

  // ************** HIDE HEADER ON SCROLL ************** //

  // Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $("header").outerHeight();

  $(window).scroll(function(event) {
    didScroll = true;
  });

  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta) return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      $("header")
        .removeClass("nav-down")
        .addClass("nav-up");
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        $("header")
          .removeClass("nav-up")
          .addClass("nav-down");
      }
    }

    lastScrollTop = st;
  }

  // ************** END HIDE HEADER ON SCROLL ************** //

  // ------ ///

  $('input[type="checkbox"],input[type="radio"], label').click(function(e) {
    e.stopPropagation();
  });
  $(".price-range").asRange({
    range: true,
    format: function(value) {
      return value + " KR ";
    }
  });

  $(".has-children").on("click", function() {
    $(".sub-category-ul").toggleClass("move-out");
    $(".sub-category-ul").removeClass("move-in");
    $(".is-hidden").toggleClass("move-in");
    $(".is-hidden").removeClass("move-out");
  });
  $(".go-back").on("click", function() {
    $(".is-hidden").toggleClass("move-out");
    $(".sub-category-ul").toggleClass("move-in");
  });

  var filterOpen = $(".filter-box-item, .filter-box, .shadow, .overlay");
  filterOpen;
  $(".filter-cat").on("click", function() {
    $(this)
      .find(filterOpen)
      .addClass("open");
    $(this)
      .siblings()
      .find(filterOpen)
      .removeClass("open");
  });

  // *********** SLIDE STARTPAGE *************//

  var newsSlider = new Swiper(".slider", {
    slidesPerView: "auto",
    freeMode: true,
    infinite: false,
    slidesPerGroup: 2,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  var clock = $("#clock").FlipClock(86400, {
    language: "swedish",
    countdown: true
  });

  var newsSlider = new Swiper(".deal-slider", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function(index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      }
    },
    autoplay: {
      delay: 1500,
      disableOnInteraction: false
    }
  });

  /*

  // FOOTER ACCORDION //

  $(".footer-box").mouseenter(function() {
    $(this).css("z-index", "10");
    var footerContent = $(this).attr("rel");
    var footerContentShow = $("#" + footerContent);

    footerContentShow.delay(150).fadeIn(500);
  });

  $(".footer-box").mouseleave(function() {
    $(this).css("z-index", "1");
    var footerContent = $(this).attr("rel");
    var footerContentShow = $("#" + footerContent);
    footerContentShow.fadeOut(100);
  }); 
  */
});
