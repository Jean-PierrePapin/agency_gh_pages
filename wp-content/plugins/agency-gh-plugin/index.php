<?php
/*
 * Plugin Name: Agency GH plugin. My own code!
 * Description: A simple WordPress custome the_meta function
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
add_action( 'init', 'the_custom_meta' );


/**
 * Shortcodes
 */
