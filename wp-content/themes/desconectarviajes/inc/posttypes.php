<?php		
/**
 * Palermo posttypes and taxonomies
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Palermo
 */
register_post_type(
	'portfolio',
	array(
		'labels' => array(
			'name' => __( 'Portfolio' ),
			'singular_name' => __( 'Portfolio' ),
			'add_new' => __( 'New portfolio item' ),
			'add_new_item' => __( 'New portfolio item' ),
			'edit' => __( 'Edit portfolio item' ),
			'edit_item' => __( 'Edit portfolio item' ),
			'new_item' => __( 'New portfolio item' ),
			'view' => __( 'View portfolio item' ),
			'view_item' => __( 'View portfolio item' ),
			'search_items' => __( 'Search portfolio items' ),
			'not_found' => __( 'Not found' ),
			'not_found_in_trash' => __( 'Not found' ),
		),
		'public' => true,
		'show_ui' => true,
		'menu_position' => 18,
		'query_var' => true,
		'supports' => array( 'title','thumbnail'),
		'rewrite' => array( 'slug' => 'portfolio', 'with_front' => false ),
		'can_export' => true
	)
);



register_taxonomy( 
    'industry',
	'portfolio', 
    array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __( 'Industries', 'taxonomy general name' ),
            'singular_name' =>__( 'Industry', 'taxonomy singular name' ),
            'search_items' =>__( 'Search industries' ),
            'popular_items'=> __( 'Popular industries' ),
            'all_items' => __( 'All the industries' ),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' =>__( 'Edit' ),
            'update_item' =>__( 'Update' ),
            'add_new_item' =>__( 'Add new' ),
            'new_item_name' =>__( 'New' )            
        ),
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'industry' ),
));