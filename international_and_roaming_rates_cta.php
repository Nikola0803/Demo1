<div id="international-rates" class="international-rates<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?><h2 class="international-rates__title"><?php the_sub_field('title'); ?></h2><?php endif; ?>
        <?php if(get_sub_field('description')): ?>
        <div class="international-rates__text">
            <?php the_sub_field('description'); ?>
        </div><!-- /.international-rates__text -->
        <div class="international-rates__cta">
            <?php
                $link = get_sub_field('cta_url');

                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn btn--tariffs-cta" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
        </div><!-- /.international-rates__cta -->
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.international-rates -->