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
                    <h1 data-aos="fade-up">Coastal Living Awaits You</h1>
                    <h3 data-aos="fade-up">Acclaimed real estate services in the <br class="desktop">Halifax Regional Municipality and surrounding areas</h3>
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
                    <p>Moving our RCMP family to Halifax has been the best decision we’ve ever made. After being transferred around the country, we are proud to lay down our roots on the beautiful east coast. If you’re relocating your family to the charming HRM, searching for that dream oceanfront property or thinking about selling, you’ve come to the right place. Backed by my first-hand experience, an extensive career in property marketing, and an incredible team of real estate professionals, your dream coastal lifestyle begins here.</p>
                    <p><a href="<?php echo site_url()?>/about" class="default-btn">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-three-points">
    <div class="three-inner">
        <div class="one-third">
            <h2>Buying &amp; Selling in the HRM</h2>
            <p>Whether you’re ready to sell in this unprecedented market or searching for exclusive listings in and around the HRM, I am dedicated to making your experience as smooth as possible.</p>
        </div>
        <div class="one-third">
            <h2>RCMP Relocation Expert</h2>
            <p>Transferring can be a difficult process! With my first-hand experience and familiarity with the RCMP relocation process, I look forward to helping your family transfer seamlessly to the east coast.</p>
        </div>
        <div class="one-third">
            <h2>Out-of-Province Buyers</h2>
            <p>Coastal living is closer than you think. If you’re interested in making the long-distance move to Halifax, my personal relocation experience and local expertise will offer you a unique perspective.</p>
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
