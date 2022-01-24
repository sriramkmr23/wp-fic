<?php if( get_sub_field( 'text-include' ) == 'yes' ) :?>

<!-- Start Text Content -->
<section class="text content stmb-3 stmt-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php if( !empty( get_sub_field( 'text-text' ) ) ):
					echo get_sub_field( 'text-text' );
				endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- End Text Content -->

<?php endif; ?>

