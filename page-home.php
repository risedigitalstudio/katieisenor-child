<?php
/* Template Name: Home */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>


<section class="home-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="home-hero-inner">
                    <h1>Your trusted Halifax Real Estate Professional</h1>
                    <h3>By your side every step of process.</h3>
                    <div class="home-hero-btn-wrap">
                        <a href="<?php echo site_url();?>/buy" class="default-btn">Buy</a>
                        <a href="<?php echo site_url();?>/sell" class="default-btn">Sell</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-intro sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/katie-isenor.jpg">
            </div>
            <div class="col-md-7">
                <div class="flex-height home-intro-wrap">
                    <p class="cap-light">Hi, I'm</p>
                    <h2 class="england">Katie Isenor</h2>
                    <p>Your story is unique. That’s why I am dedicated to understanding your lifestyle and making your goals my own so we can navigate through the process together. Whether you’re buying, selling, or investing, everyone deserves expert guidance before making such a large financial investment. Ready to find out how I can help you reach your real estate goals?</p>
                    <p><a href="<?php echo site_url()?>/about" class="default-btn">Read More</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
