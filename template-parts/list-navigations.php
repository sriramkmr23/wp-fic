<?php if( get_sub_field( 'list-navigation-include' ) == 'yes' ) :?>

<!-- Start Image + Text -->
<section class="list-navigation content stmb-3 stmt-3">
	<div class="container">

        <?php if( !empty(get_sub_field( 'list-navigation-heading' )) ): ?>
            <div class="row list-navigation-heading">
                <div class="col-12 text-center pb-4">
                    <h2 class="display-2"><?php echo get_sub_field( 'list-navigation-heading' )?></h2>
                </div>
            </div>
        <?php endif; ?>

        <?php if( have_rows( 'list-navigation-items' ) ): ?>

            <?php while( have_rows( 'list-navigation-items' ) ): the_row(); ?>
                <div class="row list-navigation-item">
                    <div class="col-md-8">
                            <h3><?php echo get_sub_field( 'heading' ); ?></h3>
                            <p><?php echo get_sub_field( 'text' ); ?></p>

                            <?php if( !empty(get_sub_field( 'button' )) ):
                                    $link = get_sub_field( 'button' );
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>

                                    <a href="<?php echo get_sub_field( 'button' )[ 'url' ]; ?>"
                                        target="<?php echo $link_target; ?>">
                                            <?php echo get_sub_field( 'button' )[ 'title' ]; ?>
                                            <span class="fas fa-long-arrow-alt-right"></span>
                                    </a>
                            <?php endif; ?>
                        </div>
                    <div class="col-md-4 list-navigation-image">
                        <figure class="figure <?php echo $image_postion; ?>">
                            <img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" class="figure-img img-fluid" alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>" longdesc="<?php echo get_sub_field( 'image' )[ 'description' ]; ?>">
                            <figcaption class="figure-caption"><?php echo get_sub_field( 'image' )[ 'caption' ]; ?></figcaption>
                        </figure>

                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


	</div>
</section>
<!-- End Image + Text -->

<?php endif; ?>