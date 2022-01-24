<?php if( get_sub_field( 'why-choose-include' ) == 'yes' ) :?>

    <!-- Start Why Choose -->
    <section class="mb-6 why-choose">
        <div class="container">

            <div class="row">

                <div class="col-12 text-center pb-4">
                    <h2 class="display-2"><?php echo get_sub_field( 'why-choose-heading' )?></h2>
                </div>

            </div>

            <div class="row">

                <?php if(have_rows('why-choose-items')):

                    while(have_rows('why-choose-items')): the_row(); ?>

                        <div class="col-md-4 text-center">

                            <?php if(!empty(get_sub_field('image'))): ?>
                                <div class="text-center p-3">
                                    <img class="card-img-top" src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>" />
                                </div>
                            <?php endif; ?>

                            <?php if(!empty(get_sub_field('heading'))): ?>
                                <h3 class="text-center"><?php echo get_sub_field('heading'); ?></h3>
                            <?php endif; ?>

                            <?php if(!empty(get_sub_field('text'))): ?>
                                <div class="text-center content"><?php echo get_sub_field('text'); ?></div>
                            <?php endif; ?>

                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>

            <br>

            <div class="row">
                <div class="col-12 text-center pb-4">
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

        </div>
    </section>
    <!-- End Why Choose -->

<?php endif; ?>