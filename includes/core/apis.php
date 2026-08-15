<?php
/**
 * Marcellus Hibernated APIs.
 * We capture the hook suffix to ensure asset loading is 100% accurate.
 */

// REST API REGISTRATIONS   

// add_action('rest_api_init', 'marcellus_social_profile_links_register_public_api');

// function marcellus_social_profile_links_register_public_api() {
// 	$namespace = 'marcellus-social-profile-links/v1';
	
// 	// Get Public Map Settings for Public API for plugin Access
//     register_rest_route( $namespace, '/marcellus-social-profile-links-data', array(
//         'methods'             => 'GET',
//         'callback'            => 'marcellus_social_profile_links_get_public_data',
//         'permission_callback' => '__return_true', // Publicly open endpoint
//     ) );
// }

// // ENQUEUE AND LOCALIZE THE FRONTEND BLOCK INLINE SCRIPTS
// // Localize the frontend block script with the public map data for direct access in JS
// add_action( 'wp_enqueue_scripts', 'marcellus_social_profile_links_localize_frontend_block' );

// function marcellus_social_profile_links_localize_frontend_block() {
// 	// This handle must match the exact registered block view script handle string identifier
// 	$handle = 'marcellus-social-profile-links-block-view-script';
	
// 	// Get the data directly from the DB
// 	// Call your sanitized array cleanup function instead of raw get_option to escape data safely
// 	$clean_plugin_settings = marcellus_social_profile_links_get_public_data();
// 	//$plugin_settings = get_option( 'marcellus_social_profile_links_data' );

// 		if ( ! empty( $clean_plugin_settings ) ) {
// 		// Creates a clean, safe, global window.easySocialsSettings object array inside the client browser DOM
// 		$data = "var easySocialsSettings = " . wp_json_encode( $clean_plugin_settings ) . ";";
// 		wp_add_inline_script( $handle, $data, 'before' );
// 	}


// }

// //public API callback to serve only the necessary plugin data for the frontend block, keeping it secure and efficient
// function marcellus_social_profile_links_get_public_data() {
//     $settings = get_option( 'marcellus_social_profile_links_data' );
// 	$public_data = array();

// 	// Verify that our nested 'social' array exists and is not empty
//     if ( isset( $settings['social'] ) && is_array( $settings['social'] ) ) {
//         foreach ( $settings['social'] as $profile ) {
            
//             // Map and sanitize each profile entry for public safety (escaping URLs and strings)
//             $public_data[] = array(
//                 'label' => isset( $profile['label'] ) ? sanitize_text_field( $profile['label'] ) : '',
//                 'url'   => isset( $profile['url'] )   ? esc_url( $profile['url'] ) : '',
//                 'logo'  => isset( $profile['logo'] )  ? esc_url( $profile['logo'] ) : '',
//             );
//         }
// 	}
// 	 // Returns a clean, perfectly structured array of items matching your frontend expectations
// 	return $public_data;
// }