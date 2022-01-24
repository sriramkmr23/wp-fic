<?php
/**
 * Template Name: Campaigns
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

	// Get Campaign Image + Intro Text template
	get_template_part('template-parts/campaign-image-intro-text');

	//Get section Overview Template
	get_template_part('template-parts/section-overview');


	//Get study program search just for Program page
	if( is_page( 'programs' )) {
		$program_template_part = 'search';
		//get_template_part('template-parts/program-'.$program_template_part);
	}

	?>

	<!-- <section class="pt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3 d-none d-md-block">

					<?php // Get In This Section Component
						//get_template_part('template-parts/in-this-section'); ?>

				</div>
				<div class="col-md-9">


				</div>
			</div>
		</div>
	</section>	 -->

	<?php //Get Additional Content Component
		if( have_rows('campaign-additional-content') ):

			while ( have_rows('campaign-additional-content') ) : the_row();

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