$ = jQuery;

$(document).ready(function() {
    
    AOS.init(
        {
            startEvent: 'DOMContentLoaded',
            disable: 'mobile'
        }
    );
    
    
    $(window).scroll(function(event){
        $scrolledPx = $(this).scrollTop();
        if ($scrolledPx > 150) {
            $('header#wrapper-navbar').addClass('solid');
            $('#main-nav .navbar-brand img').attr('src', 'http://localhost/katieisenor/wp-content/uploads/2022/01/katie-isenor-logo.png');
        } else {
            $('header#wrapper-navbar').removeClass('solid');
            $('#main-nav .navbar-brand img').attr('src', 'http://localhost/katieisenor/wp-content/uploads/2022/01/katie-isenor-logo-white.png');
        }
    });
    
    
      $('.testimonial-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,    
          autoplay: true,
          infinite: true,
          autoplaySpeed: 10000,
          arrows: true,
          prevArrow: $('.prev'),
          nextArrow: $('.next') 
      });
    

        $(".set > a").on("click", function(e) {
              e.preventDefault();
            if ($(this).hasClass("active")) {
              $(this).removeClass("active");
              $(this)
                .siblings(".content")
                .slideUp(150);
              $(".set > a i.minus").hide();
              $(".set > a i.plus").show();
            } else {
              $(".set > a i.minus").hide();
              $(".set > a i.plus").show();
              $(this)
                .find("i.plus").hide();
            $(this)
                .find("i.minus").show();
              $(".set > a").removeClass("active");
              $(this).addClass("active");
              $(".content").slideUp(150);
              $(this)
                .siblings(".content")
                .slideDown(150);
            }
          });
    
})