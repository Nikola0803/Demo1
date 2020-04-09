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
<div class="support__invoices<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <?php if($title): ?>
    <h2 class="support__invoices-title"><?php echo $title; ?></h2>
    <?php endif; ?>
    <?php if (have_rows('item_boxes')): ?>
    <div class="support__invoices-list">
        <?php 
            while(have_rows('item_boxes')): the_row();
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $register = get_sub_field('link_to_register');
        ?>
        <div class="support__invoices-item<?php if($title): ?> support__invoices-item--color<?php endif; ?>">
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
<?php if(get_sub_field('upload_file')): ?>
<div class="support__title-text support__title-text--bottom">
    <p>site-Inbox inbox manual as <a href="<?php the_sub_field('upload_file'); ?>" target="_blank">PDF File</a></p>
</div><!-- /.support__title-text -->
<?php endif; ?>
<?php endwhile; ?>