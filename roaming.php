<div id="roaming" class="roaming<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <svg class="icon icon--roaming">
            <use xlink:href="#icon--roaming"></use>
        </svg>
        <?php if(get_sub_field('title')): ?><h2 class="roaming__title"><?php the_sub_field('title'); ?></h2><?php endif; ?>
        <?php if(get_sub_field('description')): ?>
        <div class="roaming__text">
            <?php the_sub_field('description'); ?>
        </div><!-- /.roaming__text -->
        <?php endif; ?>
        <?php if(have_rows('add_zones')): ?>
        <div class="roaming__box accordion">
            <?php 
                while(have_rows('add_zones')): the_row(); 
                $title = get_sub_field('title'); 
            ?>    
            <div class="roaming__item accordion__item">
                <?php if($title): ?><h2 class="roaming__item-title accordion__title"><?php echo $title; ?></h2><?php endif; ?>
                <div class="roaming__item-text accordion__text">
                    <?php if(have_rows('tables')): ?>
                    <?php 
                        while(have_rows('tables')): the_row(); 
                        $table = get_sub_field( 'table' );
                    ?>   
                    <div class="roaming__table-box"> 
                        <svg class="icon icon--search">
                            <use xlink:href="#icon--search"></use>
                        </svg>
                        <?php 
                            echo $table;
                        ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- /.accordion__text -->
            </div><!-- /.roaming__item -->
            <?php endwhile; ?>
            <?php
                $stars =  get_sub_field('file_type');
            ?>
            <?php 
                if ($stars === 'Upload file') { ?> 
                    <?php if(get_sub_field('upload_pdf')): ?>
                    <div class="roaming__download">
                        <a href="<?php the_sub_field('upload_pdf'); ?>" target="_blank"><?php the_sub_field('link_name'); ?></a>
                    </div><!-- /.roaming__download -->
                <?php endif; ?>
            <?php } else { ?>
                <?php if(get_sub_field('url_link')): ?>
                <div class="roaming__download">
                    <a href="<?php the_sub_field('url_link'); ?>" target="_blank"><?php the_sub_field('link_name'); ?></a>
                </div><!-- /.roaming__download -->
                <?php endif; ?>
            <?php } ?>
        </div><!-- /.roaming__box -->
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.roaming -->




