<div class="col-md-4 pb-4
    <?php
		if( get_sub_field('image-position') == 'left' ):
			echo "order-12 order-md-1";
		endif;
	?>
    ">
    <div class="">
        <img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'image' )[ 'alt' ];?>" />
    </div>
</div>


