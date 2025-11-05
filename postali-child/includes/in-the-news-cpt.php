<?php
/**
 * Custom Recent Outbreaks Custom Post Type
 *
 * @package Postali Parent
 * @author Postali LLC
 */

function create_custom_post_type_recentoutbreaks() {

// set up labels
    $labels = array(
        'name' => 'Recent Outbreaks',
        'singular_name' => 'News',
        'add_new' => 'Add New Recent Outbreak',
        'add_new_item' => 'Add New Recent Outbreak',
        'edit_item' => 'Edit Recent Outbreak',
        'new_item' => 'New Recent Outbreak',
        'all_items' => 'All Recent Outbreaks',
        'view_item' => 'View Recent Outbreak',
        'search_items' => 'Search Recent Outbreaks',
        'not_found' =>  'No Recent Outbreaks Found',
        'not_found_in_trash' => 'No Recent Outbreaks found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Recent Outbreaks',

    );
    //register post type
    register_post_type( 'Recent Outbreaks', array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-analytics',
        'has_archive' => true,
        'public' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),  
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'rewrite' => array( 'slug' => 'current-outbreaks', 'with_front' => false ), // Allows for /legal-blog/ to be the preface to non pages, but custom posts to have own root
        )
    );

}

add_action( 'init', 'create_custom_post_type_recentoutbreaks' );