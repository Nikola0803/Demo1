<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage site
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <?php if(have_posts()) while(have_posts()) : the_post(); ?>
    <h1 class="default-content-title"><?php the_title(); ?></h1>
    <div class="wrap">
        <div class="default-content">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; ?>
<?php get_footer(); ?>