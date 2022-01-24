<?php if( get_sub_field( 'image-text-include' ) == 'yes' ) :?>

<!-- Start Location Image + Text -->
<section class="location-image-text content stmb-3 stmt-3">
	<div class="container">
		<div class="row location-wrapper">

			<?php if( get_sub_field( 'image-text-position' ) == 'left' ) {
				include( 'inc/location-image-text-image.php' );
				include( 'inc/location-image-text-text.php' );
			} else {
				include( 'inc/location-image-text-text.php' );
				include( 'inc/location-image-text-image.php' );
			} ?>

		</div>
	</div>
</section>
<!-- End Location Image + Text -->

<?php endif; ?>