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


<section class="page-hero about-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About Katie</h1>
            </div>
        </div>
    </div>
</section>


<section class="about-katie sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-photo-wrap">
                    <div class="left-side">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/about-01.jpg">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/about-04.jpg">
                    </div>
                    <div class="right-side">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/about-03.jpg">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/img/about-02.jpg">
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="flex-height about-info-wrap">
                    <h2 class="cap-light">A career inspired <br><span class="england">by living</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, veniam, ipsum. Voluptatibus enim beatae ut dignissimos nobis a ad, quae sit harum quibusdam et consequatur fugiat tempore consequuntur aspernatur impedit voluptas aperiam dolores. Beatae ullam enim impedit, repellat laudantium libero.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quam dolores laboriosam magnam voluptatibus ab esse porro sed laudantium id sapiente dolorum, alias vero excepturi dignissimos quasi explicabo nemo vitae omnis odit numquam cum, odio voluptatem recusandae. Maxime odio architecto necessitatibus, illum pariatur suscipit assumenda velit consequuntur quasi qui laboriosam?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore similique autem id doloribus ad consectetur blanditiis labore debitis temporibus porro.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sec-pad testimonials">
    <div class="container">
       <div class="row">
           <div class="col-md-4">
               <h2 data-aos="fade-left">Here’s what people <br class="desktop">are saying…</h2>
           </div>
            <div class="col-md-8">
			<div class="slider testimonial-slider">
                <?php
                $args = array (
                'post_type' => array ('testimonials'),
                'orderby' => array( 'menu_order' => 'ASC'),
                'posts_per_page' => 3
                );
                //$args['search_filter_id'] = 84;
                $testimonials = new WP_Query($args);                           
                $counter = 0;
                ?>

                    <?php while ( $testimonials->have_posts() ) : $testimonials->the_post();?>

                    <div class="single-testimonial">
                        <?php echo get_the_content();?>
                        <p class="testimonial-name">
                            ~<?php echo get_the_title();?>
                        </p>
                    </div>

                    <?php                                      
                    $counter++;        
                    ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
			</div>
                <div class="arrows-home-blog">
                   <div class="line"></div>
                    <div class="arrows-inner">
                        <span class="prev">
                            <svg width="30" height="19" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 1L2.00001 17L18 33" stroke="black" stroke-width="2.5"/>
                            </svg>
                       </span>
                        <span class="next">
                            <svg width="30" height="19" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.5303 33.5303L26.4697 32.4696L41.9393 16.9999L26.4697 1.53027L27.5303 0.469609L44.0606 16.9999L27.5303 33.5303Z" stroke="black"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'global-templates/cta' ); ?>

<?php
get_footer();
