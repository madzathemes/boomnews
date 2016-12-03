
jQuery(document).ready(function() {
  'use strict';

  var ppp = jQuery( ".mt-load-more" ).data( "ppp" );
  var category = jQuery( ".mt-load-more" ).data( "category" );
  var tag = jQuery( ".mt-load-more" ).data( "tag" );
  var offset_1 = jQuery('#ajax-posts_1').find('.poster').length;
  var offset_2 = jQuery('#ajax-posts_2').find('.poster').length;
  var offset_3 = jQuery('#ajax-posts_3').find('.poster').length;
  var offset_4 = jQuery('#ajax-posts_4').find('.poster').length;
  var offset_popular = jQuery('#ajax-posts_popular').find('.poster').length;
  var offset_hot = jQuery('#ajax-posts_hot').find('.poster').length;
  var offset_trending = jQuery('#ajax-posts_trending').find('.poster').length;
  var orderby = jQuery( ".mt-load-more" ).data( "orderby" );
  var orderbyp = jQuery( ".mt-load-more" ).data( "orderbyp" );
  var orderbyh = jQuery( ".mt-load-more" ).data( "orderbyh" );
  var orderbyt = jQuery( ".mt-load-more" ).data( "orderbyt" );
  var author = jQuery( ".mt-load-more" ).data( "author" );

  function load_posts_1(){
      var str = '&offset=' + offset_1 + '&ppp=' + ppp + '&action=more_post_ajax&category=' + category + '&tag=' + tag + '&orderby=' + orderby + '&author=' + author + '';
      jQuery.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = jQuery(data);
              if($data.length){
                  jQuery("#ajax-posts_1").append($data);
                  jQuery(".mt-tab-1 .mt-load-more").attr("disabled",false);
              } else{
                  jQuery(".mt-tab-1 .mt-load-more").attr("disabled",true);
                  jQuery(".mt-tab-1 .mt-load-more").addClass('nomore');
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      offset_1 += ppp;
	    return false;
  }

  function load_posts_2(){

      var str = '&offset=' + offset_2 + '&ppp=' + ppp + '&action=more_post_ajax&format=posts&category=' + category + '&tag=' + tag + '&orderby=' + orderby + '&author=' + author + '';
      jQuery.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = jQuery(data);
              if($data.length){
                  jQuery("#ajax-posts_2").append($data);
                  jQuery(".mt-tab-2 .mt-load-more").attr("disabled",false);
              } else{
                  jQuery(".mt-tab-2 .mt-load-more").attr("disabled",true);
                  jQuery(".mt-tab-2 .mt-load-more").addClass('nomore');
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      offset_2 += ppp;
      return false;
  }

  function load_posts_3(){
      var str = '&offset=' + offset_3 + '&ppp=' + ppp + '&action=more_post_ajax&format=video&category=' + category + '&tag=' + tag + '&orderby=' + orderby + '&author=' + author + '';
      jQuery.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = jQuery(data);
              if($data.length){
                  jQuery("#ajax-posts_3").append($data);
                  jQuery(".mt-tab-3 .mt-load-more").attr("disabled",false);
              } else{
                  jQuery(".mt-tab-3 .mt-load-more").attr("disabled",true);
                  jQuery(".mt-tab-3 .mt-load-more").addClass('nomore');
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      offset_3 += ppp;
      return false;
  }

  function load_posts_4(){

      var str = '&offset=' + offset_4 + '&ppp=' + ppp + '&action=more_post_ajax&format=gallery&category=' + category + '&tag=' + tag + '&orderby=' + orderby + '&author=' + author + '';
      jQuery.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = jQuery(data);
              if($data.length){
                  jQuery("#ajax-posts_4").append($data);
                  jQuery(".mt-tab-4 .mt-load-more").attr("disabled",false);
              } else{
                  jQuery(".mt-tab-4 .mt-load-more").attr("disabled",true);
                  jQuery(".mt-tab-4 .mt-load-more").addClass('nomore');
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      offset_4 += ppp;
      return false;
  }

  function load_posts_popular(){

      var str = '&offset=' + offset_popular + '&ppp=' + ppp + '&action=more_post_ajax&format=popular&category=' + category + '&orderby=' + orderbyp + '&author=' + author + '';
      jQuery.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = jQuery(data);
              if($data.length){
                  jQuery("#ajax-posts_popular").append($data);
                  jQuery(".mt-tab-popular .mt-load-more").attr("disabled",false);
              } else{
                  jQuery(".mt-tab-popular .mt-load-more").attr("disabled",true);
                  jQuery(".mt-tab-popular .mt-load-more").addClass('nomore');
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      offset_popular += ppp;
      return false;
  }

  function load_posts_hot(){

      var str = '&offset=' + offset_hot + '&ppp=' + ppp + '&action=more_post_ajax&format=hot&category=' + category + '&orderby=' + orderbyh + '&author=' + author + '';
      jQuery.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = jQuery(data);
              if($data.length){
                  jQuery("#ajax-posts_hot").append($data);
                  jQuery(".mt-tab-hot .mt-load-more").attr("disabled",false);
              } else{
                  jQuery(".mt-tab-hot .mt-load-more").attr("disabled",true);
                  jQuery(".mt-tab-hot .mt-load-more").addClass('nomore');
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      offset_hot += ppp;
      return false;
  }

  function load_posts_trending(){

      var str = '&offset=' + offset_trending + '&ppp=' + ppp + '&action=more_post_ajax&format=trending&category=' + category + '&orderby=' + orderbyt + '&author=' + author + '';
      jQuery.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_posts.ajaxurl,
          data: str,
          success: function(data){
              var $data = jQuery(data);
              if($data.length){
                  jQuery("#ajax-posts_trending").append($data);
                  jQuery(".mt-tab-trending .mt-load-more").attr("disabled",false);
              } else{
                  jQuery(".mt-tab-trending .mt-load-more").attr("disabled",true);
                  jQuery(".mt-tab-trending .mt-load-more").addClass('nomore');
              }
          },
          error : function(jqXHR, textStatus, errorThrown) {
              $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
          }

      });
      offset_trending += ppp;
      return false;
  }

  jQuery(".mt-tab-1 .mt-load-more").on("click",function(){ // When btn is pressed.
      jQuery(".mt-tab-1 .mt-load-more").attr("disabled",true); // Disable the button, temp.
      load_posts_1();
      return false;
  });
  jQuery(".mt-tab-2 .mt-load-more").on("click",function(){ // When btn is pressed.
      jQuery(".mt-tab-2 .mt-load-more").attr("disabled",true); // Disable the button, temp.
      load_posts_2();
      return false;
  });
  jQuery(".mt-tab-3 .mt-load-more").on("click",function(){ // When btn is pressed.
      jQuery(".mt-tab-3 .mt-load-more").attr("disabled",true); // Disable the button, temp.
      load_posts_3();
      return false;
  });
  jQuery(".mt-tab-4 .mt-load-more").on("click",function(){ // When btn is pressed.
      jQuery(".mt-tab-4 .mt-load-more").attr("disabled",true); // Disable the button, temp.
      load_posts_4();
      return false;
  });
  jQuery(".mt-tab-popular .mt-load-more").on("click",function(){ // When btn is pressed.
      jQuery(".mt-tab-popular .mt-load-more").attr("disabled",true); // Disable the button, temp.
      load_posts_popular();
      return false;
  });
  jQuery(".mt-tab-hot .mt-load-more").on("click",function(){ // When btn is pressed.
      jQuery(".mt-tab-hot .mt-load-more").attr("disabled",true); // Disable the button, temp.
      load_posts_hot();
      return false;
  });
  jQuery(".mt-tab-trending .mt-load-more").on("click",function(){ // When btn is pressed.
      jQuery(".mt-tab-trending .mt-load-more").attr("disabled",true); // Disable the button, temp.
      load_posts_trending();
      return false;
  });


});
