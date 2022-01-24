<div class="col-md-8 pb-4
    <?php
		if( get_sub_field('image-position') == 'left' ):
			echo "order-1 order-md-12";
		endif;
	?>

    ">
    <h2 class="display-2">
        <?php if( !empty( get_sub_field( 'heading' ) ) ): ?>
            <?php echo get_sub_field( 'heading' ) ?>
        <?php endif; ?>
    </h2>
    <div class="why-choose-tab-two-content">

        <?php if(!empty(get_sub_field('text'))): ?>
            <div class="text-left text-primary lead"><?php echo get_sub_field('text'); ?></div>
        <?php endif; ?>

    </div>
</div>
