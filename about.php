<?php
/**
 * Template name: About
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
    <?php if(have_posts()) while (have_posts()) : the_post(); ?> 
        <?php if( have_rows('about_page_boxes') ):
        // loop through the rows of data
        while ( have_rows('about_page_boxes') ) : the_row(); ?>
        <?php 
            if( get_row_layout() == 'page_background_description' ):
                include('template-parts/page_background_description.php');
            elseif( get_row_layout() == 'text_box' ):
                include('template-parts/text_box.php');
            elseif( get_row_layout() == 'our_history' ):
                include('template-parts/our_history.php');
            elseif( get_row_layout() == 'our_awards' ):
                include('template-parts/our_awards.php');
            elseif( get_row_layout() == 'commitments' ):
                include('template-parts/commitments.php');
            elseif( get_row_layout() == 'our_partners' ):
                include('template-parts/our_partners.php');
            endif; 
        ?>
        <?php endwhile; endif; ?>
    <?php endwhile; ?>
<?php get_footer(); ?>
