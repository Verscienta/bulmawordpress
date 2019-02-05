<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bulmawordpress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<?php bulmawordpress_skip_link_screen_reader_text(); ?>
		<header id="header" class="site-header">
			<nav id="site-navigation" class="navbar" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
					<?php bulmawordpress_home_link('navbar-item'); ?>
					<?php bulmawordpress_blog_description('navbar-item is-muted'); ?>
					<?php bulmawordpress_menu_toggle(); ?>
				</div>
				<div class="navbar-menu">
					<div class="navbar-start"></div>
					<?php bulmawordpress_navigation(); ?>
				</div>
			</nav>
		</header>

		<div id="content" class="site-content">


