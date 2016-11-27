<?php get_header(); ?>
<div class="mt-container-wrap">
	<?php boomnews_title(); ?>
	<div class="container mt-content-container">
		<div class="row">
			<div class="col-md-8  floatleft">
				<?php echo do_shortcode('[posts pagination=on type=normal-right ]');?>
			</div>
			<div class="col-md-4  floatright">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
