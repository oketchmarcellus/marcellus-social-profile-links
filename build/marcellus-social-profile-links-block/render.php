<?php
/**
 * Render callback for the Marcellus Social Profile Links block.
 *
 * This file is responsible for rendering the block on the frontend, merging local attributes with global settings,
 * and outputting a clean DOM wrapper with the necessary data attributes for the view.js to pick up.
 *
 * @package ExpressSocialLinks
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Fetching Global Settings from WP Options Table
$marcellus_social_profile_links_global_settings = get_option( 'marcellus_social_profile_links_data', [] );

// Fallback helper function to merge local attributes with global fallbacks
$marcellus_social_profile_links_get_value = function( $key, $default = true ) use ( $attributes, $marcellus_social_profile_links_global_settings ) {
    if ( isset( $attributes[$key] ) && $attributes[$key] !== '' ) {
        return $attributes[$key];
    }
    return isset( $marcellus_social_profile_links_global_settings[$key] ) ? $marcellus_social_profile_links_global_settings[$key] : $default;
};

// Replicate your exact edit.js data pipeline matrix
$marcellus_social_profile_links_merged_payload = [
    'social'          => ( isset( $attributes['social'] ) && ! empty( $attributes['social'] ) ) ? $attributes['social'] : ( $marcellus_social_profile_links_global_settings['social'] ?? [] ),
    'showHideSocials' => $marcellus_social_profile_links_get_value( 'showHideSocials', true ),
    'showText'        => $marcellus_social_profile_links_get_value( 'showText', true ),
    'hasBorder'       => $marcellus_social_profile_links_get_value( 'hasBorder', true ),
    'linkGap'         => $marcellus_social_profile_links_get_value( 'linkGap', '' ),
    'textIconGap'     => $marcellus_social_profile_links_get_value( 'textIconGap', '' ),
    'fontColor'       => $marcellus_social_profile_links_get_value( 'fontColor', '' ),
    'fontSize'        => $marcellus_social_profile_links_get_value( 'fontSize', '' ),
    'iconSize'        => $marcellus_social_profile_links_get_value( 'iconSize', '' ),
    'labelPosition'   => $marcellus_social_profile_links_get_value( 'labelPosition', '' ),
    'iconBgColor'     => $marcellus_social_profile_links_get_value( 'iconBgColor', '' ),
    'borderColor'     => $marcellus_social_profile_links_get_value( 'borderColor', '' ),
    'borderWidth'     => $marcellus_social_profile_links_get_value( 'borderWidth', '' ),
];

// A clean DOM wrapper output ready for view.js to pick up
$marcellus_social_profile_links_wrapper_attributes = get_block_wrapper_attributes([
    'class'       => 'marcellus-social-profile-links-item-container',
    'data-config' => wp_json_encode( $marcellus_social_profile_links_merged_payload )
]);
?>


<div <?php echo wp_kses_data( $marcellus_social_profile_links_wrapper_attributes ); ?>></div>
