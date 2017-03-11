<?php get_header(); ?>
<div class="mt-container-wrap">
	<?php boomnews_title(); ?>
	<div class="container mt-content-container">
		<div class="row">
			<div class="col-md-8  floatleft">
				<?php if ( shortcode_exists( 'posts' ) ) {

					echo do_shortcode('[posts pagination=on type=normal-right ]');

				} else {

					get_template_part( 'content', get_post_format() );

				}?>
			</div>
			<div class="col-md-4  floatright">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
