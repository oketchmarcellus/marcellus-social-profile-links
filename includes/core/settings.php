<?php
/**
 * Register settings for the REST API.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_action( 'init', 'marcellus_social_profile_links_register_settings' ); 

function marcellus_social_profile_links_register_settings() {
    register_setting(
        'options', 
        'marcellus_social_profile_links_data', 
        array(
            'type'              => 'object',
            'sanitize_callback' => 'marcellus_social_profile_links_sanitize_payload',
            'default'           => marcellus_social_profile_links_get_default_settings(),
            'show_in_rest'      => array(
                'schema' => array(
                    'type'                 => 'object',
                    'additionalProperties' => true, 
                    'properties'           => array(
                        'showHideSocials' => array( 'type' => 'boolean' ),
                        'hasBorder'       => array( 'type' => 'boolean' ),
                        'borderWidth'     => array( 'type' => 'string', 'pattern' => '^[0-9]+(px|rem|em)$' ),
                        'borderColor'     => array( 'type' => 'string', 'pattern' => '^#([A-Fa-f0-9]{3,8})$' ),
                        'linkGap'         => array( 'type' => 'string', 'pattern' => '^[0-9]+(px|rem|em)$' ),
                        'textIconGap'     => array( 'type' => 'string', 'pattern' => '^[0-9]+(px|rem|em)$' ),
                        'iconSize'        => array( 'type' => 'string', 'pattern' => '^[0-9]+(px|rem|em)$' ),
                        'iconBgColor'     => array( 'type' => 'string', 'pattern' => '^#([A-Fa-f0-9]{3,8})$|^rgba\([^)]+\)$|^transparent$' ),
                        'fontSize'        => array( 'type' => 'string', 'pattern' => '^[0-9]+(px|rem|em)$' ), 
                        'fontColor'       => array( 'type' => 'string', 'pattern' => '^#([A-Fa-f0-9]{3,8})$' ),
                        'showText'        => array( 'type' => 'boolean' ),
                        'labelPosition'   => array( 'type' => 'string' ),
                        'social'          => array(
                            'type'  => 'array',
                            'items' => array(
                                'type'       => 'object',
                                'properties' => array(
                                    'label' => array( 'type' => 'string' ),
                                    'url'   => array( 'type' => 'string', 'format' => 'uri' ),
                                    'logo'  => array( 'type' => 'string' ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        )
    );
}
