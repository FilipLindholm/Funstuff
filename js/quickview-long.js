jQuery(document).ready(function($) {
  //final width --> this is the quick view image slider width
  //maxQuickWidth --> this is the max-width of the quick-view panel
  var sliderFinalWidth = 600,
    maxQuickWidth = 800;

  //open the quick view panel
  $(".cd-trigger-long").on("click", function(event) {
    event.preventDefault();

    var selectedImage = $(this)
        .parent(".cd-item")
        .find("img"),
      slectedImageUrl = selectedImage.attr("src");

    $("body").addClass("overlay-layer");
    animateQuickView(selectedImage, sliderFinalWidth, maxQuickWidth, "open");

    //update the visible slider image in the quick view panel
    //you don't need to implement/use the updateQuickView if retrieving the quick view data with ajax
    updateQuickView(slectedImageUrl);
  });

  //close the quick view panel
  $("body").on("click", function(event) {
    event.preventDefault();
    if (
      $(event.target).is(".cd-close-long, .add-to-cart") ||
      $(event.target).is("body.overlay-layer")
    ) {
      closeQuickView(sliderFinalWidth, maxQuickWidth);
    }
  });
  $(document).keyup(function(event) {
    //check if user has pressed 'Esc'
    if (event.which == "27") {
      closeQuickView(sliderFinalWidth, maxQuickWidth);
    }
  });

  //quick view slider implementation
  $(".cd-quick-view-long").on(
    "click",
    ".cd-slider-navigation-long a",
    function() {
      updateSlider($(this));
    }
  );

  //center quick-view on window resize
  $(window).on("resize", function() {
    if ($(".cd-quick-view-long").hasClass("is-visible")) {
      window.requestAnimationFrame(resizeQuickView);
    }
  });

  function updateSlider(navigation) {
    var sliderConatiner = navigation
        .parents(".cd-slider-wrapper-long")
        .find(".cd-slider-long"),
      activeSlider = sliderConatiner
        .children(".selected-long")
        .removeClass("selected-long");
    if (navigation.hasClass("cd-next")) {
      !activeSlider.is(":last-child")
        ? activeSlider.next().addClass("selected-long")
        : sliderConatiner
            .children("li")
            .eq(0)
            .addClass("selected-long");
    } else {
      !activeSlider.is(":first-child")
        ? activeSlider.prev().addClass("selected-long")
        : sliderConatiner
            .children("li")
            .last()
            .addClass("selected-long");
    }
  }

  function updateQuickView(url) {
    $(".cd-quick-view-long .cd-slider-long li")
      .removeClass("selected-long")
      .find('img[src="' + url + '"]')
      .parent("li")
      .addClass("selected-long");
  }

  function resizeQuickView() {
    var quickViewLeft =
        ($(window).width() - $(".cd-quick-view-long").width()) / 2,
      quickViewTop =
        ($(window).height() - $(".cd-quick-view-long").height()) / 2;
    $(".cd-quick-view-long").css({
      top: quickViewTop,
      left: quickViewLeft
    });
  }

  function closeQuickView(finalWidth, maxQuickWidth) {
    var close = $(".cd-close"),
      activeSliderUrl = close
        .siblings(".cd-slider-wrapper-long")
        .find(".selected-long img")
        .attr("src"),
      selectedImage = $(".empty-box-long").find("img");
    //update the image in the gallery
    if (
      !$(".cd-quick-view-long").hasClass("velocity-animating") &&
      $(".cd-quick-view-long").hasClass("add-content")
    ) {
      selectedImage.attr("src", activeSliderUrl);
      animateQuickView(selectedImage, finalWidth, maxQuickWidth, "close");
    } else {
      closeNoAnimation(selectedImage, finalWidth, maxQuickWidth);
    }
  }

  function animateQuickView(image, finalWidth, maxQuickWidth, animationType) {
    //store some image data (width, top position, ...)
    //store window data to calculate quick view panel position
    var parentListItem = image.parent(".cd-item"),
      topSelected = image.offset().top - $(window).scrollTop(),
      leftSelected = image.offset().left,
      widthSelected = image.width(),
      heightSelected = image.height(),
      windowWidth = $(window).width(),
      windowHeight = $(window).height(),
      finalLeft = (windowWidth - finalWidth) / 2,
      finalHeight = (finalWidth * heightSelected) / widthSelected,
      finalTop = (windowHeight - finalHeight) / 3,
      quickViewWidth =
        windowWidth * 0.8 < maxQuickWidth ? windowWidth * 0.8 : maxQuickWidth,
      quickViewLeft = (windowWidth - quickViewWidth) / 2;

    if (animationType == "open") {
      //hide the image in the gallery
      parentListItem.addClass("empty-box-long");
      //place the quick view over the image gallery and give it the dimension of the gallery image
      $(".cd-quick-view-long")
        .css({
          top: topSelected,
          left: leftSelected,
          width: widthSelected
        })
        .velocity(
          {
            //animate the quick view: animate its width and center it in the viewport
            //during this animation, only the slider image is visible
            top: finalTop + "px",
            left: finalLeft + "px",
            width: finalWidth + "px"
          },
          500,
          [400, 20],
          function() {
            //animate the quick view: animate its width to the final value
            $(".cd-quick-view-long")
              .addClass("animate-width")
              .velocity(
                {
                  left: quickViewLeft + "px",
                  width: quickViewWidth + "px"
                },
                300,
                "ease",
                function() {
                  //show quick view content
                  $(".cd-quick-view-long").addClass("add-content");
                }
              );
          }
        )
        .addClass("is-visible");
    } else {
      //close the quick view reverting the animation
      $(".cd-quick-view-long")
        .removeClass("add-content")
        .velocity(
          {
            top: finalTop + "px",
            left: finalLeft + "px",
            width: finalWidth + "px"
          },
          300,
          "ease",
          function() {
            $("body").removeClass("overlay-layer");
            $(".cd-quick-view-long")
              .removeClass("animate-width")
              .velocity(
                {
                  top: topSelected,
                  left: leftSelected,
                  width: widthSelected
                },
                500,
                "ease",
                function() {
                  $(".cd-quick-view-long").removeClass("is-visible");
                  parentListItem.removeClass("empty-box-long");
                }
              );
          }
        );
    }
  }
  function closeNoAnimation(image, finalWidth, maxQuickWidth) {
    var parentListItem = image.parent(".cd-item"),
      topSelected = image.offset().top - $(window).scrollTop(),
      leftSelected = image.offset().left,
      widthSelected = image.width();

    $("body").removeClass("overlay-layer");
    parentListItem.removeClass("empty-box-long");
    $(".cd-quick-view-long")
      .velocity("stop")
      .removeClass("add-content animate-width is-visible")
      .css({
        top: topSelected,
        left: leftSelected,
        width: widthSelected
      });
  }
});
