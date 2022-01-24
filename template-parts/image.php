<?php if( get_sub_field( 'image-include' ) == 'yes' ) :?>

<!-- Start Image Content -->
<section class="image stmb-3 stmt-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<figure class="figure">
					<img src="<?php echo get_sub_field( 'image-image' )[ 'url' ]; ?>" class="figure-img img-fluid" alt="<?php echo get_sub_field( 'image-image' )[ 'alt' ]; ?>" longdesc="<?php echo get_sub_field( 'image-image' )[ 'description' ]; ?>">
					<!--figcaption class="figure-caption">
						<p><?php /*echo get_sub_field( 'image-image' )[ 'caption' ]; */?></p>
					</figcaption-->
				</figure>
			</div>
		</div>
	</div>
</section>
<!-- ENd Image Content -->

<?php endif; ?>