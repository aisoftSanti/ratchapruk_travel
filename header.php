<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ratchapruk_travel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ratchapruk_travel' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="container row" style="margin-bottom: 0;">
				<div class="site-branding col s4" style="padding: 0;">
					<a href="<?php home_url( $path, $scheme ); ?>">
						<img style="height: 80px;margin-top: 15px;margin-bottom: 0px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
					</a>
				</div><!-- .site-branding -->
				<div class="col s8">
					<div class="contact-head">
						<i class="fa fa-phone"></i>02-2120748, 02-2125475, 02-2125478 | <i class="fa fa-envelope"></i>sales@ratchapruektravel.com <a href="#"><i class="fa fa-facebook-square" style="font-size: 24px;margin-left: 5px;"></i></a>
					</div>
				</div>
			</div>


			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="container">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ratchapruk_travel' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>

			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
