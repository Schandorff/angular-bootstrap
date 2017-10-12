<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="wp">
<head>
	<base href="/">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

 <script type="text/javascript" src="http://fgnass.github.io/spin.js/spin.min.js"></script>
 	<script type="text/javascript" src="/simonsl/wp-content/themes/angular-bootstrap/node_modules/angular-spinner/angular-spinner.js"></script>
 	<script type="text/javascript" src="/simonsl/wp-content/themes/angular-bootstrap/node_modules/angular-loading-spinner/angular-loading-spinner.js"></script>

</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<div class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm">
      <a class="navmenu-brand visible-md visible-lg" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php wp_nav_menu(
				array(
					'theme_location' 	=> 'primary',
					'depth'             => 2,
					'container'         => 'nav',
					'container_id'      => 'navbar',
					'container_class'   => 'navbar',
					'menu_class' 		=> 'nav navbar-nav',
					'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
					'menu_id'			=> 'main-menu',
					'walker' 			=> new wp_bootstrap_navwalker()
				)
			); ?>

    </div>

    <div class="navbar navbar-default navbar-fixed-top hidden-md hidden-lg">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
    </div>
<div class="main-content">
	<div id="particles-js" class="container-full canvasParticles">
	<script src="simonsl/wp-content/themes/angular-bootstrap/js/particles.js"></script>
	</div>
	<div class="container-full">
		<div us-spinner class="loader-wrapper">
			<span></span>
		</div>
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">
