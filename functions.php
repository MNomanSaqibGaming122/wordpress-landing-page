<?php
/**
 * Magnifico Landing Theme Functions
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * parent and child stylesheets.
 */
function magnifico_landing_enqueue_styles() {
    // parent theme's stylesheet.
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // main custom stylesheet.
    wp_enqueue_style( 'child-main-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ), '1.0.4' );

    // stylesheet for the features section.
    wp_enqueue_style( 'child-features-style', get_stylesheet_directory_uri() . '/assets/css/section-features.css', array( 'child-main-style' ), '1.0.4' );

    // stylesheet for the tools section.
    wp_enqueue_style( 'child-tools-style', get_stylesheet_directory_uri() . '/assets/css/section-tools.css', array( 'child-features-style' ), '1.0.4' );

    //  stylesheet for the banner section.
    wp_enqueue_style( 'child-banner-style', get_stylesheet_directory_uri() . '/assets/css/section-banner.css', array( 'child-tools-style' ), '1.0.4' );
    
    // stylesheet for the workflow section.
    wp_enqueue_style( 'child-workflow-style', get_stylesheet_directory_uri() . '/assets/css/section-workflow.css', array( 'child-banner-style' ), '1.0.4' );

    // stylesheet for the CTA section.
    wp_enqueue_style( 'child-cta-style', get_stylesheet_directory_uri() . '/assets/css/section-cta.css', array( 'child-workflow-style' ), '1.0.4' );

    // FOOTER STYLESHEET (from template-parts folder).
    wp_enqueue_style( 'child-footer-style', get_stylesheet_directory_uri() . '/template-parts/footer.css', array( 'child-cta-style' ), '1.0.4' );
}
add_action( 'wp_enqueue_scripts', 'magnifico_landing_enqueue_styles' );