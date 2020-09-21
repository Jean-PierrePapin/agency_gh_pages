<?php

/**
 * Using the customizer to change the title in each CPT section
 */

function agency_gh_pages_customizer( $wp_customize ) {

    // Copyright Section
    $wp_customize->add_section(
        'sec_copyright', [
            'title'                 =>  __( 'Copyright Settings', 'agency-gh-pages' ),
            'description'           =>  __( 'Copyright Section', 'agency-gh-pages' )
        ]
    );

    // Field 1 - Copyright text box
    $wp_customize->add_setting(
        'set_copyright', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_copyright', [
            'label'                 =>  __( 'Copyright', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your copyright information below', 'agency-gh-pages' ),
            'section'               =>  'sec_copyright',
            'type'                  =>  'text'
        ]
    );

    /*------------------------------------------------------*/
    // Header Section
    $wp_customize->add_section(
        'sec_header', [
            'title'                 =>  __( 'Header Settings', 'agency-gh-pages' ),
            'description'           =>  __( 'Header Section', 'agency-gh-pages' )
        ]
    );

    // Field 1 - Header title  box
    $wp_customize->add_setting(
        'set_header_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_header_title', [
            'label'                 =>  __( 'Header Title', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Header title below', 'agency-gh-pages' ),
            'section'               =>  'sec_header',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - Header subtitle box
    $wp_customize->add_setting(
        'set_header_subtitle', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_header_subtitle', [
            'label'                 =>  __( 'Header Subtitle', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Header subtitle below', 'agency-gh-pages' ),
            'section'               =>  'sec_header',
            'type'                  =>  'text'
        ]
    );

    // Field 3 - Header button box
    $wp_customize->add_setting(
        'set_header_button', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_header_button', [
            'label'                 =>  __( 'Header Button', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Header button below', 'agency-gh-pages' ),
            'section'               =>  'sec_header',
            'type'                  =>  'text'
        ]
    );



}
add_action( 'customize_register', 'agency_gh_pages_customizer' );

function agency_ph_pages_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked  ) ? true : false );
}