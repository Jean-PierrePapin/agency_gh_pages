<?php

/**
 * Function to set a customized image size
 * https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */

if( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    //set_post_thumbnail_size( 200, 50, true );
}