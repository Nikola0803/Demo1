<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage site
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<?php if(get_field('upload_background_at', 'option')): ?>
	<div class="page-banner page-banner--item<?php if(get_field('typography_color_at', 'option')): ?> <?php the_field('typography_color_at', 'option'); ?><?php endif; ?><?php if(get_field('use_black_overlay_at', 'option')): ?> page-banner--overlay<?php endif; ?>" style="background-image: url(<?php the_field('upload_background_at', 'option'); ?>);">
	    <div class="wrap">
	        <?php if(get_field('title_at', 'option')): ?><h1 class="page-banner__title"><?php the_field('title_at', 'option'); ?></h1><?php endif; ?>
	        <?php if(get_field('description_at', 'option')): ?>
	        <div class="page-banner__text">
	            <?php the_field('description_at', 'option'); ?>
	        </div><!-- /.page-banner__text -->
	        <?php endif; ?>
	    </div><!-- /.wrap -->
	</div><!-- /.page-banner -->
	<?php endif; ?>
	<div class="wrap">
		<?php if(have_posts()) while(have_posts()) : the_post(); ?>
			<div class="mobile-post">
				<div class="row row--mobile-post">
					<div class="col-xs-12 col-sm-5">
						<?php the_post_thumbnail(); ?>	
					</div><!-- /.col -->
					<div class="col-xs-12 col-sm-7">
						<div class="mobile-post__text">
							<h2 class="mobile-post__title"><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div><!-- /.mobile-post__text -->
						<a href="<?php the_permalink(); ?>" class="btn btn--pink btn--more"><?php the_field('link_title_at', 'option'); ?> <?php the_title(); ?></a>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.mobile-post -->
		<?php endwhile; ?>
	</div><!-- /.wrap -->
	<?php if ( has_nav_menu( 'at_home_page' ) ) : ?>
	<div class="bottom-menu bottom-menu--archive">
	    <div class="wrap">
	        <nav class="bottom-menu__nav">
			    <?php wp_nav_menu( array(
					'theme_location' => 'at_home_page',
					'menu_class'     => 'bottom-menu__menu',
					'container'      => '',
					'menu_id'        => 'bottom-menu__menu',
				) ); ?>
	        </nav>
	    </div><!-- /.wrap -->
	</div><!-- /.bottom-menu -->
	<?php endif; ?>
<?php get_footer(); ?>
