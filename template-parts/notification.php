<?php if( get_field( 'notification-include' ) == 'yes' ) :?>

	<!-- Start Notification -->
	<section class="py-1 notification" onclick="window.location='<?php echo get_field('notification-button')['url']; ?>';">
		<div class="container" >
			<div class="row col-md-12 col-md-1 notification-content" >
                <a class="notification-link" href="<?php echo get_field('notification-button')['url']; ?>"
                    target="<?php echo get_field('notification-button')['target']; ?>"
                    title="<?php echo get_field('notification-button')['title']; ?>">
                    <?php if( !empty(get_field( 'notification-heading' ) ) ): ?>
                        <h2 class="notification-header"><?php echo get_field( 'notification-heading' ); ?></h2>
                    <?php endif; ?>

                    <div class="separator">|</div>

                    <?php if( !empty(get_field( 'notification-text' ) ) ): ?>
                        <div class="lead mt-1 mb-3 notification-text"><?php echo get_field( 'notification-text' ); ?></div>
                    <?php endif; ?>
                </a>
			</div>
            <span class="notification-link-icon"><i class="fas fa-chevron-right"></i></span>
		</div>
	</section>
	<!-- End Notification -->

    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>

<?php endif; ?>