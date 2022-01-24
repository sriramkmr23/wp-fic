<?php if( get_sub_field( 'call-to-action-include' ) == 'yes' ) :?>

<!-- Start Call to Action Button -->
<section class="stmb-3 stmt-3 call-to-action">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php if( !empty( get_sub_field( 'call-to-action-button' ) ) ): ?>
					<a href="<?php echo get_sub_field( 'call-to-action-button' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'call-to-action-button' )[ 'target' ]; ?>" class="btn btn-lg btn-primary"><?php echo get_sub_field( 'call-to-action-button' )[ 'title' ]; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- End Call to Action Button -->

<?php endif; ?>