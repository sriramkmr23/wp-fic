<?php
/**
 * The template for displaying privacy policy
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
					<div class="privacy-policy content">
						<h1><?php echo get_the_title(); ?></h1>
						<?php
						$language = 'en';
						echo $privacy_policy_content = get_privacy_policy_content($language); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();