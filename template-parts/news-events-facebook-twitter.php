<?php if( get_sub_field( 'news-events-facebook-twitter-include' ) == 'yes' ) :?>


<!-- Start News, Events + Social Feeds -->
<section class="mb-6 news-events-social-feeds">
	<div class="container">
		<div class="row">

		<?php if( have_rows( 'news-events-facebook-twitter-items' ) ):

			while( have_rows( 'news-events-facebook-twitter-items' ) ): the_row(); ?>

					<div class="col-lg-6 mb-4 mb-md-0">
						<div class="">

							<?php if( get_row_layout() == 'news'): ?>

								<div class="bg-light p-4">
									<h3 class="display-3 mb-0">News</h3>
								</div>

								<div class="bg-light">

									<?php if( have_rows('news-items') ):

										echo '<ul class="list-unstyled">';
										while ( have_rows('news-items') ) : the_row(); ?>

											<li class="bg-light">
												<a href="<?php echo get_sub_field( 'link' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'link' )[ 'target' ]; ?>">
													<div class="media p-4 mb-1">
														<img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" class="mr-3" alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>">
														<div class="media-body">
															<h4 class="mt-0 mb-1"><?php echo get_sub_field( 'heading' ); ?></h4>
															<p><?php echo get_sub_field( 'text' ); ?></p>
														</div>
													</div>
												</a>
											</li>

										<?php endwhile;
										echo '</ul>';

									endif; ?>

								</div>

							<?php elseif( get_row_layout() == 'events' ): ?>

								<div class="bg-light p-4">
									<h3 class="display-3 mb-0">Events</h3>
								</div>

								<div class="bg-light">

									<?php if( have_rows('event-items') ):

										echo '<ul class="list-unstyled">';
										while ( have_rows('event-items') ) : the_row(); ?>

											<li>
												<a href="<?php echo get_sub_field( 'link' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'link' )[ 'target' ]; ?>">
													<div class="media p-4 mb-1">
														<img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" class="mr-3" alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>">
														<div class="media-body">
															<h4 class="mt-0 mb-1"><?php echo get_sub_field( 'heading' ); ?></h4>
															<?php if( !empty( get_sub_field( 'start-date') ) ):

																$start_date = get_sub_field( 'start-date', false, false );
																$start_date = new DateTime($start_date);
																echo '<span class="far fa-calendar-alt fa-lg"></span> ' . $start_date->format('l, j M Y');

															endif; ?>
															<?php if( !empty( get_sub_field( 'end-date') ) ):

																$end_date = get_sub_field( 'end-date', false, false );
																$end_date = new DateTime($end_date);
																echo ' to ' . $end_date->format('l, j M Y');
															endif; ?>
															<p><?php echo get_sub_field( 'text' ); ?></p>
														</div>
													</div>
												</a>
											</li>

										<?php endwhile;
										echo '</ul>';

									endif; ?>

								</div>

							<?php elseif( get_row_layout() == 'facebook' ): ?>

								<div id="fb-root"></div>
								<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=2014547548793761&autoLogAppEvents=1"></script>

								<div class="card-header border-0 p-4 bg-light">
									<h3 class="display-3 mb-0"><span class="fab fa-facebook-square" style="color:#3b5998;"></span> <?php echo get_sub_field('facebook-heading'); ?></h3>
								</div>

								<div class="card-body bg-light p-4">
									<div class="fb-page" data-href="<?php echo get_sub_field( 'facebook-link' ); ?>" data-tabs="timeline" data-width="500" data-height="557" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"></div>

								</div>

							<?php elseif( get_row_layout() == 'twitter' ): ?>

								<div class="card-header bg-light border-0 p-4">
									<h3 class="display-3 mb-0"><span class="fab fa-twitter-square" style="color:#00acee;"></span> <?php echo get_sub_field('twitter-heading'); ?></h3>
								</div>

								<div class="card-body bg-light pb-0 pb-md-2 p-4">
									<a class="twitter-timeline" data-width="500" data-height="557" href="<?php echo get_sub_field( 'twitter-link' ); ?>?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
								</div>

							<?php endif; ?>

						</div>
					</div>

			<?php endwhile;

		endif; ?>

		</div>
	</div>
</section>
<!-- End News, Events + Social Feeds -->

<?php endif; ?>