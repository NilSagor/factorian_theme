<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package factorian
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	

	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href=""><i class="fa fa-envelope"></i> support@shape.com</a><span class="separator"> | </span>
					<a href=""><i class="fa fa-phone"></i> +324-4221-313</a><span class="separator"> | </span>
					<i class="fa fa-clock-o"></i> Mon - Fri, 9am - 5pm
				</div>
				<div class="col-md-6 text-right">
					We are giving professional services from last 20 years
				</div>
			</div>
		</div>
	</div>
	<div class="header-menu">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<a href="<?php esc_url(home_url('/'));?>">
							<h1><?php bloginfo('name'); ?></h1>
						</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="mainmenu" id="navigation">
						<?php wp_nav_menu(array('theme_location'=>'menu-1', 'menu_id'=>'primary-menu')); ?>
					</div>
					<div class="header-search-bar">
						<form action="">
							<input type="search" placeholder="keyword...">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="content" class="site-content">
