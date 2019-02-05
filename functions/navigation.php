<?php
/**
 * Navigation Functions
 *
 * @package bulmawordpress
 */

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'menu-1' => esc_html__( 'Primary', 'bulmawordpress' ),
	) );

// bulmawordpress navigation
function bulmawordpress_navigation()
{
	wp_nav_menu( array(
		'theme_location'    => 'menu-1',
		'depth'             => 0,
		'container'         => 'div id="navigation"',
		'menu_class'        => 'navbar-end',
		'fallback_cb'       => 'bulmawordpress_navwalker::fallback',
		'walker'            => new bulmawordpress_navwalker()
		)
	);
}
