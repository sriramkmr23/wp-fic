<?php
/**
 * Template Name: L2 Section Overview
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *@package ECUColombo
 */

get_header(); ?>

    <!-- Start Main -->
    <main id="main" class="l2-section-overview-page">

        <?php
        while (have_posts()):
            the_post();

            // Get Overview Image + Intro Text template
            get_template_part('template-parts/section-overview-image-intro-text');?>

            <div class="container">
                <section class="">

                    <div class="row">
                        <div class="col-md-3 d-none d-md-block">

                            <?php // Get In This Section Component
                            get_template_part('template-parts/section-navigation'); ?>

                        </div>
                        <div class="col-md-9 pt-3">

                            <?php  // Get BreadCrumb Component
                            get_template_part('template-parts/breadcrumb');

                            //Get section Overview Template
                            //get_template_part('template-parts/section-overview');

                            // Get Key Information Component
                            //get_template_part('template-parts/key-information');

                            //Get Pathway to Uni Component
                            //get_template_part('template-parts/pathway-to-uni');

                            if( have_rows('l2-additional-content') ):

                                while ( have_rows('l2-additional-content') ) : the_row();

                                    $section_path = 'template-parts/'.get_row_layout();

                                    get_template_part($section_path);

                                endwhile;

                            endif;

                            //Get Standard Content Component
                            /*if( have_rows('standard-content') ):

                                while ( have_rows('standard-content') ) : the_row();

                                    $section_path = 'template-parts/'.get_row_layout();

                                    get_template_part($section_path);

                                endwhile;

                            endif;*/
                            ?>
                        </div>
                    </div>
                </section>
            </div>

        <?php endwhile; ?>

    </main>
    <!-- End Main -->

<?php
get_footer();

?>