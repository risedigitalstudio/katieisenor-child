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
                    <h1 data-aos="fade-up">Your trusted Halifax <br>Real Estate Professional</h1>
                    <h3 data-aos="fade-up">By your side every step of process.</h3>
                    <div class="home-hero-btn-wrap" data-aos="fade-up" data-aos-delay="300">
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

<section class="home-three-points">
    <div class="three-inner">
        <div class="one-third">
            <h2>Local buyers &amp; investors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio doloremque quae, et praesentium facere quisquam libero qui deleniti, rem itaque.</p>
        </div>
        <div class="one-third">
            <h2>RCMP Transfer Professional</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio doloremque quae, et praesentium facere quisquam libero qui deleniti, rem itaque.</p>
        </div>
        <div class="one-third">
            <h2>Backed by a team of pro's</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio doloremque quae, et praesentium facere quisquam libero qui deleniti, rem itaque.</p>
        </div>
    </div>
</section>


<section class="home-blog sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Popular Posts</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array (
            'post_type' => array ('post'),
            'orderby' => array( 'menu_order' => 'ASC'),
            'posts_per_page' => 3
            );
            //$args['search_filter_id'] = 84;
            $homeBlogs = new WP_Query($args);                           
            $counter = 0;
            ?>

                <?php while ( $homeBlogs->have_posts() ) : $homeBlogs->the_post();?>

                    <div class="col-md-4">
                        <a href="<?php echo get_the_permalink();?>" class="post-teaser-wrap-link <?php if ($counter == 0) {echo 'pink';} else if ($counter == 2) {echo 'gold';}?>">
                            <span class="teaser-title-wrap">
                                <h3><?php echo get_the_title();?></h3>
                            </span>
                            <span class="teaser-img">
                                <?php echo get_the_post_thumbnail( $featuredArticle, 'post-teaser' );  ?>
                            </span>
                        </a>
                    </div>

                <?php                                      
                $counter++;        
                ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo site_url();?>/blog" class="default-btn">View all</a>
            </div>
        </div>
    </div>
</section>

<section class="home-instagram sec-pad">
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h2 class="cap-light">Follow me on Instagram<br><a href="https://www.instagram.com/katiesellshalifax/">@katiesellshalifax</a></h2>
           </div>
       </div>
        <div class="row">
            <div class="col-md-12">
                <?php echo do_shortcode('[instagram-feed num=5 cols=5 showfollow=false showheader=false showbutton=false]');?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
