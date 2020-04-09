<div id="free-app" class="ip-call<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <div class="page-title">
            <h2><?php the_sub_field('title'); ?></h2>
        </div><!-- /.page-title -->
        <?php endif; ?>
        <div class="free-app">
            <?php if(get_sub_field('upload_image')): ?>
            <img src="<?php the_sub_field('upload_image'); ?>" alt="" class="free-app__image">
            <?php endif; ?>
            <div class="free-app__description">
                <?php if(get_sub_field('upload_logo')): ?>
                <img src="<?php the_sub_field('upload_logo'); ?>" alt="" class="free-app__logo">
                <?php endif; ?>
                <?php if(have_rows('characteristic')): ?>
                <ul class="free-app__list">
                <?php 
                    while(have_rows('characteristic')) : the_row();
                    $color = get_sub_field('select_color');
                    $name = get_sub_field('name');
                    $faq = get_sub_field('faq_link');
                ?>
                    <li>
                        <?php if($color): ?><span class="free-app__color" style="background-color: <?php echo $color; ?>"></span><?php endif; ?>
                        <div class="free-app__box">
                            <?php if($name): ?><span><?php echo $name; ?></span><?php endif; ?>
                            <?php if($faq): ?>
                            <div class="tooltip">
                                <a href="#" class="tooltip__icon">i</a>
                                <p><?php echo $faq; ?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <div class="free-app__links">
                    <?php if(get_sub_field('apple_store_link')): ?>
                    <a href="<?php the_sub_field('apple_store_link'); ?>" class="free-app__link free-app__link--as" target="_blank">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/icon--as.svg" alt="">
                    </a>
                    <?php endif; ?>
                    <?php if(get_sub_field('google_play_link')): ?>
                    <a href="<?php the_sub_field('google_play_link'); ?>" class="free-app__link free-app__link--gp" target="_blank">
                        <img src="<?php bloginfo( 'template_url' ); ?>/img/icon--gp.svg" alt="">
                    </a>
                    <?php endif; ?>
                </div><!-- /.free-app__links -->
            </div><!-- /.free-app__description -->
        </div><!-- /.free-app -->
    </div><!-- /.wrap -->
</div><!-- /.ip-call -->