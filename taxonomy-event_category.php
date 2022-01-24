<?php
/**
 * The template used to display archive content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ECUColombo
 */

get_header(); ?>

<!-- Start Main -->
<main id="main" class="default-page">

	<div class="container">
		<div class="row py-5">

			<div class="col-md-9">
				<?php
					$permalink = rtrim($wp->request, '/');

					if (!empty($permalink)) {

						$slugs = ltrim($permalink, '/');;
						$slugs = explode('/', $slugs);

						echo '<nav aria-label="Breadcrumb">';
						echo '<ol class="breadcrumb bg-transparent pt-3">';

						echo '<li class="breadcrumb-item">';
						echo '<a href="'. site_url() .'">Home</a></li>';
						if (count($slugs) > 0) {

							foreach ($slugs as $slug) {

								$page = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE post_name = '".$slug."' AND post_status = 'publish'");
								if( $page ) {

									echo '<li class="breadcrumb-item">';
									echo '<a href="'. get_permalink($page->ID) .'">'.
											$page->post_title.'</a>
											</li>';
								} else {
									$term = $wpdb->get_row("SELECT * FROM $wpdb->terms WHERE slug = '".$slug."' ");

									if( $term ) {

										echo '<li class="breadcrumb-item active">';
										echo $term->name;
										echo '</li>';
									} else {
										echo '<li class="breadcrumb-item">';
										echo '<a>'.ucwords($slug) . '</a>';
										echo '</li>';
									}
								}
							}
						}
						echo '</ol>';
						echo '</nav>';

					} else {
						// Get BreadCrumb Component
						get_template_part('template-parts/breadcrumb');
					}
				?>


				<section class="page-title">
					<div class="container events-tax">
						<div class="row event-item">


								<h1><?php echo str_replace('Event Category: ','',get_the_archive_title()); ?></h1>

								<?php //post loop
								while ( have_posts() ) : the_post(); ?>
									<div class="col-md-9">
										<hr size="10">
										<article class="post-height" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

											<a class="event-link" href="<?php echo get_permalink();?>">
												<h2 class="display-2"><?php the_title(); ?></h2>
											</a>
											<?php echo date('d F Y', strtotime(get_field( 'event-start-date' ))); ?>
											<div class="event-teaser"><?php echo get_field( 'event-teaser' ); ?></div>

											<a class="event-link" href="<?php echo get_permalink();?>">
												<div class="arrow-wrapper">
													<div class="wrapper-content">
														Read more
														<img class="arrow" src="<?php echo get_stylesheet_directory_uri();?>/images/red-arrow-short.png" alt="Read more" title="Read more">
													</div>
												</div>
											</a>
										</article>
									</div>
									<div class="col-md-3 event-image">
										<?php if( !empty( get_field( 'event-thumbnail' ) ) ): ?>
											<img class="card-img-top" src="<?php echo get_field( 'event-thumbnail' )[ 'url' ]; ?>" alt="<?php echo get_field( 'event-thumbnail' )[ 'alt' ]; ?>" />
										<?php endif; ?>
									</div>
								<?php endwhile; ?>



						</div>
					</div>
				</section>
			</div>

			<div class="col-md-3 d-none d-md-block">
				<aside class="sidebar m-0 mb-4 news-sidebar-section">
					<div class="py-5">
						<?php dynamic_sidebar('events-widget-side-bar'); ?>
					</div>
				</aside>
			</div>

		</div>
	</div>

</main>
<!-- End Main -->

<?php
get_footer();

?>