<?php 
if ( ! function_exists( 'pap_theme_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function pap_theme_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
endif;

add_action( 'after_setup_theme', 'pap_theme_support' );

// Enqueue Styles
if ( ! function_exists( 'pap_style' ) ) {
	function pap_style() {
		// Register Stylesheet
		wp_enqueue_style( 'pap-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
		wp_enqueue_style( 'pap-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );
	}
}

add_action( 'wp_enqueue_scripts', 'pap_style' );

/* ------------------------------------------------------
Customising The Excerpt Lenght
--------------------------------------------------------- */

function custom_excerpt_lenght($length){
	return 25;
}
add_filter('excerpt_length', 'custom_excerpt_lenght');

?>
