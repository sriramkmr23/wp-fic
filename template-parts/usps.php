<!-- Start USPs -->
<section class="bg-light mb-6 usp">
	<div class="container">
		<div class="row">

		<?php if(!empty(get_sub_field('heading'))): ?>
			<div class="col-12">
				<h2 class="display-2"><?php echo get_sub_field('heading'); ?></h2>
			</div>
		<?php endif; ?>

		</div>

		<div class="row">

		<?php if(have_rows('usp-block')):

			while(have_rows('usp-block')): the_row(); ?>

			<div class="col-md-4 px-lg-4 mb-md-4 text-center">

			<?php if(!empty(get_sub_field('icon'))): ?>
				<div class="text-center p-3">
					<?php echo get_sub_field('icon'); ?>
				</div>
			<?php endif; ?>

			<?php if(!empty(get_sub_field('heading'))): ?>
				<h3 class="display-3"><?php echo get_sub_field('heading'); ?></h3>
			<?php endif; ?>

			<?php if(!empty(get_sub_field('text'))): ?>
				<p class="lead text-center text-primary"><?php echo get_sub_field('text'); ?></p>
			<?php endif; ?>

			</div>

			<?php if(get_sub_field('usp-numbers') == 6) { ?>
				<!-- <div class="col-md-4 px-lg-4 mb-md-4 text-center">
					<div class="text-center p-3">
						<?php echo get_sub_field('usp-four-icon'); ?>
					</div>
					<h3><?php echo get_sub_field('usp-four-heading'); ?></h3>
					<div class="text-muted mb-4 mb-md-0">
						<?php echo get_sub_field('usp-four-text'); ?>
					</div>
					<hr class="d-md-none" />
				</div>
				<div class="col-md-4 px-lg-4 mb-md-4 text-center">
					<div class="text-center p-3">
						<?php echo get_sub_field('usp-five-icon'); ?>
					</div>
					<h3><?php echo get_sub_field('usp-five-heading'); ?></h3>
					<div class="text-muted mb-4 mb-md-0">
						<?php echo get_sub_field('usp-five-text'); ?>
					</div>
					<hr class="d-md-none" />
				</div>
				<div class="col-md-4 px-lg-4 mb-md-4 text-center">
					<div class="text-center p-3">
						<?php echo get_sub_field('usp-six-icon'); ?>
					</div>
					<h3><?php echo get_sub_field('usp-six-heading'); ?></h3>
					<div class="text-muted mb-4 mb-md-0">
						<?php echo get_sub_field('usp-six-text'); ?>
					</div>
				</div> -->
			<?php } ?>

			<?php endwhile; ?>

		<?php endif; ?>
		</div>

	</div>
</section>
<!-- End USPs -->