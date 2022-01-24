<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
global $wpdb;

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main single-event">

			<div class="container">
				<div class="row py-4">
					<div class="col-md-9 single-event-content">

						<?php
							$permalink = rtrim(get_permalink(), '/');
							$cleanPermalink = parse_url($permalink);

							if (array_key_exists('path', $cleanPermalink)) {

								$slugs = ltrim($cleanPermalink['path'], '/');;
								$slugs = explode('/', $slugs);

								echo '<nav aria-label="Breadcrumb">';
								echo '<ol class="breadcrumb bg-transparent pt-3">';

								echo '<li class="breadcrumb-item">';
								echo '<a href="'. site_url() .'">Home</a></li>';
								if (count($slugs > 0)) {
									foreach ($slugs as $slug) {

										$page = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE post_name = '".$slug."' AND post_status = 'publish'");

										if( $page ) {

											echo '<li class="breadcrumb-item">';
											echo '<a href="'. get_post_permalink($page->ID) .'">'.
													$page->post_title.'</a>
													</li>';
										}
									}
								}
								echo '</ol>';
								echo '</nav>';

							} else {
								// Get BreadCrumb Component
								get_template_part('template-parts/breadcrumb');
							}


						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							$class = get_field('event-featured') ? 'class="featured"' : '';
							?>

							<div class="event-content">
								<h2 class="display-2 event-title"><?php the_title(); ?></h2>
								<div class="container">
									<div class="row">
										<div class="col-md-4 event-details-right">
											<div class="event-date">
												Date: &nbsp;
												<?php echo date('d M Y', strtotime(get_field( 'event-start-date' ))); ?>
												<?php if (get_field( 'event-end-date' )) {
													echo ' - ' . date('d M Y', strtotime(get_field( 'event-end-date' )));
												}
												?>
											</div>
											<div class="event-time">
												Time: &nbsp;
												<?php
													if (get_field( 'event-all-day' )) {
														echo 'All day event';
													} else {
														echo date('H:i', strtotime(get_field( 'event-start-time' )));
														if (get_field( 'event-end-time' )) {
															echo ' - ' . get_field( 'event-end-time' );
														}
													}
												?>
											</div>
											<div class="event-fee">
												<?php if (get_field( 'event-cost' ) > 0) { ?>
													Fee: $<?php echo get_field( 'event-cost' );?>
												<?php } else { ?>
													Fee: Free
												<?php } ?>
											</div>
										</div>
										<div class="col-md-8 event-details-left">
											<?php
												$organizers = get_the_terms(get_the_ID(), 'organizers');
												if (!empty($organizers)) {
													$organizerList = [];
											?>
													<div class="event-organiser">
														Organizer:
														<?php foreach ($organizers as $organizer) {
															$organizerList[] = $organizer->name;
														}
														echo implode(', ', $organizerList);
														?>
													</div>
											<?php
												}


												$venues = get_the_terms(get_the_ID(), 'venue');
												if (!empty($venues)) {
													$venueList = [];
											?>
													<div class="event-venueList">
														Venue:
														<?php foreach ($venues as $venue) {
															$venueList[] = $venue->name;
														}
														echo implode(', ', $venueList);
														?>
													</div>
											<?php
												}

												$categories = get_the_terms(get_the_ID(), 'event_category');
												if (!empty($categories)) {
													$categoriesList = [];
											?>
													<div class="event-category">
														Categories:
														<?php foreach ($categories as $category) {
															$categoriesList[] = '<a class="event-category" href="'.get_term_link($category->term_id).'" title="'.$category->name.'">'.$category->name . '</a>';
														}
														echo implode(', ', $categoriesList);
														?>
													</div>
											<?php
												}
											?>

										</div>



									</div>
								</div>
								<?php if( !empty( get_field( 'event-teaser' ) ) ): ?>
									<div class="event-teaser">
										<p class="lead">
											<?php echo (get_field( 'event-teaser' )) ?>
										</p>
									</div>
								<?php endif; ?>
							</div>

							<?php // Get Standard Components
							if( have_rows('standard-content') ):

								echo '<div class="event-additional-content">';
								while ( have_rows('standard-content') ) : the_row();

									$section_path = 'template-parts/'.get_row_layout();

									get_template_part($section_path);

								endwhile;
								echo '</div>';

							endif; ?>
						<?php
						endwhile; // End of the loop.
						?>

					</div>
					<div class="col-md-3 d-none d-md-block">

						<?php if( is_active_sidebar( 'events-widget-side-bar' ) ) : ?>
							<div class="sidebar-primary event-navigation">
								<?php dynamic_sidebar( 'events-widget-side-bar' ); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
