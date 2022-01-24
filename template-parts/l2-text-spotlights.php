<?php if( get_sub_field( 'l2-text-spotlights-include' ) == 'yes' ) :?>

<!-- Start Basic Spotlights -->
<section class="mb-3 l2-text-spotlights stmb-3 stmt-3">
    <div class="container">
        <div class="l2-text-spotlights-content">
            <div class="row">

                <?php if(have_rows('l2-text-spotlight-items')):?>

                    <?php while(have_rows('l2-text-spotlight-items')): the_row(); ?>

                        <div class="col-md-4 text-left l2-text-spotlights-item my-sm-4">

                            <div class="l2-text-spotlights-item-content content">
                                <?php if(!empty(get_sub_field('heading'))): ?>
                                    <h3 class="text-left text-primary"><?php echo get_sub_field('heading'); ?></h3>
                                <?php endif; ?>

                                <?php if(!empty(get_sub_field('text'))): ?>
                                    <div class="text-left text-primary"><?php echo get_sub_field('text'); ?></div>
                                <?php endif; ?>

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
    </div>
</section>
<!-- end Basic Spotlights -->

<?php endif; ?>