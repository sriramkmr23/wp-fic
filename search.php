<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 *@package ECUColombo
 */

get_header(); ?>
<!-- Start Main -->
<main id="main">
	<section class="py-5 search_results">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="mb-3">Search Results</h1>
					<div class="col-md-6">
						<div class="row">
							<form action="/" method="get" class="w-100 site-search-form">
								<div class="input-group">
								<input type="text" name="s" id="s" class="form-control mb-3 rounded-0 site-search-input" autofocus value="<?php echo get_search_query(); ?>">
									<div class="input-group-append">
									<button type="submit" class="search-btn btn btn-primary mb-3">Submit</button>
									</div>
								</div>
								<div class="form-group d-none site-search-err">
									<small class="form-text text-danger mt-0">Please enter a keyword.</small>
								</div>
							</form>
						</div>
					</div>

					<?php
					global $wp_query;
					if($wp_query->found_posts == 0) {
						$additional_text = '. Please try searching again.';
					} else {
						$additional_text = '';
					}
					echo '<div class="mb-4">'.$wp_query->found_posts.' results found for <b>'.get_search_query().'</b>'.$additional_text.'</div>';
					if(have_posts()) {
						while(have_posts()) {
							the_post(); ?>
							<h2><a href="<?php echo get_the_permalink(); ?>"><?php relevanssi_the_title(); ?></a></h2>
							<p class="mb-3"><?php echo get_the_excerpt(); ?></p>
							<p class="mb-5"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_permalink(); ?></a></p>
							<?php
						} ?>
						<hr>
						<div class="row">
							<div class="col text-left mt-4 font-weight-bold">
								<?php echo paginate_links(); ?>
							</div>
						</div>
						<?php
					} else {

					} ?>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- End Main -->

<?php
get_footer();
