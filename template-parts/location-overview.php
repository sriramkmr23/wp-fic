<?php if( get_field( 'location-overview-include' ) == 'yes' ) :?>

<!-- Start location Overview -->
<section class="mb-6 pt-3 location-overview">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center content">

			<?php if( !empty(get_field( 'location-overview-heading' ) ) ): ?>
				<h2 class="display-2"><?php echo get_field( 'location-overview-heading' ); ?></h2>
			<?php endif; ?>

			<?php if( !empty(get_field( 'location-overview-text' ) ) ): ?>
				<?php echo get_field( 'location-overview-text' ); ?>
			<?php endif; ?>

			</div>
		</div>
	</div>
</section>
<!-- Start location Overview -->

<?php endif; ?>