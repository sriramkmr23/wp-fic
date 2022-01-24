<?php if(!empty( get_field( 'hero-space-image' ) ) ) : ?>

<!-- Start Hero Space -->
<section  class="hero-space">
	<div class="jumbotron jumbotron-fluid py-0 mb-0 hero-space__image" style="background-image: url(<?php echo get_field( 'hero-space-image' )[ 'url' ]; ?>)">

		<div class="container">
			<div class="hero-space__position-left">
				<div class="col-md-8 hero-space__card">

					<?php if( !empty( get_field( 'hero-space-heading' ) ) ): ?>
						<h1 class="display-1 text-white"><?php echo get_field( 'hero-space-heading' ); ?></h1>
					<?php endif; ?>

					<?php if( !empty( get_field( 'hero-space-text' ) ) ): ?>
						<p class="lead mt-3 mb-5 text-white"><?php echo get_field( 'hero-space-text' ); ?></p>
					<?php endif; ?>

					<?php
					if( !empty( get_field( 'hero-space-buttons' ) ) ):
						$counter = 0;
						while ( have_rows('hero-space-buttons') ) : the_row();
							if($counter == 0) {
								$cta_class = 'btn-info';
							} elseif($counter == 1) {
								//$cta_class = 'btn-primary ml-3';
                                				$cta_class = 'btn-info ml-3';
							} ?>
							<a href="<?php echo get_sub_field('hero-space-buttons-call-to-action')['url']; ?>" target="<?php echo get_sub_field( 'hero-space-buttons-call-to-action' )[ 'target' ]; ?>" class="btn btn-lg <?php echo $cta_class; ?> px-5 rounded-custom"><?php echo get_sub_field('hero-space-buttons-call-to-action')['title']; ?> <i class="fas fa-chevron-right ml-2"></i></a>
							<?php
						$counter++;
						endwhile;
					endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Hero Space -->

<?php endif; ?>