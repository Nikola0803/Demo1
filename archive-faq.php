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
	<?php if(get_field('upload_background_fq', 'option')): ?>
	<div class="page-banner page-banner--item<?php if(get_field('typography_color_fq', 'option')): ?> <?php the_field('typography_color_fq', 'option'); ?><?php endif; ?><?php if(get_field('use_black_overlay_fq', 'option')): ?> page-banner--overlay<?php endif; ?>" style="background-image: url(<?php the_field('upload_background_fq', 'option'); ?>);">
	    <div class="wrap">
	        <?php if(get_field('title_fq', 'option')): ?><h1 class="page-banner__title"><?php the_field('title_fq', 'option'); ?></h1><?php endif; ?>
	        <?php if(get_field('description_fq', 'option')): ?>
	        <div class="page-banner__text">
	            <?php the_field('description_fq', 'option'); ?>
	        </div><!-- /.page-banner__text -->
	        <?php endif; ?>
	    </div><!-- /.wrap -->
	</div><!-- /.page-banner -->
	<?php endif; ?>
	<div class="wrap">
		<div class="support">
			<aside class="support__sidebar">
				<?php if ( has_nav_menu( 'support' ) ) : ?>
					<nav class="support__nav" role="navigation" aria-label="<?php _e( 'Support Menu', 'site' ); ?>">
						<?php wp_nav_menu( array(
							'theme_location' => 'support',
							'menu_class' => 'support__nav-item',
							'container' => '',
							'menu_id'        => 'support__nav-item',
						) ); ?>
					</nav>
				<?php endif; ?>		
			</aside><!-- .support__sidebar -->
			<div class="support__content">
                <form action="<?php echo home_url( '/' ); ?>" class="support__search<?php if(get_field('upload_background_fq', 'option')): ?> support__search--second<?php endif; ?>">
                    <input type="hidden" name="post_type" value="faq">
                    <input type="text" class="input-text" name="s" placeholder="<?php _e('Ask a question or enter a search term here','site') ?>">
                    <button>
                        <svg class="icon icon--search">
                            <use xlink:href="#icon--search"></use>
                        </svg>
                    </button>
                </form>
				<?php if(get_field('title_popular_fq', 'option')): ?>
					<div class="support__popular-title">
						<h2><?php the_field('title_popular_fq', 'option'); ?></h2>
					</div><!-- .support__popular-title -->
				<?php endif; ?>
				<?php if(have_rows('add_post_popular_fq', 'option')): ?>
				<div class="support__popular-post">
				<?php 
					while(have_rows('add_post_popular_fq', 'option')): the_row(); 
					$title = get_sub_field('title_item_fq');
					$text = get_sub_field('description_item_fq');
				?>
					<div class="support__popular-item">
						<h2><?php echo $title; ?></h2>
						<div class="support__popular-text">
							<?php echo $text; ?>
						</div>
					</div>
				<?php endwhile; ?>
				</div><!-- .support__post -->
				<?php endif; ?>
				<?php if(have_rows('add_box_cat_fq', 'option')): ?>
				<div class="row support__cat">
				<?php 
					while(have_rows('add_box_cat_fq', 'option')): the_row(); 
					$title = get_sub_field('title_cat_faq');
					$text = get_sub_field('questions_fq');
					$link = get_sub_field('link_to_page_fq');
				?>
					<div class="col-xs-12 col-sm-6">
						<div class="support__cat-item">
							<?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>
							<?php if(have_rows('questions_fq', 'option')): ?>
							<ul>
								<?php 
									while(have_rows('questions_fq', 'option')): the_row(); 
									$title = get_sub_field('title_questions_fq');
								?>
								<li><?php echo $title; ?></li>
								<?php endwhile; ?>
							</ul>
							<?php endif; ?>
							<?php foreach( $link as $term ): ?>
								<a href="<?php echo get_term_link( $term ); ?>" class="btn btn--blue btn--medium"><?php the_field('link_title_faq', 'option'); ?></a>
							<?php endforeach; ?>
						</div><!-- .support__cat-item -->
					</div>
				<?php endwhile; ?>
				</div><!-- .support__cat -->
				<?php endif; ?>
			</div><!-- .support__content -->
		</div><!-- .support -->
	</div><!-- .wrap -->
    <div class="page-contact-form page-contact-form--category">
        <div class="wrap">
            <h2 class="contact-form-title"><?php _e('Still can’t find your question or want to leave a comment? Fill in the form below or use live chat','site'); ?></h2>
            <div class="contact-form">
            	<?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
