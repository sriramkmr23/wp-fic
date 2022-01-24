<?php if( get_sub_field( 'courses-include' ) == 'yes' ) :?>

<section class="mb-6 study-areas">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center pb-2">
				<h2 class="display-2"><?php echo get_sub_field( 'courses-heading' ); ?></h2>
			</div>
        </div>

        <?php if (get_sub_field( 'undergraduate-courses-include' )) : ?>
            <div class="row">
                <div class="col-md-12 col-lg-12 mb-3 mb-md-0">
                    <?php if (get_sub_field('undergraduate-courses-heading') != '') : ?>
                        <div class="row">
                            <div class="col">
                                <h3><?php echo get_sub_field('undergraduate-courses-heading'); ?></h3>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row">

                        <?php if(have_rows('undergraduate-courses')):?>

                            <?php while(have_rows('undergraduate-courses')): the_row(); ?>
                                <div class="col-lg-2 col-md-3 col-sm-4 col-6 pb-3 stmt-2 ">
                                    <a href="<?php echo get_sub_field( 'undergraduate-course-item' )[ 'url' ]; ?>" class="unit-container ">
                                        <img class="card-img-top" src="<?php echo get_sub_field( 'undergraduate-course-image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'undergraduate-course-image' )[ 'alt' ]; ?>" />
                                        <div class="py-2 px-3 study-area-unit rounded-custom h-100x ">
                                            <h4>
                                                <?php echo get_sub_field( 'undergraduate-course-item' )[ 'title' ]; ?>
                                            </h4>
                                            <div class="arrow-wrapper">
                                                <div class="wrapper-content">
                                                    <img class="arrow" src="<?php echo get_stylesheet_directory_uri();?>/images/white-arrow-shorter.png" alt="<?php echo get_sub_field( 'heading' ); ?>" title="<?php echo get_sub_field( 'heading' ); ?>">
                                                </div>
                                            </div>
                                            <?php
                                            /***
                                                <div class="course-qualification">
                                                    <?php echo get_sub_field( 'undergraduate-course-qualification' ); ?>
                                                </div>
                                                <p class="mb-0">
                                                    <?php echo get_sub_field( 'undergraduate-course-entry-year' ); ?> Entry
                                                </p>
                                            ***/
                                            ?>
                                        </div>
                                    </a>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <?php if (get_sub_field( 'postgraduate-courses-include' )) : ?>
            <div class="row study-area-row-2">
                <div class="col-md-3col-lg-12 mb-3 mb-md-0">
                    <?php if (get_sub_field('postgraduate-courses-heading') != '') : ?>
                        <div class="row">
                            <div class="col px-md-2">
                                <h3><?php echo get_sub_field('postgraduate-courses-heading'); ?></h3>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row">

                        <?php if(have_rows('postgraduate-courses')):?>

                            <?php while(have_rows('postgraduate-courses')): the_row(); ?>
                                <div class="col-md-3 col-lg-3 px-md-2 pb-3 stmt-2">
                                    <a href="<?php echo get_sub_field( 'postgraduate-course-item' )[ 'url' ]; ?>" class="unit-container">
                                        <div class="py-2 px-3 study-area-unit rounded-custom h-100">
                                            <p class="mb-0">
                                                <?php echo get_sub_field( 'postgraduate-course-item' )[ 'title' ]; ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>





	</div>
</section>
<?php endif; ?>