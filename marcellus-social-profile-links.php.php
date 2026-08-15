<?php
/**
 * Plugin Name:       Marcellus Social Profile Links
 * Description:       A simple plugin to add easy social media links to your WordPress site.
 * Version:           0.1.0
 * Requires at least: 6.8
 * Requires PHP:      7.4
 * Author:            Marcel Oketch
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       marcellus-social-profile-links
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define constants at the top of your main file for cleaner paths
define( 'MARCELLUS_SOCIAL_PROFILE_LINKS_PATH', plugin_dir_path( __FILE__ ) );

// Load Core Components Defensively
$modules = array(
    'includes/defaults.php',// LOAD DEFAULTS AND GENERATOR FUNCTION
    'includes/sanitizer.php', // SEC HARDENING
    'includes/core/settings.php',// REGISTER SETTINGS FOR THE REST API
    'includes/core/hook-admin-assets.php',//ADMIN ASSETS
    'includes/core/admin-menu.php',//ADMIN MENUS
);

foreach ( $modules as $module ) {
    if ( file_exists( MARCELLUS_SOCIAL_PROFILE_LINKS_PATH . $module ) ) {
        require_once MARCELLUS_SOCIAL_PROFILE_LINKS_PATH . $module;
    }
}

/**
 * Plugin Activation Hook
 */
function marcellus_social_profile_links_activate_plugin() {
    $existing_options = get_option( 'marcellus_social_profile_links_data' );

    // Only populate if database options row is blank or uninitialized
    if ( false === $existing_options ) {
        $default_profile = marcellus_social_profile_links_get_default_settings();
        update_option( 'marcellus_social_profile_links_data', $default_profile );
    }
}
register_activation_hook( __FILE__, 'marcellus_social_profile_links_activate_plugin' );


/**
 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
 * based on the registered block metadata. Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */

function marcellus_social_profile_links_block_init() {
	if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
		wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
	}
}
add_action( 'init', 'marcellus_social_profile_links_block_init' );



// ADMIN RENDERING INTERFACE

/**
 * The callback function that outputs the initial HTML.
 */
function marcellus_social_profile_links_render_admin_page() {
    // wrap class provides standard WP padding and font styles
    echo '<div class="wrap"><div id="marcellus-social-profile-links-admin-app"></div></div>';
}

 
// For debugging: Display the current screen ID or Admin hook in an admin notice
// This helps ensure the plugin assets are loading on the correct admin page(s)
// add_action( 'admin_notices', 'marcellus_social_profile_links_current_screen_id' );
// function marcellus_social_profile_links_current_screen_id() {
//     if ( current_user_can( 'manage_options' ) ) {
//         $screen = get_current_screen();
//         echo '<div class="notice notice-info"><p>Current Screen ID: <strong>' . esc_html( $screen->id ) . '</strong></p></div>';
//     }
// }

