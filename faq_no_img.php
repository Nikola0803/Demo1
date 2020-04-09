<div id="faq" class="faq faq--no-image">
    <div class="wrap">
        <h2 class="faq__large-title"><?php the_sub_field('title'); ?></h2>
        <?php
            $post_objects = get_sub_field('faq_list');
            if( $post_objects ): 
        ?>
        <div class="faq__list accordion"> 
        <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
            <?php setup_postdata($post); ?>
            <div class="faq__item accordion__item">
                <h2 class="faq__title accordion__title">
                    <?php the_title(); ?>
                    <svg class="icon icon--dropdown">
                        <use xlink:href="#icon--dropdown"></use>
                    </svg>    
                </h2>
                <div class="faq__text accordion__text">
                    <?php the_content(); ?>
                </div>
            </div><!-- /.faq__item -->
        <?php endforeach; ?>
        </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
        <a href="/faq/" class="btn btn--bordered btn--medium"><?php _e('See all','site') ?></a>
    </div><!-- /.wrap -->
</div><!-- /.page-text -->