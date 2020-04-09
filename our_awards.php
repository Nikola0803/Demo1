<div class="page-box page-box--awards page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div><!-- /.page-title -->
        <?php endif; ?>
        <?php if (have_rows('awards_list')): ?>
        <div class="about-posts">
        <?php 
            while(have_rows('awards_list')): the_row();
            $logo = get_sub_field('upload_logo');
            $text = get_sub_field('description');
        ?>
            <div class="about-post">
                <?php if($logo): ?>
                <div class="about-post__logo">
                    <img src="<?php echo $logo; ?>" alt="">
                </div>
                <?php endif; ?>
                <?php if($text): ?>
                <div class="about-post__text">
                    <?php echo $text; ?>
                </div>
                <?php endif; ?>
            </div><!-- /.about-post -->
        <?php endwhile; ?>
        </div><!-- /.about-posts -->
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.page-awards -->