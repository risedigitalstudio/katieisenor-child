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
                <h1>Sell</h1>
            </div>
        </div>
    </div>
</section>


<section class="sell-intro sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/edgett-exterior.jpg">
            </div>
            <div class="col-md-7">
                <div class="flex-height buy-intro-inner">
                    <h2 class="cap-light">Put your home in <br><span class="england">good hands</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quis dolores placeat iusto libero non at voluptate, provident eveniet iure eaque vel aliquid tempore error reiciendis maiores quos, vitae incidunt.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam harum minima at accusantium repellendus atque officiis illum, iste sequi! Explicabo odit vel excepturi deleniti perferendis ratione corporis quisquam, quas eos, temporibus doloribus dolor autem error! Nobis officia labore, ea cum!</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sell-team sec-pad">
    <div class="container">
        <div class="row">
           <div class="col-md-7">
                <div class="flex-height">
                   <h2 class="cap-light">My team is <br><span class="england">your team</span></h2>
                   <p>When you sell with me, you have access to my team of stagers, mortgage lenders, home appraisers, etc.</p>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio cumque quos at repellendus nostrum ea exercitationem tempora commodi ex veniam.</p>
                </div>
           </div>
            <div class="col-md-4 offset-md-1">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/sell-team.jpg">
            </div>
        </div>
    </div>
</section>


<section class="sell-staging sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Get your home the attention it deserves.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sequi molestiae obcaecati at voluptatem ea fugiat quidem, laudantium modi dolor.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri();?>/img/home-kitchen.jpg"></div>
            <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri();?>/img/home-kitchen.jpg"></div>
            <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri();?>/img/home-kitchen.jpg"></div>
        </div>
        <div class="row">
            <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri();?>/img/home-kitchen.jpg"></div>
            <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri();?>/img/home-kitchen.jpg"></div>
            <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri();?>/img/home-kitchen.jpg"></div>
        </div>
    </div>
</section>

<section class="sell-faq sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Sell your home today</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis velit, porro quisquam assumenda obcaecati voluptatem eveniet in et error asperiores id sequi magnam sit officia veritatis, commodi, esse hic tempora?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic enim dicta voluptatum deserunt officia est maiores, asperiores rerum, aperiam error.</p>
            </div>
            <div class="col-md-7 offset-md-1">
                <div class="faq" data-aos="fade-left">
                    <div class="accordion-container">

                            <?php
                            $args = array (
                            'post_type' => array ('sell_questions'),
                            'orderby' => array( 'menu_order' => 'DESC'),
                            'posts_per_page' => -1
                            );
                            $sellFAQQuery = new WP_Query($args);
                            $counter = 0;
                            ?>

                            <?php while ( $sellFAQQuery->have_posts() ) : $sellFAQQuery->the_post();?>

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



c

<?php
get_footer();
