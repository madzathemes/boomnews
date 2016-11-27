<style type="text/css"><?php
$options = get_option("boomnews_theme_options");
$style = get_post_meta(get_the_ID(), "magazin_background_color", true);
if(!empty($style)){ ?>
	body { background-color: <?php echo esc_attr($style); ?> }
<?php } else if (!empty($options['background_color'])) { ?>
	body { background-color: <?php echo esc_attr($options['background_color']); ?>; }
<?php } ?>

<?php if(!empty($options['logo_top'])){ ?>
	.head-logo { padding-top: <?php echo esc_attr($options['logo_top']); ?>px }
<?php } ?>
<?php if(!empty($options['logo_bottom'])){ ?>
	.head-logo { padding-bottom: <?php echo esc_attr($options['logo_bottom']); ?>px }
<?php } ?>
<?php if(!empty($options['colors_default'])){ ?>
	.mt-theme-text,
	.fixed-top-menu ul li a:hover,
	a:hover,
	.nav-single .next div:after,
	.nav-single .previous div:before { color:<?php echo esc_attr($options['colors_default']); ?>; }
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
	.mt-subscribe-footer input.mt-s-b:hover { background: <?php echo esc_attr($options['colors_default']); ?>; }
<?php } ?>

<?php if(!empty($options['colors_button'])){ ?>
	button,
	input[type="submit"],
	input[type="button"],
	.head-bookmark a,
	.mt-subscribe-footer input.mt-s-b { background:<?php echo esc_attr($options['colors_button']); ?>; }
<?php } ?>

<?php if(!empty($options['colors_social_hover'])){ ?>.socials a:after { background:<?php echo esc_attr($options['colors_social_hover']); ?>!important; }<?php } ?>

<?php if(!empty($options['colors_menu_bg_right']) and !empty($options['colors_menu_bg_left'])){ ?>
	.menu-background {
	  background: <?php echo esc_attr($options['colors_menu_bg_left']); ?>;
	  background: -moz-linear-gradient(-45deg,  <?php echo esc_attr($options['colors_menu_bg_left']); ?> 52%, <?php echo esc_attr($options['colors_menu_bg_right']); ?> 100%);
	  background: -webkit-linear-gradient(-45deg,  <?php echo esc_attr($options['colors_menu_bg_left']); ?> 52%,<?php echo esc_attr($options['colors_menu_bg_right']); ?> 100%);
	  background: linear-gradient(135deg,  <?php echo esc_attr($options['colors_menu_bg_left']); ?> 52%,<?php echo esc_attr($options['colors_menu_bg_right']); ?> 100%);
	  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo esc_attr($options['colors_menu_bg_left']); ?>', endColorstr='<?php echo esc_attr($options['colors_menu_bg_right']); ?>',GradientType=1 );
	}
	.nav-search::before {
		background: <?php echo esc_attr($options['colors_menu_bg_right']); ?>;
	}
	.nav-random a:after {
		background: <?php echo esc_attr($options['colors_menu_bg_left']); ?>;
	}
<?php } ?>
<?php if(!empty($options['colors_menu_random_background'])){ ?>
.nav-random a:after {
	background: <?php echo esc_attr($options['colors_menu_random_background']); ?>;
}
<?php } ?>
<?php if(!empty($options['colors_menu_border'])){ ?>
.nav-button::before, .sf-menu > li::before {
	background: <?php echo esc_attr($options['colors_menu_border']); ?>;
}
<?php } ?>
<?php if(!empty($options['colors_menu'])){ ?>
.top-nav a,
.top-nav {
	color: <?php echo esc_attr($options['colors_menu']); ?>;
}
.mt-m-cool-button-line,
.mt-m-cool-button-line:after,
.mt-m-cool-button-line:before {
	background: <?php echo esc_attr($options['colors_menu']); ?>;
}
<?php } ?>
<?php if(!empty($options['colors_menu_small_button'])){ ?>
.nav-button.active .mt-m-cool-button-line,
.nav-button.active .mt-m-cool-button-line:after,
.nav-button.active .mt-m-cool-button-line:before,
.nav-button:hover .mt-m-cool-button-line,
.nav-button:hover .mt-m-cool-button-line:after,
.nav-button:hover .mt-m-cool-button-line:before  {
	background: <?php echo esc_attr($options['colors_menu_small_button']); ?>;
}
<?php } ?>
<?php if(!empty($options['colors_menu_hover']) or !empty($options['colors_menu_hover_text'])){ ?>
	.sf-menu li a:hover,
	.sf-menu > li:hover > a,
	.sf-menu li.sfHover,
	ul.sf-menu li.current-cat > a, div.sf-menu ul ul li.current-cat > a,
	ul.sf-menu li.current_page_item > a, div.sf-menu ul ul li.current_page_item > a,
	ul.sf-menu li.current-menu-item > a, div.sf-menu ul ul li.current-menu-item > a,
	ul.sf-menu li.current-menu-ancestor > a, div.sf-menu ul ul li.current-menu-ancestor > a,
	.sf-menu li.current_page_item::before, .sf-menu li:hover::before {
		<?php if(!empty($options['colors_menu_hover'])){ ?> background: <?php echo esc_attr($options['colors_menu_hover']); ?>;<?php } ?>
		<?php if(!empty($options['colors_menu_hover_text'])){ ?> color: <?php echo esc_attr($options['colors_menu_hover_text']); ?>;<?php } ?>
}
<?php } ?>
<?php if(!empty($options['colors_menu_sub_hover']) or !empty($options['colors_menu_sub_hover_background'])){ ?>
	ul.sf-menu ul li.current-cat > a, div.sf-menu ul ul ul li.current-cat > a,
	ul.sf-menu ul li.current-menu-item > a, div.sf-menu ul ul ul li.current-menu-item > a,
	ul.sf-menu ul li.current_page_item > a, div.sf-menu ul ul ul li.current_page_item > a,
	ul.sf-menu ul li.current-menu-ancestor > a, div.sf-menu ul ul ul li.current-menu-ancestor > a,
	ul.sf-menu ul li a:hover, div.sf-menu ul ul li a:hover {
		<?php if(!empty($options['colors_menu_sub_hover_background'])){ ?> background: <?php echo esc_attr($options['colors_menu_sub_hover_background']); ?>;<?php } ?>
		<?php if(!empty($options['colors_menu_sub_hover'])){ ?> color: <?php echo esc_attr($options['colors_menu_sub_hover']); ?>;<?php } ?>
}
<?php } ?>

<?php if(!empty($options['colors_menu_sub']) or !empty($options['colors_menu_sub_background'])){ ?>
.sf-menu ul li a {
		<?php if(!empty($options['colors_menu_sub'])){ ?> color: <?php echo esc_attr($options['colors_menu_sub']); ?>;<?php } ?>
		<?php if(!empty($options['colors_menu_sub_background'])){ ?> background: <?php echo esc_attr($options['colors_menu_sub_background']); ?>;<?php } ?>
}
.sf-menu ul li,
.df-is-megamenu ul {
	<?php if(!empty($options['colors_menu_sub_background'])){ ?> background: <?php echo esc_attr($options['colors_menu_sub_background']); ?>;<?php } ?>
}
<?php } ?>
<?php if(!empty($options['colors_menu_sub_cat']) or !empty($options['colors_menu_sub_cat_bg'])){ ?>
	<?php if(!empty($options['colors_menu_sub_cat'])){ ?>.megamenu-span h4 { color: <?php echo esc_attr($options['colors_menu_sub_cat']); ?> }<?php } ?>
	<?php if(!empty($options['colors_menu_sub_cat_bg'])){ ?>.megamenu-span h4 { background: <?php echo esc_attr($options['colors_menu_sub_cat_bg']); ?> }<?php } ?>
<?php } ?>
<?php if(!empty($options['colors_menu_sub_cat_hover']) or !empty($options['colors_menu_sub_cat_hover_bg'])){ ?>
	<?php if(!empty($options['colors_menu_sub_cat_hover'])){ ?>.megamenu-span:hover h4 { color: <?php echo esc_attr($options['colors_menu_sub_cat_hover']); ?> }<?php } ?>
	<?php if(!empty($options['colors_menu_sub_cat_hover_bg'])){ ?>.megamenu-span:hover h4 { background: <?php echo esc_attr($options['colors_menu_sub_cat_hover_bg']); ?> }<?php } ?>
<?php } ?>
<?php if(!empty($options['colors_menu_small_button_background'])){ ?>
.nav-button:hover,
.nav-button:hover::before,
.nav-button.active,
.nav-button.active::before {
	background: <?php echo esc_attr($options['colors_menu_small_button_background']); ?>;
}
<?php } ?>
<?php if(!empty($options['colors_menu_small_background'])){ ?>
.hover-menu {
	background: <?php echo esc_attr($options['colors_menu_small_background']); ?>;
}
<?php } ?>
<?php if(!empty($options['colors_menu_small_link'])){ ?>
.hover-menu a{
	color: <?php echo esc_attr($options['colors_menu_small_link']); ?>;
}
<?php } ?>
<?php if(!empty($options['colors_menu_small_link_hover'])){ ?>
.hover-menu a:hover{
	color: <?php echo esc_attr($options['colors_menu_small_link_hover']); ?>;
}
<?php } ?>
<?php if(!empty($options['colors_menu_small_text'])){ ?>
.hover-menu-head {
	color: <?php echo esc_attr($options['colors_menu_small_text']); ?>;
}
<?php } ?>

<?php if(!empty($options['colors_footer_top_background'])){ ?> .footer-top { background: <?php echo esc_attr($options['colors_footer_top_background']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_top_title'])){ ?> .footer-top h2 { color: <?php echo esc_attr($options['colors_footer_top_title']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_top_text'])){ ?> .footer-top p { color: <?php echo esc_attr($options['colors_footer_top_text']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_top_link'])){ ?> .footer-top p a, .footer .mail { color: <?php echo esc_attr($options['colors_footer_top_link']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_top_link_hover'])){ ?> .footer-top p a:hover, .footer .mail:hover { color: <?php echo esc_attr($options['colors_footer_top_link_hover']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_border'])){ ?>
	.footer-bottom { border-top: 1px solid <?php echo esc_attr($options['colors_footer_border']); ?>; }
	.footer-scroll-to-top-link { background: <?php echo esc_attr($options['colors_footer_border']); ?>; }
<?php } ?>
<?php if(!empty($options['colors_footer_bottom_background'])){ ?> .footer-bottom { background: <?php echo esc_attr($options['colors_footer_bottom_background']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_bottom_text'])){ ?> .footer-bottom p { color: <?php echo esc_attr($options['colors_footer_bottom_text']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_bottom_link'])){ ?> .footer-bottom a { color: <?php echo esc_attr($options['colors_footer_bottom_link']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_bottom_link_hover'])){ ?> .footer-bottom a:hover { color: <?php echo esc_attr($options['colors_footer_bottom_link_hover']); ?>; } <?php } ?>

<?php if(!empty($options['colors_footer_social_icon'])){ ?> .footer .social li a { color: <?php echo esc_attr($options['colors_footer_social_icon']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_social_background'])){ ?> .footer .social li a { background: <?php echo esc_attr($options['colors_footer_social_background']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_social_icon_hover'])){ ?> .footer .social li a:hover { color: <?php echo esc_attr($options['colors_footer_social_icon_hover']); ?>; } <?php } ?>
<?php if(!empty($options['colors_footer_social_background_hover'])){ ?> .footer .social li a:hover { background: <?php echo esc_attr($options['colors_footer_social_background_hover']); ?>; } <?php } ?>
<?php

		if(isset($options['image_upload_test']))  {

				if(isset($options['background_repeat']) != "")		{
					if(isset($options['background_repeat']) == "full")		{
							echo "body { background-size:cover!important;}";
					} else {
							echo "body { background-repeat:"; echo esc_attr($options['background_repeat']); echo "!important;}";  }
					}
				if(isset($options['background_position']) != "")		{ echo "body { background-position:"; echo esc_attr($options['background_position']); echo "!important;}";  }
				if(isset($options['image_upload_test']) != "")	{ echo "body { background-image:url('"; echo esc_attr($options['image_upload_test']); echo "')!important;}";  }
				if(isset($options['background_attachment']) != "")	{ echo "body { background-attachment:"; echo esc_attr($options['background_attachment']); echo "!important;}";  }

		}

?>

<?php if(!empty($options['font_h1_size'])){ ?> h1 { font-size:<?php echo esc_attr($options['font_h1_size']); ?>px!important; } <?php } ?>
<?php if(!empty($options['font_h2_size'])){ ?> h2 { font-size:<?php echo esc_attr($options['font_h2_size']); ?>px!important; } <?php } ?>
<?php if(!empty($options['font_h3_size'])){ ?> h3 { font-size:<?php echo esc_attr($options['font_h3_size']); ?>px!important; } <?php } ?>
<?php if(!empty($options['font_h4_size'])){ ?> h4 { font-size:<?php echo esc_attr($options['font_h4_size']); ?>px!important; } <?php } ?>
<?php if(!empty($options['font_h5_size'])){ ?> h5 { font-size:<?php echo esc_attr($options['font_h5_size']); ?>px!important; } <?php } ?>
<?php if(!empty($options['font_h6_size'])){ ?> h6 { font-size:<?php echo esc_attr($options['font_h6_size']); ?>px!important; } <?php } ?>
<?php if(!empty($options['font_p_size'])){ ?> p { font-size:<?php echo esc_attr($options['font_p_size']); ?>px!important; } <?php } ?>

</style>
