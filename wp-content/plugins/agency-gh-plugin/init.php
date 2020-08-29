<?php


/**
 * Custome the_meta function inspired from the the_meta function from WP
 * https://developer.wordpress.org/reference/functions/the_meta/
 */

function the_custom_meta() {
    $keys = get_post_custom_keys();
    if ( $keys ) {
        $li_html = '';
        foreach ( (array) $keys as $key ) {
            $keyt = trim( $key );
            if ( is_protected_meta( $keyt, 'post' ) ) {
                continue;
            }
 
            $values = array_map( 'trim', get_post_custom_values( $key ) );
            $value  = implode( ', ', $values );
 
            $html = sprintf(
                "%s %s\n",
                /* translators: %s: Post custom field name. */
                sprintf( _x( '', 'Post custom field name' ), $key ), 
                // Remove the %s placeholder so the CF name is removed
                $value
            );
 
            /**
             * Filters the HTML output of the li element in the post custom fields list.
             *
             * @since 2.2.0
             *
             * @param string $html  The HTML output for the li element.
             * @param string $key   Meta key.
             * @param string $value Meta value.
             */
            $li_html .= apply_filters( 'the_meta_key', $html, $key, $value );
        }
 
        if ( $li_html ) {
            echo "\n{$li_html}\n";
        }
    }
}