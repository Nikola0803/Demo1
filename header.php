<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage site
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'template_url' ); ?>/img/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/img/favicons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<img src="<?php bloginfo( 'template_url' ); ?>/img/symbol-sprite.svg" alt="" id="svg-inject-me">
	<main class="main">
		<header class="header">
			<div class="header__top">
			    <div class="wrap">
					<?php if (is_front_page()){?>
					<div class="header__logo">
						<svg class="icon icon--logo">
							<use xlink:href="#icon--logo"></use>
						</svg>
					</div><!-- /.logo -->
					<?php } else { ?>
					<div class="header__logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<svg class="icon icon--logo">
								<use xlink:href="#icon--logo"></use>
							</svg>
						</a>
					</div><!-- /.logo -->
					<?php } ?>	
					<?php if ( has_nav_menu( 'top' ) ) : ?>
						<nav class="top-menu" role="navigation" aria-label="<?php _e( 'Top Menu', 'site' ); ?>">
							<?php wp_nav_menu( array(
								'theme_location' => 'top',
								'menu_class'     => 'top-menu__item',
								'container' 	 => '',
								'menu_id'        => 'top-menu__item',
							) ); ?>
						</nav>
					<?php endif; ?>
					<div class="header__separator"></div>
					<?php

						if ( ! is_active_sidebar( 'language-1' ) ) {
							return;
						}
						?>

						<?php dynamic_sidebar( 'language-1' ); ?>
					<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
					<form role="search" method="get" class="header__search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<svg class="icon icon--search icon--header-search">
							<use xlink:href="#icon--search"></use>
						</svg>
						<input type="search" id="<?php echo $unique_id; ?>" class="input-search header__search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'site' ); ?>" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
					</form>
					<a href="tel:0800300250" class="header__phone">
						<svg class="icon icon--phone-number">
							<use xlink:href="#icon--phone-number"></use>
						</svg>
					</a>
					<a href="#" class="open-mobile-menu">
						<span></span>
						<span></span>
						<span></span>
					</a>
			    </div><!-- /.wrap -->
			</div><!-- /.header__top -->
			<div class="header__menu">
				<div class="wrap">
					<?php if ( has_nav_menu( 'primary_menu' ) ) : ?>
						<nav class="primary-menu" role="navigation" aria-label="<?php _e( 'Primary Menu', 'site' ); ?>">
							<?php $walker = new Menu_With_Description; ?>
							<?php wp_nav_menu( array(
								'theme_location' => 'primary_menu',
								'menu_class'     => 'primary-menu__item',
								'container'      => '',
								'menu_id'        => 'primary-menu__item',
								'walker'         => $walker
							) ); ?>
						</nav>
					<?php endif; ?>
				</div><!-- /.wrap -->
			</div><!-- /.header__menu -->
		</header>
		<section class="spanning">
