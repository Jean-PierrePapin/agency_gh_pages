<?php

/**
 * Just testing the post display
 */

get_header();

/**
 * WP_Query class use to display a post
 */

$args = [
    'post_type'         =>  'contact form',
    'nopaging'          =>  false,
    'posts_per_page'    =>  '1',
    'order'             =>  'ASC',
    'orderby'           =>  'ID'
];

$posts = new WP_Query( $args );
$posts = $posts->get_posts();

foreach( $posts as $post ) {

    echo $post->post_content;

}

get_footer();