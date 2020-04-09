<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage site
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<div class="page-banner page-banner--home" style="background-image: url(http://site:8888/wp-content/uploads/2017/01/home.jpg) ">
		<div class="wrap">
			<h1 class="page-banner__title">Mobile M</h1>
			<p class="page-banner__text">Call 1000 minutes per month inside Switzerland. No minimum contract term and 1.5 GB of Full Speed Internet included.</p>
			<span class="page-banner__price">CHF <span>29.95</span>/month</span>
			<a href="#" class="btn btn--medium btn--pink ben--banner">Learn More</a>
		</div><!-- /.wrap -->
	</div><!-- /.page-banner -->
	<div class="page-cat">
		<div class="wrap">
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-md-4">
					<div class="page-cat__item page-cat__item--">
						<img src="" alt="" class="page-cat__image">
						<svg class="icon icon--">
							<use xlink:href="#"></use>
						</svg>
						<h2 class="page-cat__title">Smartphone offer</h2>
						<div class="page-cat__title-box">
							<h3 class="page-cat__medium-title">Smartphone offer</h3>
							<h4 class="page-cat__small-title">Interest-free</h4>
						</div><!-- /.page-cat__title-box -->
						<div class="page-cat__text">
							<p><strong>60</strong> Mbit/s</p>
						</div><!-- /.page-cat__text -->
						<a href="#" class="btn btn--medium">Learn More</a>
					</div><!-- /.page-cat__item -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.wrap -->
	</div><!-- /.page-cat -->

<?php get_footer(); ?>
