(function ($) {
  "use strict";

  $(function () {
    var header = $(".start-style");
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
        header.removeClass('start-style').addClass("scroll-on");
      } else {
        header.removeClass("scroll-on").addClass('start-style');
      }
    });
  });

  //Animation

  $(document).ready(function () {
    $('body.hero-anime').removeClass('hero-anime');
  });

})(jQuery);

$(document).ready(function () {

  // link action
  $(".action").click(function (e) {
    e.preventDefault();

    $(".slide").removeClass("active");
    var slide = $(this).closest(".slide");
    slide.addClass("active");
  });

});

// checkWidth
checkWidth = function () {
  var windowsize = $(window).width();
  if (windowsize > 480) {
    var slideWidth = $('.active').width();
    $('.slide-content').css({
      "width": slideWidth + "px"
    });
  }

}

$(window).resize(function () {
  // onresize
  checkWidth();

  // finish resize
  clearTimeout(window.resizedFinished);
  window.resizedFinished = setTimeout(checkWidth, 500);
});