<div class="col-md-4 pb-4
    <?php if( get_sub_field( 'full-width-spotlight-image-position' ) == 'right' ):
			echo 'order-md-last';
    endif; ?>
    ">

    <div class="text-center">
        <img class="img-fluid" src="<?php echo get_sub_field( 'full-width-spotlight-image' )[ 'url' ]; ?>"
            alt="<?php echo get_sub_field( 'full-width-spotlight-image' )[ 'alt' ]; ?>" />
    </div>
</div>