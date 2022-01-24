<?php if( get_sub_field( 'secondary-features-include' ) == 'yes' ) :?>

<!-- Start Secondary Features -->
<section class="mb-6 secondary-features">
	<div class="container">
		<div class="row">

		<?php if( !empty( get_sub_field( 'secondary-features-heading' ) ) ): ?>
			<div class="col-12 pb-4 text-center">
				<h2 class="display-2"><?php echo get_sub_field( 'secondary-features-heading' ); ?></h2>
			</div>
		<?php endif; ?>

		</div>

		<div class="row">

		<?php if( have_rows( 'secondary-feature-items' ) ):

			while( have_rows( 'secondary-feature-items' ) ): the_row(); ?>

			<div class="col-12 col-lg-6 mb-3 mb-lg-0 secondary-feature-bg">
				<div class="secondary-features__profile media p-3">

				<?php if( !empty( get_sub_field( 'image' ) ) ): ?>
					<img class="secondary-features__profile-image mr-3" src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>" />
				<?php endif; ?>

					<div class="media-body content">
						<?php if( !empty( get_sub_field( 'heading' ) ) ): ?>
							<h3 class="display-3"><?php echo get_sub_field('heading'); ?></h3>
						<?php endif; ?>

						<?php if( !empty( get_sub_field( 'text' ) ) ): ?>
							<?php echo get_sub_field('text'); ?>
						<?php endif; ?>

						<?php if( get_sub_field( 'button' ) ): ?>
							<a href="<?php echo get_sub_field( 'button' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'button' )[ 'target' ]; ?>" class="btn btn-primary"><?php echo get_sub_field( 'button' )[ 'title' ]; ?></a>
						<?php endif; ?>

					</div>

				</div>

			</div>

			<?php endwhile; ?>

		<?php endif; ?>

		</div>
	</div>

</section>
<!-- End Secondary Features -->

<?php endif; ?>