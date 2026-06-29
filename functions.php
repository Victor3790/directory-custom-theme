<?php
/**
 * Functions and definitions
 *
 * @package Directory
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

define( 'DIRECTORY_THEME_VERSION', '1.0.0' );
define( 'DIRECTORY_THEME_URI', get_template_directory_uri() );

/**
 * Enqueue theme styles and scripts
 */
function directory_theme_enqueue_scripts() {
	wp_enqueue_style(
		'directory-theme-bootstrap',
		DIRECTORY_THEME_URI . '/css/bootstrap.css',
		array(),
		DIRECTORY_THEME_VERSION
	);

	wp_enqueue_style(
		'directory-theme-styles',
		DIRECTORY_THEME_URI . '/css/styles.css',
		array( 'directory-theme-bootstrap' ),
		DIRECTORY_THEME_VERSION
	);

	if ( is_front_page() ) {
		wp_enqueue_style(
			'directory-theme-home',
			DIRECTORY_THEME_URI . '/css/main.css',
			array( 'directory-theme-styles' ),
			DIRECTORY_THEME_VERSION
		);
	}

	if ( is_page( 'Directorio' ) || is_archive() ) {
		wp_enqueue_style(
			'directory-theme-archive',
			DIRECTORY_THEME_URI . '/css/archive.css',
			array( 'directory-theme-styles' ),
			DIRECTORY_THEME_VERSION
		);

		wp_enqueue_style(
			'directory-theme-breadcrumbs',
			DIRECTORY_THEME_URI . '/css/breadcrumbs.css',
			array( 'directory-theme-styles' ),
			DIRECTORY_THEME_VERSION
		);
	}
}
add_action( 'wp_enqueue_scripts', 'directory_theme_enqueue_scripts' );

/**
 * Register custom post type: Directory Item
 */
function directory_register_post_types() {
	$args = array(
		'label'             => __( 'Directory Items', 'directory' ),
		'public'            => true,
		'show_ui'           => true,
		'show_in_menu'      => true,
		'show_in_nav_menus' => true,
		'show_in_rest'      => true,
		'has_archive'       => true,
		'hierarchical'      => false,
		'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'rewrite'           => array( 'slug' => 'directory-item' ),
		'menu_icon'         => 'dashicons-list-view',
	);
	register_post_type( 'directory_item', $args );
}
add_action( 'init', 'directory_register_post_types' );

/**
 * Register taxonomy for Directory Item
 */
function directory_register_taxonomies() {
	$args = array(
		'label'             => __( 'Directory Categories', 'directory' ),
		'public'            => true,
		'show_ui'           => true,
		'show_in_menu'      => true,
		'show_in_nav_menus' => true,
		'show_in_rest'      => true,
		'hierarchical'      => true,
		'rewrite'           => array( 'slug' => 'directory-category' ),
	);
	register_taxonomy( 'directory_category', 'directory_item', $args );
}
add_action( 'init', 'directory_register_taxonomies' );
