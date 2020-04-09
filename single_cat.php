<div class="page-single-cat<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
   <? /*    <img src="<?php bloginfo( 'template_url' ); ?>/img/phone-left.png" alt="" class="page-single-cat__left-image">
    
    <img src="<?php bloginfo( 'template_url' ); ?>/img/phone-right.png" alt="" class="page-single-cat__right-image">

    */?><div class="wrap">
        <div class="row page-single-cat__item">
            <div class="col-xs-12 col-sm-4 col-md-6 page-single-cat__col">
                <?php if(get_sub_field('upload_image')): ?><img src="<?php the_sub_field('upload_image'); ?>" alt="" class="page-single-cat__image"><?php endif; ?>
            </div><!-- /.col -->
            <div class="col-xs-12 col-sm-8 col-md-6">
                <?php if(get_sub_field('description')): ?>
                <div class="page-single-cat__text">
                    <?php the_sub_field('description'); ?>
                </div><!-- /.page-single-cat__text -->
                <?php endif; ?>
                <?php if(get_sub_field('link_url')): ?>
                <a href="<?php the_sub_field('link_url'); ?>" class="btn btn--medium btn--pink">Learn More</a>
                <?php endif; ?>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.wrap -->
</div><!-- /.page-single-cat -->