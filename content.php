<?php

/* The default template for displaying content. Used for both single and index/archive/search.
/*-----------------------------------------------------------------------------------*/

$image_settings = get_post_meta(get_the_ID(), "magazin_post_image", true);
$options = get_option("boomnews_theme_options");

if(is_single()) { $more = 1; }?>
<article id="post-<?php the_ID(); ?>" class="<?php if ( is_sticky() and !is_single()){ ?> post_sticky <?php } ?>">

	<?php if( ! is_search()) { ?>
		<?php  if ( has_post_thumbnail() ) { ?>
			<div class="post-img">
				<?php if(is_single()) {
					if(!empty($image_settings)) {
						if($image_settings=="yes") {
							echo get_the_post_thumbnail(get_the_ID(),"large");
						}
					} else if(!empty($options['post_standart_image'])) {
						if($options['post_standart_image']=="yes") {
							echo get_the_post_thumbnail(get_the_ID(),"large");
						}
					} else {
						echo get_the_post_thumbnail(get_the_ID(),"large");
					}
				} else { ?>
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail(get_the_ID(),"large"); ?>
					</a>
				<?php } ?>
			</div>
		<?php } ?>
	<?php } ?>

	<?php if (!is_single()){ ?>
		<header class="entry-header">
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'boomnews' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_title();  ?></a>
			</h2>
		</header>
	<?php } ?>

	<?php if ( is_search() ) { ?>
	<div class="entry-summary">


	</div><!-- .entry-summary -->
	<?php } else { ?>
	<div class="entry-content">
		<?php

		if(!is_single()) {

		 the_content();

		} else {

			the_content();

		}

		?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'boomnews' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php } ?>

</article><!-- #post -->
