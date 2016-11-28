<?php get_header();

$tag_slug = single_tag_title("", false);
?>
<div class="mt-container-wrap">
<div class="container mt-content-container">
	<div class="row">

		<div class="col-md-8 ">

				<?php if ( have_posts() ) : ?>

					<?php echo do_shortcode('[posts pagination=on title="'. esc_html__( 'Tag','boomnews' ) .': '.esc_attr($tag_slug).'" title_type="left" tag="'.esc_attr($tag_slug).'" type=normal-right]');?>

				<?php else : ?>

					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'boomnews' ); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<p><?php esc_html_e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'boomnews' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->

				<?php endif; ?>


		</div>


			<div class="col-md-4 sidebar"><?php get_sidebar(); ?></div>


	</div>
</div>
</div>
<?php get_footer(); ?>
