<div class="sidebar-widgets">
<?php

if (is_single()) {

	if(function_exists( 'is_woocommerce' ) ) {

			if (is_woocommerce()) {

					if ( is_active_sidebar( 'sidebar-woocommerce-single-widget-area' ) ) {

						dynamic_sidebar( 'sidebar-woocommerce-single-widget-area' );
					}

			} else {

					if ( is_active_sidebar( 'sidebar-single-widget-area' ) ) {

						dynamic_sidebar( 'sidebar-single-widget-area' );

					}
			}

	} else {

			if ( is_active_sidebar( 'sidebar-single-widget-area' ) ) {

				dynamic_sidebar( 'sidebar-single-widget-area' );
			}
	}
}


else if (is_search()) {

   	if ( is_active_sidebar( 'sidebar-search-widget-area' ) ) {

    	dynamic_sidebar( 'sidebar-search-widget-area' );
	}
}

else if (is_category() or is_tag()) {

	if ( is_active_sidebar( 'sidebar-blog-widget-area' ) ) {

		dynamic_sidebar( 'sidebar-blog-widget-area' );
	}
}


else {


	if(function_exists( 'is_woocommerce' ) ) {

			if (is_woocommerce()) {

					if ( is_active_sidebar( 'sidebar-woocommerce-widget-area' ) ) {

						dynamic_sidebar( 'sidebar-woocommerce-widget-area' );
					}

			} else {

					if ( is_active_sidebar( 'sidebar-widget-area-1' ) ) {

						dynamic_sidebar( 'sidebar-widget-area-1' );
					}
			}

	} else {

		if ( is_active_sidebar( 'sidebar-widget-area-1' ) ) {

			dynamic_sidebar( 'sidebar-widget-area-1' );

		}

	}

 }

?></div>
