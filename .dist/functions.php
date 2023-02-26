<?php 

if ( ! function_exists( 'paparless_name_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function paparless_name_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'my_theme_name_support' );

/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

function paperless_styles(){
    
}






?>