<div id="box-price" class="page-price page-box--bordered<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <?php if(get_sub_field('price_title')): ?>
        <div class="prices-title page-title">
            <h2><?php the_sub_field('price_title'); ?></h2>
        </div>
    <?php endif; ?>
    <div class="wrap">
        <?php if (have_rows('box_with_price')): ?>
            <div class="page-price__list">
            <?php 
                while(have_rows('box_with_price')): the_row();
                $title = get_sub_field('title');
                $sub_title = get_sub_field('sub_title');
                $title_for_price = get_sub_field('title_for_price');
                $price = get_sub_field('price');
                $online_link_text = get_sub_field('online_link_text');
                $online_link_url = get_sub_field('online_link_url');
                $online_link_2_text = get_sub_field('online_link_2_text');
                $online_link_2_url = get_sub_field('online_link_2_url');
                $upload_pdf = get_sub_field('upload_pdf');
                $stars =  get_sub_field('file_type');
                $tipPrice =  get_sub_field('price_tip');
            ?>
                <div class="page-price__slide">
                    <div class="page-price__item">
                        <div class="page-price__top">
                            <?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>
                            <?php if($sub_title): ?><h3><?php echo $sub_title; ?></h3><?php endif; ?>
                        </div><!-- /.page-price__top -->
                        <div class="page-price__value">
                            <?php if($title_for_price): ?><h4><?php echo $title_for_price; ?></h4><?php endif; ?>
                            <?php if($price): ?>
                                <div class="page-price__value-item">
                                    <p><?php echo $price; ?></p>
                                    <?php if($tipPrice): ?>
                                    <div class="tooltip">
                                        <a href="#" class="tooltip__icon">i</a>
                                        <p><?php echo $tipPrice; ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div><!-- /.page-price__value -->
                        <?php if(have_rows('info')): ?>
                        <ul class="page-price__info">
                            <?php 
                                while(have_rows('info')) : the_row(); 
                                $name = get_sub_field('name');
                                $tip = get_sub_field('tip');
                                $text = get_sub_field('description');
                            ?>
                            <li>
                                <div class="page-price__left">
                                    <?php if($name): ?><h3><?php echo $name; ?></h3><?php endif; ?>
                                    <?php if($tip): ?>
                                    <div class="tooltip">
                                        <a href="#" class="tooltip__icon">i</a>
                                        <p><?php echo $tip; ?></p>
                                    </div>
                                    <?php endif; ?>
                                </div>   
                                <?php if($text): ?><strong><?php echo $text; ?></strong><?php endif; ?>
                            </li>
                            <?php endwhile; ?>
                        </ul><!-- /.page-price__info -->
                        <?php endif; ?>
                        <div class="page-price__controls">
                            <?php if($online_link_text || $online_link_url): ?><a href="<?php echo $online_link_url; ?>" class="btn btn--pink btn--medium btn--middle"><?php echo $online_link_text; ?></a><?php endif; ?><br>
                            <?php if($online_link_2_text || $online_link_2_url): ?><a href="<?php echo $online_link_2_url; ?>" class="btn btn--pink btn--medium btn--middle"><?php echo $online_link_2_text; ?></a><?php endif; ?>
                            <?php
                                
                            ?>
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
                    </div><!-- /.page-price__item -->
                </div>
                <?php endwhile; ?>
            </div><!-- /.page-price__list -->
        <?php endif; ?>
        <?php if(get_sub_field('conditions')): ?>
        <div class="prices-conditions">
            <p><?php the_sub_field('conditions'); ?></p>
        </div>
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.page-price -->