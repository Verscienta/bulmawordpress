<?php
/**
 * Scripts & Styles
 *
 * @package bulmawordpress
 */

/**
 * Enqueue scripts and styles.
 */
function bulmawordpress_scripts() {
	wp_enqueue_style( 'bulmawordpress-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bulmawordpress-fontawesome', "https://use.fontawesome.com/releases/v5.2.0/css/all.css" );

	wp_enqueue_style( 'bulmawordpress-bulma-style', get_template_directory_uri() . '/frontend/bulmawordpress/css/bulmawordpress.css' );

	wp_enqueue_script( 'bulmawordpress-navigation', get_template_directory_uri() . '/frontend/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bulmawordpress-skip-link-focus-fix', get_template_directory_uri() . '/frontend/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bulmawordpress_scripts' );
