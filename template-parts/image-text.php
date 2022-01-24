<?php if( get_sub_field( 'image-text-include' ) == 'yes' ) :?>

<!-- Start Image + Text -->
<section class="image-text content stmb-3 stmt-3">
	<div class="container">
		<div class="row">

			<?php if( get_sub_field( 'image-text-position' ) == 'left' ) {
				$image_postion = 'float-left mr-3';
			} else {
				$image_postion = 'float-right ml-3';
			} ?>

			<div class="col">
				<figure class="figure <?php echo $image_postion; ?>">
					<img src="<?php echo get_sub_field( 'image-text-image' )[ 'url' ]; ?>" class="figure-img img-fluid" alt="<?php echo get_sub_field( 'image-text-image' )[ 'alt' ]; ?>" longdesc="<?php echo get_sub_field( 'image-text-image' )[ 'description' ]; ?>">
					<figcaption class="figure-caption"><?php echo get_sub_field( 'image-text-image' )[ 'caption' ]; ?></figcaption>
				</figure>

				<?php echo get_sub_field( 'image-text-text' ); ?>
			</div>


		</div>
	</div>
</section>
<!-- End Image + Text -->

<?php endif; ?>