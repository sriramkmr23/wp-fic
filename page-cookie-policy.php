<?php
/**
 * The template for displaying cookie policy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 *@package ECUColombo
 */

get_header(); ?>
<main id="main">
	<section class="py-5 privacy-policy-container">
		<div class="container">
			<div class="row">
				<div class="col col-md-9 pt-0 pb-5">
					<div class="content">
						<h1><?php echo get_the_title(); ?></h1>
						<!-- OneTrust Cookies List start -->
						<div id="ot-sdk-cookie-policy"></div>
						<!-- OneTrust Cookies List end -->
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();