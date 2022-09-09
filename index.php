<?php 

// Prevents direct access to the file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Basic functions for WordPress to work with
 * the Elementor. No other functions are required.
*/

get_header();
wp_head();
the_content();
get_footer();
wp_footer();

?>