<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *@package ECUColombo
 */

get_header(); ?>

<!-- Start Main -->
<main id="main" class="default-page">

<?php
while (have_posts()):
	the_post(); ?>
	<div class="container">
		<div class="row py-5">
			<div class="col-md-3 d-none d-md-block">
				<?php // Get In This Section Component
					get_template_part('template-parts/section-navigation');
				?>
			</div>
			<div class="col-md-9">
				<?php // Get BreadCrumb Component
					get_template_part('template-parts/breadcrumb');
				?>

				<section class="page-title">
					<div class="container">
						<div class="row">
							<div class="col">
								<h1><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
				</section>

				<?php // Get Standard Components
				if( have_rows('standard-content') ):

					while ( have_rows('standard-content') ) : the_row();

						$section_path = 'template-parts/'.get_row_layout();

						get_template_part($section_path);

					endwhile;

				endif; ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>

</main>
<!-- End Main -->

<?php
get_footer();

?>