<div class="footer-wrap" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<div class="container">
			<?php if ( shortcode_exists( 'posts_trending' ) ) { echo do_shortcode('[posts_trending type=trending-carousel title="'. esc_html__( 'Hot Posts','boomnews' ) .'" title_type=left item_nr=5]'); } ?>
		</div>
		<?php $optionz = get_option("magazin_theme_options");
		if (!empty($optionz['article_ad_bottom'])) {  ?>
			<div class="advertise text-center">
				<?php echo html_entity_decode($optionz['article_ad_bottom']); ?>
			</div>
		<?php } ?>
	<?php $option = get_option("boomnews_theme_options"); ?>
	<?php if(!empty($option['footer_page'])){ ?>
		<?php $footer_page = $option['footer_page']; ?>
		<?php $footer = new WP_Query("page_id=$footer_page"); while($footer->have_posts()) : $footer->the_post(); ?>
			<div class="container footer-page">
				<?php the_content(); ?>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
	<?php } ?>
	<?php if(!empty($option['footer_top']) or !empty($option['footer_bottom'])){ ?>
		<div class="footer">
			<?php boomnews_footer_2(); ?>
		</div>
	<?php } ?>
	<div class="mt-f-data"><div  data-facebook="<?php $data = get_option("facebook_username"); if(!empty($data)) { echo esc_attr($data); } else { echo "empty"; } ?>"
			data-token="<?php $data = get_option("facebook_token"); if(!empty($data)) { echo esc_attr($data); } else { echo "empty"; } ?>"
			data-twitter="<?php $data = get_option("twitter_username"); if(!empty($data)) { echo esc_attr($data); } else { echo "empty"; } ?>"
			data-youtube="<?php  $data = get_option("youtube_username"); if(!empty($data)) { echo esc_attr($data); } else { echo "empty"; } ?>"></div></div>
	</div>
</div>

<a href="#" class="footer-scroll-to-top mt-theme-background"></a>
<?php  wp_footer(); ?>
</body>
</html>
