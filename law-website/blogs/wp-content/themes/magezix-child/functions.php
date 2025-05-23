<?php
/**
 * Theme functions and definitions.
 */
function magezix_child_enqueue_styles() {

    if ( SCRIPT_DEBUG ) {
        wp_enqueue_style( 'magezix-style' , get_template_directory_uri() . '/style.css' );
    } else {
        wp_enqueue_style( 'magezix-minified-style' , get_template_directory_uri() . '/style.min.css' );
    }

    wp_enqueue_style( 'magezix-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'magezix-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action(  'wp_enqueue_scripts', 'magezix_child_enqueue_styles' );