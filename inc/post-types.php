<?php 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{

	$labels = array(
		'name' => _x('Homepage Slides', 'post type general name'),
		'singular_name' => _x('Homepage Slides', 'post type singular name'),
		'add_new' => _x('Add New', 'Slide'),
		'add_new_item' => __('Add New Slide'),
		'edit_item' => __('Edit Slides'),
		'new_item' => __('New Slide'),
		'view_item' => __('View Slides'),
		'search_items' => __('Search Slides'),
		'not_found' =>  __('No Slides found'),
		'not_found_in_trash' => __('No Slides found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Homepage Slides'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array('title','editor','custom-fields','thumbnail'),

	);
	register_post_type('slides',$args);

	$labels = array(
		'name' => _x('Leadership', 'post type general name'),
		'singular_name' => _x('Leadership', 'post type singular name'),
		'add_new' => _x('Add New', 'Leadership'),
		'add_new_item' => __('Add New Leadership'),
		'edit_item' => __('Edit Leadership'),
		'new_item' => __('New Leadership'),
		'view_item' => __('View Leadership'),
		'search_items' => __('Search Leadership'),
		'not_found' =>  __('No Leadership found'),
		'not_found_in_trash' => __('No Leadership found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Leadership'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array('title','editor','custom-fields','thumbnail'),

	);
	register_post_type('leadership',$args);
  // Add more between here
  
  // and here
  
  } // close custom post type