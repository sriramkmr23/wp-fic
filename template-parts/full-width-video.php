
<?php if( get_sub_field( 'full-width-video-include' ) == 'yes' ) :?>
<section  class="full-width-video">

    <div class="container">
        <div class="row">
		    <div class="col-md-12">
                <div class="full-width-video-carousel owl-carousel owl-theme">
                    <?php if(have_rows('full-width-video-items')):?>
                        <?php while(have_rows('full-width-video-items')): the_row(); ?>

                         <div class="item-video" data-merge="1">
                            <iframe class="embed-responsive-item" title="<?php echo get_sub_field( 'video-title' ); ?>"
                                src="https://www.youtube.com/embed/<?php echo get_sub_field( 'video-id' ); ?>" allowfullscreen>
                            </iframe>

                        </div>

                         <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
		</div>
	</div>

</section>
<?php endif; ?>