<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
<div class="support__title-text<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <h1 class="default-title-large"><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div><!-- /.support__title-text -->
<?php if (have_rows('invoices')): ?>
<div class="support__invoices<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <?php 
        while(have_rows('invoices')): the_row();
        $title = get_sub_field('title');
        $icon = get_sub_field('select_icon');
        $text = get_sub_field('text');
    ?>
    <div class="support__invoices-item support__invoices-item--large">
        <?php if($icon): ?>
        <svg class="icon icon--<?php echo $icon; ?>">
            <use xlink:href="#icon--<?php echo $icon; ?>"></use>
        </svg>
        <?php endif; ?>
        <?php if($title): ?>
        <h2>
            <?php echo $title; ?>
        </h2>
        <?php endif; ?>
        <?php if($text): ?>
        <div class="support__invoices-text">
            <?php echo $text; ?>
        </div>
        <?php endif; ?>
    </div>
    <?php endwhile; ?>
</div><!-- /.support__invoices -->
<?php endif; ?>
<?php endwhile; ?>