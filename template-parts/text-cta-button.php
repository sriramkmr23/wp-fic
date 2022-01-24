<?php if( get_sub_field( 'text-cta-button-include' ) == 'yes' ): ?>

<!-- Start Full Width Feature -->
<section id="text-cta-button" class="" >

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-sm-4 pr-sm-4 py-5 text-center">

			<?php if( !empty( get_sub_field( 'text-cta-heading' ) ) ): ?>
				<h2 class="display-2"><?php echo get_sub_field('text-cta-heading'); ?></h2>
			<?php endif; ?>

			<?php if( !empty( get_sub_field( 'text-cta-text' ) ) ): ?>
				<div class="py-1 content"><?php echo get_sub_field('text-cta-text'); ?></div>
			<?php endif; ?>

			<?php if( !empty( get_sub_field( 'text-cta-button' ) ) ): ?>
				<a href="<?php echo get_sub_field( 'text-cta-button' )[ 'url' ]; ?>"
					target="<?php echo get_sub_field( 'text-cta-button' )[ 'target' ]; ?>"
					class="btn btn-primary ml-2"><?php echo get_sub_field( 'text-cta-button' )[ 'title' ]; ?>
				</a>
			<?php endif; ?>

			</div>
		</div>
	</div>
</section>
<!-- End Full Width Feature -->

<?php endif; ?>