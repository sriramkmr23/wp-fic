<?php if( get_sub_field( 'full-width-feature-include' ) == 'yes' ): ?>

<!-- Start Full Width Feature -->
<section id="full-width-feature" class="jumbotron jumbotron-fluid interstitial mb-6" style="background-image: url('<?php echo get_sub_field ("full-width-feature-image" )[ "url" ]; ?>')">

	<?php if(get_sub_field( 'full-width-feature-opaque-image-overlay' ) == 'yes'): ?>
		<div class="full-width-feature-opaque-image-overlay"></div>
	<?php endif;?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-sm-4 pr-sm-4 py-5 text-white text-center interstitial__text">

			<?php if( !empty( get_sub_field( 'full-width-feature-heading' ) ) ): ?>
				<h2 class="display-2"><?php echo get_sub_field('full-width-feature-heading'); ?></h2>
			<?php endif; ?>

			<?php if( !empty( get_sub_field( 'full-width-feature-text' ) ) ): ?>
				<div class="py-1 content"><?php echo get_sub_field('full-width-feature-text'); ?></div>
			<?php endif; ?>

			<?php if( !empty( get_sub_field( 'full-width-feature-button' ) ) ): ?>
				<a href="<?php echo get_sub_field( 'full-width-feature-button' )[ 'url' ]; ?>"
					target="<?php echo get_sub_field( 'full-width-feature-button' )[ 'target' ]; ?>"
					class="btn btn-secondary ml-2"><?php echo get_sub_field( 'full-width-feature-button' )[ 'title' ]; ?>
				</a>
			<?php endif; ?>

			</div>
		</div>
	</div>
</section>
<!-- End Full Width Feature -->

<?php endif; ?>