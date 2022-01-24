<?php if( get_sub_field( 'territory-acknowledgement-include' ) == 'yes' ): ?>

<!-- Start Full Width Feature -->
<section id="territory-acknowledgement" class="jumbotron jumbotron-fluid interstitial mb-6" style="background-image: url('<?php echo get_sub_field ("territory-acknowledgement-image" )[ "url" ]; ?>')">

	<?php if(get_sub_field( 'territory-acknowledgement-opaque-image-overlay' ) == 'yes'): ?>
		<div class="territory-acknowledgement-opaque-image-overlay"></div>
	<?php endif;?>

	<div class="container pt-5">
		<div class="row">

            <?php
            if( get_sub_field( 'territory-acknowledgement-heading-position' ) == 'left' ):

                include( 'inc/territory-acknowledgement-heading.php' );

                include( 'inc/territory-acknowledgement-content.php' );

            elseif( get_sub_field('territory-acknowledgement-heading-position') == 'right' ):

                include( 'inc/territory-acknowledgement-content.php' );

                include( 'inc/territory-acknowledgement-heading.php' );

            endif;

            ?>

		</div>
	</div>
</section>
<!-- End Full Width Feature -->

<?php endif; ?>
