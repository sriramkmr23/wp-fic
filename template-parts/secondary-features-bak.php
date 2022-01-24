<?php if( get_sub_field('secondary-features-include') == 'yes' ) : ?>

<!-- Start Secondary Feature -->
<section class="secondary-promo py-5">
	<div class="container">
		<div class="row">

		<?php if( have_rows( 'secondary-feature-items' ) ):

			while( have_rows( 'secondary-feature-items' ) ): the_row(); ?>

			<div class="col-12 col-lg-6">
				<div class="secondary-promo__box row no-gutters">

					<div class="secondary-promo__image col-lg-6 d-lg-block bg-light" style="background:url('<?php echo get_sub_field( 'image' )[ 'url' ]; ?>') no-repeat; background-size:cover;">
					</div>

					<div class="col-lg-6 col-md-12 bg-primary p-4">
						<div class="h-100">
						<?php if( !empty( get_sub_field( 'heading' ) ) ): ?>
							<h3 class="mt-0 mb-1"><?php echo get_sub_field( 'heading' ); ?></h3>
						<?php endif; ?>

						<?php if( !empty( get_sub_field( 'text' ) ) ): ?>
							<?php echo get_sub_field( 'text' ); ?>
						<?php endif; ?>

						<?php if( !empty( get_sub_field( 'button' ) ) ): ?>
							<a href="<?php echo get_sub_field( 'button' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'button' )[ 'target' ]; ?>" class="btn btn-md btn-outline-light px-5"><?php echo get_sub_field( 'button' )[ 'title' ]; ?></a>
						<?php endif; ?>
						</div>
					</div>
					
				</div>
			</div>
			
			<?php endwhile; ?>

		<?php endif; ?>
			
		</div>
	</div>
</section>
<!-- End Secondary Feature -->

<?php endif; ?>