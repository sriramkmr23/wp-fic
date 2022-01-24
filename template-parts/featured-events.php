<?php if( get_sub_field( 'featured-events-include' ) == 'yes' ) :?>

    <!-- Start event overview -->
    <section class="mb-6 featured-events">
        <div class="container">
            <?php if( !empty( get_sub_field( 'featured-events-heading' ) ) ): ?>
                <div class="row feature-event-title">
                    <div class="col-md-12 text-center">
                        <h2><?php echo get_sub_field( 'featured-events-heading' )?></h2>
                    </div>
                </div>
            <?php endif; ?>

            <div class="row event-item">
                <?php
                    $displayNumber = 2;
                    $colsize = 6;
                    if (!empty(get_sub_field( 'featured-events-display-column' ))) :
                        $displayNumber = (int)get_sub_field( 'featured-events-display-column' );

                        $colsize = 12 / $displayNumber;
                    endif;

                    $args = array(
                        'post_type' => 'events',
                        'post_status' => 'publish',
                        'posts_per_page' => $displayNumber,
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                        'meta_key' => 'event-start-date',
                        'orderby' => 'meta_value',
                        'meta_type' => 'DATE',
                        'order' => 'ASC'
                    );

                    $meta_query = array(
                        'relation' => 'AND',
                        'featured_clause' => array(
                            'key' => 'event-featured',
                            'value' => 'yes',
                            'compare' => 'LIKE'
                        ),
                        'future_event_caluse' => array(
                            'key' => 'event-start-date',
                            'value' => date ('Ymd'),
                            'type'    => 'DATE',
                            'compare' => '>='
                        )
                    );
                    $args['meta_query'] = $meta_query;
                    $featuredEvents =  new WP_Query( $args );

                    $countEvent = $displayNumber;
                ?>


                <?php if( $featuredEvents->have_posts() ): ?>
                    <?php while( $featuredEvents->have_posts() ) : $featuredEvents->the_post(); ?>
                        <?php
                            $venueArr = [];
                            $venue = '';
                            $venueTax = wp_get_post_terms( $featuredEvents->post->ID, 'venue' );
                            foreach ($venueTax as $vt) {
                                $venueArr[] = $vt->name;
                            }
                            if (!empty($venueArr)) {
                                $venue = implode(', ', $venueArr);
                            }
                        ?>
                        <div class="col-md-<?php echo $colsize?> event-featured-card">
                            <div class="card">
                                <?php if( !empty( get_field( 'event-thumbnail' ) ) ): ?>
                                    <img class="card-img-top" src="<?php echo get_field( 'event-thumbnail' )[ 'url' ]; ?>" alt="<?php echo get_field( 'event-thumbnail' )[ 'alt' ]; ?>" />
                                <?php endif; ?>
                                <div class="card-body">
                                    <?php

                                        $eventTitle = get_the_title();
                                        $eventTitleLength = strlen(get_the_title());

                                        if ($eventTitleLength > 28) {
                                            $eventTitle = substr($eventTitle, 0, 28) . ' ...';
                                        }

                                        if (in_array('yes', get_field('event-all-day'))) {
                                            $eventTime = 'All day event';
                                        } else {
                                            $eventTime = date('H:i', strtotime(get_field( 'event-start-time' )));
                                        }

                                    ?>
                                    <a class="event-link" href="<?php echo get_permalink();?>">
                                        <h3 class="card-title"><?php echo $eventTitle ?></h3>
                                    </a>
                                    <div class="card-text">
                                        Date: <?php echo date('d F Y', strtotime(get_field( 'event-start-date' ))); ?><br />
                                        Time: <?php echo $eventTime; ?><br />
                                        <?php if (!empty($venue)) : ?>
                                            Venue: <?php echo $venue; ?><br />
                                        <?php endif; ?>
                                         <?php
                                            /**
                                                <div class="event-teaser"><?php echo get_sub_field( 'event-teaser' ); ?></div>
                                            **/
                                        ?>

                                        <a class="event-link" href="<?php echo get_permalink();?>">
                                            <div class="arrow-wrapper">
                                                <div class="wrapper-content">
                                                    Learn more
                                                    <img class="arrow" src="<?php echo get_stylesheet_directory_uri();?>/images/red-arrow-short.png" alt="Read more" title="Read more">
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $countEvent--; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata();?>

                <?php if ($countEvent > 0 ):
                    $regArgs = $args;
                    $regArgs['posts_per_page'] = $countEvent;
                    $reg_meta_query = array(
                        'relation' => 'AND',
                        'featured_clause' => array(
                            'key' => 'event-featured',
                            'value' => 'yes',
                            'compare' => 'NOT LIKE'
                        ),
                        'future_event_caluse' => array(
                            'key' => 'event-start-date',
                            'value' => date ('Ymd'),
                            'type'    => 'DATE',
                            'compare' => '>='
                        )
                    );
                    $regArgs['meta_query'] = $reg_meta_query;

                    $regulartEvents =  new WP_Query( $regArgs ); ?>
                    <?php if( $regulartEvents->have_posts() ): ?>
                        <?php while( $regulartEvents->have_posts() ) : $regulartEvents->the_post(); ?>
                            <?php
                                $venueArr = [];
                                $venue = '';
                                $venueTax = wp_get_post_terms( $featuredEvents->post->ID, 'venue' );
                                foreach ($venueTax as $vt) {
                                    $venueArr[] = $vt->name;
                                }
                                if (!empty($venueArr)) {
                                    $venue = implode(', ', $venueArr);
                                }
                            ?>
                            <div class="col-md-<?php echo $colsize?> event-featured-card">
                                <div class="card">
                                    <?php if( !empty( get_field( 'event-thumbnail' ) ) ): ?>
                                        <img class="card-img-top" src="<?php echo get_field( 'event-thumbnail' )[ 'url' ]; ?>" alt="<?php echo get_field( 'event-thumbnail' )[ 'alt' ]; ?>" />
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <?php
                                            $eventTitle = get_the_title();
                                            $eventTitleLength = strlen(get_the_title());

                                            if ($eventTitleLength > 28) {
                                                $eventTitle = substr($eventTitle, 0, 28). ' ...';
                                            }

                                            $eventTime = '-';

                                            if (in_array('yes', get_field('event-all-day'))) {
                                                $eventTime = 'All day event';
                                            } else {
                                                $eventTime = date('H:i', strtotime(get_field( 'event-start-time' )));
                                            }
                                        ?>
                                        <a class="event-link" href="<?php echo get_permalink();?>">
                                            <h3 class="card-title"><?php echo $eventTitle ?></h3>
                                        </a>
                                        <div class="card-text">
                                            Date: <?php echo date('d F Y', strtotime(get_field( 'event-start-date' ))); ?><br />
                                            Time: <?php echo $eventTime; ?><br />
                                            <?php if (!empty($venue)) : ?>
                                                Venue: <?php echo $venue; ?><br />
                                            <?php endif; ?>
                                            <?php
                                                /***
                                                    <div class="event-teaser"><?php echo get_sub_field( 'event-teaser' ); ?></div>
                                                **/
                                            ?>
                                            <a class="event-link" href="<?php echo get_permalink();?>">
                                                <div class="arrow-wrapper">
                                                    <div class="wrapper-content">
                                                        Learn more
                                                        <img class="arrow" src="<?php echo get_stylesheet_directory_uri();?>/images/red-arrow-short.png" alt="Read more" title="Read more">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $countEvent--; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata();?>
                <?php endif; ?>
            </div>

            <?php if( !empty( get_sub_field( 'featured-events-button' ) ) ): ?>
                <div class="row mt-3 ">
                    <div class="col-md-12 text-center">
                        <a href="<?php echo get_sub_field( 'featured-events-button' )[ 'url' ]; ?>"
                            target="<?php echo get_sub_field( 'featured-events-button' )[ 'target' ]; ?>"
                            class="btn btn-primary"><?php echo get_sub_field( 'featured-events-button' )[ 'title' ]; ?>
                        </a>
                    </div>
                </div>
			<?php endif; ?>



        </div>

    </section>
<?php endif; ?>