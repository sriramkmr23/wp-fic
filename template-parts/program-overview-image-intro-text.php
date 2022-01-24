<!-- Start Program Overview Image Intro Text -->
<section class="program-overview">

	<div class="program-overview-hero program-overview__header cover"
		style="background-image: url(<?php echo get_field( 'program-overview-image' )[ 'url' ]; ?>);
			background-repeat: no-repeat;
			background-size: cover;">

		<div class="program-overview-image">
			<img src="<?php echo get_field( 'program-overview-image' )[ 'url' ]; ?>" alt="#">
		</div>

		<div class="container h-100">
			<div class="h-100 program-overview-body col-md-12 program-overview__text-left">
				<div class="program-overview__card program-overview__text text-left">

					<h1 class="display-1"><?php echo get_the_title(); ?></h1>

					<?php if( !empty( get_field( 'program-overview-text' ) ) ): ?>

						<p class="lead"><?php echo get_field( 'program-overview-text' ); ?></p>

					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Program Overview Image Intro Text-->