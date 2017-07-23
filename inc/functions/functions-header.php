<?php function boomnews_header() {
$allowed_html = array('ins' => array( 'class' => array(), 'style' => array(),'data-ad-client' => array(),'data-ad-slot' => array(),'data-ad-format' => array()), 'iframe' => array( 'id' => array(),'name' => array(),'src' => array(),'style' => array(),'scrolling' => array(),'frameborder' => array()), 'script' => array( 'async' => array(), 'type' => array(),'src' => array()), 'noscript' => array(), 'small' => array( 'class' => array()), 'img' => array( 'src' => array(), 'alt' => array(), 'class' => array(), 'width' => array(), 'height' => array() ), 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'i' => array('class' => array()),  'em' => array(), 'strong' => array(), 'div' => array('class' => array()), 'span' => array('class' => array()));
$option = get_option("boomnews_theme_options");
$optioz = get_option("magazin_theme_options");
$page_option = get_post_meta(get_the_ID(), "magazin_menu_background_width", true);
if(!empty($page_option)) {
	if($page_option=="2") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
}
else if(!empty($option['menu_background_width'])) {
	if($option['menu_background_width']=="full") {
		$menu_full =  'menu-background';
		$menu_boxed =  '';
	} else {
		$menu_full =  '';
		$menu_boxed =  'menu-background';
	}
} else {
	$menu_full =  '';
	$menu_boxed =  'menu-background';
}
?>

<div class="mt-header-mobile menu-background-mobile hide-desktop top-nav <?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>search-on<?php } } ?>">
	<div class="nav-mobile pointer pull-left">
		<div class="mt-m-cool-button">
			<span class="mt-m-cool-button-line"></span>
		</div>
	</div>
	<div class="mt-mobile-logo"><?php boomnews_logo_mobile(); ?></div>
	<?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>
		<div class="search-close"></div>
		<div class="nav-search-wrap pull-right">
			<div class="nav-search pointer"></div>
			<div class="nav-search-input mt-radius">
				<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>/">
					<input type="text" placeholder="<?php esc_html_e( 'Type and hit enter to search ...', 'boomnews' ); ?>"  name="s" >
				</form>
			</div>
		</div>
	<?php } } ?>
</div>
<div class="mt-header-space hide-desktop"></div>
<?php if  (!empty($optioz['header_ad_top'])) {  ?>
	<div class="mt-t-ad">
		<div class="mt-t-ad-in">
			<?php echo do_shortcode(html_entity_decode($optioz['header_ad_top'])); ?>
		</div>
	</div>
<?php } ?>
<div class="header-wrap" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
	<div class="header-mt-container-wrap">
		<div class="container mt-header-container">
			<div class="row">
				<div class="col-md-12">
					<div class="head container-fluid">
						<div class="head-logo"><?php boomnews_logo(); ?></div>
						<?php if  (!empty($option['menu_top_ad'])) {  ?>
							<?php if  ($option['menu_top_ad']=="ad") {  ?>
								<div class="top-ad">
									<?php if  (!empty($optioz['header_ad_top'])) {  ?>
								    <div class="text-right">
								      <?php echo do_shortcode(html_entity_decode($optioz['header_ad_top'])); ?>
								    </div>
								  <?php } ?>
								</div>
							<?php } else { echo boomnews_top_content(); } ?>
						<?php } else { echo boomnews_top_content(); } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="header-menu mt-header-container <?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>search-on<?php } } if(!empty($option['menu_small_on'])) { ?> small-on<?php } ?> ">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-nav container-fluid">

						<div class="nav-button mt-radius pointer pull-left menu-background-left <?php if(empty($option['menu_small_on'])) { ?>hide-desktop<?php } ?>">
							<div class="mt-m-cool-button">
								<span class="mt-m-cool-button-line"></span>
							</div>
						</div>

						<div class="nav pull-left menu-background mt-radius" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" >
							<?php boomnews_nav(); ?>
							<?php boomnews_socials(); ?>
						</div>

						<?php if(!empty($option['menu_search'])) { if($option['menu_search']=="1") { ?>
							<div class="search-close"></div><div class="search-close"></div>
							<div class="nav-search-wrap pull-right menu-background-right mt-radius">
								<div class="nav-search pointer"></div>
								<div class="nav-search-input mt-radius">
									<form method="get" action="<?php echo esc_url(home_url('/')); ?>/">
										<input type="text" placeholder="<?php esc_html_e( 'Type and hit enter to search ...', 'boomnews' ); ?>"  name="s" >
									</form>
								</div>
							</div>
						<?php } } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } add_filter('boomnews_header','boomnews_header');


function boomnews_top_content() { $option = get_option("boomnews_theme_options"); ?>
		<div class="head-nav">
			<?php
			if ( false == get_theme_mod( 't_pl_popular', false ) ) { $t_popular = esc_html__("Popular", "boomnews");  } else { $t_popular = get_theme_mod( 't_pl_popular' ); }
			if ( false == get_theme_mod( 't_pl_hot', false ) ) { $t_hot = esc_html__("Hot", "boomnews");  } else { $t_hot = get_theme_mod( 't_pl_hot' ); }
			if ( false == get_theme_mod( 't_pl_trending', false ) ) { $t_trending = esc_html__("Trending", "boomnews");  } else { $t_trending = get_theme_mod( 't_pl_trending' ); }
			if ( false == get_theme_mod( 't_pl_posts', false ) ) { $t_posts = esc_html__("Posts", "boomnews");  } else { $t_posts = get_theme_mod( 't_pl_posts' ); }
			if ( false == get_theme_mod( 't_pl_latest', false ) ) { $t_latest = esc_html__("Latest", "boomnews");  } else { $t_latest = get_theme_mod( 't_pl_latest' ); }
			?>
			<?php if(!empty($option['url_latest'])) { ?><a <?php if($option['url_latest']==get_the_ID()) { ?>class="active"<?php } ?> href="<?php echo get_permalink(esc_html($option['url_latest'])); ?>"><?php echo esc_html($t_latest); ?> <span><?php echo esc_html($t_posts); ?></span></a><?php } ?>
			<?php if(!empty($option['url_popular'])) { ?><a <?php if($option['url_popular']==get_the_ID()) { ?>class="active"<?php } ?> href="<?php echo get_permalink(esc_html($option['url_popular'])); ?>"><?php echo esc_html($t_popular); ?> <span><?php echo esc_html($t_posts); ?></span></a><?php } ?>
			<?php if(!empty($option['url_hot'])) { ?><a <?php if($option['url_hot']==get_the_ID()) { ?>class="active"<?php } ?> href="<?php echo get_permalink(esc_html($option['url_hot'])); ?>"><?php echo esc_html($t_hot); ?> <span><?php echo esc_html($t_posts); ?></span></a><?php } ?>
			<?php if(!empty($option['url_trending'])) { ?>	<a <?php if($option['url_trending']==get_the_ID()) { ?>class="active"<?php } ?> href="<?php echo get_permalink(esc_html($option['url_trending'])); ?>"><?php echo esc_html($t_trending); ?> <span><?php echo esc_html($t_posts); ?></span></a><?php } ?>

		</div>

		<?php if(!empty($option['header_link_url'])) { ?>
				<div class="head-bookmark">
					<a class="mt-radius" href="<?php echo esc_url($option['header_link_url']);  ?>" <?php if(!empty($option['header_link_blank'])) { if($option['header_link_blank']=="1") {?>target="_blank" <?php }} ?>><?php echo esc_attr(get_theme_mod('boomnews_header_link_name', 'Add Post')); ?></a>
				</div>
		<?php } ?>
<?php }
add_filter('boomnews_top_content','boomnews_top_content');

function boomnews_logo() {

	$option = get_option("boomnews_theme_options");

	// Fix for SSL
	if(!empty($option['header_logo'])) {
		$header_logo = esc_url($option['header_logo']);
		if(is_ssl() and 'http' == parse_url($header_logo, PHP_URL_SCHEME) ){
		    $header_logo = str_replace('http://', 'https://', $header_logo);
		}
	}
	if(!empty($option['header_logox2'])) {
		$header_logo2 = esc_url($option['header_logox2']);
		if(is_ssl() and 'http' == parse_url($header_logo2, PHP_URL_SCHEME) ){
		    $header_logo2 = str_replace('http://', 'https://', $header_logo2);
		}
	}

 	if(!empty($option['header_logo'])) { ?>
		<a class="logo"  href="<?php echo esc_url(home_url('/'));?>">
			<img <?php if(!empty($option['logo_width'])) { ?>  width="<?php echo esc_attr($option['logo_width']); ?>" <?php } if(!empty($option['logo_height'])) { ?>  height="<?php echo esc_attr($option['logo_height']); ?>" <?php } ?>
			src="<?php echo esc_url($header_logo); ?>"
			srcset="<?php echo esc_url($header_logo); ?>, <?php if(!empty($option['header_logox2'])) { echo esc_url($header_logo2); } ?> 2x"  alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a class="logo"  href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" width="176" height="40" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}

add_filter('boomnews_logo','boomnews_logo');

function boomnews_logo_mobile() {

	$option = get_option("boomnews_theme_options"); ?>

	<?php if(!empty($option['mobile_logo'])) { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo esc_url($option['mobile_logo']); ?>" alt="<?php echo the_title(); ?>"  />
		</a>
	<?php } else { ?>
		<a href="<?php echo esc_url(home_url('/'));?>">
			<img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="<?php echo the_title(); ?>" />
		</a>
	<?php }
}
add_filter('boomnews_logo_mobile','boomnews_logo_mobile');

function boomnews_nav() {
	if(class_exists('md_walker_')) {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu', 'walker'	=> new md_walker, 'echo' => true, 'depth' => 3));
	} else {
		wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu', 'echo' => true, 'depth' => 3));
	}
}
add_filter('boomnews_nav','boomnews_nav');

function boomnews_nav_fixed() {
	wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'fixed-menu-ul',  'echo' => true, 'depth' => 1));
}
add_filter('boomnews_nav_fixed','boomnews_nav_fixed');

function boomnews_nav_mobile() {
	wp_nav_menu( array('theme_location'=>"mobile",  'menu_class' => 'mobile',  'echo' => true, 'depth' => 2));
}
add_filter('boomnews_nav_mobile','boomnews_nav_mobile');

function boomnews_socials() { ?>
	<ul class="social"> <?php
			$option = get_option("boomnews_theme_options");
			if(!empty($option['mt_icon_twitter'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_twitter']); ?>"><i class="ic-twitter"></i></a></li><?php }
			if(!empty($option['mt_icon_facebook'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_facebook']); ?>" ><i class="ic-facebook"></i></a></li><?php }
			if(!empty($option['mt_icon_intagram'])) {?><li><a <?php if(!empty($option['mt_icon_blank'])) {  if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_intagram']); ?>" ><i class="ic-instagram"></i></a></li><?php }
			if(!empty($option['mt_icon_vimeo'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_vimeo']); ?>"><i class="ic-vimeo"></i></a></li><?php }
			if(!empty($option['mt_icon_youtube'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_youtube']); ?>"><i class="ic-youtube-play"></i></a></li><?php }
			if(!empty($option['mt_icon_linkedin'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_linkedin']); ?>"><i class="ic-linkedin"></i></a></li><?php }
			if(!empty($option['mt_icon_gplus'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_gplus']); ?>"><i class="ic-google-plus"></i></a></li><?php }
			if(!empty($option['mt_icon_dribble'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_dribble']); ?>"><i class="ic-dribbble"></i></a></li><?php }
			if(!empty($option['mt_icon_skype'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_skype']); ?>"><i class="ic-skype"></i></a></li><?php }
			if(!empty($option['mt_icon_pinterest'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_pinterest']); ?>"><i class="ic-pinterest"></i></a></li><?php }
			if(!empty($option['mt_icon_rss'])) {?><li><a <?php  if(!empty($option['mt_icon_blank'])) { if($option['mt_icon_blank']=="on") {?> target="_blank" <?php }} ?> href="<?php echo esc_url($option['mt_icon_rss']); ?>"><i class="ic-rss"></i></a></li><?php }
			?>
	</ul><?php
} add_filter('boomnews_socials','boomnews_socials');

function boomnews_header_fixed() { ?>
	<div class="fixed-top-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php boomnews_logo(); ?>
					<?php boomnews_nav_fixed(); ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
<?php } add_filter('boomnews_header_fixed','boomnews_header_fixed');

function boomnews_header_share() {
	if (is_single()) {
		$url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));	?>
		<?php $option = get_option("boomnews_theme_options"); ?>
				<div class="fixed-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<ul class="share">
									<li class="share-facebook"><a class="mt-radius" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>" target="_blank"><span><?php echo esc_html__('Share on Facebook', 'boomnews'); ?></span></a></li>
									<?php $input = get_the_title().' '.get_the_permalink(); $title = str_replace( ' ', '+', $input ); ?>
									<li class="share-twitter"><a class="mt-radius" href="http://twitter.com/home/?status=<?php echo esc_attr($title); ?>" target="_blank"><span><?php echo esc_html__('Tweet on Twitter', 'boomnews'); ?></span></a></li>
									<li class="share-more">
										<div class="share-more-wrap"><div class="share-more-icon mt-radius">+</div></div>
										<a class="mt-radius" href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank"><div class="google mt-radius-b"></div></a>
										<a class="mt-radius" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo esc_url($url); ?>" target="_blank"><div class="pinterest mt-radius-b"></div></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
	<?php } ?>
<?php } add_filter('boomnews_header_share','boomnews_header_share'); ?>
