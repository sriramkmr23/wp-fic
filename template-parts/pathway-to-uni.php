<?php if(get_field('pathway-to-uni-include') == 'yes'): ?>

<!-- Start Pathway to Uni -->
<section class="stmb-3 stmt-3 bg-white pathway-to-uni">
	<div class="container">

	<?php if(!empty( get_field( 'pathway-heading' ) ) ): ?>
		<div class="row">
			<div class="col">
				<h2 class="text-bold mb-3"><?php echo get_field( 'pathway-heading' ); ?></h2>
			</div>
		</div>
	<?php endif; ?>

		<div class="row mx-0">

		<?php
			$i = 0;

			if(have_rows( 'stage-items' )):

			while(have_rows( 'stage-items' )): the_row();

				if (get_sub_field( 'heading' ) != '') : ?>
					<div class="col-lg-4 py-4 py-lg-3 <?php echo 'col_' . ++$i; ?> arrow_box">
						<div class="d-flex h-100 row mx-0">
							<div class="col inner-col">

							<?php if(!empty( get_sub_field( 'heading' ) ) ): ?>
								<div class="text-white text-center"><?php echo get_sub_field( 'heading' ); ?></div>
							<?php endif; ?>

							</div>
						</div>
					</div>

			<?php
				endif;
			endwhile;
			?>

		<?php endif; ?>

		</div>
	</div>
</section>
<!-- End Pathway to Uni -->

<?php endif; ?>