<?php
/**
 * Template Name: Location
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *
 */

get_header(); ?>

<!-- Start Main -->
<main id="main">

<?php
while (have_posts()):
	the_post();

	//Get Hero Space Template
	get_template_part('template-parts/hero-carousel');

	//Get location Overview Template
	get_template_part('template-parts/location-overview');


	?>

	<?php //Get Additional Content Component
		if( have_rows('location-content') ):

			while ( have_rows('location-content') ) : the_row();

				$section_path = 'template-parts/'.get_row_layout();

				get_template_part($section_path);

			endwhile;

		endif;

	endwhile; ?>

</main>
<!-- End Main -->

<?php
get_footer();

?>