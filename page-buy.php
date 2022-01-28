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


<section class="page-hero buy-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Buy</h1>
            </div>
        </div>
    </div>
</section>

<section class="buy-intro sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/edgett-exterior.jpg">
            </div>
            <div class="col-md-7">
                <div class="flex-height buy-intro-inner">
                    <h2 class="cap-light">Buy your <br><span class="england">dream home</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quis dolores placeat iusto libero non at voluptate, provident eveniet iure eaque vel aliquid tempore error reiciendis maiores quos, vitae incidunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam harum minima at accusantium repellendus atque officiis illum, iste sequi! Explicabo odit vel excepturi deleniti perferendis ratione corporis quisquam, quas eos, temporibus doloribus dolor autem error! Nobis officia labore, ea cum!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="buy-rcmp sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2>Are you an RCMP family?</h2>
                <p>House hunting trips.. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolor, eos! Laboriosam illum harum aperiam repellat enim asperiores et adipisci neque quo, tempora iusto temporibus, voluptatem ipsum minus. Perferendis corporis eveniet molestiae sit mollitia vel.</p>
                <p><a href="mailto:katieisenor@royallepage.ca" class="default-btn">Get in Touch</a></p>
            </div>
        </div>
    </div>
</section>

<section class="buy-faq sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Make Halifax home, upsize, <br>or invest with me</h2>
                <p>Whether you're looking to make Halifax home, upsize, downsize, or invest in this booming, but still affordable Canadian city, I've got your back.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic enim dicta voluptatum deserunt officia est maiores, asperiores rerum, aperiam error.</p>
            </div>
            <div class="col-md-7 offset-md-1">
                <div class="faq" data-aos="fade-left">
                    <div class="accordion-container">

                            <?php
                            $args = array (
                            'post_type' => array ('buy_questions'),
                            'orderby' => array( 'menu_order' => 'DESC'),
                            'posts_per_page' => -1
                            );
                            $buyFAQQuery = new WP_Query($args);
                            $counter = 0;
                            ?>

                            <?php while ( $buyFAQQuery->have_posts() ) : $buyFAQQuery->the_post();?>

                                  <div class="set">
                                    <a href="#" class="set-a">
                                      <div class="title"><?php echo the_title();?></div>
                                      <i class="minus" style="display:none;">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.272 10.7278L0.183691 10.7278" stroke="black"/>
                                        </svg>
                                      </i>
                                      <i class="plus" style="display: block;">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.728 21.2721V0.183813" stroke="black"/>
                                        <path d="M21.272 10.7278L0.183691 10.7278" stroke="black"/>
                                        </svg>
                                      </i>
                                    </a>
                                    <div class="content justify">
                                      <?php echo the_content();?>
                                    </div>
                                  </div>

                            <?php $counter++; ?>
                            <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>  

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();
