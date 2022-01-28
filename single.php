<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="page-hero blog-single-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo get_the_title();?></h1>
            </div>
        </div>
    </div>
</section>

<section class="sec-pad single-blog-post" id="single-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row">
            <div class="col-md-8">

				<?php
				while ( have_posts() ) {
					the_post();
					
                    the_post_thumbnail();
                    
                    the_content();
                    
					understrap_post_nav();
				}
				?>
           
            </div>
            
			<?php get_template_part( 'sidebar-templates/sidebar-right' ); ?>

		</div>
    </div>
</section>


<?php get_template_part( 'global-templates/cta' ); ?>


<?php
get_footer();
