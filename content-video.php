<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php $videos = get_post_meta(get_the_ID(), "magazin_video_url", true);  ?>
<?php
$video = "";
if($videos!=""){
	$video = apply_filters('the_content', "[embed]".$videos."[/embed]");
}
$allowed_html = array('iframe' => array( 'id' => array(),'width' => array(), 'allowfullscreen' => array(), 'height' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));

?>
	<?php if( ! is_search()) { ?>
		<?php  if ( has_post_thumbnail() ) { ?>
			<div class="post-img">
				<?php if(is_single()) {
					if(!empty($image_settings)) {
						if($video!=""){
							echo wp_kses($video, $allowed_html );
						}
						else if($image_settings=="yes") {
							echo get_the_post_thumbnail(get_the_ID(),"full");
						}
					} else if(!empty($options['post_image_image'])) {
						if($video!=""){
							echo wp_kses($video, $allowed_html );
						}
						else if($options['post_image_image']=="yes") {
							echo get_the_post_thumbnail(get_the_ID(),"full");
						}
					} else {
						if($video!=""){
							echo wp_kses($video, $allowed_html );
						}
					}
				} else {
					if($video!=""){
						echo wp_kses($video, $allowed_html );
					}
					else {
						?>
						<a href="<?php the_permalink(); ?>">
							<?php echo get_the_post_thumbnail(get_the_ID(),"full"); ?>
						</a> <?php
					}
				} ?>
			</div>
		<?php } else {
			if($video!=""){
				echo wp_kses($video, $allowed_html );
			}
		} ?>
	<?php } ?>

	<?php if (!is_single()){?>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();  ?></a></h1>
	</header>
	<?php } ?>

	<?php if ( !is_search() ) { ?>
		<div class="entry-content">
			<?php if( ! is_single()) { the_excerpt();	} else { the_content(); }  ?>
		</div>
	<?php } ?>

	<div class='clear'></div>
</article><!-- #post -->
