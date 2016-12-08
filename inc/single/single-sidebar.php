<?php function boomnews_single_sidebar() {?>
  <?php $allowed_html = array('ins' => array( 'class' => array(), 'style' => array(),'data-ad-client' => array(),'data-ad-slot' => array(),'data-ad-format' => array()), 'iframe' => array( 'id' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'async' => array(), 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array())); ?>
  <?php $option = get_option("boomnews_theme_options"); ?>
  <?php $optionz = get_option("magazin_theme_options"); ?>
  <?php if ( is_active_sidebar( 'sidebar-single-widget-area' ) ) { ?>

    <?php dynamic_sidebar( 'sidebar-single-widget-area' ); ?>

  <?php } else { ?>

    <?php if ( shortcode_exists( 'posts' ) ) { echo do_shortcode('[posts type=normal title="'. esc_html__( 'Featured Post','boomnews' ) .'" title_type="center" offset="0" item_nr=1]'); } ?>


        <?php if  (!empty($optionz['sidebar_ad_top'])) {  ?>
          <div class="advertise text-center">
            <?php echo html_entity_decode($optionz['sidebar_ad_top']); ?>
          </div>
        <?php } ?>

    <?php if  (!empty($optionz['sidebar_ad_middle'])) {  ?>
      <div class="advertise text-center">
        <?php echo html_entity_decode($optionz['sidebar_ad_middle']); ?>
      </div>
    <?php } ?>
    <?php if ( shortcode_exists( 'posts_trending' ) ) { ?>
    <h2 class="heading"><span><?php esc_html_e('Trending Posts', 'boomnews'); ?></span></h2>
    <?php echo do_shortcode('[posts_trending type=trending-normal orderby=share item_nr=5]'); } ?>
    <div class="space-20"></div>
    <?php if  (!empty($optionz['sidebar_ad_bottom'])) {  ?>
      <div class="advertise text-center">
        <?php echo html_entity_decode($optionz['sidebar_ad_bottom']); ?>
      </div>
    <?php } ?>

  <?php } ?>
<?php } ?>
