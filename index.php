<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="page-hero blog-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</section>


<div class="sec-pad blogs">
	<div class="container" id="content" tabindex="-1">
		<div class="row">

				<?php
				if ( have_posts() ) {
					// Start the Loop.
                    $blogCount = 0;
					while ( have_posts() ) {
						the_post();
                        ?>
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
                        $blogCount++;
                        if ($blogCount % 3 == 0) {
                            echo '</div><div class="row mt-5">';
                        }
					}
				}
				?>


			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- .row -->
	</div><!-- #content -->
</div>

<?php
get_footer();
