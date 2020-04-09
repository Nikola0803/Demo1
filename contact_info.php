<div class="page-contact-info<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if (have_rows('contacts')): ?>
        <div class="contact-info">
            <?php 
                while(have_rows('contacts')): the_row();
                $icon = get_sub_field('select_icon');
                $text = get_sub_field('description');
            ?>
            <div class="contact-info__item">
                <?php if($icon): ?>
                <svg class="icon icon--<?php echo $icon; ?>">
                    <use xlink:href="#icon--<?php echo $icon; ?>"></use>
                </svg>
                <?php endif; ?>
                <?php if($text): ?>
                <div class="contact-info__text">
                    <?php echo $text; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div><!-- /.contact-info -->
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.page-contact-info -->