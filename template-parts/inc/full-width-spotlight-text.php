<div class="col-md-8 pb-4
    <?php if( get_sub_field( 'full-width-spotlight-image-position' ) == 'right' ):
            echo 'order-md-first';
    endif; ?>
    ">

    <div class="full-width-spotlight-content">

        <?php if( !empty( get_sub_field( 'full-width-spotlight-heading' ) ) ): ?>
            <h2 class="display-2"><?php echo get_sub_field( 'full-width-spotlight-heading' ) ?></h2>
        <?php endif; ?>

        <?php if(!empty(get_sub_field('full-width-spotlight-text'))): ?>
            <div class="text-left content"><?php echo get_sub_field('full-width-spotlight-text'); ?></div>
        <?php endif; ?>

        <?php if( get_sub_field( 'full-width-spotlight-button' ) ):

            $link = get_sub_field( 'full-width-spotlight-button' );

            if( $link ):
                $link_target = $link['target'] ? $link['target'] : '_self';

            ?>
                <a href="<?php echo get_sub_field( 'full-width-spotlight-button' )[ 'url' ]; ?>"
                    target="<?php echo $link_target; ?>"
                    class="btn btn-primary">
                        <?php echo get_sub_field( 'full-width-spotlight-button' )[ 'title' ]; ?>
                </a>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</div>