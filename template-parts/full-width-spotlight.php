<?php if( get_sub_field( 'full-width-spotlight-include' ) == 'yes' ) :?>

<!-- Start full-width-Spotlights -->
<section class=" mb-6 full-width-spotlight">
	<div class="container">

        <div class="row">
        <?php
        if( get_sub_field( 'full-width-spotlight-image-position' ) == 'left' ):

            include( 'inc/full-width-spotlight-image.php' );

            include( 'inc/full-width-spotlight-text.php' );

        elseif( get_sub_field('full-width-spotlight-image-position') == 'right' ):

            include( 'inc/full-width-spotlight-image.php' );

            include( 'inc/full-width-spotlight-text.php' );

        endif;
        ?>
        </div>

	</div>
</section>
<!-- End full-width-Spotlights -->

<?php endif; ?>