<?php if( get_sub_field( 'call-to-action-box-include' ) == 'yes' ) :?>

<!-- Start Call to Action Box -->
<section class="call-to-action-box content stmb-3 stmt-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="call-to-action-box-inner">

				<?php if( !empty( get_sub_field( 'call-to-action-box-heading' ) ) ): ?>
					<h2><?php echo get_sub_field( 'call-to-action-box-heading' ); ?></h2>
				<?php endif; ?>

				<?php if( !empty( get_sub_field( 'call-to-action-box-text' ) ) ): ?>
					<?php echo get_sub_field( 'call-to-action-box-text' ); ?>
				<?php endif; ?>

				<?php if( !empty( get_sub_field( 'call-to-action-box-button' ) ) ): ?>
					<a class="btn btn-primary mt-3" href="<?php echo get_sub_field( 'call-to-action-box-button' )[ 'url' ]; ?>" target="<?php echo get_sub_field( 'call-to-action-box-button' )[ 'target' ]; ?>" role="button"><?php echo get_sub_field( 'call-to-action-box-button' )[ 'title' ]; ?></a>
				<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Call to Action Box -->

<?php endif; ?>