<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);


    // Register Custom Post Type
function team_post_type() {

	$labels = array(
		'name'                  => _x( 'Zespół', 'Post Type General Name', 'jjkp' ),
		'singular_name'         => _x( 'Zespół', 'Post Type Singular Name', 'jjkp' ),
		'menu_name'             => __( 'Zespół', 'jjkp' ),
		'name_admin_bar'        => __( 'Zespół', 'jjkp' ),
		'archives'              => __( 'Item Archives', 'jjkp' ),
		'attributes'            => __( 'Item Attributes', 'jjkp' ),
		'parent_item_colon'     => __( 'Parent Item:', 'jjkp' ),
		'all_items'             => __( 'All Items', 'jjkp' ),
		'add_new_item'          => __( 'Add New Item', 'jjkp' ),
		'add_new'               => __( 'Add New', 'jjkp' ),
		'new_item'              => __( 'New Item', 'jjkp' ),
		'edit_item'             => __( 'Edit Item', 'jjkp' ),
		'update_item'           => __( 'Update Item', 'jjkp' ),
		'view_item'             => __( 'View Item', 'jjkp' ),
		'view_items'            => __( 'View Items', 'jjkp' ),
		'search_items'          => __( 'Search Item', 'jjkp' ),
		'not_found'             => __( 'Not found', 'jjkp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'jjkp' ),
		'featured_image'        => __( 'Featured Image', 'jjkp' ),
		'set_featured_image'    => __( 'Set featured image', 'jjkp' ),
		'remove_featured_image' => __( 'Remove featured image', 'jjkp' ),
		'use_featured_image'    => __( 'Use as featured image', 'jjkp' ),
		'insert_into_item'      => __( 'Insert into item', 'jjkp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'jjkp' ),
		'items_list'            => __( 'Items list', 'jjkp' ),
		'items_list_navigation' => __( 'Items list navigation', 'jjkp' ),
		'filter_items_list'     => __( 'Filter items list', 'jjkp' ),
	);
	$args = array(
		'label'                 => __( 'Zespół', 'jjkp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'zespol', $args );

}
add_action( 'init', 'team_post_type', 0 );

// Register Specjalizacje Post Type
	function spec_post_type() {

		$labels = array(
			'name'                  => _x( 'Specjalizacje', 'Post Type General Name', 'jjkp' ),
			'singular_name'         => _x( 'Specjalizacje', 'Post Type Singular Name', 'jjkp' ),
			'menu_name'             => __( 'Specjalizacje', 'jjkp' ),
			'name_admin_bar'        => __( 'Specjalizacje', 'jjkp' ),
			'archives'              => __( 'Item Archives', 'jjkp' ),
			'attributes'            => __( 'Item Attributes', 'jjkp' ),
			'parent_item_colon'     => __( 'Parent Item:', 'jjkp' ),
			'all_items'             => __( 'All Items', 'jjkp' ),
			'add_new_item'          => __( 'Add New Item', 'jjkp' ),
			'add_new'               => __( 'Add New', 'jjkp' ),
			'new_item'              => __( 'New Item', 'jjkp' ),
			'edit_item'             => __( 'Edit Item', 'jjkp' ),
			'update_item'           => __( 'Update Item', 'jjkp' ),
			'view_item'             => __( 'View Item', 'jjkp' ),
			'view_items'            => __( 'View Items', 'jjkp' ),
			'search_items'          => __( 'Search Item', 'jjkp' ),
			'not_found'             => __( 'Not found', 'jjkp' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'jjkp' ),
			'featured_image'        => __( 'Featured Image', 'jjkp' ),
			'set_featured_image'    => __( 'Set featured image', 'jjkp' ),
			'remove_featured_image' => __( 'Remove featured image', 'jjkp' ),
			'use_featured_image'    => __( 'Use as featured image', 'jjkp' ),
			'insert_into_item'      => __( 'Insert into item', 'jjkp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'jjkp' ),
			'items_list'            => __( 'Items list', 'jjkp' ),
			'items_list_navigation' => __( 'Items list navigation', 'jjkp' ),
			'filter_items_list'     => __( 'Filter items list', 'jjkp' ),
		);
		$args = array(
			'label'                 => __( 'Specjalizacje', 'jjkp' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
		);
		register_post_type( 'specjalizacje', $args );
	
	}
	add_action( 'init', 'spec_post_type', 0 );

// Register FAQ Post Type
function faq_post_type() {

	$labels = array(
		'name'                  => _x( 'FAQ', 'Post Type General Name', 'jjkp' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'jjkp' ),
		'menu_name'             => __( 'FAQ', 'jjkp' ),
		'name_admin_bar'        => __( 'FAQ', 'jjkp' ),
		'archives'              => __( 'Item Archives', 'jjkp' ),
		'attributes'            => __( 'Item Attributes', 'jjkp' ),
		'parent_item_colon'     => __( 'Parent Item:', 'jjkp' ),
		'all_items'             => __( 'All Items', 'jjkp' ),
		'add_new_item'          => __( 'Add New Item', 'jjkp' ),
		'add_new'               => __( 'Add New', 'jjkp' ),
		'new_item'              => __( 'New Item', 'jjkp' ),
		'edit_item'             => __( 'Edit Item', 'jjkp' ),
		'update_item'           => __( 'Update Item', 'jjkp' ),
		'view_item'             => __( 'View Item', 'jjkp' ),
		'view_items'            => __( 'View Items', 'jjkp' ),
		'search_items'          => __( 'Search Item', 'jjkp' ),
		'not_found'             => __( 'Not found', 'jjkp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'jjkp' ),
		'featured_image'        => __( 'Featured Image', 'jjkp' ),
		'set_featured_image'    => __( 'Set featured image', 'jjkp' ),
		'remove_featured_image' => __( 'Remove featured image', 'jjkp' ),
		'use_featured_image'    => __( 'Use as featured image', 'jjkp' ),
		'insert_into_item'      => __( 'Insert into item', 'jjkp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'jjkp' ),
		'items_list'            => __( 'Items list', 'jjkp' ),
		'items_list_navigation' => __( 'Items list navigation', 'jjkp' ),
		'filter_items_list'     => __( 'Filter items list', 'jjkp' ),
	);
	$args = array(
		'label'                 => __( 'faq', 'jjkp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'faq_post_type', 0 );

/**
 * Removes some menus by page.
 */
function wpdocs_remove_menus(){
   
	remove_menu_page( 'edit-comments.php' );          //Comments
	 
  }
  add_action( 'admin_menu', 'wpdocs_remove_menus' );
  ?>

<?php


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'jjkp Opcje',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
}
  ?>