<?php if( get_sub_field( 'primary-feature-include' ) == 'yes' ) :?>

<!-- Start Primary Feature -->
<section class="primary-feature stmb-3 stmt-3">
	<div class="container">
		<div class="primary-feature-items">
			<div class="row">

				<?php if( get_sub_field( 'primary-feature-position' ) == 'left' ): ?>
					<div class="col-md-7">
						<img class="img-fluid" src="<?php echo get_sub_field( 'primary-feature-image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'primary-feature-image' )[ 'alt' ]; ?>" />
					</div>

					<div class="col-md-5 content">

					<?php if( !empty( get_sub_field( 'primary-feature-heading' ) ) ): ?>
						<h2 class="display-2"><?php echo get_sub_field('primary-feature-heading'); ?></h2>
					<?php endif; ?>

					<?php if( !empty( get_sub_field( 'primary-feature-text' ) ) ): ?>
						<?php echo get_sub_field('primary-feature-text'); ?>
					<?php endif; ?>

					<?php if( !empty( get_sub_field( 'primary-feature-button' ) ) ): ?>
						<a href="<?php echo get_sub_field( 'primary-feature-button' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'primary-feature-button' )[ 'target' ]; ?>" class="btn btn-info mt-3"><?php echo get_sub_field( 'primary-feature-button' )[ 'title' ]; ?></a>
					<?php endif; ?>
					</div>

				<?php elseif( get_sub_field( 'primary-feature-position' ) == 'right' ): ?>

					<div class="col-md-5 order-12 order-md-1 content">

					<?php if( !empty( get_sub_field( 'primary-feature-heading' ) ) ): ?>
						<h2 class="display-2"><?php echo get_sub_field('primary-feature-heading'); ?></h2>
					<?php endif; ?>

					<?php if( !empty( get_sub_field( 'primary-feature-text' ) ) ): ?>
						<?php echo get_sub_field('primary-feature-text'); ?>
					<?php endif; ?>

					<?php if( !empty( get_sub_field( 'primary-feature-button' ) ) ): ?>
						<a href="<?php echo get_sub_field( 'primary-feature-button' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'primary-feature-button' )[ 'target' ]; ?>" class="btn btn-lg btn-info mt-3"><?php echo get_sub_field( 'primary-feature-button' )[ 'title' ]; ?></a>
					<?php endif; ?>
					</div>

					<div class="col-md-7 order-1 order-md-12 pb-4">
						<img class="img-fluid" src="<?php echo get_sub_field( 'primary-feature-image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'primary-feature-image' )[ 'alt' ]; ?>" />
					</div>

				<?php endif; ?>


			</div>
		</div>
	</div>
</section>
<!-- End Primary Feature -->

<?php endif; ?>