<?php
/**
 * Agency Start Bootstrap functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */


/**
 * BootStrap only works in WordPress 5.0 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '5.0', '<' ) ) {
	return "Please update to WordPress 5.0 or later so the theme can work";
}

/**
 * Setup
 */



/**
 * Includes
 */
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/menus/primary-menu.php' ) );
include( get_theme_file_path( '/includes/register-plugins.php' ) );
//include( get_theme_file_path( '/includes/front/post-thumbnail.php' ) );

/**
 * Call the customizer file
 */
require_once get_template_directory() . '/includes/front/customizer.php';


/**
 * Hooks
 */
add_action( 'wp_enqueue_scripts', 'agency_sb_enqueue' );
add_action( 'after_setup_theme', 'menu_primary' );

add_action( 'tgmpa_register', 'agencyph_register_required_plugins' );

add_theme_support( 'post-thumbnails' );


/**
 * Shortcodes
 */
