<?php
//Template Name: Home Page

get_header(); ?>

<!-- Start Main -->
<main id="main">

<?php
while (have_posts()):
	the_post();

	//Get Hero Space Template
	//get_template_part('template-parts/hero-space-umass');
	//get_template_part('template-parts/hero');
	get_template_part('template-parts/hero-carousel');

	//Get Notifications Template
	get_template_part('template-parts/notification');

	//Get College Overview Template
	get_template_part('template-parts/college-overview');

	//Get Intro Button Template
	//get_template_part('template-parts/intro-button');

	//Get Study Areas Template
	//get_template_part('template-parts/study-areas');

	//Get Course Search/List Template
//	$program_template_part = 'search';
//	get_template_part('template-parts/program-'.$program_template_part);

	//Get Pathway to Uni Template
	//get_template_part('template-parts/pathway-to-uni');

	//Get Additional Content Template
	if( have_rows('additional-content') ):

		while ( have_rows('additional-content') ) : the_row();

			$section_path = 'template-parts/'.get_row_layout();

				get_template_part($section_path);

		endwhile;

	endif;

endwhile;

?>

</main>
<!-- End Main -->

<?php

get_footer();

?>