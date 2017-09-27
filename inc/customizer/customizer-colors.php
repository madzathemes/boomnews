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




  // FOOTER COLORS //
  $wp_customize->add_section('colors_footer', array(
    'title'    	=> esc_html__('Footer Colors', 'boomnews'),
    'panel'  => 'colors_settings'
  ));





  // MENU COLORS //
  $wp_customize->add_section('colors_other', array(
    'title'    	=> esc_html__('Other Colors', 'boomnews'),
    'panel'  => 'colors_settings'
  ));



}

add_action('customize_register', 'boomnews_customize_colors');

Kirki::add_field( 'radius', array(
'type'        => 'radio-buttonset',
'settings'    => 'radius',
'label'       => esc_html__( 'Border Radius', 'boomnews' ),
'section'     => 'general_style_settings',
'default'     => '5px',
'priority'    => 1,
'option_type' => 'option',
'choices'     => array(
  '0px'   => esc_attr__( '0px', 'boomnews' ),
  '5px' => esc_attr__( '5px', 'boomnews' ),
  '25px' => esc_attr__( '25px', 'boomnews' ),
),
));

Kirki::add_field( 'colors', array(
'type'        => 'radio-buttonset',
'settings'    => 'colors',
'label'       => esc_html__( 'Color Sheme', 'boomnews' ),
'section'     => 'general_style_settings',
'default'     => 'color1',
'priority'    => 1,
'option_type'           => 'option',
'choices'     => array(
  'color1'   => esc_attr__( 'Color 1', 'boomnews' ),
  'color2' => esc_attr__( 'Color 2', 'boomnews' ),
),
));

Kirki::add_field( 'zoom', array(
'type'        => 'radio-buttonset',
'settings'    => 'zoom',
'label'       => esc_html__( 'Image Hover Zoom', 'boomnews' ),
'section'     => 'general_style_settings',
'default'     => 'on',
'priority'    => 1,
'option_type'           => 'option',
'choices'     => array(
 'on'   => esc_attr__( 'Zoom On', 'boomnews' ),
 'off' => esc_attr__( 'Zoom Off', 'boomnews' )
),
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

Kirki::add_field( 'mt_colors_footer_top', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_top',
  'label'       => esc_attr__( 'Footer Top Colors', 'boomnews' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'boomnews' ),
      'title'   => esc_attr__( 'Title', 'boomnews' ),
      'text'   => esc_attr__( 'Text', 'boomnews' ),
      'link'  => esc_attr__( 'Link', 'boomnews' ),
      'hover'  => esc_attr__( 'Hover', 'boomnews' ),
  ),
  'default'     => array(
      'background'    => '',
      'text'    => '',
      'title'    => '',
      'link'    => '',
      'hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_footer_social', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_social',
  'label'       => esc_attr__( 'Footer Social Icons', 'boomnews' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'icon'    => esc_attr__( 'Icon', 'boomnews' ),
      'hover'   => esc_attr__( 'Hover', 'boomnews' ),
      'background'   => esc_attr__( 'Background', 'boomnews' ),
      'background_hover'  => esc_attr__( 'Hover', 'boomnews' ),
  ),
  'default'     => array(
      'icon'    => '',
      'hover'    => '',
      'background'    => '',
      'background_hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_footer_bottom', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_bottom',
  'label'       => esc_attr__( 'Footer Bottom Colors', 'boomnews' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
  'choices'     => array(
      'background'    => esc_attr__( 'Background', 'boomnews' ),
      'border'   => esc_attr__( 'Border', 'boomnews' ),
      'text'   => esc_attr__( 'Text', 'boomnews' ),
      'link'  => esc_attr__( 'Link', 'boomnews' ),
      'hover'  => esc_attr__( 'Hover', 'boomnews' ),
  ),
  'default'     => array(
      'background'    => '',
      'border'    => '',
      'text'    => '',
      'link'    => '',
      'hover'    => '',
  ),
));

Kirki::add_field( 'mt_colors_footer_icons', array(
  'type'        => 'multicolor',
  'settings'    => 'mt_colors_footer_icons',
  'label'       => esc_attr__( 'Footer Bottom Icons', 'boomnews' ),
  'section'     => 'colors_footer',
  'option_type' => 'option',
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
?>
