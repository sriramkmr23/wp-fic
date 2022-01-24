<?php if( get_field( 'college-overview-include' ) == 'yes' ) :?>

<!-- Start College Overview -->
<section class="mb-6 college-overview">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center content">

			<?php if( !empty(get_field( 'college-overview-heading' ) ) ): ?>
				<h2 class="display-2"><?php echo get_field( 'college-overview-heading' ); ?></h2>
			<?php endif; ?>

			<?php if( !empty(get_field( 'college-overview-text' ) ) ): ?>
				<?php echo get_field( 'college-overview-text' ); ?>
			<?php endif; ?>

			</div>
		</div>
	</div>
</section>
<!-- Start College Overview -->

<?php endif; ?>