
<?php if(!empty( get_field( 'hero-carousel-slider' ) ) ) : ?>
<!-- Start Hero Space Carousel -->
<section  class="hero-carousel">

    <div class="hero-owl-carousel owl-carousel owl-theme">

        <?php while(have_rows('hero-carousel-slider')): the_row(); ?>
            <div class="owl-slide d-flex align-items-center cover" style="background-image: url(<?php echo get_sub_field( 'hero-slider-image' )[ 'url' ] ?>);">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-12-x col-md-8-x static">
                            <div class="owl-slide-text">
                                <h1 class="owl-slide-animated owl-slide-title">
                                    <?php echo nl2br(get_sub_field( 'hero-slider-heading' )) ?>
                                </h1>
                                <div class="owl-slide-animated owl-slide-subtitle">
                                    <p class="lead">
                                        <?php echo nl2br(get_sub_field( 'hero-slider-text' )) ?>
                                    </p>
                                </div>
                            </div><!-- /owl-slide-text -->
                            <?php
                                if(!empty(get_sub_field('hero-slider-call-to-action'))) {
                            ?>
                                    <a class="btn btn-primary owl-slide-animated owl-slide-cta" href="<?php echo get_sub_field('hero-slider-call-to-action')['url']; ?>" role="button">
                                        <?php echo get_sub_field('hero-slider-call-to-action')['title']; ?>
                                    </a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div><!-- /slide -->
        <?php endwhile; ?>
    </div>

</section>
<!-- End Hero Carousel -->

<?php endif; ?>