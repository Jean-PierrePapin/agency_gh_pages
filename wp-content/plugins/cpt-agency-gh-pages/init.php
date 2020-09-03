<?php

/**
 *  function for Services CPT
 */

function services_init() {
    $labels = array(
        'name'                  => _x( 'services', 'Post type general name', 'services' ),
        'singular_name'         => _x( 'services', 'Post type singular name', 'services' ),
        'menu_name'             => _x( 'services', 'Admin Menu text', 'services' ),
        'name_admin_bar'        => _x( 'services', 'Add New on Toolbar', 'services' ),
        'add_new'               => __( 'Add New', 'services' ),
        'add_new_item'          => __( 'Add New services', 'services' ),
        'new_item'              => __( 'New services', 'services' ),
        'edit_item'             => __( 'Edit services', 'services' ),
        'view_item'             => __( 'View services', 'services' ),
        'all_items'             => __( 'All services', 'services' ),
        'search_items'          => __( 'Search services', 'services' ),
        'parent_item_colon'     => __( 'Parent services:', 'services' ),
        'not_found'             => __( 'No services found.', 'services' ),
        'not_found_in_trash'    => __( 'No servicess found in Trash.', 'services' ),
        'featured_image'        => _x( 'services Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'services' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'services' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'services' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'services' ),
        'archives'              => _x( 'services archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'services' ),
        'insert_into_item'      => _x( 'Insert into services', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'services' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this servicess', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'services' ),
        'filter_items_list'     => _x( 'Filter services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'services' ),
        'items_list_navigation' => _x( 'services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'services' ),
        'items_list'            => _x( 'services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'services' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for services',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'services' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'services', $args );

    register_taxonomy( 'origin', 'services', [
        'label'                 =>  __( 'Origin', 'services' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}

/**
 *  function for Portfolio CPT
 */

function portfolio_init() {
    $labels = array(
        'name'                  => _x( 'portfolio', 'Post type general name', 'portfolios' ),
        'singular_name'         => _x( 'portfolios', 'Post type singular name', 'portfolios' ),
        'menu_name'             => _x( 'portfolios', 'Admin Menu text', 'portfolios' ),
        'name_admin_bar'        => _x( 'portfolios', 'Add New on Toolbar', 'portfolios' ),
        'add_new'               => __( 'Add New', 'portfolios' ),
        'add_new_item'          => __( 'Add New portfolios', 'portfolios' ),
        'new_item'              => __( 'New portfolios', 'portfolios' ),
        'edit_item'             => __( 'Edit portfolios', 'portfolios' ),
        'view_item'             => __( 'View portfolios', 'portfolios' ),
        'all_items'             => __( 'All portfolios', 'portfolios' ),
        'search_items'          => __( 'Search portfolios', 'portfolios' ),
        'parent_item_colon'     => __( 'Parent portfolios:', 'portfolios' ),
        'not_found'             => __( 'No portfolios found.', 'portfolios' ),
        'not_found_in_trash'    => __( 'No portfolioss found in Trash.', 'portfolios' ),
        'featured_image'        => _x( 'portfolios Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'portfolios' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'portfolios' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'portfolios' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'portfolios' ),
        'archives'              => _x( 'portfolios archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'portfolios' ),
        'insert_into_item'      => _x( 'Insert into portfolios', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'portfolios' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this portfolioss', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'portfolios' ),
        'filter_items_list'     => _x( 'Filter portfolios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'portfolios' ),
        'items_list_navigation' => _x( 'portfolios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'portfolios' ),
        'items_list'            => _x( 'portfolios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'portfolios' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for portfolio',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'portfolio' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'portfolio', $args );

    register_taxonomy( 'origin', 'portfolios', [
        'label'                 =>  __( 'Origin', 'portfolio' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}

/**
 *  function for About CPT
 */

function about_init() {
    $labels = array(
        'name'                  => _x( 'about', 'Post type general name', 'abouts' ),
        'singular_name'         => _x( 'about', 'Post type singular name', 'abouts' ),
        'menu_name'             => _x( 'about', 'Admin Menu text', 'abouts' ),
        'name_admin_bar'        => _x( 'about', 'Add New on Toolbar', 'abouts' ),
        'add_new'               => __( 'Add New', 'abouts' ),
        'add_new_item'          => __( 'Add New abouts', 'abouts' ),
        'new_item'              => __( 'New abouts', 'abouts' ),
        'edit_item'             => __( 'Edit abouts', 'abouts' ),
        'view_item'             => __( 'View abouts', 'abouts' ),
        'all_items'             => __( 'All abouts', 'abouts' ),
        'search_items'          => __( 'Search abouts', 'abouts' ),
        'parent_item_colon'     => __( 'Parent abouts:', 'abouts' ),
        'not_found'             => __( 'No abouts found.', 'abouts' ),
        'not_found_in_trash'    => __( 'No aboutss found in Trash.', 'abouts' ),
        'featured_image'        => _x( 'abouts Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'abouts' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'abouts' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'abouts' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'abouts' ),
        'archives'              => _x( 'abouts archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'abouts' ),
        'insert_into_item'      => _x( 'Insert into abouts', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'abouts' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this aboutss', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'abouts' ),
        'filter_items_list'     => _x( 'Filter abouts list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'abouts' ),
        'items_list_navigation' => _x( 'abouts list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'abouts' ),
        'items_list'            => _x( 'abouts list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'abouts' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for about',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'about' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'about', $args );

    register_taxonomy( 'origin', 'about', [
        'label'                 =>  __( 'Origin', 'about' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}

/**
 *  function for Team CPT
 */

function team_init() {
    $labels = array(
        'name'                  => _x( 'team', 'Post type general name', 'teams' ),
        'singular_name'         => _x( 'teams', 'Post type singular name', 'teams' ),
        'menu_name'             => _x( 'teams', 'Admin Menu text', 'teams' ),
        'name_admin_bar'        => _x( 'teams', 'Add New on Toolbar', 'teams' ),
        'add_new'               => __( 'Add New', 'teams' ),
        'add_new_item'          => __( 'Add New teams', 'teams' ),
        'new_item'              => __( 'New teams', 'teams' ),
        'edit_item'             => __( 'Edit teams', 'teams' ),
        'view_item'             => __( 'View teams', 'teams' ),
        'all_items'             => __( 'All teams', 'teams' ),
        'search_items'          => __( 'Search teams', 'teams' ),
        'parent_item_colon'     => __( 'Parent teams:', 'teams' ),
        'not_found'             => __( 'No teams found.', 'teams' ),
        'not_found_in_trash'    => __( 'No teamss found in Trash.', 'teams' ),
        'featured_image'        => _x( 'teams Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'teams' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'teams' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'teams' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'teams' ),
        'archives'              => _x( 'teams archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'teams' ),
        'insert_into_item'      => _x( 'Insert into teams', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'teams' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this teamss', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'teams' ),
        'filter_items_list'     => _x( 'Filter teams list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'teams' ),
        'items_list_navigation' => _x( 'teams list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'teams' ),
        'items_list'            => _x( 'teams list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'teams' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for team',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'team' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'team', $args );

    register_taxonomy( 'origin', 'team', [
        'label'                 =>  __( 'Origin', 'team' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}

/**
 *  function for Team CPT
 */

function clients_init() {
    $labels = array(
        'name'                  => _x( 'client', 'Post type general name', 'clients' ),
        'singular_name'         => _x( 'clients', 'Post type singular name', 'clients' ),
        'menu_name'             => _x( 'clients', 'Admin Menu text', 'clients' ),
        'name_admin_bar'        => _x( 'clients', 'Add New on Toolbar', 'clients' ),
        'add_new'               => __( 'Add New', 'clients' ),
        'add_new_item'          => __( 'Add New clients', 'clients' ),
        'new_item'              => __( 'New clients', 'clients' ),
        'edit_item'             => __( 'Edit clients', 'clients' ),
        'view_item'             => __( 'View clients', 'clients' ),
        'all_items'             => __( 'All clients', 'clients' ),
        'search_items'          => __( 'Search clients', 'clients' ),
        'parent_item_colon'     => __( 'Parent clients:', 'clients' ),
        'not_found'             => __( 'No clients found.', 'clients' ),
        'not_found_in_trash'    => __( 'No clientss found in Trash.', 'clients' ),
        'featured_image'        => _x( 'clients Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'clients' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'clients' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'clients' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'clients' ),
        'archives'              => _x( 'clients archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'clients' ),
        'insert_into_item'      => _x( 'Insert into clients', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'clients' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this clientss', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'clients' ),
        'filter_items_list'     => _x( 'Filter clients list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'clients' ),
        'items_list_navigation' => _x( 'clients list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'clients' ),
        'items_list'            => _x( 'clients list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'clients' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for client',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'client' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'client', $args );

    register_taxonomy( 'origin', 'client', [
        'label'                 =>  __( 'Origin', 'client' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}

/**
 *  function for Team CPT
 */

function contact_form_init() {
    $labels = array(
        'name'                  => _x( 'contact form', 'Post type general name', 'contact forms' ),
        'singular_name'         => _x( 'contact forms', 'Post type singular name', 'contact forms' ),
        'menu_name'             => _x( 'contact forms', 'Admin Menu text', 'contact forms' ),
        'name_admin_bar'        => _x( 'contact forms', 'Add New on Toolbar', 'contact forms' ),
        'add_new'               => __( 'Add New', 'contact forms' ),
        'add_new_item'          => __( 'Add New contact forms', 'contact forms' ),
        'new_item'              => __( 'New contact forms', 'contact forms' ),
        'edit_item'             => __( 'Edit contact forms', 'contact forms' ),
        'view_item'             => __( 'View contact forms', 'contact forms' ),
        'all_items'             => __( 'All contact forms', 'contact forms' ),
        'search_items'          => __( 'Search contact forms', 'contact forms' ),
        'parent_item_colon'     => __( 'Parent contact forms:', 'contact forms' ),
        'not_found'             => __( 'No contact forms found.', 'contact forms' ),
        'not_found_in_trash'    => __( 'No contact formss found in Trash.', 'contact forms' ),
        'featured_image'        => _x( 'contact forms Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'contact forms' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'contact forms' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'contact forms' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'contact forms' ),
        'archives'              => _x( 'contact forms archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'contact forms' ),
        'insert_into_item'      => _x( 'Insert into contact forms', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'contact forms' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this contact formss', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'contact forms' ),
        'filter_items_list'     => _x( 'Filter contact forms list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'contact forms' ),
        'items_list_navigation' => _x( 'contact forms list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'contact forms' ),
        'items_list'            => _x( 'contact forms list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'contact forms' ),
    );
 
    $args                       =   array(
        'labels'                =>  $labels,
        'description'           =>  'A custom post type for contact form',
        'public'                =>  true,
        'publicly_queryable'    =>  true,
        'show_ui'               =>  true,
        'show_in_menu'          =>  true,
        'query_var'             =>  true,
        'rewrite'               =>  array( 'slug' => 'contact form' ),
        'capability_type'       =>  'post',
        'has_archive'           =>  true,
        'hierarchical'          =>  false,
        'menu_position'         =>  20,
        'supports'              =>  [ 'title', 'editor', 'author', 'thumbnail' ],
        'taxonomies'            =>  [ 'category', 'post_tag' ],
        'show_in_rest'          =>  true
    );
 
    register_post_type( 'contact form', $args );

    register_taxonomy( 'origin', 'contact form', [
        'label'                 =>  __( 'Origin', 'contact form' ),
        'rewrite'               =>  [ 'slug' => 'origin' ],
        'show_in_rest'          =>  true
    ]);
}