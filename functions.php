<?php
/**
 * Enqueue parent and child stylesheets.
 */
add_action( 'wp_enqueue_scripts', 'magnifico_landing_enqueue_styles' );

function magnifico_landing_enqueue_styles() {
    // This loads the stylesheet from the parent theme (Twenty Twenty-Four).
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // This loads our own custom stylesheet.
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ), // This ensures parent styles load first.
        '1.0.0'
    );
}