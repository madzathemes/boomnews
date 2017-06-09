<?php get_header();

$tag_title = single_tag_title("", false);

$tag_obj = get_query_var('tag_id');
$tag_array = get_tag($tag_obj);
$tag_slug = $tag_array->slug;
if ( false == get_theme_mod( 't_p_tag', false ) ) { $t_p_tag = esc_html__("Tag", "boomnews");  } else { $t_p_tag = get_theme_mod( 't_p_tag' ); }
if ( false == get_theme_mod( 't_p_nothing_found', false ) ) { $t_p_nothing_found = esc_html__("Nothing Found", "boomnews");  } else { $t_p_nothing_found = get_theme_mod( 't_p_nothing_found' ); }
if ( false == get_theme_mod( 't_p_apologies', false ) ) { $t_p_apologies = esc_html__("Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.", "boomnews");  } else { $t_p_apologies = get_theme_mod( 't_p_apologies' ); }


$option = get_option("magazin_theme_options");
$default_posts_per_page = get_option( 'posts_per_page' );

$grid = 1;
$offset = 4;
if(!empty($option['tag_grid_style'])) {
	if($option['tag_grid_style']=="1"){
		$grid = 0;
		$offset = 0;
	} else if($option['tag_grid_style']=="2"){
		$grid = 2;
		$offset = 2;
	} else if($option['tag_grid_style']=="3"){
		$grid = 3;
		$offset = 3;
	}
}

$post_style = 'normal-right';
$space = 40;
if(!empty($option['tag_post_style'])) {
	if($option['tag_post_style']=="1"){
		$post_style = 'small-two';
		$space = 40;
	} else if($option['tag_post_style']=="2"){
		$post_style = 'normal-right-small';
	} else if($option['tag_post_style']=="3"){
		$post_style = 'normal-two';
		$space = 40;
	}
}



?>
<div class="mt-container-wrap">
<div class="container mt-content-container">
	<div class="row">
		<div class="col-md-12">
			<?php if ( shortcode_exists( 'posts' ) ) { ?>
				<?php if($grid!=0) { echo do_shortcode('[grid type="'.esc_attr($grid).'" title="'. esc_html($t_p_tag) .': '.esc_attr($tag_title).'" position="left" title_type="left" tag="'.esc_attr($tag_slug).'"  ]'); ?>
				<?php echo do_shortcode('[space size='.esc_attr($space).' ]'); }?>
			<?php } ?>
		</div>
	</div>
	<div class="row">
	<div class="col-md-8  floatleft">
		<?php if ( have_posts() ) {

			if ( shortcode_exists( 'posts' ) ) {

			 	if($grid==0) {
					echo do_shortcode('[posts pagination=on item_nr='.esc_attr($default_posts_per_page).' offset='.esc_attr($offset).'  tag="'.esc_attr($tag_slug).'" type='.esc_attr($post_style).' title="'. esc_html($t_p_tag) .': '.esc_attr($tag_title).'" title_type=left ]');
				} else {
					echo do_shortcode('[posts pagination=on item_nr='.esc_attr($default_posts_per_page).' offset='.esc_attr($offset).'  tag="'.esc_attr($tag_slug).'" type='.esc_attr($post_style).' ]');
				}
			} else {
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
			}
 		} ?>
	</div>

	<div class="col-md-4 sidebar floatright">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
</div>
<?php get_footer(); ?>
