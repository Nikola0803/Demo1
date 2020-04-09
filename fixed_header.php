<div class="fixed-header">
    <div class="wrap">
        <div class="fixed-header__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php /* <svg class="icon icon--logo">
                    <use xlink:href="#icon--logo"></use>
                </svg> */?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/site-logo-h.png" />
            </a>
        </div><!-- /.fixed-header__logo -->
        <nav class="fixed-header__nav">
        <?php
            if ( have_rows('items') ) : ?>
            <ul>
            <?php  while ( have_rows('items') ) : the_row();
            $name = get_sub_field('menu_name');
            $link = get_sub_field('select_menu_items');
        ?>
                <li><a href="#<?php echo $link; ?>"><?php echo $name; ?></a></li>
        <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        </nav>
        <div class="fixed-header__links<?php if(get_sub_field('pink_link_url') && get_sub_field('pink_link_text')) : ?> fixed-header__links--separator<?php endif; ?>">
            <?php if(get_sub_field('pink_link_url') && get_sub_field('pink_link_text')) : ?>
            <a href="<?php the_sub_field('pink_link_url'); ?>" class="btn btn--bordered btn--bordered-pink"><?php the_sub_field('pink_link_text'); ?></a>
            <?php endif; ?>
            <?php if(get_sub_field('blue_link_url') && get_sub_field('blue_link_text')) : ?>
            <a href="<?php the_sub_field('blue_link_url'); ?>" class="btn btn--bordered btn--bordered-blue"><?php the_sub_field('blue_link_text'); ?></a>
            <?php endif; ?>
        </div>
    </div><!-- /.wrap -->
</div><!-- /.fixed-header -->
