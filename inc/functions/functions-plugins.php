<?php
/**
 * Include the TGM_Plugin_Activation class.
 */
require get_template_directory() .'/all_plugins/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'boomnews_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function boomnews_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name, slug and required.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(


        array(
            'name'			=> esc_html__( "Envato WordPress Toolkit","boomnews" ), // The plugin name
            'slug'			=> 'envato-wordpress-toolkit-master', // The plugin slug (typically the folder name)
            'source'			=> get_template_directory() . '/all_plugins/envato-wordpress-toolkit-master.zip', // The plugin source
            'required'			=> true, // If false, the plugin is only 'recommended' instead of required
            'version'			=> '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'		=> '', // If set, overrides default API URL and points to an external URL
        ),
        array(
        			'name'     				=> esc_html__( "Page Builder by SiteOrigin","boomnews" ), // The plugin name
        			'slug'     				=> 'siteorigin-panels', // The plugin slug (typically the folder name)
        			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
              'force_activation'		=> false,
        ),
        array(
        			'name'     				=> esc_html__( "One Click Demo Import","boomnews" ), // The plugin name
        			'slug'     				=> 'one-click-demo-import', // The plugin slug (typically the folder name)
        			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
              'force_activation'		=> false,
        ),
        array(
            'name'			=> esc_html__( "Magazine Plug","boomnews" ), // The plugin name
            'slug'			=> 'magazine-plug', // The plugin slug (typically the folder name)
            'source'			=> get_template_directory() . '/all_plugins/magazine-plug.zip', // The plugin source
            'required'			=> true, // If false, the plugin is only 'recommended' instead of required
            'version'			=> '2.3', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
            'force_activation'		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'		=> '', // If set, overrides default API URL and points to an external URL
        ),
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
      'id'           => 'boomnews',                // Unique ID for hashing notices for multiple instances of TGMPA.
      'default_path' => '',                      // Default absolute path to bundled plugins.
      'menu'         => 'tgmpa-install-plugins', // Menu slug.
      'has_notices'  => true,                    // Show admin notices or not.
      'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
      'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
      'is_automatic' => false,                   // Automatically activate plugins after installation or not.
      'message'      => '',
    );

    tgmpa( $plugins, $config );

}

?>
