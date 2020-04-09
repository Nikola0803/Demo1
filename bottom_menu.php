<div id="bottom-menu" class="bottom-menu<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <nav class="bottom-menu__nav">
            <ul class="bottom-menu__menu">
                <?php if(have_rows('add_title_and_url')): ?>
                <?php 
                    while(have_rows('add_title_and_url')):the_row();
                    $url = get_sub_field('url');
                    $title = get_sub_field('title');
                ?>

                <li><a href="<?php echo $url ?>"><?php echo $title ?></a></li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </nav>
    </div><!-- /.wrap -->
</div><!-- /.bottom-menu -->