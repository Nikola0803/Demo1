<div class="page-text <?php if ( is_page_template( 'about.php' ) ) {
    echo 'page-text--about ';
} ?><?php the_sub_field('align_content'); ?><?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <div class="page-text__item">
            <?php if ( is_page_template( 'about.php' ) ) {
                //echo '<svg class="icon icon--logo"><use xlink:href="#icon--logo"></use></svg>';
                echo '<div class="page-text-logo"><img src="'.get_template_directory_uri().'/img/site-logo-h.png" /></div>';
            } ?>
            <?php if(get_sub_field('description')): ?>
            <div class="page-text__description">
                <?php the_sub_field('description'); ?>
            </div><!-- /.page-text__description -->
            <?php endif; ?>
            <?php if(get_sub_field('link_url')): ?>
            <a href="<?php the_sub_field('link_url'); ?>" class="btn btn--medium btn--pink"><?php the_sub_field('learn_more'); ?></a>
            <?php endif; ?>
        </div><!-- /.page-text -->
    </div><!-- /.wrap -->
</div><!-- /.page-text -->