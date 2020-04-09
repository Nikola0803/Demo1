<div id="what-need" class="what-need page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <?php endif; ?>
        <?php if (have_rows('add_items')): ?>
        <div class="what-need__list">
            <?php 
                $i=0;
                while(have_rows('add_items')): the_row();
                $icon = get_sub_field('select_icon');
                $color = get_sub_field('icon_color');
                $text = get_sub_field('title');
                $tip = get_sub_field('tip');
                $i++;
            ?>
            <div class="what-need__item what-need__item--<?php echo $i; ?>">
                <?php if($tip): ?>
                <div class="tooltip">
                    <a href="#" class="tooltip__icon">i</a>
                    <p><?php echo $tip; ?></p>
                </div>
                <?php endif; ?>
                <?php if($icon): ?>
                <svg class="icon icon--<?php echo $icon; ?>" <?php if($color): ?>style="fill: <?php echo $color; ?>"<?php endif; ?>>
                    <use xlink:href="#icon--<?php echo $icon; ?>"></use>
                </svg>
                <?php endif; ?>
                <?php if($text): ?><h3><?php echo $text; ?></h3><?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.what-need -->