 <div id="why-choose-tabs" class="mb-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">

                    <?php //Get Additional Content Component
                    if( have_rows('why-choose-tab-one') ):?>

                        <?php
                        while ( have_rows('why-choose-tab-one') ) : the_row();
                            if(!empty(get_sub_field('tab-one-heading-text'))): ?>
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-one" data-toggle="tab" href="#tab-one-content" role="tab"
                                        aria-controls="One" aria-selected="true">
                                        <h2><?php echo get_sub_field('tab-one-heading-text');?></h2>
                                    </a>
                                </li>
                            <?php
                            endif;
                        endwhile;
                    endif;


                    if( have_rows('why-choose-tab-two') ):?>
                        <?php
                        while ( have_rows('why-choose-tab-two') ) : the_row();
                            if(!empty(get_sub_field('tab-two-heading-text'))): ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-two" data-toggle="tab" href="#tab-two-content" role="tab"
                                        aria-controls="Two" aria-selected="true">
                                        <h2><?php echo get_sub_field('tab-two-heading-text');?></h2>
                                    </a>
                                </li>
                            <?php
                            endif;
                        endwhile;
                    endif;

                    ?>
                </ul>
            </div>
        </div>


        <div class="tab-content" id="why-choose-tab-content">
            <?php

            if( have_rows('why-choose-tab-one') ):

                echo '<div class="tab-pane fade show active p-3" id="tab-one-content" role="tabpanel" aria-labelledby="one-tab">';
                while ( have_rows('why-choose-tab-one') ) : the_row();
                    if(get_sub_field('tab-one-introductory-text-include') == 'yes' && !empty(get_sub_field('tab-one-introductory-text'))):
                        echo '<div class="row">';
                        echo '<div class="col-md-12">';
                        echo '<p class="lead">'.get_sub_field('tab-one-introductory-text') . '</p>';
                        echo '</div>';
                        echo '</div>';
                    endif;

                    if( have_rows('tab-one-items') ):
                        echo '<div class="row">';
                        while ( have_rows('tab-one-items') ) : the_row();
                            echo '<div class="col-md-4">';
                            if(!empty(get_sub_field('image'))):
                                echo '<img class="card-img-top pb-3"
                                    src="'. get_sub_field( 'image' )[ 'url' ] .'" alt="'.get_sub_field( 'image' )[ 'alt' ].'" />';
                            endif;

                            if(!empty(get_sub_field('text'))):
                                echo get_sub_field('text');
                            endif;
                            echo '</div>';
                        endwhile;
                        echo '</div>';
                    endif;

                endwhile;
                echo '</div>';
            endif;


            if( have_rows('why-choose-tab-two') ):

                echo '<div class="tab-pane fade p-3" id="tab-two-content" role="tabpanel" aria-labelledby="two-tab">';
                while ( have_rows('why-choose-tab-two') ) : the_row();
                    if(get_sub_field('tab-two-introductory-text-include') == 'yes' && !empty(get_sub_field('tab-two-introductory-text'))):
                        echo '<div class="row">';
                        echo '<div class="col-md-12">';
                        print '<p class="lead">'. get_sub_field('tab-two-introductory-text') . '</p>';
                        echo '</div>';
                        echo '</div>';
                    endif;


                    if( have_rows('tab-two-items') ):

                        while ( have_rows('tab-two-items') ) : the_row();
                            echo '<div class="row">';

                            if( get_sub_field( 'image-position' ) == 'left' ):

                                include( 'inc/why-choose-tab-two-image.php' );

                                include( 'inc/why-choose-tab-two-text.php' );

                            elseif( get_sub_field('image-position') == 'right' ):

                                include( 'inc/why-choose-tab-two-text.php' );

                                include( 'inc/why-choose-tab-two-image.php' );

                            endif;

                            echo '</div>';

                        endwhile;

                    endif;


                endwhile;
                echo '</div>';
            endif;

            ?>



    </div>

</div>