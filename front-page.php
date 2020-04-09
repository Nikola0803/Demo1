<?php
/**
 * Template Name: Home page
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
    <?php if(have_posts()) while (have_posts()) : the_post(); ?> 
        <?php if( have_rows('home_page_boxes') ):
        // loop through the rows of data
        while ( have_rows('home_page_boxes') ) : the_row(); ?>
        <?php 
            if( get_row_layout() == 'page_background_description' ):
                include('template-parts/page_background_description.php');
            elseif( get_row_layout() == 'the_posts_on_the_page' ):
                include('template-parts/the_posts_on_the_page.php');
            elseif( get_row_layout() == 'single_cat' ):
                include('template-parts/single_cat.php');
            elseif( get_row_layout() == 'text_box' ):
                include('template-parts/text_box.php');
            elseif( get_row_layout() == 'faq' ):
                include('template-parts/faq.php');
            endif; 
        ?>
        <?php endwhile; endif; ?>
    <?php endwhile; ?>
<?php get_footer(); ?>


