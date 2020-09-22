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

    /*------------------------------------------------------*/
    // Services Section
    $wp_customize->add_section(
        'sec_service', [
            'title'                 =>  __( 'Service Settings', 'agency-gh-pages' ),
            'description'           =>  __( 'Service Section', 'agency-gh-pages' )
        ]
    );

    // Field 1 - title  box
    $wp_customize->add_setting(
        'set_service_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_service_title', [
            'label'                 =>  __( 'Service Title', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Service title below', 'agency-gh-pages' ),
            'section'               =>  'sec_service',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - subtitle box
    $wp_customize->add_setting(
        'set_service_subtitle', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_service_subtitle', [
            'label'                 =>  __( 'Service Subtitle', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Service subtitle below', 'agency-gh-pages' ),
            'section'               =>  'sec_service',
            'type'                  =>  'text'
        ]
    );


    /*------------------------------------------------------*/
    // Portfolio Section
    $wp_customize->add_section(
        'sec_portfolio', [
            'title'                 =>  __( 'Portfolio Settings', 'agency-gh-pages' ),
            'description'           =>  __( 'Portfolio Section', 'agency-gh-pages' )
        ]
    );

    // Field 1 - title  box
    $wp_customize->add_setting(
        'set_portfolio_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_portfolio_title', [
            'label'                 =>  __( 'Portfolio Title', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Portfolio title below', 'agency-gh-pages' ),
            'section'               =>  'sec_portfolio',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - subtitle box
    $wp_customize->add_setting(
        'set_portfolio_subtitle', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_portfolio_subtitle', [
            'label'                 =>  __( 'Portfolio Subtitle', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Portfolio subtitle below', 'agency-gh-pages' ),
            'section'               =>  'sec_portfolio',
            'type'                  =>  'text'
        ]
    );


    /*------------------------------------------------------*/
    // About Section
    $wp_customize->add_section(
        'sec_about', [
            'title'                 =>  __( 'About Settings', 'agency-gh-pages' ),
            'description'           =>  __( 'About Section', 'agency-gh-pages' )
        ]
    );

    // Field 1 - title  box
    $wp_customize->add_setting(
        'set_about_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_about_title', [
            'label'                 =>  __( 'About Title', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your About title below', 'agency-gh-pages' ),
            'section'               =>  'sec_about',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - subtitle box
    $wp_customize->add_setting(
        'set_about_subtitle', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_about_subtitle', [
            'label'                 =>  __( 'About Subtitle', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your About subtitle below', 'agency-gh-pages' ),
            'section'               =>  'sec_about',
            'type'                  =>  'text'
        ]
    );

    
    /*------------------------------------------------------*/
    // Team Section
    $wp_customize->add_section(
        'sec_team', [
            'title'                 =>  __( 'Team Settings', 'agency-gh-pages' ),
            'description'           =>  __( 'Team Section', 'agency-gh-pages' )
        ]
    );

    // Field 1 - title  box
    $wp_customize->add_setting(
        'set_team_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_team_title', [
            'label'                 =>  __( 'Team Title', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Team title below', 'agency-gh-pages' ),
            'section'               =>  'sec_team',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - subtitle box
    $wp_customize->add_setting(
        'set_team_subtitle', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_team_subtitle', [
            'label'                 =>  __( 'Team Subtitle', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Team subtitle below', 'agency-gh-pages' ),
            'section'               =>  'sec_team',
            'type'                  =>  'text'
        ]
    );

    // Field 3 - paragraph box
    $wp_customize->add_setting(
        'set_team_paragraph', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_team_paragraph', [
            'label'                 =>  __( 'Team Paragraph', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Team paragraph below', 'agency-gh-pages' ),
            'section'               =>  'sec_team',
            'type'                  =>  'text'
        ]
    );


    /*------------------------------------------------------*/
    // Contact form Section
    $wp_customize->add_section(
        'sec_contact', [
            'title'                 =>  __( 'Contact Settings', 'agency-gh-pages' ),
            'description'           =>  __( 'Contact Section', 'agency-gh-pages' )
        ]
    );

    // Field 1 - title  box
    $wp_customize->add_setting(
        'set_contact_title', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_contact_title', [
            'label'                 =>  __( 'Contact Title', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Contact title below', 'agency-gh-pages' ),
            'section'               =>  'sec_contact',
            'type'                  =>  'text'
        ]
    );

    // Field 2 - subtitle box
    $wp_customize->add_setting(
        'set_contact_subtitle', [
            'type'                  =>  'theme_mod',
            'default'               =>  '',
            'sanitize_callback'     =>  'sanitize_text_field'  
        ]
    );

    $wp_customize->add_control(
        'set_contact_subtitle', [
            'label'                 =>  __( 'Contact Subtitle', 'agency-gh-pages' ),
            'description'           =>  __( 'Please, add your Contact subtitle below', 'agency-gh-pages' ),
            'section'               =>  'sec_contact',
            'type'                  =>  'text'
        ]
    );

}
add_action( 'customize_register', 'agency_gh_pages_customizer' );

function agency_ph_pages_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked  ) ? true : false );
}