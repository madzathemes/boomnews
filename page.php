<?php
/**
 * @author madars.bitenieks
 * @copyright 2016
 */

get_header(); ?>
<div class="mt-container-wrap">

	<?php boomnews_title(); ?>
	<div class="container mt-content-container">

	<?php /* Sidebar Meta from Magazin framework */
	$layouts = get_post_meta(get_the_ID(), "magazin_page_sidebar", true);

	if(!empty($layouts)){
		$layout= $layouts;
	} else {
		$layout = "full";
	}
	$float_layout = "pull-left";
	$float_sidebar = "pull-right";

	if ($layout == "left") {
		$float_layout = "pull-right";
		$float_sidebar = "pull-left";
	}

	$more = 0;

	if ($layout == "full") {
	?>
	<div class="row">
			<div class="col-md-12">
					<?php	if ( have_posts() ) while ( have_posts() ) : the_post();

						the_content();
						comments_template( '', true );
						$do_not_duplicate = get_the_ID();


				  endwhile; ?>
				</div>
	</div>

	<?php } else { ?>

	<div class="row">
		<div class="col-md-<?php if ($layout == "full" or $layout == "") { echo "12 ";  } else {  echo "8 ";  } echo sanitize_html_class($float_layout); ?> ">

				  <?php if ( have_posts() ) while ( have_posts() ) : the_post();

					  the_content();
						comments_template( '', true );

				  endwhile;  ?>

		</div>

		<?php if ($layout == "full" or $layout == "") {} else { ?>

			<div class="col-md-4 sidebar <?php echo sanitize_html_class($mt_float_sidebar); ?> "><?php get_sidebar(); ?></div>

		<?php } ?>

	</div>

	<?php

	}

	?>
	</div>
</div>
<?php get_footer(); ?>
