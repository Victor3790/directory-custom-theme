<?php
/**
 * Functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) die();

define( 'DIRECTORY_THEME_VERSION', '1.0.0' );
define( 'DIRECTORY_THEME_URI', get_template_directory_uri() );

function directory_theme_enqueue_scripts() {
    wp_enqueue_style( 
        'directory-theme-styles', 
        DIRECTORY_THEME_URI . '/css/main-directory-styles.css', 
        array(), 
        DIRECTORY_THEME_VERSION 
    );
}
add_action( 'wp_enqueue_scripts', 'directory_theme_enqueue_scripts' );