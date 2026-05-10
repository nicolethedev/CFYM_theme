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
function cfym_test_volunteer_role_plain_text() {
    $terms = get_the_terms( 83, 'volunteer_role' );

    if ( empty( $terms ) || is_wp_error( $terms ) ) {
        return '';
    }

    $names = wp_list_pluck( $terms, 'name' );
    return esc_html( implode( ', ', $names ) );
}
add_shortcode( 'volunteer_role_plain', 'cfym_test_volunteer_role_plain_text' );

