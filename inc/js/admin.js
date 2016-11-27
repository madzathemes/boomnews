jQuery(document).ready(function() {
  jQuery('#magazin_metabox_post_gallery').hide();
  jQuery('#magazin_metabox_post_video').hide();

  jQuery('#post-format-gallery').is(':checked') ? jQuery("#magazin_metabox_post_gallery").show() : jQuery("#magazin_metabox_post_gallery").hide();
  jQuery('#post-format-video').is(':checked') ? jQuery("#magazin_metabox_post_video").show() : jQuery("#magazin_metabox_post_video").hide();

  jQuery('#post-format-gallery').click(function() {
      jQuery("#magazin_metabox_post_gallery").toggle(this.checked);
  });

  jQuery('#post-format-video').click(function() {
      jQuery("#magazin_metabox_post_video").toggle(this.checked);
  });

  jQuery('#post-format-0, #post-format-video').click(function() {
      jQuery('#magazin_metabox_post_gallery').hide();
  });
  jQuery('#post-format-0, #post-format-gallery').click(function() {
      jQuery('#magazin_metabox_post_video').hide();
  });


});
