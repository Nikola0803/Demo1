<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage site
 * @since 1.0
 * @version 1.0
 */

?>
	</section><!-- /.spanning -->
	<footer class="footer" role="contentinfo">
		<div class="wrap">
			<div class="footer__row">
				<?php
					if ( ! is_active_sidebar( 'sidebar-2' ) ) {
						return;
					}
				?>
				<div class="footer__top">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div><!-- /.footer__top -->
				<?php
					if ( ! is_active_sidebar( 'sidebar-3' ) ) {
						return;
					}
				?>
				<div class="footer__middle">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div><!-- /.footer__middle -->
			</div><!-- /.footer__row -->
			<div class="footer__bottom">
				<?php if (is_front_page()){?>
				<div class="footer__logo">
					<?php /* <svg class="icon icon--logo-footer">
						<use xlink:href="#icon--logo-footer"></use>
					</svg> */ ?>
					<img class="icon--logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/site-logo-f.png" />
				</div><!-- /.logo -->
				<?php } else { ?>
				<div class="footer__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php /* <svg class="icon icon--logo-footer">
							<use xlink:href="#icon--logo-footer"></use>
						</svg> */ ?>
						<img class="icon--logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/site-logo-f.png" />
					</a>
				</div><!-- /.logo -->
				<?php } ?>
				<?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
					<nav class="footer__nav" role="navigation" aria-label="<?php _e( 'Footer Menu', 'site' ); ?>">
						<?php wp_nav_menu( array(
							'theme_location' => 'footer_menu',
							'menu_class' => 'footer__nav-item',
							'container' => '',
							'menu_id'        => 'footer__nav-item',
						) ); ?>
					</nav>
				<?php endif; ?>
				<?php if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="footer__social-menu" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'site' ); ?>">
						<?php wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class' => 'footer__social-menu-item',
							'container' => '',
							'menu_id'        => 'footer__social-menu-item',

							'theme_location' => 'social',
							'menu_class' => 'footer__social-menu-item',
							'container' => '',
							'menu_id'        => 'footer__social-menu-item',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
						) ); ?>
					</nav>
				<?php endif; ?>
			</div><!-- /.footer__bottom -->
		</div><!-- /.wrap -->
		
	</footer>
</main><!-- /.main -->
<div class="mobile-menu">
	<div class="mobile-menu__top">
		<form role="search" method="get" class="mobile-menu__search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="search" id="<?php echo $unique_id; ?>" class="input-search mobile-menu__search-field" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
			<svg class="icon icon--search">
				<use xlink:href="#icon--search"></use>
			</svg>
		</form>
		<a href="#" class="mobile-menu__close">Close<span></span></a>
	</div><!-- /.mobile-menu__top -->
	<?php if ( has_nav_menu( 'mobile_primary' ) ) : ?>
	<nav class="mobile-menu__nav" role="navigation" aria-label="<?php _e( 'Mobile Primary', 'site' ); ?>">
		<?php wp_nav_menu( array(
			'theme_location' => 'mobile_primary',
			'menu_class' => 'mobile-menu__nav-item',
			'container' => '',
			'menu_id'        => 'mobile-menu__nav-item',
		) ); ?>
	</nav>
	<?php endif; ?>
	<?php if ( has_nav_menu( 'mobile_secondary' ) ) : ?>
	<nav class="mobile-menu__sub-nav" role="navigation" aria-label="<?php _e( 'Mobile Secondary', 'site' ); ?>">
		<?php wp_nav_menu( array(
			'theme_location' => 'mobile_secondary',
			'menu_class' => 'mobile-menu__sub-nav-item',
			'container' => '',
			'menu_id'        => 'mobile-menu__sub-nav-item',
		) ); ?>
	</nav>
	<?php endif; ?>

</div><!-- /.mobile-menu -->
<a href="#" class="go-top"><span></span></a>
<?php wp_footer(); ?>

</body>
</html>
