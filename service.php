<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?> 
<div class="support__title-text<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">
    <h1 class="default-title-large"><?php printf( __( '%s', 'site' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
    <?php the_content(); ?>
</div><!-- /.support__title-text -->
<div class="support__table<?php if(get_sub_field('hide_on_mobile')): ?> is-hidden<?php endif; ?>">   
    <div class="support__table-item">
        <?php 
            $table = get_sub_field( 'table' );

            if ( $table ) {

                echo '<table>';

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

                echo '</table></div>';
            }
        ?>
    </div>
    <?php if(get_sub_field('pdf_file')): ?>
    <div class="support__table-pdf">
        Service Charges as <a href="<?php the_sub_field('pdf_file'); ?>" target="_blank">PDF File</a>
    </div>
    <?php endif; ?>
</div><!-- /.support__table -->
<?php endwhile; ?>