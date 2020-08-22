<?php cntt_post_thumbnail(); ?>

    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    ( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cntt' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html( 'Pages:', 'cntt' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div>