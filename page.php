<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
