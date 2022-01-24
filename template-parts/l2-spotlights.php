<?php if( get_sub_field( 'l2-spotlights-include' ) == 'yes' ) :?>

<!-- Start Spotlights -->
<section class="mb-3 l2-spotlights">
	<div class="container">

        <div class="row l2-spotlights-heading">
            <div class="col-12 text-center pb-4">
                <h2 class="display-2">
                    <?php if( !empty( get_sub_field( 'l2-spotlight-heading' ) ) ): ?>
                        <?php echo get_sub_field( 'l2-spotlight-heading' ) ?>
                    <?php endif; ?>
                </h2>
            </div>
        </div>

		<div class="row spotlights-content">


		<?php if( have_rows( 'l2-spotlight-items' ) ):

			while( have_rows( 'l2-spotlight-items' ) ): the_row(); ?>

			<div class="col-md-6">
				<div class="card mx-0 mx-lg-1 my-sm-4">

					<?php
					$link = get_sub_field( 'button' );

					if( $link ):
						$link_target = $link['target'] ? $link['target'] : '_self';
					?>

						<a href="<?php echo get_sub_field( 'button' )[ 'url' ]; ?>" target="<?php echo $link_target; ?>">

							<?php if( !empty( get_sub_field( 'image' ) ) ): ?>
								<img class="card-img-top" src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>" />
							<?php endif; ?>

							<div class="card-body">

							<?php

							?>
								<?php if( !empty( get_sub_field( 'heading' ) ) ): ?>
									<h3 class=""><?php echo get_sub_field( 'heading' ); ?></h3>
								<?php endif; ?>
							<?php

							?>
							<?php if( !empty( get_sub_field( 'text' ) ) ): ?>
								<p class="card-text"><?php echo get_sub_field( 'text' ); ?></p>
							<?php endif; ?>

							</div>

						</a>

					<?php endif; ?>
				</div>
			</div>

			<?php endwhile; ?>

		<?php endif; ?>

		</div>
	</div>
</section>
<!-- End Spotlights -->

<?php endif; ?>