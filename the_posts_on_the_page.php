<div class="page-cat<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(have_rows('select_post')): ?>
        <div class="page-cat__row">
            <?php 
                $i=0;
                while(have_rows('select_post')): the_row();
                $type = get_sub_field('select_type');
                $color = get_sub_field('select_color');
                $image = get_sub_field('upload_image');
                $svg = get_sub_field('select_svg_icon');
                $largeTitle = get_sub_field('large_title');
                $mediumTitle = get_sub_field('medium_title');
                $smallTitle = get_sub_field('small_title');
                $text = get_sub_field('text');
                $link = get_sub_field('link_url');
                $linkName = get_sub_field('link_title');
                $i++;
            ?>
            <div class="page-cat__col page-cat__col--<?php echo $i; ?>">
                <div class="page-cat__item<?php if($type): ?> <?php echo $type; ?><?php endif; ?><?php if($color): ?> <?php echo $color; ?><?php endif; ?>">
                    <?php if($image): ?>
                    <img src="<?php echo $image; ?>" alt="" class="page-cat__image">
                    <?php endif; ?>
                    <?php if($svg): ?>
                    <svg class="icon <?php echo $svg; ?>">
                        <use xlink:href="#<?php echo $svg; ?>"></use>
                    </svg>
                    <?php endif; ?>
                    <?php if($largeTitle): ?><h2 class="page-cat__large-title"><?php echo $largeTitle; ?></h2><?php endif; ?>
                    <div class="page-cat__title-box">
                        <?php if($mediumTitle): ?><h3 class="page-cat__medium-title"><?php echo $mediumTitle; ?></h3><?php endif; ?>
                        <?php if($smallTitle): ?><h4 class="page-cat__small-title"><?php echo $smallTitle; ?></h4><?php endif; ?>
                        <?php if($text): ?>
                        <div class="page-cat__text">
                            <?php echo $text; ?>
                        </div><!-- /.page-cat__text -->
                        <?php endif; ?>
                    </div><!-- /.page-cat__title-box -->
                    <?php if($link): ?><a href="<?php echo $link; ?>" class="btn btn--medium"><?= $linkName ?></a><?php endif; ?>
                </div><!-- /.page-cat__item -->
            </div><!-- /.cat__col -->
            <?php endwhile; ?>
        </div><!-- /.cat__row -->
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.page-cat -->