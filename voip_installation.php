<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
<div class="support__title-text<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <h1 class="default-title-large"><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div><!-- /.support__title-text -->
<?php if (have_rows('invoices')): ?>
<?php 
    while(have_rows('invoices')): the_row();
    $title = get_sub_field('title');
?>
<div class="support__invoices support__invoices--voip<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <?php if($title): ?>
    <h2 class="support__invoices-title"><?php echo $title; ?></h2>
    <?php endif; ?>
    <?php if (have_rows('item_boxes')): ?>
    <div class="support__sort">
    <?php 
        $i=0;
        while(have_rows('item_boxes')): the_row();
        $title = get_sub_field('title');
        $i++;
    ?>
        <?php if($title): ?>
        <a href="#support__invoices-item-<?php echo $i; ?>"><?php echo $title; ?></a>
        <?php endif; ?>
    <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php if (have_rows('item_boxes')): ?>
    <div class="support__invoices-list support__invoices-list--install">
        <?php 
            $i=0;
            while(have_rows('item_boxes')): the_row();
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $i++;
        ?>
        <div class="support__invoices-item" id="support__invoices-item-<?php echo $i; ?>">
            <h2>
                <?php if($title): ?>
                <?php echo $title; ?>
                <?php endif; ?>
            </h2>
            <?php if($text): ?>
            <div class="support__invoices-text">
                <?php echo $text; ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div><!-- /.support__invoices -->
<?php endwhile; ?>
<?php endif; ?>
<?php endwhile; ?>