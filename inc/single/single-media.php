<?php function boomnews_single_media() {

  $images = get_post_meta( get_the_ID(), 'magazin_post_gallery_images', 1 );
  $videos = get_post_meta(get_the_ID(), "magazin_video_url", true);
  $allowed_html = array('iframe' => array( 'id' => array(),'width' => array(), 'allowfullscreen' => array(), 'height' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));

  $video = "";
  if($videos!=""){
  	$video = apply_filters('the_content', "[embed]".$videos."[/embed]");
  }

  if(has_post_format("gallery")) { if(!empty($images)) { ?>

    <div class="post-gallery-wrap">
      <div class="post-gallery">
        <?php foreach ( (array) $images as $attachment_id => $attachment_url ) { ?>
            <div class="item" data-hash="img-<?php echo esc_attr($attachment_id); ?>">
            <?php echo wp_get_attachment_image( $attachment_id, 'large','', array( "class" => "mt-radius") ); ?>
          </div>
        <?php } ?>
      </div>

      <div class="post-gallery-nav">
        <?php foreach ( (array) $images as $attachment_id => $attachment_url ) { ?>
            <a class="button secondary url" href="#img-<?php echo esc_attr($attachment_id); ?>"><?php echo wp_get_attachment_image( $attachment_id, 'thumbnail','', array( "class" => "mt-radius" ) ); ?></a>
        <?php } ?>
      </div>
    </div>

  <?php } }

  else if(has_post_format("video")) {

    if($video!=""){
      ?><div class="mt-video-frame"><?php echo wp_kses($video, $allowed_html ); ?></div><?php
    }

  } else { ?>

    <?php  if ( has_post_thumbnail() ) {  $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); ?>
			<div class="post-img">
  				<div class="single-share">
            <a itemprop="image" class="lightbox" href="<?php echo get_the_post_thumbnail_url(get_the_ID(),"large"); ?>">
              <div  itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                <?php echo get_the_post_thumbnail(get_the_ID(),"large", array( 'class' => 'mt-radius')); ?>
              </div>
            </a>
            <div class="single-share-socials mt-radius-b">
              <a href="http://www.facebook.com/sharer.php?u=<?php get_the_permalink(); ?>" target="_blank"><div class="facebook mt-radius-b"></div></a>
              <a href="http://twitter.com/home/?status=<?php get_the_title(); ?> - <?php get_the_permalink(); ?>" target="_blank"><div class="twiiter mt-radius-b"></div></a>
              <a href="https://plus.google.com/share?url=<?php get_the_permalink(); ?>" target="_blank"><div class="google mt-radius-b"></div></a>
              <a href="http://pinterest.com/pin/create/button/?url=<?php get_the_permalink(); ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest mt-radius-b"></div></a>
            </div>
          </div>
			</div>
		<?php } ?>

  <?php } ?>

<?php } ?>
<?php add_filter('boomnews_single_media','boomnews_single_media'); ?>
