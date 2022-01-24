

<?php
/**
 * Template Name: Why Choose
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *@package ECUColombo
 */


get_header(); ?>

<!-- Start Main -->
<main id="main">

    <?php
    while (have_posts()):
        the_post();

        // Get Overview Image + Intro Text template
        get_template_part('template-parts/section-overview-image-intro-text');

        //Get section Overview Template
        get_template_part('template-parts/section-overview');

        get_template_part('template-parts/why-choose-tabs');

    endwhile; ?>

</main>
<!-- End Main -->

<?php
get_footer();

?>