<?php
/**
 * The template for displaying search results pages
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="page-hero search-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title">
                    <?php
                    printf(
                        /* translators: %s: query term */
                        esc_html__( 'Search Results for: %s', 'understrap' ),
                        '<span>' . get_search_query() . '</span>'
                    );
                    ?>
                </h1>
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
