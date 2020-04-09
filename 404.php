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
		<section class="spanning">
			<div class="error-404">
				<div class="error-404__header">
					<div class="wrap">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-404__logo">
							<svg class="icon icon--logo">
								<use xlink:href="#icon--logo"></use>
							</svg>
						</a>
					</div>
				</div>
				<div class="error-404__content">
					<div class="wrap">
						<h1>404</h1>
						<p style="font-size:small;">Die gesuchte Seite konnte nicht gefunden werden.</p><br>
						<p style="font-size:small;">La page que vous cherchez n'a pas été trouvée.</p><br>
						<p style="font-size:small;">La pagina che stai cercando non è stata trovata.</p><br>
						<p style="font-size:small;">The page you are looking for was not found.</p><br>
						<p style="font-size:small; margin-bottom: 20px;">A página que você procura não foi encontrada.</p><br>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--bordered btn--bordered-pink">Home page</a>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
