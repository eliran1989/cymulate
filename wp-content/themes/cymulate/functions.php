<?php 


function create_posttype() {
    register_post_type( 'threats',

    array(
      'labels' => array(
       'name' => __( 'Threats' ),
       'not_found' => __( 'No threats found.' ),
       'singular_name' => __( 'Threats' ),
       'add_new_item' => __( 'Add New Threat' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'Threats'),
      'menu_icon' => 'dashicons-warning',
     )
    );
}


function add_custom_taxonomies() {

    register_taxonomy('Prioritize', 'threats', array(
      'hierarchical' => false,
      'labels' => array(
        'name' => _x( 'Prioritize', 'taxonomy general name' ),
        'singular_name' => _x( 'Prioritize', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Prioritize' ),
        'all_items' => __( 'All Prioritizes' ),
        'parent_item' => __( 'Parent Prioritize' ),
        'parent_item_colon' => __( 'Parent Prioritize:' ),
        'not_found' => __( 'No prioritizes found.' ),
        'edit_item' => __( 'Edit Prioritize' ),
        'update_item' => __( 'Update Prioritize' ),
        'add_new_item' => __( 'Add New Prioritize' ),
        'new_item_name' => __( 'New Prioritize Name' ),
        'menu_name' => __( 'Prioritize' ),
      ),

      'rewrite' => array(
        'slug' => 'prioritize', 
        'with_front' => false, 
        'show_in_rest' => true,
        'show_ui' => true
      ),
    ));
  }
  
  
  add_action( 'init', 'create_posttype' );
  add_action( 'init', 'add_custom_taxonomies', 0 );