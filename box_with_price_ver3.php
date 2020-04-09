<div id="box-price" class="page-price-v3 page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">

<?php if(get_sub_field('price_title')): ?>
    <div class="prices-title page-title">
        <h2><?php the_sub_field('price_title'); ?></h2>
    </div>
<?php endif; ?>


<div class="wrap wrap--price-boxes">

    <?php
        $count = count(get_sub_field("box_with_price"));
    ?>

    <?php if (have_rows('box_with_price')): $i = 0 ?>
        <div class="page-price-v3__list <?php if($count == 2): ?>page-price-v3__js-slider-mobile-two<?php endif; ?> <?php if($count == 3): ?>page-price-v3__js-slider-mobile-three<?php endif; ?> <?php if($count > 3): ?>page-price-v3__js-slider-all<?php endif; ?>">

            <?php get_sub_field('table_theme'); ?>

                <?php
                    while(have_rows('box_with_price')): the_row();
                    $theme = strtolower(get_sub_field('table_theme'));
                    $customTheme = get_sub_field('custom_color_theme');
                    $title = get_sub_field('title');
                    $pre_title = get_sub_field('pre_title');
                    // $title_for_price = get_sub_field('title_for_price');
                    $price = get_sub_field('price');
                    $bottomDescriptor = get_sub_field('bottom_descriptor');
                    $online_link_text = get_sub_field('online_link_text');
                    $online_link_url = get_sub_field('online_link_url');
                    $online_link_2_text = get_sub_field('online_link_2_text');
                    $online_link_2_url = get_sub_field('online_link_2_url');
                    $upload_pdf = get_sub_field('upload_pdf');
                    $stars =  get_sub_field('file_type');
                    $tipPrice =  get_sub_field('price_tip');
                    $i++
                ?>

                    <div class="page-price-v3__slide page-price-v3_slide-id<?php echo $i; ?>">
                        <div class="page-price-v3__item  <?php if($theme): ?>page-price-v3__item--<?php echo $theme; ?><?php endif; ?>">

                            <div class="page-price-v3__item-pre" <?php if($customTheme) { echo 'style="color:'. $customTheme .'"'; } ?>>
                                <?php if($pre_title): ?><h3><?php echo $pre_title; ?></h3><?php endif; ?>
                            </div><!-- /.page-price-v3__item-pre -->

                            <div class="page-price-v3__item-content">

                                <div class="page-price-v3__top" <?php if($customTheme) { echo 'style="background-color:'. $customTheme .'"'; } ?>>

                                    <?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>

                                    <div class="page-price-v3__value" <?php if($customTheme) { echo 'style="color:'. $customTheme .'"'; } ?>>

                                        <?php /*
                                        <?php if($title_for_price): ?><h4><?php echo $title_for_price; ?></h4><?php endif; ?>
                                        */ ?>

                                    </div><!-- /.page-price-v3__value -->

                                </div><!-- /.page-price-v3__top -->

                                <?php if(have_rows('info')): ?>
                                <ul class="page-price-v3__item-info-list">
                                    <?php
                                        while(have_rows('info')) : the_row();
                                        $name = get_sub_field('name');
                                        $name_sub = get_sub_field('name_second_line');
                                        $tip = get_sub_field('tip');
                                        $text = get_sub_field('description');
                                    ?>
                                    <li class="page-price-v3__item-info">
                                        <div class="page-price-v3__info-content <?php if($text) { echo 'page-price-v3__info-content--wtxt'; } ?>">

                                            <div>

                                                <h3 class="page-price-v3__info-title">
                                                    <?php if($name): ?>
                                                        <?php echo $name; ?>
                                                    <?php endif; ?>
                                                    <?php if($tip): ?>
                                                    <div class="tooltip">
                                                        <div class="tooltip-ico-wrap">
                                                            <a href="#" class="tooltip__icon" <?php if($customTheme) { echo 'style="color:'. $customTheme .' !important; border-color:'. $customTheme .' !important;"'; } ?>>i</a>
                                                            <span class="tooltip-ico-hover" <?php if($customTheme) { echo 'style="background-color:'. $customTheme .' !important; border-color:'. $customTheme .' !important;"'; } ?>>i</span>
                                                        </div>
                                                        <p><?php echo $tip; ?></p>
                                                    </div>
                                                    <?php endif; ?>
                                                </h3>

                                                <?php if($name_sub): ?>
                                                <h5 class="page-price-v3__info-sub-title">
                                                    <?php echo $name_sub; ?>
                                                </h5>
                                                <?php endif; ?>

                                            </div>

                                            <?php if($text): ?>
                                            <strong class="page-price-v3__info-benefit">
                                                <?php echo $text; ?>
                                            </strong>
                                            <?php endif; ?>

                                        </div>
                                    </li>
                                    <?php endwhile; ?>
                                </ul><!-- /.page-price-v3__info -->
                                <?php endif; ?>

                                <div class="page-price-v3__controls">

                                    <?php if($online_link_text || $online_link_url): ?><a href="<?php echo $online_link_url; ?>" class="btn btn--price-box btn--medium" <?php if($customTheme) { echo 'style="background-color:'. $customTheme .'"'; } ?>><?php echo $online_link_text; ?></a><?php endif; ?>
                                    <!-- <br> -->
                                    <?php /*
                                    <?php if($online_link_2_text || $online_link_2_url): ?><a href="<?php echo $online_link_2_url; ?>" class="btn btn--price-box btn--price-box-bordered btn--bordered btn--medium"><?php echo $online_link_2_text; ?></a><?php endif; ?>
                                    */ ?>

                                    <?php
                                        if ($stars === 'Upload file') { ?>
                                        <?php if(get_sub_field('upload_pdf')): ?>
                                        <div class="pdf-file">
                                            <a href="<?php the_sub_field('upload_pdf'); ?>" target="_blank" class="download-pdf"><?php the_sub_field('link_name'); ?></a>
                                        </div><!-- /.pdf-file -->
                                        <?php endif; ?>
                                    <?php } else { ?>
                                        <?php if(get_sub_field('url_link')): ?>
                                        <div class="pdf-file">
                                            <a href="<?php the_sub_field('url_link'); ?>" target="_blank" class="download-pdf"><?php the_sub_field('link_name'); ?></a>
                                        </div><!-- /.pdf-file -->
                                        <?php endif; ?>
                                    <?php } ?>

                                </div>
                                            
                                <?php if($price): ?>
                                    <div class="page-price-v3__value-item"  <?php if($customTheme) { echo 'style="color:'. $customTheme .'"'; } ?>>
                                        <p><?php echo $price; ?></p>
                                        <?php if($tipPrice): ?>
                                        <div class="tooltip">
                                            <div class="tooltip-ico-wrap">
                                                <a href="#" class="tooltip__icon" <?php if($customTheme) { echo 'style="color:'. $customTheme .' !important; border-color:'. $customTheme .' !important;"'; } ?>>i</a>
                                                <span class="tooltip-ico-hover" <?php if($customTheme) { echo 'style="background-color:'. $customTheme .' !important; border-color:'. $customTheme .' !important;"'; } ?>>i</span>
                                            </div>
                                            <p><?php echo $tipPrice; ?></p>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if($bottomDescriptor): ?>
                                    <div class="page-price-v3__bottom-descriptor"  <?php if($customTheme) { echo 'style="background-color:'. $customTheme .'"'; } ?>>
                                        <p><?php echo $bottomDescriptor; ?></p>
                                    </div>
                                <?php endif; ?>

                            </div><!-- /.page-price-v3__item-content -->
                            
                            

                        </div>
                    </div>

                <?php endwhile; ?>

        </div><!-- /.page-price-v3__list -->
    <?php endif; ?>
    <?php if(get_sub_field('conditions')): ?>
    <div class="prices-conditions">
        <p><?php the_sub_field('conditions'); ?></p>
    </div>
    <?php endif; ?>
</div><!-- /.wrap -->
</div><!-- /.page-price-v3 -->