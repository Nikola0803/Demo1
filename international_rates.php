<div id="international-rates" class="international-rates<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <div class="wrap">
        <?php if(get_sub_field('title')): ?><h2 class="international-rates__title"><?php the_sub_field('title'); ?></h2><?php endif; ?>
        <?php if(get_sub_field('description')): ?>
        <div class="international-rates__text">
            <?php the_sub_field('description'); ?>
        </div><!-- /.international-rates__text -->
        <?php endif; ?>
        <div class="international-rates__box">
            <!-- <div class="international-rates__top">
                <input type="text" id="table-search" onkeyup="myFunction()" placeholder="Search country" class="international-rates__search">
                <svg class="icon icon--search">
                    <use xlink:href="#icon--search"></use>
                </svg>
            </div> -->
            <div class="table-box">
                <?php /* 
                <?php if(get_sub_field( 'table' )): ?>
                    $table = get_sub_field( 'table' );

                    if ( $table ) {

                        echo '<table id="table-sort" class="table-sort" border="0">';

                            if ( $table['header'] ) {

                                echo '<thead>';

                                    echo '<tr>';

                                        foreach ( $table['header'] as $th ) {

                                            echo '<th>';
                                                echo $th['c'];
                                            echo '</th>';
                                        }

                                    echo '</tr>';

                                echo '</thead>';
                            }

                            echo '<tbody>';

                                foreach ( $table['body'] as $tr ) {

                                    echo '<tr>';

                                        foreach ( $tr as $td ) {

                                            echo '<td>';
                                                echo $td['c'];
                                            echo '</td>';
                                        }

                                    echo '</tr>';
                                }

                            echo '</tbody>';

                        echo '</table>';
                    } 
                ?>
                <?php endif; ?>
                */ ?>
                <a href="#" class="show-table"><?php _e('View All', 'site'); ?></a>
                <div class="table-tab">
                    <div class="table-top">
                    <?php if(get_sub_field( 'table_top' )): ?>
                        <?php $table = get_sub_field( 'table_top' ); echo $table ?>
                    <?php endif; ?>
                    </div>
                    <div class="table-all">
                        <svg class="icon icon--search">
                            <use xlink:href="#icon--search"></use>
                        </svg>
                        <?php if(get_sub_field( 'table' )): ?>
                            <?php $table = get_sub_field( 'table' ); echo $table ?>
                        <?php endif; ?>
                    </div>
                    <?php if(get_sub_field( 'table_asterisk' )): ?>
                        <div class="table-asterisk">
                            <?php $table = get_sub_field( 'table_asterisk' ); echo $table ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php /* 
                <div class="table-top">
                <?php if(get_sub_field( 'top_8_countries' )): ?>
                    <?php $table = get_sub_field( 'top_8_countries' ); echo $table ?>
                <?php endif; ?>
                </div>
                */ ?>
            </div><!-- /.table-box -->

            <?php
                $stars =  get_sub_field('file_type');
            ?>
            <?php 
                if ($stars === 'Upload file') { ?> 
                <?php if(get_sub_field('upload_pdf')): ?>
                <div class="international-rates__download">
                    <a href="<?php the_sub_field('upload_pdf'); ?>" target="_blank"><?php the_sub_field('link_name'); ?></a>
                </div><!-- /.international-rates__download -->
                <?php endif; ?>
            <?php } else { ?>
                <?php if(get_sub_field('url_link')): ?>
                <div class="international-rates__download">
                    <a href="<?php the_sub_field('url_link'); ?>" target="_blank"><?php the_sub_field('link_name'); ?></a>
                </div><!-- /.international-rates__download -->
                <?php endif; ?>
            <?php } ?>
        </div><!-- /.international-rates__box -->
    </div><!-- /.wrap -->
</div><!-- /.international-rates -->