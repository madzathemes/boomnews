<?php get_header(); ?>
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); $author_id = $curauth->nickname; ?>
<div class="mt-container-wrap">
	<?php boomnews_title(); ?>
	<div class="container mt-content-container">
		<div class="row">
			<div class="col-md-8  floatleft">
				<?php if ( shortcode_exists( 'posts' ) ) {

					echo do_shortcode('[posts pagination=on author='.$author_id.' type=normal-right ]');

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
