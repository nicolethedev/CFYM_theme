<?php
/**
 * CFYM Theme: Services CPT & Taxonomy
 */


/**
 * Register Services CPT
 */
function cfym_register_services_cpt() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'cfym_theme' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'cfym_theme' ),
        'menu_name'             => __( 'Services', 'cfym_theme' ),
        'name_admin_bar'        => __( 'Service', 'cfym_theme' ),
        'archives'              => __( 'Service Archives', 'cfym_theme' ),
        'attributes'            => __( 'Service Attributes', 'cfym_theme' ),
        'parent_item_colon'     => __( 'Parent Service:', 'cfym_theme' ),
        'all_items'             => __( 'All Services', 'cfym_theme' ),
        'add_new_item'          => __( 'Add New Service', 'cfym_theme' ),
        'add_new'               => __( 'Add New', 'cfym_theme' ),
        'new_item'              => __( 'New Service', 'cfym_theme' ),
        'edit_item'             => __( 'Edit Service', 'cfym_theme' ),
        'update_item'           => __( 'Update Service', 'cfym_theme' ),
        'view_item'             => __( 'View Service', 'cfym_theme' ),
        'view_items'            => __( 'View Services', 'cfym_theme' ),
        'search_items'          => __( 'Search Services', 'cfym_theme' ),
        'not_found'             => __( 'Service not found', 'cfym_theme' ),
        'not_found_in_trash'    => __( 'Service not found in Trash', 'cfym_theme' ),
        'featured_image'        => __( 'Service Image', 'cfym_theme' ),
        'set_featured_image'    => __( 'Set service image', 'cfym_theme' ),
        'remove_featured_image' => __( 'Remove service image', 'cfym_theme' ),
        'use_featured_image'    => __( 'Use as service image', 'cfym_theme' ),
        'insert_into_item'      => __( 'Insert into service', 'cfym_theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this service', 'cfym_theme' ),
        'items_list'            => __( 'Services list', 'cfym_theme' ),
        'items_list_navigation' => __( 'Services list navigation', 'cfym_theme' ),
        'filter_items_list'     => __( 'Filter services list', 'cfym_theme' ),
    );

    $args = array(
        'label'                 => __( 'Service', 'cfym_theme' ),
        'description'           => __( 'Services for CFYM', 'cfym_theme' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'service_type' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-hammer',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'map_meta_cap'          => true,
        'show_in_rest'          => true,
        'rewrite'               => array( 'slug' => 'services' ),
    );

    register_post_type( 'service', $args );
}
add_action( 'init', 'cfym_register_services_cpt', 0 );


/**
 * Optional: Service Type Taxonomy
 */
function cfym_register_service_type_taxonomy() {
    $labels = array(
        'name'              => _x( 'Service Types', 'taxonomy general name', 'cfym_theme' ),
        'singular_name'     => _x( 'Service Type', 'taxonomy singular name', 'cfym_theme' ),
        'search_items'      => __( 'Search Service Types', 'cfym_theme' ),
        'all_items'         => __( 'All Service Types', 'cfym_theme' ),
        'parent_item'       => __( 'Parent Service Type', 'cfym_theme' ),
        'parent_item_colon' => __( 'Parent Service Type:', 'cfym_theme' ),
        'edit_item'         => __( 'Edit Service Type', 'cfym_theme' ),
        'update_item'       => __( 'Update Service Type', 'cfym_theme' ),
        'add_new_item'      => __( 'Add New Service Type', 'cfym_theme' ),
        'new_item_name'     => __( 'New Service Type Name', 'cfym_theme' ),
        'menu_name'         => __( 'Service Types', 'cfym_theme' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rest_base'         => 'service_type',
        'rewrite'           => array( 'slug' => 'service-type' ),
    );

    register_taxonomy( 'service_type', array( 'service' ), $args );
}
add_action( 'init', 'cfym_register_service_type_taxonomy', 0 );