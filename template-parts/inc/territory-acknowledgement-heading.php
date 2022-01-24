<div class="col-xl-6 pb-4
    <?php
		if( get_sub_field('territory-acknowledgement-heading-position') == 'right' ):
			echo "order-first order-lg-12";
		endif;
	?>

    ">

    <?php if( !empty( get_sub_field( 'territory-acknowledgement-heading' ) ) ): ?>
        <h2 class="display-2"><?php echo get_sub_field('territory-acknowledgement-heading'); ?></h2>
    <?php endif; ?>


</div>
