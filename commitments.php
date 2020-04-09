<div class="page-box page-box--commitments<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div><!-- /.page-title -->
        <?php endif; ?>
        <?php if(get_sub_field('description')): ?>
        <div class="page-description">
            <?php the_sub_field('description'); ?>
        </div><!-- /.page-description -->
        <?php endif; ?>
        <?php if (have_rows('commitments_list')): ?>
        <div class="about-posts">
        <?php 
            while(have_rows('commitments_list')): the_row();
            $logo = get_sub_field('upload_logo');
            $title = get_sub_field('title');
            $text = get_sub_field('description');
        ?>
            <div class="about-post">
                <?php if($logo): ?>
                <div class="about-post__logo">
                    <img src="<?php echo $logo; ?>" alt="">
                </div>
                <?php endif; ?>
                <?php if($title): ?>
                <h2 class="about-post__title"><?php echo $title; ?></h2>
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
</div><!-- /.page-commitments -->