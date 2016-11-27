<?php
function boomnews_customize_ads($wp_customize){

  //  =============================
  //  = AD 1 Image             =
  //  =============================
  $wp_customize->add_panel( 'boomnews_ads', array(
    'priority'       => 310,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Ads', 'boomnews'),
    'description'    => '',
  ));

  $wp_customize->add_section('sidebar_ad_top', array(
    'title'    	=> esc_html__('Sidebar top ad', 'boomnews'),
    'priority' => 5,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[sidebar_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[sidebar_ad_top]',
    'label'       => esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'sidebar_ad_top',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('sidebar_ad_middle', array(
    'title'    	=> esc_html__('Sidebar middle ad', 'boomnews'),
    'priority' => 6,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[sidebar_ad_middle]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[sidebar_ad_middle]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'sidebar_ad_middle',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('sidebar_ad_bottom', array(
    'title'    	=> esc_html__('Sidebar bottom ad', 'boomnews'),
    'priority' => 7,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[sidebar_ad_bottom]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[sidebar_ad_bottom]',
    'label'       => esc_html__('YOUR AD CODE', 'boomnews' ),
    'section'     => 'sidebar_ad_bottom',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('article_ad_bottom', array(
    'title'    	=> esc_html__('Article bottom ad', 'boomnews'),
    'priority' => 8,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[article_ad_bottom]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[article_ad_bottom]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'article_ad_bottom',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('footer_ad_top', array(
    'title'    	=> esc_html__('Footer top ad', 'boomnews'),
    'priority' => 9,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[footer_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[footer_ad_top]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'footer_ad_top',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('custom_ad_1', array(
    'title'    	=> esc_html__('Custom ad 1', 'boomnews'),
    'priority' => 11,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[custom_ad_1]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_1]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_1',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('custom_ad_2', array(
    'title'    	=> esc_html__('Custom ad 2', 'boomnews'),
    'priority' => 12,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[custom_ad_2]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_2]',
    'label'       => esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_2',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_3', array(
    'title'    	=> esc_html__('Custom ad 3', 'boomnews'),
    'priority' => 13,
    'panel'  => 'boomnews_ads',
  ));


  Kirki::add_field( 'boomnews_theme_options[custom_ad_3]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_3]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_3',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_4', array(
    'title'    	=> esc_html__('Custom ad 4', 'boomnews'),
    'priority' => 14,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[custom_ad_4]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_4]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_4',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_5', array(
    'title'    	=> esc_html__('Custom ad 5', 'boomnews'),
    'priority' => 15,
    'panel'  => 'boomnews_ads',
  ));


  Kirki::add_field( 'boomnews_theme_options[custom_ad_5]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_5]',
    'label'       => esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_5',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_6', array(
    'title'    	=> esc_html__('Custom ad 6', 'boomnews'),
    'priority' => 16,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[custom_ad_6]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_6]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_6',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_7', array(
    'title'    	=> esc_html__('Custom ad 7', 'boomnews'),
    'priority' => 17,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[custom_ad_7]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_7]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_7',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_8', array(
    'title'    	=> esc_html__('Custom ad 8', 'boomnews'),
    'priority' => 18,
    'panel'  => 'boomnews_ads',
  ));


  Kirki::add_field( 'boomnews_theme_options[custom_ad_8]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_8]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_8',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_9', array(
    'title'    	=> esc_html__('Custom ad 9', 'boomnews'),
    'priority' => 19,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[custom_ad_9]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[custom_ad_9]',
    'label'       =>  esc_html__('YOUR AD CODE', 'boomnews' ),
    'section'     => 'custom_ad_9',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));
  $wp_customize->add_section('header_ad_top', array(
    'title'    	=> esc_html__('Header Ad', 'boomnews'),
    'priority' => 1,
    'panel'  => 'boomnews_ads',
  ));

  Kirki::add_field( 'boomnews_theme_options[header_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'boomnews_theme_options[header_ad_top]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'boomnews' ),
    'section'     => 'header_ad_top',
    'default'     => '',
    'priority'    => 1,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


}

add_action('customize_register', 'boomnews_customize_ads');
?>
