<?php
/**
 * Magnifico Landing Theme Functions
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *  and custom stylesheets.
 */
function magnifico_landing_enqueue_styles() {
    $theme_version = '1.0.0';

	// 1.  parent theme's stylesheet.
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css',
        array(),
        $theme_version
	);

    // 2. main custom stylesheet (global tokens/layout).
    wp_enqueue_style(
        'magnifico-main-style',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array( 'parent-style' ),
        $theme_version
    );
    
    // 3.  workflow section stylesheet.
    wp_enqueue_style(
        'magnifico-workflow-style',
        get_stylesheet_directory_uri() . '/assets/css/section-workflow.css',
        array( 'magnifico-main-style' ),
        $theme_version
    );
    
    // 4.  CTA section stylesheet.
    wp_enqueue_style(
        'magnifico-cta-style',
        get_stylesheet_directory_uri() . '/assets/css/section-cta.css',
        array( 'magnifico-workflow-style' ),
        $theme_version
    );
    
    // FOOTER STYLESHEET (from template-parts folder).
    wp_enqueue_style(
        'magnifico-footer-style',
        get_stylesheet_directory_uri() . '/template-parts/footer.css',
        array( 'magnifico-cta-style' ), // Loads AFTER the CTA styles
        $theme_version
    );
}
add_action( 'wp_enqueue_scripts', 'magnifico_landing_enqueue_styles' );
?>