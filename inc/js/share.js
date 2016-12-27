;(function($) {
  var
    browserDetection,
    UA = navigator.userAgent,
    carousel,
    loadingPage,
    topcarousel,
    hoverProduct,
    isIE;

  "use strict";
  $(function(){
    carousel();
    topcarousel();
    //loadingPage();
    slideClick();
    //hoverProduct();
  })

  loadingPage = function() {
    $(window).load(function() {
      $(".loader").fadeOut("slow");
    });
  },

  carousel = function() {
    $('.product_carousel').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      autoplay: false,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]
    });
   };

   topcarousel = function() {
    $('.top_carousel').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      autoplay: true,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

      ]
    });
   };

  slideClick = function() {
    $('.content_box').on('click', function(event) {
      event.preventDefault();
      var $url = $(this).find('a').attr('href');
      window.location.href = $url;
    });
  }

})(jQuery);
