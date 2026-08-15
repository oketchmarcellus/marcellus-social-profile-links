<?php
/**
 * Add an admin menu for the plugin Admin settings page.
 * We capture the hook suffix to ensure asset loading is 100% accurate.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action( 'admin_menu', 'marcellus_social_profile_links_add_admin_menu' );

function marcellus_social_profile_links_add_admin_menu() {
    add_menu_page(
        'Marcellus social profile links Settings',
        'Marcellus social profile links',
        'manage_options',
        'marcellus-social-profile-links-settings',
        'marcellus_social_profile_links_render_admin_page',
        'dashicons-share-alt',
        57
    );

    //Overwrite parameters for the main submenu
    // add_submenu_page(
    //     'marcellus-social-profile-links-settings', 
    //     'Marcellus social profile links App Settings',  
    //     '<span class="dashicons dashicons-share"></span> Socials Settings',               
    //     'manage_options',
    //     'marcellus-social-profile-links-other-media-settings', 
    //     'marcellus_social_profile_links_render_admin_page'
    // );
}
