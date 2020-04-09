<div id="why" class="why page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <?php endif; ?>
        <?php if (have_rows('why_list')): ?>
        <ul class="why__list">
            <?php 
                while(have_rows('why_list')): the_row();
                $color = get_sub_field('color');
                $text = get_sub_field('title');
            ?>
            <li class="why__item">
                <?php if($color): ?>
                <span class="why__color" style="background-color: <?php echo $color; ?>"></span>
                <?php endif; ?>
                <?php if($text): ?><h3><?php echo $text; ?></h3><?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.why -->