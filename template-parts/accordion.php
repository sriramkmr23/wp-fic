<?php if( get_sub_field( 'accordion-include' ) == 'yes' ) :?>

    <?php $rowid = '';?>
<!-- Start Accordion -->
<section class="stmb-3 stmt-3 accordion content">
	<div class="container">
		<div class="row">
			<div class="col">

				<?php if( !empty( get_sub_field( 'accordion-heading' ) ) ): ?>
					<h2><?php echo get_sub_field( 'accordion-heading' ); ?></h2>
							<?php $rowid = preg_replace("/[^a-zA-Z]/", "-", get_sub_field( 'accordion-heading' )) . '-'. rand(1000000,9000000); ?>
					<?php else: ?>
								<?php $rowid = 'accordian-'. rand(1000000,9000000); ?>
				<?php endif; ?>
				<div id="accordion-parent-<?= $rowid?>">

					<?php

					$i = 0;

					if( have_rows( 'accordion-items' ) ):

						while( have_rows( 'accordion-items' ) ): the_row(); ?>

							<div class="card m-0">

								<?php if( !empty( get_sub_field( 'heading' ) ) ): ?>

									<a href="#<?=$rowid?>-collapse-<?php echo ++$i; ?>" data-toggle="collapse" class="card-header"><?php echo get_sub_field( 'heading' ); ?></a>

								<?php endif; ?>

								<?php if( !empty( get_sub_field( 'text' ) ) ): ?>

									<div id="<?=$rowid?>-collapse-<?php echo $i; ?>" class="collapse w-100" data-parent="#accordion-parent-<?= $rowid?>" style="">

										<div class="card-body"><?php echo get_sub_field( 'text' ); ?></div>

									</div>

								<?php endif; ?>

							</div>

						<?php endwhile; ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Accordion -->

<?php endif; ?>