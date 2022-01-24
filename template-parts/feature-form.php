<?php if( get_sub_field( 'feature-form-include' ) == 'yes' ) :?>

<!-- Start Feature + Form -->
<section class="mb-6 event-form">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-lg-8 pr-md-0">
				<div class="event-form__event-block event-form__event-image" style="background-image: url('<?php echo get_sub_field( 'feature-form-image' )[ 'url' ]; ?>');">
					<div class="container">
						<div class="row">
							<div class="col event-form__event-text">

							<?php if( !empty( get_sub_field( 'feature-form-heading' ) ) ): ?>
								<h3 class="display-3"><?php echo get_sub_field( 'feature-form-heading' ); ?></h3>
							<?php endif; ?>

							<?php if( !empty( get_sub_field( 'feature-form-text' ) ) ): ?>
								<p><?php echo get_sub_field( 'feature-form-text' ); ?></p>
							<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5 col-lg-4 pl-md-0">
				<div class="event-form__register-form bg-light">

				<?php if( !empty( get_sub_field( 'form-heading' ) ) ): ?>
					<h3 class="display-3"><?php echo get_sub_field( 'form-heading' ); ?></h3>
					<hr />
				<?php endif; ?>

				<?php if( !empty( get_sub_field( 'form-embed-code' ) ) ): ?>
					<p><?php echo get_sub_field( 'form-embed-code' ); ?></p>
				<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Feature + Form -->

<?php endif; ?>