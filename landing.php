<?php
/**
 * Template Name: All fields
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
        <?php if( have_rows('select_page_element') ):
        // loop through the rows of data
        while ( have_rows('select_page_element') ) : the_row(); ?>
        <?php
            if( get_row_layout() == 'page_background_&_description' ):
                include('template-parts/page_background_description.php');
            elseif( get_row_layout() == 'free_app' ):
                include('template-parts/free_app.php');
            elseif( get_row_layout() == 'how_use' ):
                include('template-parts/how.php');
            elseif( get_row_layout() == 'how_it_works' ):
                include('template-parts/how_work.php');
            elseif( get_row_layout() == 'what_do_i_need' ):
                include('template-parts/what_need.php');
            elseif( get_row_layout() == 'why' ):
                include('template-parts/why.php');
            elseif( get_row_layout() == 'faq' ):
                include('template-parts/faq_no_img.php');
            elseif( get_row_layout() == 'speed_test' ):
                include('template-parts/speed_test.php');
            elseif( get_row_layout() == 'info_box' ):
                include('template-parts/info.php');
            elseif( get_row_layout() == 'box_with_icons' ):
                include('template-parts/box_with_icons.php');
            elseif( get_row_layout() == 'box_with_price' ):
                include('template-parts/box_with_price.php');
            elseif( get_row_layout() == 'box_with_price_ver2' ):
                include('template-parts/box_with_price_ver2.php');
            elseif( get_row_layout() == 'box_with_price_ver3' ):
                include('template-parts/box_with_price_ver3.php');
            elseif( get_row_layout() == 'international_rates' ):
                include('template-parts/international_rates.php');
            elseif( get_row_layout() == 'international_and_roaming_rates_cta' ):
                include('template-parts/international_and_roaming_rates_cta.php');
            elseif( get_row_layout() == 'customers_reviews' ):
                include('template-parts/customers_reviews.php');
            elseif( get_row_layout() == 'bottom_menu' ):
                include('template-parts/bottom_menu.php');
            elseif( get_row_layout() == 'fixed_menu' ):
                include('template-parts/fixed_header.php');
            elseif( get_row_layout() == 'options' ):
                include('template-parts/options.php');
            elseif( get_row_layout() == 'smartphone_offer' ):
                include('template-parts/offer.php');
            elseif( get_row_layout() == 'smartphone_offers_conditions' ):
                include('template-parts/offers_conditions.php');
            elseif( get_row_layout() == 'roaming' ):
                include('template-parts/roaming.php');
            elseif( get_row_layout() == 'our_awards' ):
                ?><hr style="border-top: 0px; border-bottom: 1px solid #E9E9E9;" /><?php
                include('template-parts/our_awards.php');
            endif;
        ?>
        <?php endwhile; endif; ?>
    <?php endwhile; ?>
<?php get_footer(); ?>


