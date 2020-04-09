<div id="how-use" class="how<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div>
        <?php endif; ?>
        <?php if (get_sub_field('description')): ?>
        <div class="how__text">
            <?php the_sub_field('description'); ?>
        </div>
        <?php endif; ?>
        <?php if (have_rows('how_items')): ?>
        <div class="how__list">
            <?php 
                while(have_rows('how_items')): the_row();
                $title = get_sub_field('title');
                $tip = get_sub_field('tip');
            ?>
            <div class="how__item">
                <?php if($tip): ?>
                <div class="tooltip">
                    <a href="#" class="tooltip__icon">i</a>
                    <p><?php echo $tip; ?></p>
                </div>
                <?php endif; ?>
                <?php if($title): ?><h3><?php echo $title; ?></h3><?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php if(get_sub_field('link_url')): ?>
        <div class="how__btn">
            <a href="<?php the_sub_field('link_url'); ?>" class="btn btn--pink" target="_blank"><?php the_sub_field('link_name'); ?></a>
        </div>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.how -->