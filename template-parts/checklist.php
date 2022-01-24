<?php if( get_sub_field( 'checklist-include' ) == 'yes' ) :?>

<!-- Start Checklist -->
<section class="checklist stmb-3 stmt-3">
	<div class="container">
		<div class="row">
			<div class="col">

			<?php if( !empty( get_sub_field( 'checklist-heading' ) ) ): ?>
				<h2><?php echo get_sub_field( 'checklist-heading' ); ?></h2>
			<?php endif; ?>

			<div class="checklist_text">

				<ul>

					<?php if( have_rows( 'checklist-items' ) ):

						while( have_rows( 'checklist-items' ) ): the_row(); ?>

							<?php if( get_sub_field( 'text' ) ): ?>
								<li><?php echo get_sub_field( 'text' ); ?></li>
							<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>

				</ul>

			</div>

			</div>
		</div>
	</div>
</section>
<!-- End Checklist -->

<?php endif; ?>