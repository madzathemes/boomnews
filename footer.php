<div class="footer-wrap" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
		<div class="container">
			<?php if ( true == get_theme_mod( 'mt_footer_hot_post', true ) ) {  ?>
				<?php if ( is_active_sidebar( 'sidebar-footer-hotposts-widget-area' ) ) { ?>

		        <?php dynamic_sidebar( 'sidebar-footer-hotposts-widget-area' ); ?>

		    <?php } else { ?>
					<?php if ( shortcode_exists( 'posts_trending' ) ) { echo do_shortcode('[posts_trending type=trending-carousel title="'. esc_html__( 'Hot Posts','boomnews' ) .'" title_type=left item_nr=5]'); } ?>
				<?php } ?>
			<?php } ?>
		</div>

		<?php if ( true == get_theme_mod( 'mt_footer_ad', true ) ) {  ?>
			<?php $optionz = get_option("magazin_theme_options");
			if (!empty($optionz['article_ad_bottom'])) {  ?>
				<div class="advertise text-center">
					<?php echo do_shortcode(html_entity_decode($optionz['article_ad_bottom'])); ?>
				</div>
			<?php } ?>
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

	</div>
</div>

<a href="#" class="footer-scroll-to-top mt-theme-background"></a>
<?php  wp_footer(); ?>
</body>
</html>
