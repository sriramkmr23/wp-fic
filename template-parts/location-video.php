<?php if( get_sub_field( 'video-include' ) == 'yes' ) :?>

<!-- Start Video -->
<section class="stmb-3 stmt-3 video">
    <div class="overlay">
        <?php if( !empty( get_sub_field( 'video-heading' ) ) ): ?>
            <h2 class="text-center"><?php echo get_sub_field( 'video-heading' ); ?></h2>
        <?php endif; ?>
    </div>

    <div class="embed-location-video">
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
                <iframe class="embed-responsive-item"
                    src="<?php echo $video_source; ?>?title=0&byline=0&sidedock=0&portrait=0&muted=1&autopause=0&loop=1&background=1&app_id=122963"
                    width="100%" height="254"
                    frameborder="0"
                    allow="autoplay; fullscreen; picture-in-picture"

                    title="<?php echo get_sub_field( 'video-title' ); ?>"></iframe>

                <?php
            }
        } ?>
    </div>

    <?php
    /***
	<div class="container">
		<div class="row">
			<div class="col">




			</div>
		</div>
	</div>
    ***/
    ?>
</section>
<!-- End Video -->

<?php endif; ?>