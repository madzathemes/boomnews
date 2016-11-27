
jQuery(document).ready(function() {
  'use strict';

  var ppp = 10; // Post per page
  var cat = 8;
  var pageNumber = 1;
  var pageNumber_2 = 1;
  var pageNumber_3 = 1;
  var pageNumber_4 = 1;


  function load_posts_1(){
      pageNumber++;
      var str = '&pageNumber=' + pageNumber + '&ppp=' + ppp + '&action=more_post_ajax';
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
      return false;
  }

  function load_posts_2(){
      pageNumber_2++;
      var str = '&pageNumber=' + pageNumber_2 + '&ppp=' + ppp + '&action=more_post_ajax&format=posts';
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
      return false;
  }

  function load_posts_3(){
      pageNumber_3++;
      var str = '&pageNumber=' + pageNumber_3 + '&ppp=' + ppp + '&action=more_post_ajax&format=video';
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
      return false;
  }

  function load_posts_4(){
      pageNumber_4++;
      var str = '&pageNumber=' + pageNumber_4 + '&ppp=' + ppp + '&action=more_post_ajax&format=gallery';
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


});
