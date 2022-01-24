<?php if( get_sub_field( 'video-include' ) == 'yes' ) :?>

<!-- Start Video -->
<section class="stmb-1 stmt-1 video">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php if( !empty( get_sub_field( 'video-heading' ) ) ): ?>
					<h2><?php echo get_sub_field( 'video-heading' ); ?></h2>
				<?php endif; ?>

				<div class="embed-responsive embed-responsive-16by9">
					<?php
					if(!is_bot($_SERVER['HTTP_USER_AGENT'])) {
						if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
							$ip = $_SERVER['HTTP_CLIENT_IP'];
						} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
							$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
						} else {
							$ip = $_SERVER['REMOTE_ADDR'];
						}
						$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
						$country = $ip_data->geoplugin_countryName;
						if($country !== 'China') {
							if( get_sub_field( 'video-source' ) == 'youtube' ):

								$video_source = 'https://www.youtube.com/embed/'.get_sub_field( 'video-id' );

							elseif( get_sub_field( 'video-source' ) == 'vimeo' ):

								$video_source = 'https://player.vimeo.com/video/'.get_sub_field( 'video-id' );

							endif; ?>
							<iframe class="embed-responsive-item" src="<?php echo $video_source; ?>" title="<?php echo get_sub_field( 'video-title' ); ?>"></iframe>
							<?php
						}
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Video -->

<?php endif; ?>