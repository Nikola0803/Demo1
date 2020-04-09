<div class="sales<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if (have_rows('create_list')): ?>
        <div class="sales__list">
        <?php 
            $i = 0;
            while(have_rows('create_list')): the_row();
            $link = get_sub_field('link_to_shop');
            $logo = get_sub_field('upload_logo');
            $i++;
        ?>
            <a href="<?php echo $link; ?>" class="sales__item sales__item--<?php echo $i; ?>">
                <img src="<?php echo $logo; ?>" alt="">
            </a><!-- /.sales__item -->
        <?php endwhile; ?>
        </div><!-- /.sales__list -->
        <?php endif; ?>
    </div><!-- /.wrap -->
</div><!-- /.sales -->