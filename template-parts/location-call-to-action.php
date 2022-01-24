<?php if( get_sub_field( 'call-to-action-include' ) == 'yes' ) :?>

<!-- Start Call to Action Button -->
<section class="stmb-3 stmt-3 location-call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
				<?php if( !empty( get_sub_field( 'call-to-action-button-left' ) ) ): ?>
					<a href="<?php echo get_sub_field( 'call-to-action-button-left' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'call-to-action-button-left' )[ 'target' ]; ?>" class="btn btn-lg btn-secondary"><?php echo get_sub_field( 'call-to-action-button-left' )[ 'title' ]; ?></a>
				<?php endif; ?>
			</div>
            <div class="col-md-6 text-center">
				<?php if( !empty( get_sub_field( 'call-to-action-button-right' ) ) ): ?>
					<a href="<?php echo get_sub_field( 'call-to-action-button-right' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'call-to-action-button-right' )[ 'target' ]; ?>" class="btn btn-lg btn-secondary"><?php echo get_sub_field( 'call-to-action-button-right' )[ 'title' ]; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- End Call to Action Button -->

<?php endif; ?>