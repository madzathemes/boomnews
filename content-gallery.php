<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php $images = get_post_meta( get_the_ID(), 'magazin_post_gallery_images', 1 ); ?>

  <?php if (!is_single()){ ?>
    <header class="entry-header">
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();  ?></a></h2>
    </header>
  <?php } ?>

  <?php if ( !is_search() ) { ?>
		<div class="entry-content">
			<?php if( ! is_single()) { the_excerpt();	} else { the_content(); }  ?>
		</div>
	<?php } ?>

  <div class='clear'></div>

</article>
