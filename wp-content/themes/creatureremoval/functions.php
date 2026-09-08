<?php
/**
 * Divi Child Theme functions and definitions.
 */

if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly.
}

/**
 * Enqueue parent and child theme styles.
 */
function divi_child_enqueue_styles() {
    $parent_style = 'divi-style';
    
    wp_enqueue_style(
        $parent_style,
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( 'Divi' )->get( 'Version' )
    );
    
    wp_enqueue_style(
        'divi-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'divi_child_enqueue_styles' );


/**
 * Remove version query string from CSS files
 */
function remove_css_version( $src ) {
    if ( strpos( $src, '?ver=' ) !== false ) {
        $src = remove_query_arg( 'ver', $src );
    }

    return $src;
}
add_filter( 'style_loader_src', 'remove_css_version', 9999 );