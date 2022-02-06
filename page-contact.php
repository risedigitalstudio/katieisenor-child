<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="contact-info sec-pad">
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <img src="<?php echo get_stylesheet_directory_uri();?>/img/contact-katie.jpg">
           </div>
           <div class="col-md-6">
                <div class="flex-height contact-info-inner">
                    <p>
                       <a href="tel:+19029997653" class="footer-contact">
                            <i class="fa fa-phone"></i> (902) 999-7653
                        </a>
                    </p>
                    <p>
                        <a href="mailto:katieisenor@royallepage.ca" class="footer-contact">
                            <i class="fa fa-envelope"></i> katieisenor@royallepage.ca
                        </a>
                    </p>
                    <p class="footer-contact">
                        <i class="fa fa-map-marker"></i> Royal LePage Atlantic<br>7071 Bayers Road<br>Halifax, Nova Scotia, B3L 2C2
                    </p>
                    <p>
                        <a href="https://www.instagram.com/katiesellshalifax/" target="_blank" class="footer-contact">
                            <i class="fa fa-instagram"></i> @katiesellshalifax
                        </a>
                    </p>
                </div>
           </div>
       </div>
   </div>

</section>


<?php
get_footer();
