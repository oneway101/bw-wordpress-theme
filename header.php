<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BW-WordPress-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bw-wordpress-theme' ); ?></a>
	<header class="site-header" roll="banner">
		<div class="navar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="naviagation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="Bootstrap to WordPress"></a>
					</div>
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => 'nav',
							'container_class' => 'navbar-collapse collapse',
							'menu_class' => 'nav navbar-nav navbar-right'
						));
					?>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="/">Home</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="blog.html">Resources</a></li>
							<li><a href="blog.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
