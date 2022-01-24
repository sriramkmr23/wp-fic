<?php if(!empty( get_field( 'hero-image' ) ) ) : ?>

<!-- Start Hero Space -->
<section  class="hero">
    <div class="container">
        <div class="row">

            <div class="score-hero-text col-md-12 col-lg-6">
                <div class="hero__card">
                    <?php if( !empty( get_field( 'hero-heading' ) ) ): ?>
                        <h1 class="display-1"><?php echo get_field( 'hero-heading' ); ?></h1>
                    <?php endif; ?>

                    <?php if( !empty( get_field( 'hero-text' ) ) ): ?>
                        <p class="lead my-3"><?php echo nl2br(get_field( 'hero-text' )); ?></p>
                    <?php endif; ?>


                    <div class="score-call-to-action">
                        <?php
                        if( !empty( get_field( 'hero-buttons' ) ) ):
                            $counter = 0;
                            while ( have_rows('hero-buttons') ) : the_row();
                                if($counter == 0) {
                                    $cta_class = 'btn-info  mr-2';
                                } elseif($counter == 1) {
                                    //$cta_class = 'btn-primary ml-3';
                                    $cta_class = 'btn-info mr-2';
                                } ?>


                                <?php
                                    $link = get_sub_field( 'hero-buttons-call-to-action' );

                                    if( $link ):
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>

                                    <a href="<?php echo get_sub_field('hero-buttons-call-to-action')['url']; ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-lg <?php echo $cta_class; ?>"><?php echo get_sub_field('hero-buttons-call-to-action')['title']; ?></a>

                                <?php endif; ?>

                                <?php
                                $counter++;
                            endwhile;
                        endif; ?>
                    </div>
                </div>

            </div>
            <div class="score-hero-image col-md-12 col-lg-6">
                <div class="hero__image">
                    <img src="<?php echo get_field( 'hero-image' )[ 'url' ]; ?>" alt="<?php echo get_field( 'hero-image' )[ 'alt' ];?>" />
                </div>
            </div>




        </div>
    </div>

</section>
<!-- End Hero Space -->

<?php endif; ?>