<div class="page-banner <?php if ( is_page_template( 'front-page.php' ) ) {
    echo 'page-banner--home';
} else {
    echo 'page-banner--item';
} ?><?php if(get_sub_field('typography_color')): ?> <?php the_sub_field('typography_color'); ?><?php endif; ?><?php if(get_sub_field('use_black_overlay')): ?> page-banner--overlay<?php endif; ?><?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>"<?php if(get_sub_field('upload_background')): ?> style="background-image: url(<?php the_sub_field('upload_background'); ?>);"<?php endif; ?>>
    <div class="wrap">
        <?php if(get_sub_field('title')): ?><h1 class="page-banner__title"><?php the_sub_field('title'); ?></h1><?php endif; ?>
        <?php if(get_sub_field('description')): ?>
        <div class="page-banner__text">
            <?php the_sub_field('description'); ?>
        </div><!-- /.page-banner__text -->
        <?php endif; ?>
        <?php if(get_sub_field('price')): ?>
            <div class="page-banner__price-container">
                <span class="page-banner__price"><?php the_sub_field('price'); ?></span>
            </div>
        <?php endif; ?>
        <?php if(get_sub_field('learn_more_link')): ?><a href="<?php the_sub_field('learn_more_link'); ?>" class="btn btn--medium btn--pink btn--banner">Learn More</a><?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.page-banner -->