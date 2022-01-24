<div class="col-xl-6 py-3">
	<?php if( !empty( get_sub_field( 'territory-acknowledgement-text' ) ) ): ?>
        <div class="py-6 px-6 content territory-acknowledgement-content"><?php echo get_sub_field('territory-acknowledgement-text'); ?></div>
    <?php endif; ?>

    <?php if( !empty( get_sub_field( 'territory-acknowledgement-button' ) ) ): ?>
        <a href="<?php echo get_sub_field( 'territory-acknowledgement-button' )[ 'url' ]; ?>"
            target="<?php echo get_sub_field( 'territory-acknowledgement-button' )[ 'target' ]; ?>"
            class="btn btn-secondary mt-3"><?php echo get_sub_field( 'territory-acknowledgement-button' )[ 'title' ]; ?>
        </a>
    <?php endif; ?>
</div>