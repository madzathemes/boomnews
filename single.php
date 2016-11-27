<?php
/**
 * @author Madars Bitenieks
 * @copyright 2016
 */

get_header();

$style = get_post_meta(get_the_ID(), "magazin_post_style", true);
$option = get_option("boomnews_theme_options");
$default = "";
if(!empty($option['post_style'])) {
	$default = $option['post_style'];
}

$carousel = get_post_meta(get_the_ID(), "magazin_post_carousel", true);

if ($carousel == "yes"){ ?>
	<div class="single-top">
		<?php echo do_shortcode('[posts type=carousel-post-slider]'); ?>
	</div> <?php
} else if ($carousel == "no"){
} else if (!empty($option['post_carousel'])){
	if ($option['post_carousel']=="1" or $option['post_carousel']=="yes" or $option['post_carousel']==""){ ?>
		<div class="single-top">
			<?php echo do_shortcode('[posts type=carousel-post-slider]'); ?>
		</div> <?php
	}
}
?>

<article>

<?php while ( have_posts() ) : the_post();

	if($style=="1") { post_style_1(); }

	else if($style=="2") { post_style_2(); }

	else if($style=="3") { post_style_3(); }

	else if($style=="4") { post_style_4(); }

	else if($style=="5") { post_style_5(); }

	else if($style=="6") { post_style_6(); }

	else if($style=="7") { post_style_7(); }

	else if($style=="8") { post_style_8(); }

	else if($style=="9") { post_style_9(); }

	else if($style=="10") { post_style_10(); }

	else if($style=="11") { post_style_11(); }

	else if($style=="12") { post_style_12(); }

	else if($style=="13") { post_style_13(); }

	else {

		if($default=="2") { post_style_2(); }

		else if($default=="3") { post_style_3(); }

		else if($default=="4") { post_style_4(); }

		else if($default=="5") { post_style_5(); }

		else if($default=="6") { post_style_6(); }

		else if($default=="7") { post_style_7(); }

		else if($default=="8") { post_style_8(); }

		else if($default=="9") { post_style_9(); }

		else if($default=="10") { post_style_10(); }

		else if($default=="11") { post_style_11(); }

		else if($default=="12") { post_style_12(); }

		else if($default=="13") { post_style_13(); }

		else { post_style_1(); }

	}


endwhile;
?>

</article>

<?php get_footer(); ?>
