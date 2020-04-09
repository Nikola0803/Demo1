<div class="offers<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>" id="smartphone-offer">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?>
        <h2 class="offers__title"><?php the_sub_field('title'); ?></h2>
        <?php endif; ?>
        <?php if(get_sub_field('description')): ?>
        <div class="offers__description">
            <?php the_sub_field('description'); ?>
        </div><!-- /.offer__description -->
        <?php endif; ?>
        <?php if(have_rows('phones')): ?>
        <div class="offers__box">
            <?php 
                $k = 0;
                while(have_rows('phones')) : the_row(); 
                $images = get_sub_field('gallery_large');
                $k++;
            ?>
            <div class="offers__large-slide">
                <div class="offers__gallery">
                    <?php 
                    if( $images ): ?>
                    <div class="offers__slider">
                        <?php $i = 0; foreach( $images as $image ): $i++; ?>
                            <div class="offers__slide<?php if($i == 1) echo " active"; ?>" id="offers__slide-<?php echo $k; ?><?php echo $i; ?>">
                                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div><!-- /.offers__slider -->
                    <?php endif; ?>
                    <?php if(have_rows('phone_colors')): ?>
                    <div class="offers__colors">
                        <?php 
                            $j = 0;
                            while(have_rows('phone_colors')): the_row(); 
                            $color = get_sub_field('select_color');
                            $j++;
                        ?>
                        <div class="offers__color<?php if($j == 1) echo " active"; ?>" data-phone="#offers__slide-<?php echo $k; ?><?php echo $j; ?>" style="background-color: <?php echo $color; ?>;"></div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div><!-- /.offers__gallery -->
                <div class="offers__info">
                    <?php if(get_sub_field('name')): ?><h2 class="offers__info-title"><?php the_sub_field('name'); ?></h2><?php endif; ?>
                    <?php if(get_sub_field('price')): ?><div class="offers__info-price"><?php the_sub_field('price'); ?></div><?php endif; ?>
                    <ul class="offers__characteristics">
                        <?php if(get_sub_field('operating_system')): ?>
                        <li>
                            <div class="offers__icon">
                                <svg class="icon icon--ios">
                                    <use xlink:href="#icon--ios"></use>
                                </svg>
                            </div><!-- /.offers__icon -->
                            <h3><?php the_sub_field('operating_system'); ?></h3>
                        </li>
                        <?php endif; ?>
                        <?php if(get_sub_field('cpu')): ?>
                        <li>
                            <div class="offers__icon">
                                <svg class="icon icon--cpu">
                                    <use xlink:href="#icon--cpu"></use>
                                </svg>
                            </div><!-- /.offers__icon -->
                            <h3><?php the_sub_field('cpu'); ?></h3>
                        </li>
                        <?php endif; ?>
                        <?php if(get_sub_field('display')): ?>
                        <li>
                            <div class="offers__icon">
                                <svg class="icon icon--display">
                                    <use xlink:href="#icon--display"></use>
                                </svg>
                            </div><!-- /.offers__icon -->
                            <h3><?php the_sub_field('display'); ?></h3>
                        </li>
                        <?php endif; ?>
                        <?php if(get_sub_field('hdd')): ?>
                        <li>
                            <div class="offers__icon">
                                <svg class="icon icon--hdd">
                                    <use xlink:href="#icon--hdd"></use>
                                </svg>
                            </div><!-- /.offers__icon -->
                            <h3><?php the_sub_field('hdd'); ?></h3>
                        </li>
                        <?php endif; ?>
                        <?php if(get_sub_field('camera')): ?>
                        <li>
                            <div class="offers__icon">
                                <svg class="icon icon--camera">
                                    <use xlink:href="#icon--camera"></use>
                                </svg>
                            </div><!-- /.offers__icon -->
                            <h3><?php the_sub_field('camera'); ?></h3>
                        </li>
                        <?php endif; ?>
                        <?php if(get_sub_field('specials')): ?>
                        <li>
                            <div class="offers__icon">
                                <svg class="icon icon--touch">
                                    <use xlink:href="#icon--touch"></use>
                                </svg>
                            </div><!-- /.offers__icon -->
                            <h3><?php the_sub_field('specials'); ?></h3>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php /*
                    <div class="offers__details">
                        <a href="#popup-offer-<?php echo $k; ?>" class="popup-open">View details</a>
                    </div>
                    */ ?>
                </div><!-- /.offers__info -->
            </div>
            <?php endwhile; ?>
        </div><!-- /.offers__box -->
        <?php endif; ?>
        <div class="offers__links">
            <?php if(get_sub_field('offers_link_url') && get_sub_field('offers_link_text')): ?>
            <a href="<?php the_sub_field('offers_link_url'); ?>" class="btn btn--medium btn--pink"><?php the_sub_field('offers_link_text'); ?></a>
            <?php endif; ?>
            <?php if (get_sub_field('call_title') || get_sub_field('call_phone')): ?>
            <div class="offers__call">
                <?php the_sub_field('call_title'); ?> <strong><a href="tel:<?php the_sub_field('call_phone'); ?>"><?php the_sub_field('call_phone'); ?></a></strong>
            </div><!-- /.offers__call -->
            <?php endif; ?>
        </div><!-- /.offers__links -->
    </div><!-- /.wrap -->
    <?php /*
    <?php if(have_rows('phones')): ?>
    <?php 
        $i = 0;
        while(have_rows('phones')) : the_row();
        $i++;
    ?>
    <div id="popup-offer-<?php echo $i; ?>" class="popup">
        <?php if(get_sub_field('name')): ?><h2 class="offers__info-title"><?php the_sub_field('name'); ?></h2><?php endif; ?>
        <?php if(get_sub_field('price')): ?><div class="offers__info-price"><?php the_sub_field('price'); ?></div><?php endif; ?>
        <?php if(get_sub_field('details')): ?>
        <div class="popup__text">
            <?php the_sub_field('details'); ?>
        </div>
        <?php endif; ?>
        <a href="#" class="popup__close">
            Close
            <span></span>
        </a>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    */ ?>
</div><!-- /.offer -->




