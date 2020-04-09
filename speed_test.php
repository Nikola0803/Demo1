<div id="test" class="speed<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <svg class="icon icon--speed">
            <use xlink:href="#icon--speed"></use>
        </svg>
        <?php if (get_sub_field('text')): ?>
        <div class="speed__text">
            <?php the_sub_field('text'); ?>
        </div>
        <?php endif; ?>
        <?php if (get_sub_field('link_url')): ?>
        <a href="<?php the_sub_field('link_url'); ?>" class="btn btn--large btn--pink <?php if (get_sub_field('open_popup')): ?>popup-open<?php endif; ?>"><?php the_sub_field('link_text'); ?></a>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.speed -->