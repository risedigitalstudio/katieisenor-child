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
    
    
})