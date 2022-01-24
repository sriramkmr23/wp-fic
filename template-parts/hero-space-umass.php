<?php if(!empty( get_field( 'hero-space-image' ) ) ) : ?>

<!-- Start Hero Space -->
<section  class="hero-space">

    <div class="score-hero cover" style=" background-image: url(<?php echo get_field( 'hero-space-image' )[ 'url' ] ?>);">
        <div class="score-hero-image">
            <img src="<?php echo get_field( 'hero-space-image' )[ 'url' ]; ?>" alt="#">
        </div>

        <div class="container">
            <div class="row">

            <div class="score-hero-body col-lg-8 col-md-12">

                    <div class="hero-space__card">

                            <?php if( !empty( get_field( 'hero-space-heading' ) ) ): ?>
                                <h1 class="display-1 text-white"><?php echo get_field( 'hero-space-heading' ); ?></h1>
                            <?php endif; ?>

                        <?php if( !empty( get_field( 'hero-space-text' ) ) ): ?>
                            <p class="lead my-3 text-white"><?php echo nl2br(get_field( 'hero-space-text' )); ?></p>
                        <?php endif; ?>


                        <div class="score-call-to-action">
                            <?php
                            if( !empty( get_field( 'hero-space-buttons' ) ) ):
                                $counter = 0;
                                while ( have_rows('hero-space-buttons') ) : the_row();
                                    if($counter == 0) {
                                        $cta_class = 'btn-info  ml-2';
                                    } elseif($counter == 1) {
                                        //$cta_class = 'btn-primary ml-3';
                                        $cta_class = 'btn-info ml-2';
                                    } ?>


                    <?php
                        $link = get_sub_field( 'hero-space-buttons-call-to-action' );

                        if( $link ):
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>

                        <a href="<?php echo get_sub_field('hero-space-buttons-call-to-action')['url']; ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-lg <?php echo $cta_class; ?> px-4"><?php echo get_sub_field('hero-space-buttons-call-to-action')['title']; ?> <i class="fas fa-chevron-right"></i></a>

                    <?php endif; ?>

                    <?php
                    $counter++;
                endwhile;
            endif; ?>
        </div>
    </div>

                </div>


            </div>
        </div>
    </div>


</section>
<!-- End Hero Space -->

<?php endif; ?>