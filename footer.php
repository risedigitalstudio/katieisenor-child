<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<footer class="main-footer sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 footer-cols">
                <div class="footer-col first">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/katie-isenor-logo-white.png" class="ki-footer-logo">
                </div>
                <div class="footer-col">
                   <p>Katie Isenor<br>Sales Representative</p>
                    <p class="footer-contact">
                        <i class="fa fa-map-marker"></i> Royal LePage Atlantic<br>7071 Bayers Road<br>Halifax, Nova Scotia, B3L 2C2
                    </p>
                </div>
                <div class="footer-col">
                   
                    <a href="tel:+19029997653" class="footer-contact">
                        <i class="fa fa-phone"></i> (902) 999-7653
                    </a>
                    <a href="mailto:katieisenor@royallepage.ca" class="footer-contact">
                        <i class="fa fa-envelope"></i> katieisenor@royallepage.ca
                    </a>
                    <a href="https://www.instagram.com/katiesellshalifax/" target="_blank" class="footer-contact">
                        <i class="fa fa-instagram"></i> @katiesellshalifax
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row footer-bottom-wrap">
                    <div class="col-md-7">
                        <?php wp_nav_menu(); ?>
                    </div>
                    <div class="col-md-5">
                        <p class="copy">&copy; Copyright <span id="yr"></span>. Website by <a href="https://risedigitalstudio.ca" class="rds" target="_blank">Rise Digital Studio</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>

    var d = new Date();
    var y = d.getFullYear();
    document.getElementById('yr').innerHTML = y;
    
</script>

</body>

</html>

