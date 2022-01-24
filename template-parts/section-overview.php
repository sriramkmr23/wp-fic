<?php if( get_field( 'section-overview-include' ) == 'yes' ) :?>

<!-- Start section Overview -->
<section class="mb-6 pt-3 section-overview">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left content">

			<?php if( !empty(get_field( 'section-overview-heading' ) ) ): ?>
				<h2 class="display-2 text-center"><?php echo get_field( 'section-overview-heading' ); ?></h2>
			<?php endif; ?>

			<?php if( !empty(get_field( 'section-overview-text' ) ) ): ?>
				<?php echo get_field( 'section-overview-text' ); ?>
			<?php endif; ?>

			</div>
		</div>
	</div>
</section>
<!-- Start section Overview -->

<?php endif; ?>