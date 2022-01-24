<?php if( get_sub_field( 'summary-feature-include' ) == 'yes' ) :?>

<!-- Start Summary Feature -->
<section class="summary-feature stmb-3 stmt-3">
    <div class="container">

        <div class="row">

            <?php if(have_rows('summary-feature-items')):?>

                <?php while(have_rows('summary-feature-items')): the_row(); ?>

                    <div class="col-md-6 py-3 text-left summary-feature-item">

                        <div class="summary-feature-item-content">
                            <?php if(!empty(get_sub_field('heading'))): ?>
                                <h2 class="text-left"><?php echo get_sub_field('heading'); ?></h2>
                            <?php endif; ?>

                            <?php if(!empty(get_sub_field('text'))): ?>
                                <div class="text-left text-primary content"><?php echo get_sub_field('text'); ?></div>
                            <?php endif; ?>

                            <br />

                            <?php if( get_sub_field( 'button' ) ):

                                $link = get_sub_field( 'button' );

                                if( $link ):
                                    $link_target = $link['target'] ? $link['target'] : '_self';

                                ?>
                                    <a href="<?php echo get_sub_field( 'button' )[ 'url' ]; ?>"
                                        target="<?php echo $link_target; ?>"
                                        class="btn btn-primary">
                                            <?php echo get_sub_field( 'button' )[ 'title' ]; ?>
                                    </a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>

    </div>
</section>
<!-- summary feature -->

<?php endif; ?>