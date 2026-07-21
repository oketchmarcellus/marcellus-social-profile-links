<?php
/**
 * Default configurations and helper function for Marcellus Social profile links
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Retrieve the default profile options array matrix.
 *
 * @return array Default settings schema.
 */
function marcellus_social_profile_links_get_default_settings() {
    return array(
        'social'          => array(
            array(
                'label' => 'github',
                'url'   => 'https://github.com',
                'logo'  => '',
            ),
        ),
        'showHideSocials' => true,
        'linkGap'         => '16px',
        'textIconGap'     => '10px',
        'fontColor'       => '#1d2327',
        'fontSize'        => '14px',
        'iconSize'        => '20px',
        'hasBorder'       => true,
        'showText'        => true,
        'labelPosition'   => 'right',
        'borderColor'     => '#ccd0d4',
        'borderWidth'     => '1px',
        'iconBgColor'     => 'transparent',
    );
}

// Return the function name so the main file knows it is successfully loaded
return 'marcellus_social_profile_links_get_default_settings';
