<?php

// Enqueue Styles and Scripts

function cfym_enqueue_theme_assets() {
    // Normalize and main stylesheet
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/styles/normalize.css', [], null, 'all' );
    wp_enqueue_style( 'cfym_theme', get_stylesheet_uri(), [], null, 'all' );
    }

add_action( 'wp_enqueue_scripts', 'cfym_enqueue_theme_assets' );