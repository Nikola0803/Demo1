<div id="how-it-works" class="page-box page-box--how-work page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div><!-- /.page-title -->
        <?php endif; ?>
        <?php if(have_rows('how_items')): ?>
        <div class="how-work">
            <?php 
                while(have_rows('how_items')) : the_row();
                $name = get_sub_field('title');
                $apLink = get_sub_field('apple_store_link');
                $gpLink = get_sub_field('google_play_link');
                $login = get_sub_field('link_to_login_page');
                $icon = get_sub_field('app_icon');
                $color1 = get_sub_field('select_first_color');
                $color2 = get_sub_field('select_second_color');
                $description = get_sub_field('description');                
            ?>
            <div class="how-work__item">
                <?php if($name): ?>
                <h2 class="how-work__title"><?php echo $name; ?></h2>
                <?php endif; ?>
                <div class="how-work__middle">
                    <?php if($apLink): ?>
                    <a href="<?php echo $apLink; ?>" class="how-work__link how-work__link--as">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/icon--as.svg" alt="">
                    </a>
                    <?php endif; ?>
                    <?php if($gpLink): ?>
                    <a href="<?php echo $gpLink; ?>" class="how-work__link how-work__link--gp">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/icon--gp.svg" alt="">
                    </a>
                    <?php endif; ?>
                    <?php if($login): ?>
                    <a href="<?php echo $login; ?>" class="how-work__login" target="_blank"><?php echo $login; ?></a>
                    <?php endif; ?>
                    <?php if($icon): ?>
                    <img src="<?php echo $icon; ?>" alt="">
                    <?php endif; ?>
                </div><!-- /.how-work__middle -->
                <?php if($description): ?>
                <div class="how-work__text">
                    <?php echo $description; ?>
                </div>
                <?php endif; ?>
            </div><!-- /.how-work__item -->
            <?php if($color1 || $color2): ?>
            <div class="how-work__gradient" style="background: linear-gradient(to right, <?php echo $color1; ?> 0%, <?php echo $color2; ?> 100%);"></div>
            <?php endif; ?>
            <?php endwhile; ?>
        </div><!-- /.how-work -->
        <?php endif; ?>
    </div>
</div>