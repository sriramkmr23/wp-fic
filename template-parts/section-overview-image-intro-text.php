<!-- Start Overview Image + Intro Text -->
<section class="section-overview-image-text">

		<div class="section-overview-hero section-overview__header cover"
         	style="background-image: url(<?php echo get_field( 'overview-image' )[ 'url' ]; ?>);
                background-repeat: no-repeat;
                background-size: cover;">

	        <div class="section-overview-image">
	            <img src="<?php echo get_field( 'overview-image' )[ 'url' ]; ?>" alt="#">
	        </div>

			<div class="container">
				<div class="section-overview-body col-xl-6 col-md-12 section-overview__text-left">
					<div class="section-overview__card section-overview__text">
						<div class="overview__text_background">
							<?php if( !empty( get_the_title() ) ): ?>
								<h1 class=""><?php echo get_the_title(); ?></h1>
							<?php endif; ?>

							<?php if( !empty( get_field( 'overview-text' ) ) ): ?>
								<p class="lead font-weight-normal"><?php echo get_field( 'overview-text' ); ?></p>
							<?php endif; ?>
						</div>

						<?php if( !empty( get_field( 'overview-button' ) ) ): ?>
							<a href="<?php echo get_field( 'overview-button' )[ 'url' ];?>" target="<?php echo get_field( 'overview-button' )[ 'target' ];?>" class="btn btn-lg btn-primary"><?php echo get_field( 'overview-button' )[ 'title' ]; ?></a>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
</section>
<!-- Start Overview Image + Intro Text -->