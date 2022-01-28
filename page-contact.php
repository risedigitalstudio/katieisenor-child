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
    <div class="contact-info-inner">
        <div class="one-third">
            <h2>Contact</h2>
            <a href="tel:+19029997653" class="footer-contact">
                <i class="fa fa-phone"></i> (902) 999-7653
            </a>
            <a href="mailto:katieisenor@royallepage.ca" class="footer-contact">
                <i class="fa fa-envelope"></i> katieisenor@royallepage.ca
            </a>
        </div>
        <div class="one-third">
            <h2>Address</h2>
            <p class="footer-contact">
                <i class="fa fa-map-marker"></i> Royal LePage Atlantic<br>7071 Bayers Road<br>Halifax, Nova Scotia, B3L 2C2
            </p>
        </div>
        <div class="one-third">
            <h2>Social</h2>
            <a href="https://www.instagram.com/katiesellshalifax/" target="_blank" class="footer-contact">
                <i class="fa fa-instagram"></i> @katiesellshalifax
            </a>
        </div>
    </div>
</section>


<?php
get_footer();
