//run slick slider
$(document).ready(function () {
  /*finction top slider*/
  $('.top-slider__block').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    adaptiveHeight: true,
    responsive: [{
        breakpoint: 768,
        settings: {
          arrows: false
        }
      },
      {
        breakpoint: 486,
        settings: {
          dots: false,
          arrows: false
        }
      }
    ]
  });
  /*function carousel og portfolio*/
  $(".owl-carousel").owlCarousel({
    nav: true,
    dots: false,
    margin: 15,
    responsiveClass: true,

    responsive:{
      0:{
          items:1,
          nav:true
      },
      650:{
          items:3
      },
      991:{
          items:4
      }
  }
  });
  /*mobile menu*/

});