<div id="box-icons" class="page-ordering page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div><!-- /.page-title -->
        <?php endif; ?>
        <?php if(get_sub_field('price')): ?>
        <div class="page-ordering__price"><?php the_sub_field('price'); ?></div>
        <?php endif; ?>
        <?php if (have_rows('box_with_icon')): ?>
        <div class="page-ordering__list">
        <?php 
            while(have_rows('box_with_icon')): the_row();
            $color1 = get_sub_field('background_color');
            $color2 = get_sub_field('second_color');
            $icon = get_sub_field('select_icon');
            $text = get_sub_field('description');
        ?>
            <div class="page-ordering__item">
                <div class="page-ordering__icon" <?php if($icon): ?>style="background-color: <?php echo $color1; ?>;"<?php endif; ?>>
                    <?php if($icon): ?>
                    <svg class="icon icon--<?php echo $icon; ?>">
                        <use xlink:href="#icon--<?php echo $icon; ?>"></use>
                    </svg>
                    <?php endif; ?>
                </div>
                <?php if($text): ?><h3><?php echo $text; ?></h3><?php endif; ?>
            </div><!-- /.page-ordering__item -->
            <?php if($color1 && $color2): ?>
            <div class="page-ordering__gradient" style="background: linear-gradient(to right, <?php echo $color1; ?> 0%, <?php echo $color2; ?> 100%);"></div>
            <?php endif; ?>
            <?php endwhile; ?>
        </div><!-- /.page-ordering__list -->
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.page-ordering -->