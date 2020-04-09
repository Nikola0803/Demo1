<div class="page-box page-box--history page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div><!-- /.page-title -->
        <?php endif; ?>
        <?php if (have_rows('complete_story')): ?>
        <div class="history-posts">
        <?php 
            while(have_rows('complete_story')): the_row();
            $year = get_sub_field('year');
            $color1 = get_sub_field('select_first_color');
            $color2 = get_sub_field('select_second_color');
            $text = get_sub_field('description');
        ?>
            <div class="history-post">
                <?php if($year): ?>
                <div class="history-post__year">
                    <?php echo $year; ?>
                </div>
                <?php endif; ?>
                <?php if($color1): ?>
                <div class="history-post__color">
                    <span style="background-color: <?php echo $color1; ?>;"></span>
                </div><!-- /.page-title -->
                <?php endif; ?>
                <?php if($color1 && $color2): ?>
                <div class="history-post__gradient" style="background: linear-gradient(to bottom, <?php echo $color1; ?> 0%, <?php echo $color2; ?> 100%);"></div>
                <?php endif; ?>
                <?php if($text): ?>
                <div class="history-post__text">
                    <?php echo $text; ?>
                </div>
                <?php endif; ?>
            </div><!-- /.about-post -->
        <?php endwhile; ?>
        </div><!-- /.about-posts -->
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.page-history -->