<div class="page-contact-form<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('headline')): ?>
            <h2 class="contact-form-title"><?php the_sub_field('headline'); ?></h2>
        <?php endif; ?>
        <?php if(get_sub_field('insert_contact_form_shortcode')): ?>
        <div class="contact-form">
            <?php the_sub_field('insert_contact_form_shortcode'); ?>
        </div><!-- /.contact-form -->
        <?php endif; ?>
        </div><!-- /.contact-info -->
    </div><!-- /.wrap -->
</div><!-- /.page-contact-form -->