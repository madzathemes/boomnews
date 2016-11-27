<?php function boomnews_title() {

  ?>
  <div class="container page-title">
    <div class="row">
      <div class="col-md-12">
        <?php if(is_page()) { ?>
          <h1><?php the_title(); ?></h1>
        <?php } else ?>
        <?php if(is_search()) { ?>
					<h1><?php printf( esc_html__( 'Search Results for: %s', "boomnews"  ), '' . get_search_query() . '' ); ?></h1>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php
}

add_filter('boomnews_title','boomnews_title'); ?>
