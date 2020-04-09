<?php
/**
 * Template Name: Signup
 *
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage site
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>
<?php if(have_posts()) while(have_posts()) : the_post(); ?>

    <div class="wrap">
        <div class="default-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>