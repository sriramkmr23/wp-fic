<?php if( get_sub_field( 'process-steps-include' ) == 'yes' ): ?>

<!-- Start Process Steps -->
<section class="stmb-3 stmt-3 process-steps content">
	<div class="container">

        <div class="process-steps-details p-4">
            <?php if( !empty( get_sub_field( 'process-steps-heading' ) ) ): ?>
                <div class="row">
                    <div class="col">
                        <h2><?php echo get_sub_field( 'process-steps-heading' ); ?></h2>
                    </div>
                </div>
            <?php endif; ?>

            <?php

            $i = 0;

            if( have_rows( 'process-step-items' ) ):

                while( have_rows( 'process-step-items' ) ): the_row(); ?>

                    <div class="row mt-4">
                        <?php if( get_sub_field( 'heading' ) ): ?>
                            <div class="col-3 col-md-2 px-1 px-lg-2">
                                <div class="mx-auto d-flex align-items-center bg-primary text-center step-number-container">
                                    <span class="mx-auto text-white font-weight-bold step-number"><?php echo "Step " . ++$i; ?></span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="col-9 col-md-10">

                            <?php if( get_sub_field( 'heading' ) ): ?>
                                <h3><?php echo get_sub_field( 'heading' ); ?></h3>
                            <?php endif; ?>

                            <?php if( get_sub_field( 'text' ) ): ?>
                                <p><?php echo get_sub_field( 'text' ); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
	</div>
</section>
<!-- End Process Steps -->

<?php endif; ?>