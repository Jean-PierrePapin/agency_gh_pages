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

/**
 * Hooks
 */
add_action( 'wp_enqueue_scripts', 'agency_sb_enqueue' );

/**
 * Shortcodes
 */



// Translation Functions
// __( 'Returns a translated string', 'udemy ');
// _e( 'Outputs a translated string', 'udemy' );
// _x( 'Bass', 'Instrument', 'udemy' );
// _n( 'Singular Form', 'Plural Form', 1, 'udemy' ); // Singular
// _n( 'Singular Form', 'Plural Form', 2, 'udemy' ); // Plural
// _ex( 'Bass', 'Instrument', 'udemy' );
// _nx( 'Singular', 'Plural', 2, 'Instrument', 'udemy' );

// // HIGHLY recommended translation functions
// esc_html__( 'Returns an escaped translated string', 'udemy' );
// esc_html_e( 'Outputs an escaped translated string', 'udemy' );
// esc_html_x( 'Bass (Escaped)', 'Fish', 'udemy' );
// wp_kses_post( __( 'Unescaped translated string', 'udemy' ) );