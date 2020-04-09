<div id="custom-content" class="custom-content-box page-banner--item <?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if (get_sub_field('custom_content_box')): ?>
        <div class="custom-content-box__text page-banner__text">
            <?php the_sub_field('custom_content_box'); ?>
        </div>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.custom-content -->
