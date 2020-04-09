<div id="options" class="options<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(have_rows('option_item')) : ?>
        <?php 
            while(have_rows('option_item')) : the_row(); 
            $title = get_sub_field('title');
            $subTitle = get_sub_field('description');
        ?> 
        <div class="options__item">
            <?php if($title): ?><h2 class="options__title"><?php echo $title; ?></h2><?php endif; ?>  
            <?php if($subTitle): ?><h3 class="options__sub-title"><?php echo $subTitle; ?></h3><?php endif; ?>  
            <?php if(have_rows('option_box')) : ?>
            <div class="options__overlay">
                <div class="options__list">
                    <?php 
                        while(have_rows('option_box')) : the_row(); 
                        $title = get_sub_field('data_title');
                        $subTitle = get_sub_field('title');
                        $text = get_sub_field('text');
                        $price = get_sub_field('price');
                        $link = get_sub_field('more_info_link');
                        $linkTitle = get_sub_field('more_link_title');
                        $linkTop = get_sub_field('link');
                        $info = get_sub_field('info_link');
                        $color = get_sub_field('title_color');
                    ?>   
                    <div class="options__slide">
                        <div class="options__box">
                            <?php if($info): ?>
                            <div class="tooltip">
                                <a href="#" class="tooltip__icon">i</a>
                                <p><?php echo $info; ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if($title || $subTitle): ?>
                            <div class="options__top">
                                <?php if($title): ?><h3 <?php if($color): ?>style="color: <?php echo $color; ?>"<?php endif; ?>><?php echo $title; ?></h3><?php endif; ?>
                                <?php if($subTitle): ?><h2 <?php if($color): ?>style="color: <?php echo $color; ?>"<?php endif; ?>><?php if($linkTop): ?><a href="<?php echo $linkTop; ?>" <?php if($color): ?>style="color: <?php echo $color; ?>"<?php endif; ?>><?php endif; ?><?php echo $subTitle; ?><?php if($linkTop): ?></a><?php endif; ?></h2><?php endif; ?>
                            </div><!-- /.options__title -->
                            <?php endif; ?>
                            <?php if($text): ?>
                            <div class="options__text">
                                <?php echo $text; ?>
                            </div><!-- /.options__text -->
                            <?php endif; ?>
                            <?php if($price): ?>
                            <div class="options__price">
                                <?php echo $price; ?>
                            </div><!-- /.options__price -->
                            <?php endif; ?>
                            <?php if($link): ?><a href="<?php echo $link; ?>" class="options__more"><?= $linkTitle ?></a><?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>                
                </div><!-- /.options__list -->
            </div><!-- /.options__overlay -->
            <?php endif; ?>
        </div><!-- /.options__item -->
        <?php endwhile; ?>
        <?php endif; ?>
        <?php if(get_sub_field('order_link') || get_sub_field('recharge_link')): ?>
        <div class="options__links">
            <?php if(get_sub_field('order_link')): ?><a href="<?php the_sub_field('order_link'); ?>" class="btn btn--pink"><?php _e('Order SIM Card online','site') ?></a><?php endif; ?>
            <?php if(get_sub_field('recharge_link')): ?><a href="<?php the_sub_field('recharge_link'); ?>" class="btn btn--pink"><?php _e('Recharge your SIM Card','site') ?></a><?php endif; ?>
        </div><!-- /.options__links -->
        <?php endif; ?>
        <?php if(get_sub_field('call_us')): ?>
        <div class="options__call">
            <?php the_sub_field('call_us'); ?>
        </div>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.options -->