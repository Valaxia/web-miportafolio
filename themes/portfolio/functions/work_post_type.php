<?php 

// Register Custom Post Type
function work_post_type() {

	$labels = array(
		'name'                  => _x( 'Works', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Work', 'text_domain' ),
		'name_admin_bar'        => __( 'Work', 'text_domain' ),
		'archives'              => __( 'Work Archives', 'text_domain' ),
		'attributes'            => __( 'Work Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Work:', 'text_domain' ),
		'all_items'             => __( 'All Works', 'text_domain' ),
		'add_new_item'          => __( 'Add New Work', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Work', 'text_domain' ),
		'edit_item'             => __( 'Edit Work', 'text_domain' ),
		'update_item'           => __( 'Update Work', 'text_domain' ),
		'view_item'             => __( 'View Work', 'text_domain' ),
		'view_items'            => __( 'View Works', 'text_domain' ),
		'search_items'          => __( 'Search Work', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Work', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Works list', 'text_domain' ),
		'items_list_navigation' => __( 'Works list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Works list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Work', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'work', $args );

}
add_action( 'init', 'work_post_type', 0 );

 ?>