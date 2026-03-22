<?php
/**
 * CFYM Theme: Volunteer CPT & Taxonomy
 */

/**
 * Register Volunteer CPT
 */
function cfym_register_volunteer_cpt() {
    $labels = array(
        'name'                  => _x( 'Volunteers', 'Post Type General Name', 'cfym_theme' ),
        'singular_name'         => _x( 'Volunteer', 'Post Type Singular Name', 'cfym_theme' ),
        'menu_name'             => __( 'Volunteers', 'cfym_theme' ),
        'name_admin_bar'        => __( 'Volunteer', 'cfym_theme' ),
        'archives'              => __( 'Volunteer Archives', 'cfym_theme' ),
        'attributes'            => __( 'Volunteer Attributes', 'cfym_theme' ),
        'parent_item_colon'     => __( 'Parent Volunteer:', 'cfym_theme' ),
        'all_items'             => __( 'All Volunteers', 'cfym_theme' ),
        'add_new_item'          => __( 'Add New Volunteer', 'cfym_theme' ),
        'add_new'               => __( 'Add New', 'cfym_theme' ),
        'new_item'              => __( 'New Volunteer', 'cfym_theme' ),
        'edit_item'             => __( 'Edit Volunteer', 'cfym_theme' ),
        'update_item'           => __( 'Update Volunteer', 'cfym_theme' ),
        'view_item'             => __( 'View Volunteer', 'cfym_theme' ),
        'view_items'            => __( 'View Volunteers', 'cfym_theme' ),
        'search_items'          => __( 'Search Volunteers', 'cfym_theme' ),
        'not_found'             => __( 'Volunteer not found', 'cfym_theme' ),
        'not_found_in_trash'    => __( 'Volunteer not found in Trash', 'cfym_theme' ),
        'featured_image'        => __( 'Profile Photo', 'cfym_theme' ),
        'set_featured_image'    => __( 'Set profile photo', 'cfym_theme' ),
        'remove_featured_image' => __( 'Remove profile photo', 'cfym_theme' ),
        'use_featured_image'    => __( 'Use as profile photo', 'cfym_theme' ),
        'insert_into_item'      => __( 'Insert into volunteer', 'cfym_theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this volunteer', 'cfym_theme' ),
        'items_list'            => __( 'Volunteer list', 'cfym_theme' ),
        'items_list_navigation' => __( 'Volunteer list navigation', 'cfym_theme' ),
        'filter_items_list'     => __( 'Filter volunteer list', 'cfym_theme' ),
    );

    $args = array(
        'label'                 => __( 'Volunteer', 'cfym_theme' ),
        'description'           => __( 'Volunteers for CFYM', 'cfym_theme' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'volunteer_role' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
        'show_in_rest'          => true,
        'rewrite'               => array( 'slug' => 'volunteer' ),
    );

    register_post_type( 'volunteer', $args );
}
add_action( 'init', 'cfym_register_volunteer_cpt', 0 );


/**
 * Optional: Volunteer Role Taxonomy
 */
function cfym_register_volunteer_role_taxonomy() {
    $labels = array(
        'name'              => _x( 'Volunteer Roles', 'taxonomy general name', 'cfym_theme' ),
        'singular_name'     => _x( 'Volunteer Role', 'taxonomy singular name', 'cfym_theme' ),
        'search_items'      => __( 'Search Volunteer Roles', 'cfym_theme' ),
        'all_items'         => __( 'All Volunteer Roles', 'cfym_theme' ),
        'parent_item'       => __( 'Parent Volunteer Role', 'cfym_theme' ),
        'parent_item_colon' => __( 'Parent Volunteer Role:', 'cfym_theme' ),
        'edit_item'         => __( 'Edit Volunteer Role', 'cfym_theme' ),
        'update_item'       => __( 'Update Volunteer Role', 'cfym_theme' ),
        'add_new_item'      => __( 'Add New Volunteer Role', 'cfym_theme' ),
        'new_item_name'     => __( 'New Volunteer Role Name', 'cfym_theme' ),
        'menu_name'         => __( 'Volunteer Roles', 'cfym_theme' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rest_base'         => 'volunteer_role',
        'rewrite'           => array( 'slug' => 'volunteer-role' ),
    );

    register_taxonomy( 'volunteer_role', array( 'volunteer' ), $args );
}
add_action( 'init', 'cfym_register_volunteer_role_taxonomy', 0 );
