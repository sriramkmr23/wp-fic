<!-- Start Key Information -->
<section class="key-information">
	<div class="container">
		<div class="program-overview__details">


			<div class="no-gutters p-4 key-information__details">

                <div class="row key-information-border-bottom">
                    <div class="col-md-12">
                        <div class="program-overview__intro content">
                            <?php if(get_field('key-information-heading')): ?>
                                <h2 class="program-overview__title"><?php echo get_field('key-information-heading'); ?></h2>
                            <?php endif; ?>

                            <?php if(get_field('key-information-text')): ?>
                                <?php echo get_field('key-information-text'); ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>


				<div class="row">
					<div class="col p-3">
						<h2 class="program-overview__title">KEY INFORMATION</h2>
					</div>
				</div>

				<div class="row key-information-border-bottom">
					<div class="col-md-4 col-lg-4 mb-3 mb-md-0">
						<div class="media program-overview__details">
							<div class="media-icon">
								<span class="fa fa-clock fa-2x pr-2" aria-hidden="true"></span>
							</div>
							<div class="media-body">
								<h3 class="">Duration</h3>

								<ul class="program-overview__duration-list">
									<?php if( have_rows('key-information-duration') ): ?>

										<?php while( have_rows('key-information-duration') ): the_row();

											$durations = get_sub_field('course-duration'); ?>

											<li><?php echo $durations; ?></li>

										<?php endwhile; ?>

									<?php endif; ?>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 mb-3 mb-md-0">
						<div class="media program-overview__details">
							<div class="media-icon">
								<span class="fa fa-calendar fa-2x pr-2" aria-hidden="true"></span>
							</div>
							<div class="media-body">
								<h3 class="">Intakes</h3>
								<ul class="program-overview__intake-list">
									<?php if( have_rows('key-information-intakes') ): ?>

										<?php while( have_rows('key-information-intakes') ): the_row();

											$intakes = get_sub_field('course-intake'); ?>

											<li><?php echo $intakes; ?></li>

										<?php endwhile; ?>

									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4 mb-3 mb-md-0">
						<div class="media program-overview__details">
							<div class="media-icon">
								<span class="fa fa-globe fa-2x pr-2" aria-hidden="true"></span>
							</div>
							<div class="media-body">
								<h3 class="">Location</h3>
								<ul class="program-overview__location-list">
								<?php if(get_field('key-information-location')): ?>
									<li><?php echo nl2br( get_field('key-information-location') ); ?></li>
								<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="p-3 apply-btn-holder">
						<?php if(get_field('key-information-button')): ?>
							<a href="<?php echo get_field('key-information-button')['url']; ?>" class="btn btn-primary"><?php echo get_field('key-information-button')['title']; ?></a>
						<?php endif; ?>

						<?php if(get_field('key-information-button-2')): ?>
							<a href="<?php echo get_field('key-information-button-2')['url']; ?>" class="btn btn-primary"><?php echo get_field('key-information-button-2')['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Key Information -->