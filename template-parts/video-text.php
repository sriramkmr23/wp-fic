<?php if( get_sub_field( 'video-text-include' ) == 'yes' ) :?>

<!-- Start Video + Text -->
<section class="video-panel
    <?php
        if( get_sub_field('video-text-background-colour') == 'primary' ):
            echo 'primary-bg';
        else:
            echo 'white-bg';
        endif;
    ?>

">
	<div class="container">
		<div class="row">

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
					if( get_sub_field( 'video-text-position' ) == 'left' ):

						include( 'inc/video-panel-video.php' );

						include( 'inc/video-panel-text.php' );

					elseif( get_sub_field('video-text-position') == 'right' ):

						include( 'inc/video-panel-text.php' );

						include( 'inc/video-panel-video.php' );

					endif;
				}
			} ?>

		</div>
	</div>
</section>
<!-- End Video + Text -->

<?php endif; ?>