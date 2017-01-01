jQuery(document).ready(function() {
  'use strict';

  jQuery(".mtc-select-border .mct-box").on("click",function() {
    jQuery(".mtc-select-border .mct-box").removeClass("active");
    jQuery(this).addClass("active");
    var $border = jQuery(this).data( "border" );
    jQuery("body").removeClass("mt-radius-25");
    jQuery("body").removeClass("mt-radius-5");
    jQuery('body').addClass($border);
  });

  jQuery(".mtc-select-sheme .mct-box").on("click",function() {
    jQuery(".mtc-select-sheme .mct-box").removeClass("active");
    jQuery(this).addClass("active");
    var $color = jQuery(this).data( "sheme" );
    jQuery("body").removeClass("mt-color-1");
    jQuery("body").removeClass("mt-color-2");
    jQuery('body').addClass($color);
  });

  jQuery(".mtc-select-layout .mtc-bt").on("click",function() {
    jQuery(".mtc-select-layout .mtc-bt").removeClass("active");
    jQuery(this).addClass("active");
    var $layout = jQuery(this).data( "layout" );
    jQuery("body").removeClass("boxed-layout-on");
    jQuery('body').addClass($layout);
  });

  jQuery(".mtc-select-animation .mtc-bt").on("click",function() {
    jQuery(".mtc-select-animation .mtc-bt").removeClass("active");
    jQuery(this).addClass("active");
    var $layout = jQuery(this).data( "animation" );
    jQuery("body").removeClass("zoom-on");
    jQuery('body').addClass($layout);
  });

  jQuery(".mtc-close").on("click",function() {
    jQuery('.mtc-wrap, .mtc-fix').addClass("active");
  });

});
