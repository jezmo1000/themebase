<?php
// Register Custom Post Type
function register_product_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'crockpot_2016' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'crockpot_2016' ),
		'menu_name'             => __( 'Products', 'crockpot_2016' ),
		'name_admin_bar'        => __( 'Products', 'crockpot_2016' ),
		'archives'              => __( 'Product Archives', 'crockpot_2016' ),
		'parent_item_colon'     => __( 'Parent Product:', 'crockpot_2016' ),
		'all_items'             => __( 'All Products', 'crockpot_2016' ),
		'add_new_item'          => __( 'Add New Product', 'crockpot_2016' ),
		'add_new'               => __( 'Add New', 'crockpot_2016' ),
		'new_item'              => __( 'New Product', 'crockpot_2016' ),
		'edit_item'             => __( 'Edit Product', 'crockpot_2016' ),
		'update_item'           => __( 'Update Product', 'crockpot_2016' ),
		'view_item'             => __( 'View Product', 'crockpot_2016' ),
		'search_items'          => __( 'Search Product', 'crockpot_2016' ),
		'not_found'             => __( 'Not found', 'crockpot_2016' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'crockpot_2016' ),
		'featured_image'        => __( 'Featured Image', 'crockpot_2016' ),
		'set_featured_image'    => __( 'Set featured image', 'crockpot_2016' ),
		'remove_featured_image' => __( 'Remove featured image', 'crockpot_2016' ),
		'use_featured_image'    => __( 'Use as featured image', 'crockpot_2016' ),
		'insert_into_item'      => __( 'Insert into Product', 'crockpot_2016' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'crockpot_2016' ),
		'items_list'            => __( 'Products list', 'crockpot_2016' ),
		'items_list_navigation' => __( 'Products list navigation', 'crockpot_2016' ),
		'filter_items_list'     => __( 'Filter Products list', 'crockpot_2016' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'crockpot_2016' ),
		'description'           => __( 'Crockpot product range', 'crockpot_2016' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','revisions', 'page-attributes', ),
		'taxonomies'            => array( 'size', 'type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'register_product_post_type', 0 );

function register_recipes_post_type() {

	$labels = array(
		'name'                  => _x( 'Recipe', 'Post Type General Name', 'crockpot_2016' ),
		'singular_name'         => _x( 'Recipe', 'Post Type Singular Name', 'crockpot_2016' ),
		'menu_name'             => __( 'Recipes', 'crockpot_2016' ),
		'name_admin_bar'        => __( 'Recipes', 'crockpot_2016' ),
		'archives'              => __( 'Recipe Archives', 'crockpot_2016' ),
		'parent_item_colon'     => __( 'Parent Recipe:', 'crockpot_2016' ),
		'all_items'             => __( 'All Recipes', 'crockpot_2016' ),
		'add_new_item'          => __( 'Add New Recipe', 'crockpot_2016' ),
		'add_new'               => __( 'Add New', 'crockpot_2016' ),
		'new_item'              => __( 'New Recipe', 'crockpot_2016' ),
		'edit_item'             => __( 'Edit Recipe', 'crockpot_2016' ),
		'update_item'           => __( 'Update Recipe', 'crockpot_2016' ),
		'view_item'             => __( 'View Recipe', 'crockpot_2016' ),
		'search_items'          => __( 'Search Recipe', 'crockpot_2016' ),
		'not_found'             => __( 'Not found', 'crockpot_2016' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'crockpot_2016' ),
		'featured_image'        => __( 'Featured Image', 'crockpot_2016' ),
		'set_featured_image'    => __( 'Set featured image', 'crockpot_2016' ),
		'remove_featured_image' => __( 'Remove featured image', 'crockpot_2016' ),
		'use_featured_image'    => __( 'Use as featured image', 'crockpot_2016' ),
		'insert_into_item'      => __( 'Insert into Recipe', 'crockpot_2016' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Recipe', 'crockpot_2016' ),
		'items_list'            => __( 'Recipes list', 'crockpot_2016' ),
		'items_list_navigation' => __( 'Recipes list navigation', 'crockpot_2016' ),
		'filter_items_list'     => __( 'Filter Recipes list', 'crockpot_2016' ),
	);
	$rewrite = array(
		'slug'                  => 'recipes',
		'with_front'            => false,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Recipe', 'crockpot_2016' ),
		'description'           => __( 'Crockpot Recipes', 'crockpot_2016' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes' ),
		'taxonomies'            => array( 'course', 'ingredient', 'cuisine' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-carrot',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'recipe', $args );

}
add_action( 'init', 'register_recipes_post_type', 0 );

// Register Custom Taxonomy
function register_size_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Sizes', 'Taxonomy General Name', 'crockpot_2016' ),
		'singular_name'              => _x( 'Size', 'Taxonomy Singular Name', 'crockpot_2016' ),
		'menu_name'                  => __( 'Size', 'crockpot_2016' ),
		'all_items'                  => __( 'All Sizes', 'crockpot_2016' ),
		'parent_item'                => __( 'Parent Size', 'crockpot_2016' ),
		'parent_item_colon'          => __( 'Parent Size:', 'crockpot_2016' ),
		'new_item_name'              => __( 'New Size Amount', 'crockpot_2016' ),
		'add_new_item'               => __( 'Add New Size', 'crockpot_2016' ),
		'edit_item'                  => __( 'Edit Size', 'crockpot_2016' ),
		'update_item'                => __( 'Update Size', 'crockpot_2016' ),
		'view_item'                  => __( 'View Size', 'crockpot_2016' ),
		'separate_items_with_commas' => __( 'Separate Sizes with commas', 'crockpot_2016' ),
		'add_or_remove_items'        => __( 'Add or remove Sizes', 'crockpot_2016' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'crockpot_2016' ),
		'popular_items'              => __( 'Popular Sizes', 'crockpot_2016' ),
		'search_items'               => __( 'Search Sizes', 'crockpot_2016' ),
		'not_found'                  => __( 'Not Found', 'crockpot_2016' ),
		'no_terms'                   => __( 'No Sizes', 'crockpot_2016' ),
		'items_list'                 => __( 'Sizes list', 'crockpot_2016' ),
		'items_list_navigation'      => __( 'Sizes list navigation', 'crockpot_2016' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'size', array( 'product' ), $args );

}
add_action( 'init', 'register_size_taxonomy', 0 );

// Register Product Type Taxonomy
function register_type_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Types', 'Taxonomy General Name', 'crockpot_2016' ),
		'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'crockpot_2016' ),
		'menu_name'                  => __( 'Type', 'crockpot_2016' ),
		'all_items'                  => __( 'All Types', 'crockpot_2016' ),
		'parent_item'                => __( 'Parent Type', 'crockpot_2016' ),
		'parent_item_colon'          => __( 'Parent Type:', 'crockpot_2016' ),
		'new_item_name'              => __( 'New Type Amount', 'crockpot_2016' ),
		'add_new_item'               => __( 'Add New Type', 'crockpot_2016' ),
		'edit_item'                  => __( 'Edit Type', 'crockpot_2016' ),
		'update_item'                => __( 'Update Type', 'crockpot_2016' ),
		'view_item'                  => __( 'View Type', 'crockpot_2016' ),
		'separate_items_with_commas' => __( 'Separate Types with commas', 'crockpot_2016' ),
		'add_or_remove_items'        => __( 'Add or remove Types', 'crockpot_2016' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'crockpot_2016' ),
		'popular_items'              => __( 'Popular Types', 'crockpot_2016' ),
		'search_items'               => __( 'Search Types', 'crockpot_2016' ),
		'not_found'                  => __( 'Not Found', 'crockpot_2016' ),
		'no_terms'                   => __( 'No Types', 'crockpot_2016' ),
		'items_list'                 => __( 'Types list', 'crockpot_2016' ),
		'items_list_navigation'      => __( 'Types list navigation', 'crockpot_2016' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'type', array( 'product' ), $args );

}
add_action( 'init', 'register_type_taxonomy', 0 );

// Register Course Taxonomy
function register_course_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Courses', 'Taxonomy General Name', 'crockpot_2016' ),
		'singular_name'              => _x( 'Course', 'Taxonomy Singular Name', 'crockpot_2016' ),
		'menu_name'                  => __( 'Course', 'crockpot_2016' ),
		'all_items'                  => __( 'All Courses', 'crockpot_2016' ),
		'parent_item'                => __( 'Parent Course', 'crockpot_2016' ),
		'parent_item_colon'          => __( 'Parent Course:', 'crockpot_2016' ),
		'new_item_name'              => __( 'New Course Amount', 'crockpot_2016' ),
		'add_new_item'               => __( 'Add New Course', 'crockpot_2016' ),
		'edit_item'                  => __( 'Edit Course', 'crockpot_2016' ),
		'update_item'                => __( 'Update Course', 'crockpot_2016' ),
		'view_item'                  => __( 'View Course', 'crockpot_2016' ),
		'separate_items_with_commas' => __( 'Separate Courses with commas', 'crockpot_2016' ),
		'add_or_remove_items'        => __( 'Add or remove Courses', 'crockpot_2016' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'crockpot_2016' ),
		'popular_items'              => __( 'Popular Courses', 'crockpot_2016' ),
		'search_items'               => __( 'Search Courses', 'crockpot_2016' ),
		'not_found'                  => __( 'Not Found', 'crockpot_2016' ),
		'no_terms'                   => __( 'No Courses', 'crockpot_2016' ),
		'items_list'                 => __( 'Courses list', 'crockpot_2016' ),
		'items_list_navigation'      => __( 'Courses list navigation', 'crockpot_2016' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'course', array( 'recipe' ), $args );

}
add_action( 'init', 'register_course_taxonomy', 0 );

// Register Ingredient Taxonomy
function register_ingredient_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Ingredients', 'Taxonomy General Name', 'crockpot_2016' ),
		'singular_name'              => _x( 'Ingredient', 'Taxonomy Singular Name', 'crockpot_2016' ),
		'menu_name'                  => __( 'Ingredient', 'crockpot_2016' ),
		'all_items'                  => __( 'All Ingredients', 'crockpot_2016' ),
		'parent_item'                => __( 'Parent Ingredient', 'crockpot_2016' ),
		'parent_item_colon'          => __( 'Parent Ingredient:', 'crockpot_2016' ),
		'new_item_name'              => __( 'New Ingredient Amount', 'crockpot_2016' ),
		'add_new_item'               => __( 'Add New Ingredient', 'crockpot_2016' ),
		'edit_item'                  => __( 'Edit Ingredient', 'crockpot_2016' ),
		'update_item'                => __( 'Update Ingredient', 'crockpot_2016' ),
		'view_item'                  => __( 'View Ingredient', 'crockpot_2016' ),
		'separate_items_with_commas' => __( 'Separate Ingredients with commas', 'crockpot_2016' ),
		'add_or_remove_items'        => __( 'Add or remove Ingredients', 'crockpot_2016' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'crockpot_2016' ),
		'popular_items'              => __( 'Popular Ingredients', 'crockpot_2016' ),
		'search_items'               => __( 'Search Ingredients', 'crockpot_2016' ),
		'not_found'                  => __( 'Not Found', 'crockpot_2016' ),
		'no_terms'                   => __( 'No Ingredients', 'crockpot_2016' ),
		'items_list'                 => __( 'Ingredients list', 'crockpot_2016' ),
		'items_list_navigation'      => __( 'Ingredients list navigation', 'crockpot_2016' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'ingredient', array( 'recipe' ), $args );

}
add_action( 'init', 'register_ingredient_taxonomy', 0 );

// Register Cuisine Taxonomy
function register_cuisine_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Cuisines', 'Taxonomy General Name', 'crockpot_2016' ),
		'singular_name'              => _x( 'Cuisine', 'Taxonomy Singular Name', 'crockpot_2016' ),
		'menu_name'                  => __( 'Cuisine', 'crockpot_2016' ),
		'all_items'                  => __( 'All Cuisines', 'crockpot_2016' ),
		'parent_item'                => __( 'Parent Cuisine', 'crockpot_2016' ),
		'parent_item_colon'          => __( 'Parent Cuisine:', 'crockpot_2016' ),
		'new_item_name'              => __( 'New Cuisine Amount', 'crockpot_2016' ),
		'add_new_item'               => __( 'Add New Cuisine', 'crockpot_2016' ),
		'edit_item'                  => __( 'Edit Cuisine', 'crockpot_2016' ),
		'update_item'                => __( 'Update Cuisine', 'crockpot_2016' ),
		'view_item'                  => __( 'View Cuisine', 'crockpot_2016' ),
		'separate_items_with_commas' => __( 'Separate Cuisines with commas', 'crockpot_2016' ),
		'add_or_remove_items'        => __( 'Add or remove Cuisines', 'crockpot_2016' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'crockpot_2016' ),
		'popular_items'              => __( 'Popular Cuisines', 'crockpot_2016' ),
		'search_items'               => __( 'Search Cuisines', 'crockpot_2016' ),
		'not_found'                  => __( 'Not Found', 'crockpot_2016' ),
		'no_terms'                   => __( 'No Cuisines', 'crockpot_2016' ),
		'items_list'                 => __( 'Cuisines list', 'crockpot_2016' ),
		'items_list_navigation'      => __( 'Cuisines list navigation', 'crockpot_2016' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'cuisine', array( 'recipe' ), $args );

}
add_action( 'init', 'register_cuisine_taxonomy', 0 );
