<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
<div class="support__title-text<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <h1 class="default-title-large"><?php printf( __( '%s', 'site' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
    <?php the_content(); ?>
</div><!-- /.support__title-text -->
<?php if (have_rows('invoices')): ?>
<?php 
    while(have_rows('invoices')): the_row();
    $title = get_sub_field('title');
?>
<div class="support__invoices<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <?php if($title): ?>
    <h2 class="support__invoices-title"><?php echo $title; ?></h2>
    <?php endif; ?>
    <?php if (have_rows('item_boxes')): ?>
    <div class="support__invoices-list">
        <?php 
            while(have_rows('item_boxes')): the_row();
            $icon = get_sub_field('select_icon');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $register = get_sub_field('link_to_register');
        ?>
        <div class="support__invoices-item">
            <h2>
                <?php if($icon): ?>
                <em>
                    <svg class="icon icon--<?php echo $icon; ?>">
                        <use xlink:href="#icon--<?php echo $icon; ?>"></use>
                    </svg>
                </em>
                <?php endif; ?>
                <?php if($title): ?>
                <?php echo $title; ?>
                <?php endif; ?>
            </h2>
            <?php if($text): ?>
            <div class="support__invoices-text">
                <?php echo $text; ?>
            </div>
            <?php endif; ?>
            <?php if($register): ?>
            <div class="support__invoices-register">
                <a href="<?php echo $register; ?>">Register</a>
            </div>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div><!-- /.support__invoices -->
<?php endwhile; ?>
<?php endif; ?>
    <?php if (have_rows('items_box')): ?>
    <div class="support__invoices-text">
        <?php 
            while(have_rows('items_box')): the_row();
            $title = get_sub_field('title');
            $text = get_sub_field('text');
        ?>
        <div class="support__invoices-text__item">
            <?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>
            <?php if($text): ?><?php echo $text; ?><?php endif; ?>
        </div>
        <?php if (have_rows('text_width_color')): ?>
        <div class="support__invoices-colors">
        <?php 
            while(have_rows('text_width_color')): the_row();
            $color = get_sub_field('color');
            $title = get_sub_field('title');
            $text = get_sub_field('textarea');
        ?>
            <div class="support__invoices-color">
                <?php if($title): ?><h2><?php echo $title; ?></h2><?php endif; ?>
                <?php if($text): ?><?php echo $text; ?><?php endif; ?>
            </div>
        <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
<?php endwhile; ?>