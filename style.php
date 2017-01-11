<style type="text/css"><?php
$options = get_option("boomnews_theme_options");
$style = get_post_meta(get_the_ID(), "magazin_background_color", true);
?>

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
