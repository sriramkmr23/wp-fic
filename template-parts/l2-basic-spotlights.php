<?php if( get_sub_field( 'l2-basic-spotlights-include' ) == 'yes' ) :?>

<!-- Start Basic Spotlights -->
<section class="l2-basic-spotlights mb-3">
    <div class="container">
        <div class="l2-basic-spotlights-items">
            <div class="row">

                <?php if(have_rows('l2-basic-spotlight-items')):?>

                    <?php while(have_rows('l2-basic-spotlight-items')): the_row(); ?>

                        <div class="col-md-6 text-left l2-basic-spotlights-item mb-2">

                            <div class="l2-basic-spotlights-item-content">
                                <?php if(!empty(get_sub_field('heading'))): ?>
                                    <h3 class="text-left text-primary"><?php echo get_sub_field('heading'); ?></h3>
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
    </div>
</section>
<!-- end Basic Spotlights -->

<?php endif; ?>