<?php
/*
 * Plugin Name: Agency GH pages plugin. My own code!
 * Description: A simple WordPress plugin that allows user to create CPTs for the WP theme "agencyghpages"
 * Version: 1.0
 * Author: Sam the Coder
 * Author URI: none
 * Text Domain: Agncy GH
 */

if( !function_exists( 'add_action' ) ) {
    echo "Hi there! I'm just a plugin, not much I can do when called directly.";
    exit;
 }

  
/**
 * Setup
 */ 


/**
 * Includes
 */

include( 'init.php' );


/**
 * Hooks
 */
add_action( 'init', 'services_init' );
add_action( 'init', 'portfolio_init' );
add_action( 'init', 'about_init' );
add_action( 'init', 'team_init' );
add_action( 'init', 'clients_init' );
add_action( 'init', 'contact_form_init' );

/**
 * Shortcodes
 */

