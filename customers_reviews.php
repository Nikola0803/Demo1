<div id="customers-reviews" class="reviews<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?><div class="reviews__title"><?php the_sub_field('title'); ?></div><?php endif; ?>
        <?php if(have_rows('review')) : ?>
        <div class="reviews__slider">
            <?php 
                while(have_rows('review')) : the_row(); 
                $image = get_sub_field('avatar');
                $name = get_sub_field('name');
                $job = get_sub_field('job');
                $text = get_sub_field('text');
            ?> 
            <div class="reviews__slide">
                <div class="reviews__item">
                    <?php if($image): ?><img src="<?php echo $image; ?>" alt="" class="reviews__image"><?php endif; ?>
                    <?php if($name): ?><h2 class="reviews__name"><?php echo $name; ?></h2><?php endif; ?>
                    <?php if($job): ?><h3 class="reviews__job"><?php echo $job; ?></h3><?php endif; ?>
                    <?php if($text): ?>
                    <div class="reviews__text">
                        <?php echo $text; ?>
                    </div><!-- /.reviews__text -->
                    <?php endif; ?>
                </div><!-- /.reviews__item -->
            </div>
            <?php endwhile; ?>
        </div><!-- /.reviews__slider -->
        <?php endif; ?>
        <?php if(get_sub_field('order_link_text') || get_sub_field('order_link_url')): ?>
        <a href="<?php the_sub_field('order_link_url'); ?>" class="btn btn--pink"><?php the_sub_field('order_link_text'); ?></a>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.reviews -->