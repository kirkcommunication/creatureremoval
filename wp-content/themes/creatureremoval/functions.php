<?php
/**
 * CreatureRemoval child theme functions and definitions.
 *
 * @package WordPress
 * @subpackage CreatureRemoval
 * @since CreatureRemoval 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'creatureremoval_enqueue_styles' ) ) :
	/**
	 * Enqueues the parent theme stylesheet, then the child theme stylesheet.
	 *
	 * @since CreatureRemoval 1.0.0
	 *
	 * @return void
	 */
	function creatureremoval_enqueue_styles() {
		$parent_theme = wp_get_theme( 'twentytwentyfive' );
		$parent_version = $parent_theme->exists() ? $parent_theme->get( 'Version' ) : '1.0';

		// Parent theme stylesheet.
		wp_enqueue_style(
			'twentytwentyfive-style',
			get_parent_theme_file_uri( 'style.min.css' ),
			array(),
			$parent_version
		);

		// Child theme stylesheet.
		wp_enqueue_style(
			'creatureremoval-style',
			get_stylesheet_uri(),
			array( 'twentytwentyfive-style' ),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'creatureremoval_enqueue_styles' );