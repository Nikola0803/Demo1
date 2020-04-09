<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Silent
 * @since Silent
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
            <div class="support__content support__content--item">
                <form action="<?php echo home_url( '/' ); ?>" class="support__search">
                    <input type="hidden" name="post_type" value="faq">
                    <input type="text" class="input-text" name="s" placeholder="<?php _e('Ask a question or enter a search term here','site') ?>">
                    <button>
                        <svg class="icon icon--search">
                            <use xlink:href="#icon--search"></use>
                        </svg>
                    </button>
                </form>
                <a href="#" class="support__back">Back</a>
                <?php if ( have_posts() ): ?>
                <h1 class="default-title-large"><?php printf( __( '%s', 'site' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
                <div class="support__popular-post"> 
                    <?php while ( have_posts() ) : the_post(); ?> 
                    <div class="support__popular-item">
                        <h2><?php the_title(); ?></h2>
                        <div class="support__popular-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div><!-- .support__post -->
                <?php else : ?>
                <h1 class="default-title-large"><?php _e( 'Nothing Found', 'site' ); ?></h1>
                <?php endif; ?>
            </div><!-- .support__content -->
        </div><!-- .support -->
    </div><!-- .wrap -->
<?php get_footer(); ?>