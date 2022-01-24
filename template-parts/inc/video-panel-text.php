<!-- End Video Text -->
<div class="col-md-5 py-5 video-text
	<?php
		if( get_sub_field('video-text-position') == 'right' ):
			//echo "order-12 order-md-1";
		endif;
	?>
">
	<div class="content">

		<?php if(!empty(get_sub_field('video-text-heading'))): ?>
			<h2 class="display-2"><?php echo get_sub_field('video-text-heading'); ?></h2>
		<?php endif; ?>

		<?php if(!empty(get_sub_field('video-text-text'))): ?>
			<?php echo get_sub_field('video-text-text'); ?>
		<?php endif; ?>

		<?php if(!empty(get_sub_field('video-text-button'))): ?>
			<a href="<?php echo get_sub_field('video-text-button')['url']; ?>"  target="<?php echo get_sub_field('video-text-button')['target']; ?>" class="btn btn-lg btn-info mt-3"><?php echo get_sub_field('video-text-button')['title']; ?></a>
		<?php endif; ?>

	</div>
</div>
<!-- End Video Text -->