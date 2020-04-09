<div id="info" class="info-box page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <svg class="icon icon--lamp">
            <use xlink:href="#icon--lamp"></use>
        </svg>
        <?php if (get_sub_field('text')): ?>
        <div class="info-box__text">
            <?php the_sub_field('text'); ?>
        </div>
        <?php endif; ?>
        <?php if (get_sub_field('phone_number')): ?>
        <div class="info-box__call">
            <p><a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></p>
            <?php the_sub_field('phone_title'); ?>
        </div>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.info -->