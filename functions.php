<?php
/**
 * Magnifico Landing Theme Functions
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue parent and child stylesheets.
 */
function magnifico_landing_enqueue_styles() {
    // Enqueue parent theme's stylesheet.
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Enqueue our main custom stylesheet.
    wp_enqueue_style(
        'child-main-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        '1.0.2' // Increment version
    );

    // Enqueue the stylesheet for the features section.
    wp_enqueue_style(
        'child-features-style',
        get_stylesheet_directory_uri() . '/assets/css/section-features.css',
        array( 'child-main-style' ),
        '1.0.2'
    );

    // NEW: Enqueue the stylesheet for the tools section.
    wp_enqueue_style(
        'child-tools-style',
        get_stylesheet_directory_uri() . '/assets/css/section-tools.css',
        array( 'child-features-style' ), // Loads after the features CSS
        '1.0.2'
    );
}
add_action( 'wp_enqueue_scripts', 'magnifico_landing_enqueue_styles' );