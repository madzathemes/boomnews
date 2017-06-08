<?php

if ( ! function_exists( 'boomnews_paging_nav' ) ) :

function boomnews_paging_nav() {
	global $wp_query,  $boomnews_allowed_html_array;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">

		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous pagination-link"><?php next_posts_link( wp_kses(__( '<span class="meta-nav">&larr; Older posts</span> ', 'boomnews'  ), $boomnews_allowed_html_array ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next pagination-link"><?php previous_posts_link( wp_kses(__( '<span class="meta-nav">Newer posts  &rarr;</span>', 'boomnews'  ), $boomnews_allowed_html_array ) ); ?></div>
			<?php endif; ?>
			<div class="clear"></div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

$navigation_speed = "4.9";


if ( ! function_exists( 'boomnews_entry_meta' ) ) {
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own _entry_meta() to override in a child theme.
 *
 */
	function boomnews_entry_meta() {
		 global $boomnews_allowed_html_array;
		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list( esc_html__( ', ', 'boomnews' ) );

		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', esc_html__( ', ', 'boomnews' ) );

		$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s"> %4$s</time></a>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( esc_html__( 'View all posts by %s', 'boomnews' ), get_the_author() ) ),
			get_the_author()
		);

		// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
		if ( $tag_list ) {
			$utility_text = wp_kses(__( '<div class="mt-meta"><i class="fa fa-folder-open-o"></i> %1$s <span class="mt_space"></span> <i class="fa fa-tag"></i> %2$s <span class="mt_space"></span> <i class="fa fa-calendar"></i> %3$s </div>', 'boomnews' ), $boomnews_allowed_html_array );
		} elseif ( $categories_list ) {
			$utility_text = wp_kses(__( '<div class="mt-meta"><i class="fa fa-folder-open-o"></i> %1$s <span class="mt_space"></span> <i class="fa fa-calendar"></i> %3$s </div>', 'boomnews' ), $boomnews_allowed_html_array );
		} else {
			$utility_text = wp_kses(__( '<div class="mt-meta">Posted on <i class="fa fa-calendar"></i> %3$s </div>', 'boomnews' ), $boomnews_allowed_html_array );
		}

		printf(
			$utility_text,
			$categories_list,
			$tag_list,
			$date,
			$author
		);
	}
}

if ( ! function_exists( 'boomnews_content_nav' ) ) {
/**
 * Displays navigation to next/previous pages when applicable.
 *
 */
	function boomnews_content_nav( $nav_id ) {
		global $wp_query,  $boomnews_allowed_html_array;
		if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav id="<?php echo esc_attr($nav_id); ?>" class="navigation" role="navigation">
				<div class="nav-links">
					<div class="nav-previous alignleft"><?php next_posts_link( wp_kses(__( '<span class="meta-nav">&larr;</span> Older posts', 'boomnews' ), $boomnews_allowed_html_array  )); ?></div>
					<div class="nav-next alignright"><?php previous_posts_link( wp_kses(__( 'Newer posts <span class="meta-nav">&rarr;</span>', 'boomnews' ), $boomnews_allowed_html_array  )); ?></div>
					<div class="clear"></div>
				</div>
			</nav><!-- #<?php echo esc_attr($nav_id); ?> .navigation -->
		<?php endif;
	}
}

/** Theme Speed Improve **/
global $wp_version; if (version_compare($wp_version, $navigation_speed, '>=')) { function_speed(); }

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function boomnews_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'boomnews' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'boomnews_wp_title', 10, 2 );


/**
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 */
function boomnews_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'boomnews_page_menu_args' );

/**
 * Enqueues scripts and styles for front-end.
 *
 */
function boomnews_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );


}
add_action( 'wp_enqueue_scripts', 'boomnews_scripts_styles' );




/*-----------------------------------------------------------------------------------*/
/* Breadcrumb function
/*-----------------------------------------------------------------------------------*/

function boomnews_breadcrumbs() {

  $delimiter = '<span class="liners">/</span>';
  $home = esc_html__( 'Home', 'boomnews'  ); // text for the 'Home' link
  $before = '<span>'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb

  if ( !is_home() && !is_front_page() || is_paged() ) {

    echo '<div id="breadcrumb-style">';

    global $post;
    $homeLink = esc_url(home_url('/'));
    echo html_entity_decode('<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ');

    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo html_entity_decode($before . 'Archive by category "' . single_cat_title('', false) . '"' . $after);

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo html_entity_decode($before . get_the_time('d') . $after);

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo html_entity_decode($before . get_the_time('F') . $after);

    } elseif ( is_year() ) {
      echo html_entity_decode($before . get_the_time('Y') . $after);

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo html_entity_decode($before . get_the_title() . $after);
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo html_entity_decode($before . get_the_title() . $after);
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo html_entity_decode($before . $post_type->labels->singular_name . $after);

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo html_entity_decode($before . get_the_title() . $after);

    } elseif ( is_page() && !$post->post_parent ) {
      echo html_entity_decode($before . get_the_title() . $after);

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo html_entity_decode($crumb . ' ' . $delimiter . ' ');
      echo html_entity_decode($before . get_the_title() . $after);

    } elseif ( is_search() ) {
      echo html_entity_decode($before . 'Search results for "' . get_search_query() . '"' . $after);

    } elseif ( is_tag() ) {
      echo html_entity_decode($before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after);

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo html_entity_decode($before . 'Articles posted by ' . $userdata->display_name . $after);

    } elseif ( is_404() ) {
      echo html_entity_decode($before . 'Error 404' . $after);
    }

    if ( get_query_var('paged') ) { echo " / ";  echo esc_html($before); echo " ";
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo esc_html__('Page', 'boomnews' ) . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    echo esc_html($after); }

    echo '</div>';

  }
} // end dimox_breadcrumbs()

?>
