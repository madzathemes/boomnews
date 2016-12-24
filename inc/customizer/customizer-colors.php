<?php
function boomnews_customize_colors($wp_customize){

  $wp_customize->add_panel( 'colors_settings', array(
    'priority'       => 300,
    'capability'     => 'edit_theme_options',
    'title'    	=> esc_html__('Style', 'boomnews'),
  ));

  $wp_customize->add_section('general_style_settings', array(
    'title'    	=> esc_html__('General', 'boomnews'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_section('background_settings', array(
    'title'    	=> esc_html__('Background', 'boomnews'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'boomnews_theme_options[background_image]', array(
    'type'        => 'image',
    'settings'    => 'boomnews_theme_options[background_image]',
    'label'       => esc_html__( 'Background Image', 'boomnews' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  Kirki::add_field( 'boomnews_theme_options[background_color]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[background_color]',
    'label'       => esc_html__( 'Background Color', 'boomnews' ),
    'section'     => 'background_settings',
    'default'     => '',
    'option_type' => 'option',
    'priority'    => 10,
  ) );

  // GENERAL COLORS //
  $wp_customize->add_section('colors_general', array(
    'title'    	=> esc_html__('General', 'boomnews'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('boomnews_theme_options[colors_default]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_default]', array(
      'label'    => esc_html__('Site Color', 'boomnews'),
      'section'  => 'general_style_settings',
      'settings' => 'boomnews_theme_options[colors_default]',
    )));


  $wp_customize->add_setting('boomnews_theme_options[colors_button]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
    ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_button]', array(
      'label'    => esc_html__('Form Button', 'boomnews'),
      'section'  => 'general_style_settings',
      'settings' => 'boomnews_theme_options[colors_button]',
  )));



  // MENU COLORS //
  $wp_customize->add_section('colors_menu', array(
    'title'    	=> esc_html__('Header & Menu Colors', 'boomnews'),
    'panel'  => 'colors_settings'
  ));

  Kirki::add_field( 'mt_colors_header', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header',
    'label'       => esc_attr__( 'Header', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'boomnews' ),
        'link'   => esc_attr__( 'Link', 'boomnews' ),
        'hover'  => esc_attr__( 'Hover', 'boomnews' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => ''
    ),
  ));


  Kirki::add_field( 'mt_colors_header_icons', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_icons',
    'label'       => esc_attr__( 'Header Icons', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'latest'    => esc_attr__( 'Latest', 'boomnews' ),
        'popular'   => esc_attr__( 'Popular', 'boomnews' ),
        'hot'  => esc_attr__( 'Hot', 'boomnews' ),
        'trending'  => esc_attr__( 'Trending', 'boomnews' ),
    ),
    'default'     => array(
        'latest'    => '',
        'popular'    => '',
        'hot'    => '',
        'trending'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_button', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_button',
    'label'       => esc_attr__( 'Header Button', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'boomnews' ),
        'text_hover'   => esc_attr__( 'Hover', 'boomnews' ),
        'background'  => esc_attr__( 'Background', 'boomnews' ),
        'background_hover'  => esc_attr__( 'Hover', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_bg', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_bg',
    'label'       => esc_attr__( 'Menu Background', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'in'    => esc_attr__( 'In', 'boomnews' ),
        'out'   => esc_attr__( 'Out', 'boomnews' ),
    ),
    'default'     => array(
        'in'    => '',
        'out'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link',
    'label'       => esc_attr__( 'Menu Links', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'boomnews' ),
        'text_hover'   => esc_attr__( 'Hover', 'boomnews' ),
        'border'  => esc_attr__( 'Border', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'border'    => ''
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_link_sub', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_link_sub',
    'label'       => esc_attr__( 'Menu Sub Links', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'boomnews' ),
        'text_hover'   => esc_attr__( 'Hover', 'boomnews' ),
        'background'  => esc_attr__( 'Background', 'boomnews' ),
        'background_hover'  => esc_attr__( 'Hover', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_button', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_button',
    'label'       => esc_attr__( 'Menu Smart Button', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Lines', 'boomnews' ),
        'text_hover'   => esc_attr__( 'Hover', 'boomnews' ),
        'background'  => esc_attr__( 'Background', 'boomnews' ),
        'background_hover'  => esc_attr__( 'Hover', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_search', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_search',
    'label'       => esc_attr__( 'Menu Search', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'boomnews' ),
        'text_hover'   => esc_attr__( 'Hover', 'boomnews' ),
        'background'  => esc_attr__( 'Background', 'boomnews' ),
        'background_hover'  => esc_attr__( 'Hover', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_hover'    => '',
        'background'    => '',
        'background_hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_icon', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_icon',
    'label'       => esc_attr__( 'Menu Social Icons', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'text'    => esc_attr__( 'Icon', 'boomnews' ),
        'hover'   => esc_attr__( 'Hover', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'hover'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_mobile', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_mobile',
    'label'       => esc_attr__( 'Mobile Header', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'boomnews' ),
        'link'   => esc_attr__( 'Text', 'boomnews' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_header_fixed', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_header_fixed',
    'label'       => esc_attr__( 'Fixed Header', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 99,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'boomnews' ),
        'link'   => esc_attr__( 'Link', 'boomnews' ),
        'hover'  => esc_attr__( 'Hover', 'boomnews' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => ''
    ),
  ));

  Kirki::add_field( 'mt_colors_menu_smart', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_menu_smart',
    'label'       => esc_attr__( 'Smart Menu', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'background'    => esc_attr__( 'Background', 'boomnews' ),
        'link'   => esc_attr__( 'Link', 'boomnews' ),
        'hover'  => esc_attr__( 'Hover', 'boomnews' ),
        'out'  => esc_attr__( 'Out', 'boomnews' ),
    ),
    'default'     => array(
        'background'    => '',
        'link'    => '',
        'hover'    => '',
        'out'    => '',
    ),
  ));


  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'boomnews'),
    'panel'  => 'colors_settings'
  ));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_top_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_top_background]', array(
      'label'    => esc_html__('Top Footer Background', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_top_background]',
  )));



  $wp_customize->add_setting('boomnews_theme_options[colors_footer_top_link]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_top_link]', array(
      'label'    => esc_html__('Top Footer Link', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_top_link]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_top_link_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_top_link_hover]', array(
      'label'    => esc_html__('Top Footer Link Hover', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_top_link_hover]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_border]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_border]', array(
      'label'    => esc_html__('Footer Border', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_border]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_bottom_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_bottom_background]', array(
      'label'    => esc_html__('Bottom Footer Background', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_bottom_background]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_bottom_text]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_bottom_text]', array(
      'label'    => esc_html__('Bottom Footer Text', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_bottom_text]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_bottom_link]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_bottom_link]', array(
      'label'    => esc_html__('Bottom Footer Link', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_bottom_link]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_bottom_link_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_bottom_link_hover]', array(
      'label'    => esc_html__('Bottom Footer Link Hover', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_bottom_link_hover]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_social_icon]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_social_icon]', array(
      'label'    => esc_html__('Social Icon', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_social_icon]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_social_background]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_social_background]', array(
      'label'    => esc_html__('Social Icon Background', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_social_background]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_social_icon_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_social_icon_hover]', array(
      'label'    => esc_html__('Social Icon Hover', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_social_icon_hover]',
  )));

  $wp_customize->add_setting('boomnews_theme_options[colors_footer_social_background_hover]', array(
      'capability'        => 'edit_theme_options',
      'type'           => 'option',
      'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'boomnews_theme_options[colors_footer_social_background_hover]', array(
      'label'    => esc_html__('Social Icon Hover Background', 'boomnews'),
      'section'  => 'colors_footer',
      'settings' => 'boomnews_theme_options[colors_footer_social_background_hover]',
  )));

  // MENU COLORS //
  $wp_customize->add_section('colors_other', array(
    'title'    	=> esc_html__('Other Colors', 'boomnews'),
    'panel'  => 'colors_settings'
  ));


  Kirki::add_field( 'colors_post_share', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_share',
    'label'       => esc_attr__( 'Post Share Count', 'boomnews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'boomnews' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'boomnews' ),
        'icon'   => esc_attr__( 'Icon', 'boomnews' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_dark'    => '',
        'icon'    => '',
        'icon_dark'    => '',
    ),
  ));
  Kirki::add_field( 'colors_post_view', array(
    'type'        => 'multicolor',
    'settings'    => 'colors_post_view',
    'label'       => esc_attr__( 'Post View Count', 'boomnews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'boomnews' ),
        'text_dark'   => esc_attr__( 'Photo bg', 'boomnews' ),
        'icon'   => esc_attr__( 'Icon', 'boomnews' ),
        'icon_dark'   => esc_attr__( 'Photo bg', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'text_dark'    => '',
        'icon'    => '',
        'icon_dark'    => '',
    ),
  ));

  Kirki::add_field( 'mt_colors_cat', array(
    'type'        => 'multicolor',
    'settings'    => 'mt_colors_cat',
    'label'       => esc_attr__( 'Post List Category', 'boomnews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 100,
    'choices'     => array(
        'text'    => esc_attr__( 'Text', 'boomnews' ),
        'background'   => esc_attr__( 'Background', 'boomnews' ),
        'only_text'   => esc_attr__( 'Only Text', 'boomnews' ),
    ),
    'default'     => array(
        'text'    => '',
        'background'    => '',
        'only_text'    => '',
    ),
  ));




}

add_action('customize_register', 'boomnews_customize_colors');
?>
