<?php
/**
 * The template for displaying disclaimer page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 *@package ECUColombo
 */

get_header(); ?>
<main id="main">
	<section class="py-5 disclaimer">
		<div class="container">
			<div class="row">
				<div class="col col-md-9 p-5 content">
					<h1><?php echo get_the_title(); ?></h1>
                    <p>ARU College has endeavoured to ensure that all information contained in the website was correct at the time the site was created or the last modification was made. ARU College is not responsible for the contents, information or services, which may appear on any off site pages, web sites or links referenced.</p>
                    <p>The presence of a hyperlink to an external site from an ARU College webpage is for convenience only, and does not imply any kind of endorsement by the company of those pages or links, or any endorsement of the contents or material on them. ARU College is not responsible for the use of a hyper-link for which a commercial charge applies, and individual users are responsible for any charges that their use may incur.</p>
                    <p>ARU College reserves the right to change course offerings, arrangements and all other aspects without notification.</p>
                    <p>Please direct any comments or suggestions regarding the website to <a href="mailto:info@arucollege.com">info@arucollege.com</a>.</p>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
