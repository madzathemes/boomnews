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
    'title'    	=> esc_html__('Menu Colors', 'boomnews'),
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
        'background'    => ''
    ),
) );

  Kirki::add_field( 'boomnews_theme_options[colors_header_bg]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_header_bg]',
    'label'       => esc_html__( 'Header Background', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_header_links]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_header_links]',
    'label'       => esc_html__( 'Header Links', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_bg]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_bg]',
    'label'       => esc_html__( 'Menu Background', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 1,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu]',
    'label'       => esc_html__( 'Link', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 10,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_hover_text]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_hover_text]',
    'label'       => esc_html__( 'Link Hover', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 11,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_hover]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_hover]',
    'label'       => esc_html__( 'Link Hover Border', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 12,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_sub]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_sub]',
    'label'       => esc_html__( 'Sub Link', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 14,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_sub_hover]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_sub_hover]',
    'label'       => esc_html__( 'Sub Link Hover', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 15,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_sub_background]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_sub_background]',
    'label'       => esc_html__( 'Sub Link Background', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 14,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_sub_hover_background]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_sub_hover_background]',
    'label'       => esc_html__( 'Sub Link Background Hover', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 15,
  ));


  Kirki::add_field( 'boomnews_theme_options[colors_menu_small_button]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_small_button]',
    'label'       => esc_html__( 'Mobile Menu Button Hover', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 20,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_small_button_background]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_small_button_background]',
    'label'       => esc_html__( 'Mobile Menu Button Hover Background', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 20,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_small_background]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_small_background]',
    'label'       => esc_html__( 'Mobile Menu Background', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 21,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_small_link]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_small_link]',
    'label'       => esc_html__( 'Mobile Menu Link', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 22,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_small_link_hover]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_small_link_hover]',
    'label'       => esc_html__( 'Mobile Menu Link Hover', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 23,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_menu_small_text]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_menu_small_text]',
    'label'       => esc_html__( 'Mobile Menu Text', 'boomnews' ),
    'section'     => 'colors_menu',
    'option_type' => 'option',
    'priority'    => 24,
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

  Kirki::add_field( 'boomnews_theme_options[colors_post_share]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_post_share]',
    'label'       => esc_html__( 'Post Share & View Count', 'boomnews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 1,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_post_share_icons]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_post_share_icons]',
    'label'       => esc_html__( 'Post Share & View Count Icons', 'boomnews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 1,
  ));

  Kirki::add_field( 'boomnews_theme_options[colors_post_cat_bg]', array(
    'type'        => 'color',
    'settings'    => 'boomnews_theme_options[colors_post_cat_bg]',
    'label'       => esc_html__( 'Post Category Background', 'boomnews' ),
    'section'     => 'colors_other',
    'option_type' => 'option',
    'priority'    => 1,
  ));




}

add_action('customize_register', 'boomnews_customize_colors');
?>
