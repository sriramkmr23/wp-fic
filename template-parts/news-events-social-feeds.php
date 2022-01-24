<!-- Start News, Events + Social Feeds -->
<section class="mb-6 news-events-social-feeds">
	<div class="container">
		<div class="row py-3">

		<?php if(have_rows('news-events-facebook-twitter-block')):

			while(have_rows('news-events-facebook-twitter-block')): the_row();

				if(get_sub_field('include') == 'yes'): ?>

					<div class="col-md-6 border-right mb-4 mb-md-0">
						<div class="card card-default border-0">

						<?php if( !empty( get_sub_field( 'heading' ) ) ): ?>
							<div class="card-header bg-transparent border-0 px-md-0">
								<h3 class="mb-0"><?php echo get_sub_field('heading'); ?></h3>
							</div>
						<?php endif; ?>

							<div class="card-body pb-0 pb-md-2 px-md-0">
								<?php

								if( get_row_layout() == 'news'):

									if( have_rows('news-block') ):

										echo '<ul class="list-unstyled">';
										while ( have_rows('news-block') ) : the_row();
											?>
											<li class="media mb-4">
												<a href="<?php echo get_sub_field('button')['url']; ?>">
													<img src="<?php echo get_sub_field('image'); ?>" class="mr-3" alt="">
													<div class="media-body">
														<h5 class="mt-0 mb-1"><?php echo get_sub_field('heading'); ?></h5>
														<?php echo get_sub_field('text'); ?>
													</div>
												</a>
											</li>
											<?php
										endwhile;
										echo '</ul>';

									endif;

								elseif( get_row_layout() == 'events'):

									if( have_rows('events-block') ):

										echo '<ul class="list-unstyled">';
										while ( have_rows('events-block') ) : the_row();
											?>
											<li class="media mb-4">
												<img src="<?php echo get_sub_field('image'); ?>" class="mr-3" alt="">
												<div class="media-body">
													<h5 class="mt-0 mb-1"><?php echo get_sub_field('heading'); ?></h5>
													<?php if( !empty( get_sub_field( 'start-date') ) ):
														echo "Start Date: " . get_sub_field('start-date');
													endif; ?>
													<?php if( !empty( get_sub_field( 'end-date') ) ):
														echo ", End Date: " . get_sub_field('end-date');
													endif; ?>
													<p><?php echo get_sub_field('text'); ?></p>
												</div>
											</li>
											<?php
										endwhile;
										echo '</ul>';

									endif;

								elseif( get_row_layout() == 'facebook'): ?>

									<div class="fb-page" data-href="<?php echo get_sub_field('page-url'); ?>" data-tabs="timeline" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="<?php echo get_sub_field('page-url'); ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo get_sub_field('page-url'); ?>">UMass Boston Navitas Global Student Success Program</a></blockquote></div>

								<?php elseif( get_row_layout() == 'twitter'): ?>

									<a class="twitter-timeline" data-width="500" data-height="500" href="<?php echo get_sub_field('page-url'); ?>?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

								<?php endif; ?>

							</div>
						</div>
					</div>

				<?php endif;

			endwhile;

		endif; ?>






			<!-- <div class="col-md-6 border-right mb-4 mb-md-0">
				<div class="card card-default border-0">
					<div class="card-header bg-transparent border-0 px-md-0"><h3 class="mb-0"><?php echo get_sub_field('news-events-social-feeds-news-section-heading'); ?></h3></div>
					<div class="card-body pb-0 pb-md-2 px-md-0">
						<?php
						if( have_rows('news-events-social-feeds-news') ):
							echo '<ul class="list-unstyled">';
							while ( have_rows('news-events-social-feeds-news') ) : the_row();
								?>
								<li class="media mb-4">
									<img src="<?php echo get_sub_field('news-events-social-feeds-news-image'); ?>" class="mr-3" alt="">
									<div class="media-body">
										<h5 class="mt-0 mb-1"><?php echo get_sub_field('news-events-social-feeds-news-heading'); ?></h5>
										<?php echo get_sub_field('news-events-social-feeds-news-text'); ?>
									</div>
								</li>
								<?php
							endwhile;
							echo '</ul>';
						endif;
						?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card card-default border-0">
					<div class="card-header bg-transparent border-0 px-md-0">
						<h3 class="mb-0"><?php echo get_sub_field('news-events-social-feeds-events-section-heading'); ?></h3>
					</div>
					<div class="card-body pb-0 pb-md-2 px-md-0">
						<?php
						if( have_rows('news-events-social-feeds-events') ):
							echo '<ul class="list-unstyled">';
							while ( have_rows('news-events-social-feeds-events') ) : the_row();
								?>
								<li class="media mb-4">
									<img src="<?php echo get_sub_field('news-events-social-feeds-event-image'); ?>" class="mr-3" alt="">
									<div class="media-body">
										<h5 class="mt-0 mb-1"><?php echo get_sub_field('news-events-social-feeds-event-name'); ?></h5>
										<?php echo get_sub_field('news-events-social-feeds-event-text'); ?>
									</div>
								</li>
								<?php
							endwhile;
							echo '</ul>';
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row py-3">
			<div class="col-md-6 border-right mb-4 mb-md-0">
				<div class="card card-default border-0">
					<div class="card-header bg-transparent border-0 px-md-0"><h3 class="mb-0"><i class="fab fa-facebook-f mr-1"></i> <?php echo get_sub_field('news-events-social-feeds-facebook-section-heading'); ?></h3></div>
					<div class="card-body pb-0 pb-md-2 px-md-0">
						<div class="fb-page" data-href="<?php echo get_sub_field('news-events-social-feeds-facebook-url'); ?>" data-tabs="timeline" data-width="500" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="<?php echo get_sub_field('news-events-social-feeds-facebook-url'); ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo get_sub_field('news-events-social-feeds-facebook-url'); ?>">UMass Boston Navitas Global Student Success Program</a></blockquote></div>
					</div>
					<div class="card-footer bg-transparent border-0 px-md-0">
						<a href="<?php echo get_sub_field('news-events-social-feeds-facebook-url'); ?>" class="btn btn-primary btn-sm" target="_blank">Visit Our Facebook Page</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card card-default border-0">
					<div class="card-header bg-transparent border-0 px-md-0">
						<h3 class="mb-0"><i class="fab fa-twitter mr-1"></i> <?php echo get_sub_field('news-events-social-feeds-twitter-section-heading'); ?></h3>
					</div>
					<div class="card-body pb-0 pb-md-2 px-md-0">
						<a class="twitter-timeline" data-width="500" data-height="500" href="<?php echo get_sub_field('news-events-social-feeds-twitter-url'); ?>?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
					<div class="card-footer bg-transparent border-0 px-md-0">
						<a href="<?php echo get_sub_field('news-events-social-feeds-twitter-url'); ?>" class="btn btn-primary btn-sm" target="_blank">Visit us on Twitter</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>
<!-- End News, Events + Social Feeds -->