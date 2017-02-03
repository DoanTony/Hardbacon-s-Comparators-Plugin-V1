<?php 
function create_brokerage_table() {
 $singular = 'Brokerage Datatable';
 $plural = 'Brokerages Datatable';
   $labels = array(
		        'name' => $plural,
		        'singular_name' => $singular,
		        'title' => "Broker",
		        'add_new' => 'Add New Broker',
		        'add_new_item' => 'Add New Broker',
		        'edit_item' => 'Edit Broker',
		        'new_item' => 'New Broker',
		        'view_item' => 'View Broker',
		        'search_item' => 'Search Broker',
		        'not_found' => 'No Broker Found',
		        'not_found_in_trash' => 'No Broker Found',
		        'all_item' => 'All Brokers',
		        'archive' => 'Archive',
		        'insert_item_into' => 'Insert Broker Into',
		        'uploaded_to_this_file' => 'Add Attachement',
		        'featured_image' => 'Broker Logo',
		        'set_featured_image' => 'Add Broker Logo',
		        'remove_featured_image' => 'Remove Broker Logo',
		        'use_featured_image'	=> 'Use Broker Logo',
		        'menu_name' => $plural,
		        'name_admin_bar' => $singular
		      );

    $args = array(
         'labels' => $labels,   
         'public' => false,
         'publicly_queryable' => true,
		 'has_archive' => true,
		 'exclude_from_search' => false,
		 'show_ui' => true,
		 'show_in_nav_menus' => false,
		 'show_in_admin_bar' => true,
		 'menu_position' => 10,
		 'menu_icon' => 'dashicons-index-card',
		 'can_export' => true,
		 'delete_with_user' => false,
		 'hierarchical' => false,
		 'has_archive' => true,
		 'query_var' => true,
		 'capability_type' => 'page',
		 'map_meta_cap' => true,
		 'rewrite' => array(
		 				'slug' => 'brokerages',
		 				'with_front' => true,
		 				'pages' => true,
		 				'feeds' => false),
		 'supports' => array(
		 	 'title',
		 	 'editor' => false,
		 	 'author' => false,
		 	 'custom-fields' => false,
		 	 'thumbnail')
    	);
		
    	register_post_type('brokerages', $args);
}
add_action( 'init', 'create_brokerage_table' );

function create_robo_table() {
 $singular = 'Robo Advisor Datatable';
 $plural = 'Robos Advisors Datatable';
   $labels = array(
		        'name' => $plural,
		        'singular_name' => $singular,
		        'title' => "Robo",
		        'add_new' => 'Add New Robo',
		        'add_new_item' => 'Add New Robo',
		        'edit_item' => 'Edit Robo',
		        'new_item' => 'New Robo',
		        'view_item' => 'View Robo',
		        'search_item' => 'Search Robo',
		        'not_found' => 'No Robo Found',
		        'not_found_in_trash' => 'No Robo Found',
		        'all_item' => 'All Robos',
		        'archive' => 'Archive',
		        'insert_item_into' => 'Insert Robo Into',
		        'uploaded_to_this_file' => 'Add Attachement',
		        'featured_image' => 'Robo Logo',
		        'set_featured_image' => 'Add Robo Logo',
		        'remove_featured_image' => 'Remove Robo Logo',
		        'use_featured_image'	=> 'Use Robo Logo',
		        'menu_name' => $plural,
		        'name_admin_bar' => $singular
		      );

    $args = array(
         'labels' => $labels,   
         'public' => false,
         'publicly_queryable' => true,
		 'has_archive' => true,
		 'exclude_from_search' => false,
		 'show_ui' => true,
		 'show_in_nav_menus' => false,
		 'show_in_admin_bar' => true,
		 'menu_position' => 10,
		 'menu_icon' => 'dashicons-index-card',
		 'can_export' => true,
		 'delete_with_user' => false,
		 'hierarchical' => false,
		 'has_archive' => true,
		 'query_var' => true,
		 'capability_type' => 'page',
		 'map_meta_cap' => true,
		 'rewrite' => array(
		 				'slug' => 'robos',
		 				'with_front' => true,
		 				'pages' => true,
		 				'feeds' => false),
		 'supports' => array(
		 	 'title',
		 	 'editor' => false,
		 	 'author' => false,
		 	 'custom-fields' => false,
		 	 'thumbnail')
    	);
		
    	register_post_type('robos', $args);
}
add_action( 'init', 'create_robo_table' );