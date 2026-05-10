<?php

// Load volunteer CPT and taxonomy
require_once get_template_directory() . '/inc/volunteer.php';
require_once get_template_directory() . '/inc/services.php';


// Enqueue Styles and Scripts

function cfym_enqueue_theme_assets() {
    // Normalize and main stylesheet
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/styles/normalize.css', [], null, 'all' );
    wp_enqueue_style( 'cfym_theme', get_stylesheet_uri(), ['style.css'], null, 'all' );
    }

add_action( 'wp_enqueue_scripts', 'cfym_enqueue_theme_assets' );

// Disable the volunteer title from displaying as a link

add_filter( 'render_block_core/post-terms', function( $block_content, $block ) {
    if ( empty( $block['attrs']['term'] ) || 'volunteer_role' !== $block['attrs']['term'] ) {
        return $block_content;
    }

    return preg_replace( '#<a[^>]*>(.*?)</a>#is', '$1', $block_content );
}, 10, 2 );

