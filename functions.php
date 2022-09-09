<?php 

// Prevents direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

/**
 * Features supported by theme by default.
 * WooCommerce support is optional, just remove
 * the comment of line 23.
*/ 
  
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5', [
	'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
    ] );
// add_theme_support( 'woocommerce' );

// Disables the block editor.
remove_theme_support( 'widgets-block-editor' );
add_filter('use_block_editor_for_post', '__return_false');

register_nav_menus( [
    'primary' => 'Menu Principal',
    // Add other menus here.
] );

// Registers and loads the theme's CSS file.
function elementor_start_setup() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
}
add_action( 'after_setup_theme', 'elementor_start_setup' );

?>