<?php

/**
 * Function to register required plugins for the WP theme Agency GH pages
 */

function agencyph_register_required_plugins() {

    $plugins                =   [

    ];

    $config                 =   [
        'id'                =>  'agencygh',
        'menu'              =>  'tgmpa-install-plugins',
        'parent_slug'       =>  'themes.php',
        'capability'        =>  'edit_theme_options',
        'has_notices'       =>  true,
        'dismissable'       =>  true
    ];

    tgmpa( $plugins, $config );

}