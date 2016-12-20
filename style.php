<style type="text/css"><?php
$options = get_option("boomnews_theme_options");
$style = get_post_meta(get_the_ID(), "magazin_background_color", true);
?>

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
