<?php

get_header();

$mt_float_layout = "";
$mt_float_sidebar = "";
$mt_layout = "";
if ($mt_layout == "left") {

	$mt_float_layout = "floatright";
	$mt_float_sidebar = "floatleft";
}

?>

<div class="container mt-content-container">
<div class="row">
	<div class="col-md-<?php if ($mt_layout != "full") { echo sanitize_html_class("8 "); } else {  echo sanitize_html_class("12 "); } echo sanitize_html_class($mt_float_layout); ?> ">
	<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		<?php boomnews_paging_nav(); ?>

	</div>

	<div class="col-md-4 <?php echo sanitize_html_class($mt_float_sidebar); ?> "><?php get_sidebar(); ?></div>
</div>
</div>

<?php get_footer(); ?>
