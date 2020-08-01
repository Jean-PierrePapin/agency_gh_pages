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
    wp_register_style( 'agency_start_bootstrap_styles', $uri . '/css/styles.css'  );

    // Enqueue styles
    wp_enqueue_style( 'agency_start_bootstrap_styles' );

    /**
     * Register and enqueue scripts
     */
    // Register scripts
    wp_register_script( 'agency_start_bootstrap_jquerymin', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', [], false, true );
    wp_register_script( 'agency_start_bootstrap_cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js', [], false, true );
    wp_register_script( 'agency_start_bootstrap_jquery_easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', [], false, true );
    wp_register_script( 'agency_start_bootstrap_jqbootstrapvalidation', $uri . '/assets/mail/jqBootstrapValidation.js', [], false, true );
    wp_register_script( 'agency_start_bootstrap_contact_me', $uri . '/assets/mail/contact_me.js', [], false, true );
    wp_register_script( 'agency_start_bootstrap_scripts', $uri . '/', [], false, true );

    // Enqueue scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'agency_start_bootstrap_jquerymin' );
    wp_enqueue_script( 'agency_start_bootstrap_cdn' );
    wp_enqueue_script( 'agency_start_bootstrap_jquery_easing' );
    wp_enqueue_script( 'agency_start_bootstrap_jqbootstrapvalidation' );
    wp_enqueue_script( 'agency_start_bootstrap_contact_me' );
    wp_enqueue_script( 'agency_start_bootstrap_scripts' );

}