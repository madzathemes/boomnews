<?php
/**
 * @author madars.bitenieks
 * @copyright 2016
 */
?>
<?php get_header(); ?>
<div class="mt-container-wrap">
	<?php boomnews_title(); ?>
<div class="container mt-content-container">
<div class="row">

	<div class="col-md-8">
		<?php if ( have_posts() ) : ?>

			<?php if ( shortcode_exists( 'posts' ) ) {

				echo do_shortcode('[posts pagination=on type=normal-right ]');

			} else {

 				get_template_part( 'content', get_post_format() );

			}?>

		<?php else : ?>
						<div id="post-0" class="post no-results not-found">
							<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'boomnews'  ); ?></h2>
							<div class="entry-content">
								<p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'boomnews'  ); ?></p>

							</div>
						</div>
		<?php endif; ?>
	</div>

	<div class="col-md-4 sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>
