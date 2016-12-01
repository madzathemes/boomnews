<?php
/**
 * @author madars.bitenieks
 * @copyright 2016
 */

get_header();

$cat = get_query_var('cat');
$get_cat = get_category ($cat);
$cat_name = $get_cat->slug;


$option = get_option("magazin_theme_options");
$default_posts_per_page = get_option( 'posts_per_page' );

$grid = 1;
$offset = 4;
if(!empty($option['category_grid_style'])) {
	if($option['category_grid_style']=="1"){
		$grid = 0;
		$offset = 0;
	} else if($option['category_grid_style']=="2"){
		$grid = 2;
		$offset = 2;
	} else if($option['category_grid_style']=="3"){
		$grid = 3;
		$offset = 3;
	}
}

$post_style = 'normal-right';
$space = 40;
if(!empty($option['category_post_style'])) {
	if($option['category_post_style']=="1"){
		$post_style = 'small-two';
		$space = 40;
	} else if($option['category_post_style']=="2"){
		$post_style = 'normal-right-small';
	} else if($option['category_post_style']=="3"){
		$post_style = 'normal-two';
		$space = 40;
	}
}
?>
<div class="mt-container-wrap">
<div class="container mt-content-container">
	<div class="row">
		<div class="col-md-12">

			<?php if($grid!=0) { echo do_shortcode('[grid type="'.esc_attr($grid).'" title="'. esc_html__( 'Category','boomnews' ) .': '.esc_attr($cat_name).'" position="left" title_type="left" category="'.esc_attr($cat_name).'"  ]'); ?>
			<?php echo do_shortcode('[space size='.esc_attr($space).' ]'); }?>

		</div>
	</div>
	<div class="row">
	<div class="col-md-8  floatleft">
		<?php if ( have_posts() ) {

			 	if($grid==0) {
					echo do_shortcode('[posts pagination=on item_nr='.esc_attr($default_posts_per_page).' offset='.esc_attr($offset).'  category="'.esc_attr($cat_name).'" type='.esc_attr($post_style).' title="'. esc_html__( 'Category','boomnews' ) .': '.esc_attr($cat_name).'" title_type=left ]');
				} else {
					echo do_shortcode('[posts pagination=on item_nr='.esc_attr($default_posts_per_page).' offset='.esc_attr($offset).'  category="'.esc_attr($cat_name).'" type='.esc_attr($post_style).' ]');
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
