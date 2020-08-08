<?php
/**
 * File to enqueue the scripts and the style.css file
 */

function agency_sb_enqueue() {

    $uri            =   get_theme_file_uri();
    $ver            =   1;

    /**
     * Register and enqueue styles
     */
    // Register the style
    wp_register_style( 'agency_sb_start_bootstrap_styles', $uri . '/css/styles.css' );
    wp_register_style( 'agency_sb_googlefont', 'https://fonts.googleapis.com/css?family=Montserrat:400,700|Droid+Serif:400,700,400italic,700italic|Roboto+Slab:400,100,300,700' );
   /*  wp_register_style( 'agency_sb_', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' );
    wp_register_style( 'agency_sb_', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' ); */


    // Enqueue styles
    wp_enqueue_style( 'agency_sb_start_bootstrap_styles' );
    wp_enqueue_style( 'agency_sb_googlefont' );

    /**
     * Register and enqueue scripts
     */
    // Register scripts
    wp_register_script( 'agency_sb_start_bootstrap_jquerymin', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', [], false );
    wp_register_script( 'agency_sb_start_bootstrap_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js', [], false );
    wp_register_script( 'agency_sb_start_bootstrap_jquery_easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', [], false );
    wp_register_script( 'agency_sb_fontawesome', 'https://use.fontawesome.com/releases/v5.13.0/js/all.js', [], false );
    wp_register_script( 'agency_sb_start_bootstrap_jqbootstrapvalidation', $uri . '/assets/mail/jqBootstrapValidation.js', [], false );
    wp_register_script( 'agency_sb_start_bootstrap_contact_me', $uri . '/assets/mail/contact_me.js', [], false );
    wp_register_script( 'agency_sb_start_bootstrap_scripts', $uri . '/', [], false );

    // Enqueue scripts
    wp_enqueue_script( 'jquery-scripts', get_template_directory_uri() . '/js/scripts.js', [ 'jquery' ], '1.0.0', true );
    wp_enqueue_script( 'agency_sb_start_bootstrap_jquerymin' );
    wp_enqueue_script( 'agency_sb_start_bootstrap_cdn' );
    wp_enqueue_script( 'agency_sb_start_bootstrap_jquery_easing' );
    wp_enqueue_script( 'agency_sb_fontawesome' );
    wp_enqueue_script( 'agency_sb_start_bootstrap_jqbootstrapvalidation' );
    wp_enqueue_script( 'agency_sb_start_bootstrap_contact_me' );
    wp_enqueue_script( 'agency_sb_start_bootstrap_scripts' );

}