<!-- Start Video -->
<div class="col-md-7 video-player
	<?php
		if( get_sub_field('video-text-position') == 'right' ):
			//echo "order-1 order-md-12";
		endif;
	?>
">
	<div class="embed-responsive embed-responsive-16by9">

		<iframe class="embed-responsive-item" title="<?php echo get_sub_field("video-text-title")?>"
			src="<?php

				if(get_sub_field('video-text-source') == 'youtube'):

					echo 'https://www.youtube.com/embed/'.get_sub_field("video-text-id").'?rel=0';

				elseif(get_sub_field('video-text-source') == 'vimeo'):

					echo 'https://player.vimeo.com/video/'.get_sub_field("video-text-id").'?rel=0';

				endif; ?>"

			allowfullscreen>
		</iframe>

	</div>
</div>
<!-- End Video -->