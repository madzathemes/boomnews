<?php
function boomnews_css() {

	wp_enqueue_style('boomnews-style', get_stylesheet_uri());

	$custom_styles = '';
	$options = get_option("boomnews_theme_options");

	// Default Color
	if(!empty($options['colors_default'])){
			$custom_styles .='
			.mt-theme-text,
			.fixed-top-menu ul li a:hover,
			a:hover,
			.nav-single .next div:after,
			.nav-single .previous div:before { color:'. esc_attr($options['colors_default']) .'; }
			.mt-theme-background,
			button:hover,
			input[type="submit"]:hover,
			input[type="button"]:hover,
			.sf-menu > li.current_page_item > a::before,
			.sf-menu > li > a::before,
			ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
			ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
			ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
			ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
			ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover,
			.head-bookmark a:hover,
			.hover-menu a:hover,
			.nav-links a:hover,
			.poster-next:hover,
			.poster-prev:hover,
			.post-gallery-nav .slick-arrow.slick-prev:hover:before,
			.post-gallery-nav .slick-arrow.slick-next:hover:before,
			.single-cat-wrap .post-categories li a,
			.mt-load-more:hover,
			.mt-tabc:before,
			.mt-subscribe-footer input.mt-s-b:hover { background: '. esc_attr($options['colors_default']) .'; }';
	 }

	 // Button Color
	 if(!empty($options['colors_button'])){
 			$custom_styles .='
			button,
			input[type="submit"],
			input[type="button"],
			.head-bookmark a,
			.mt-subscribe-footer input.mt-s-b { background:'. esc_attr($options['colors_button']) .'; }';
 	 }

	 // Background Color
	 $style = get_post_meta(get_the_ID(), "magazin_background_color", true);
	 if(!empty($style)){
	 		$custom_styles .='.boxed-layout-on { background-color: '. esc_attr($default_color) .' }';
	 }
	 else if (!empty($options['background_color'])) {
	 		$custom_styles .='.boxed-layout-on { background-color: '. esc_attr($options['background_color']) .'; }';
	 }

	 // Logo Margin
	 if(!empty($options['logo_top'])){
	 		$custom_styles .='.head-logo { padding-top: '. esc_attr($options['logo_top']) .'px }';
	 }
	 if(!empty($options['logo_bottom'])){
	 		$custom_styles .='.head-logo { padding-bottom: '. esc_attr($options['logo_bottom']) .'px } ';
	 }

	 // Social Icon
	 if(!empty($options['colors_social_hover'])){
		 $custom_styles .='.socials a:after { background:'. esc_attr($options['colors_social_hover']) .'!important; }';
	 }

	 // Menu
	 if(!empty($options['colors_menu_bg'])){
		 $custom_styles .='.menu-background, .menu-background-left, .menu-background-right { background-color:'. esc_attr($options['colors_menu_bg']) .'!important; }';
	 }
	 if(!empty($options['colors_menu'])){
		 $custom_styles .='.top-nav a,
		 .top-nav, .nav-search-input input { color:'. esc_attr($options['colors_menu']) .'!important; }
		 .nav-search-input input::-webkit-input-placeholder { color:'. esc_attr($options['colors_menu']) .'!important; }
		 .nav-search-input input:-moz-placeholder { color:'. esc_attr($options['colors_menu']) .'!important; }
		 .nav-search-input input::-moz-placeholder { color:'. esc_attr($options['colors_menu']) .'!important; }
		 .nav-search-input input:-ms-input-placeholder { color:'. esc_attr($options['colors_menu']) .'!important; }';
	 }

	 if(!empty($options['colors_menu_hover_text'])){
		 	$custom_styles .='.sf-menu li a:hover,
		 	.sf-menu > li:hover > a,
		 	.sf-menu li.sfHover,
		 	ul.sf-menu li.current-cat > a, div.sf-menu ul ul li.current-cat > a,
		 	ul.sf-menu li.current_page_item > a, div.sf-menu ul ul li.current_page_item > a,
		 	ul.sf-menu li.current-menu-item > a, div.sf-menu ul ul li.current-menu-item > a,
		 	ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul ul li.current-menu-ancestor > a,
		 	.sf-menu li.current_page_item::before, .sf-menu li:hover::before { color: '. esc_attr($options['colors_menu_hover_text']) .'!important}';
		}
		if(!empty($options['colors_menu_hover'])){
 		 	$custom_styles .='.sf-menu > li.current_page_item > a::before, .sf-menu > li > a::before { background: '. esc_attr($options['colors_menu_hover']) .'!important}';
		}

		if(!empty($options['colors_menu_sub']) or !empty($options['colors_menu_sub_background'])){
			$custom_styles .='.sf-menu ul li a {';
					if(!empty($options['colors_menu_sub'])){ $custom_styles .=' color: '. esc_attr($options['colors_menu_sub']).'!important'; }
					if(!empty($options['colors_menu_sub_background'])){ $custom_styles .=' background: '. esc_attr($options['colors_menu_sub_background']).'!important'; }
			$custom_styles .='}';
				if(!empty($options['colors_menu_sub_background'])){ $custom_styles .=' .sf-menu ul li, .df-is-megamenu ul { background:'. esc_attr($options['colors_menu_sub_background']).'!important}'; }
			$custom_styles .='}';
		}

		if(!empty($options['colors_menu_sub_hover']) or !empty($options['colors_menu_sub_hover_background'])){
			$custom_styles .='ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
			ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
			ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
			ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
			ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover {';
				 if(!empty($options['colors_menu_sub_hover_background'])){ $custom_styles .='background:'. esc_attr($options['colors_menu_sub_hover_background']) .'!important;'; }
				 if(!empty($options['colors_menu_sub_hover'])){ $custom_styles .='color:'. esc_attr($options['colors_menu_sub_hover']) .'!important;'; }
			$custom_styles .='}';
		}


	 if ( $custom_styles != '' ) {
	  $css = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $custom_styles);
		wp_add_inline_style( 'boomnews-style', $css );
	}

}
add_action( 'wp_enqueue_scripts', 'boomnews_css');

function boomnews_header_script() {


		$option = get_option("boomnews_theme_options");

		wp_enqueue_script( 'boomnews_defer', get_template_directory_uri(). '/inc/js/defer.js', array( 'jquery'), '', true );
		wp_enqueue_script( 'boomnews_script', get_template_directory_uri(). '/inc/js/scripts.js', array( 'jquery'), '', true );
		wp_localize_script( 'boomnews_script', 'ajax_posts', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'noposts' => esc_html__('No older posts found', 'boomnews'), ));


		// Third party scripts/ styles don't need to be prefixed to avoid double loading
		wp_enqueue_script('jquery-html5shiv', get_template_directory_uri() . '/inc/js/html5shiv.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'jquery-_html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script('jquery-respondmin', get_template_directory_uri() . '/inc/js/respond.js', array('jquery'), '1.0', true);
		wp_script_add_data( 'jquery-respondmin', 'conditional', 'lt IE 9' );

    function boomnews_fonts_url() {

      $theme_font = "Lato:400,900,700";

        /*
        Translators: If there are characters in your language that are not supported
        by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Google font: on or off', 'boomnews' ) ) {
            $font_url = add_query_arg( 'family', urlencode( ''. esc_attr($theme_font) .'' ), "//fonts.googleapis.com/css" );
        }
        return $font_url;
    }
    wp_enqueue_style( 'boomnews-fonts', boomnews_fonts_url(), array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'boomnews_header_script');




function boomnews_admin_script() {
	wp_enqueue_style('boomnews-admin', get_template_directory_uri().'/inc/css/admin.css');
}
add_action('admin_enqueue_scripts', 'boomnews_admin_script');


function boomnews_header_hooks() {

	get_template_part('style');

}

add_action('wp_head', 'boomnews_header_hooks');


add_filter('body_class','boomnews_class');
function boomnews_class($classes) {

	$body_class = "";

	$options = get_option("boomnews_theme_options");

	if(!empty( $options['mt_menu_fix'])){
		if( $options['mt_menu_fix']=="1") {
			$body_class .= 'mt-fixed ';
		}  else {
			$body_class .= ' mt-fixed-no ';
		}
	} else {
		$body_class .= ' mt-fixed-no ';
	}


	if(!empty( $options['menu_fixed'])){
		if($options['menu_fixed']=="mt-fixed-up") {
			$body_class .= ' mt-fixed-up ';
		}  else if($options['menu_fixed']=="mt-fixed-always") {
			$body_class .= ' mt-fixed-always ';
		}
	} else {
		$body_class .= ' mt-fixed-up ';
	}


	$style = get_post_meta(get_the_ID(), "magazin_post_style", true);
	if(!empty($style)){
		$body_class .= ' post-style-'.$style;
		if($style=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	} else if (!empty($options['post_style'])) {
		$body_class .= ' post-style-'.$options['post_style'];
		if($options['post_style']=="8" and is_single()) {
			$body_class .= ' boxed-layout-on';
		}
	}

	$layout = get_post_meta(get_the_ID(), "magazin_layout", true);
	if(!empty($layout)){
		$body_class .= ' boxed-layout-on';
	} else if (!empty($options['boxed'])) {
		if ($options['boxed']=="1") {
			$body_class .= ' boxed-layout-on';
		}
	}

	if(!empty($options['menu_random'])) {
		if($options['menu_random']!="1") {
			$body_class .= ' random-off';
		}
	} else {
		$body_class .= ' random-off';
	}

	if(!empty($options['menu_top_ad'])) {
		if($options['menu_top_ad']=="ad") {
			$body_class .= ' menu-ad-on';
		}
	} else {
		$body_class .= ' menu-ad-off';
	}


	$page_space = get_post_meta(get_the_ID(), "magazin_page_padding", true);
	if(!empty($page_space)){
		$body_class .= ' remove-page-padding ';
	}

	$classes[] =  $body_class;
	return $classes;
}

?>
