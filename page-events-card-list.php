<?php
/**
 * Template Name: Events Card List
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header(); ?>

<!-- Start Main -->
<main id="main" class="events-card-list">

    <div class="container">

        <?php

            // Get BreadCrumb Component
            get_template_part('template-parts/breadcrumb');

            $args = array(
                'post_type' => 'events',
                'post_status' => 'publish',
                'posts_per_page' => 5,
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                'meta_key' => 'event-start-date',
                //'offset' => (max(1, get_query_var('paged')) - 1) * 10,
                'nopaging' => true,
                'orderby' => 'meta_value',
                'order' => 'ASC'
            );

            $meta_query = array(
                array(
                    'key' => 'event-start-date',
                    'value' => date ('Ymd'),
                    'type'    => 'DATE',
                    'compare' => '>='
                )
            );
            $args['meta_query'] = $meta_query;


            $preTitle = '';
            if (isset($_GET['date']) && !empty($_GET['date'])) {

                $requestDate = $_GET['date'];

                $month_end = date('d', strtotime('last day of this month', strtotime($requestDate)));
                $postDate = [
                    date ('Ym', strtotime($requestDate)) . '01',
                    date ('Ym', strtotime($requestDate)) . $month_end
                ];

                $meta_query = array(
                    array(
                        'key' => 'event-start-date',
                        'value' => $postDate,
                        'type'    => 'DATE',
                        'compare' => 'between'
                    )
                );
                $args['meta_query'] = $meta_query;

                $preTitle = ' ' .date('F', strtotime($requestDate)) . ' ';

            } else if (isset($_GET['category']) && !empty($_GET['category'])) {
                $requestCat = $_GET['category'];
                $tax_query = array(
                    array(
                        'taxonomy' => 'event_category',
                        'field' => 'slug',
                        'terms' => $requestCat,
                    )
                );
                $args['tax_query'] = $tax_query;

                $term = get_term_by( 'slug', $requestCat, 'event_category');
                //print 'xx<pre>';print_r($term);print '</pre>';

                $preTitle = ' ' .$term->name . ' ';
            }

            $upcomingEvents =  new WP_Query( $args );

            //$args['posts_per_page'] = 10;
            //$args['paged'] = 1;
            //$args['offset'] = 2;

            //$allEvents =  new WP_Query( $args );


        ?>


        <div class="row">
            <div class="col-md-12">

                <h1><?php echo $preTitle ?><?php the_title(); ?></h1>

                <div class="row">
                    <div class="col-md-12">
                        <?php if( is_active_sidebar( 'events-widget-side-bar' ) ) : ?>
                            <div class="sidebar-primary event-navigation">
                                <?php dynamic_sidebar( 'events-widget-side-bar' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if( $upcomingEvents->have_posts() ): ?>
                <?php $index = 0; ?>
                    <div class="row event-item">

                        <?php while( $upcomingEvents->have_posts() ) : $upcomingEvents->the_post(); ?>

                            <?php $class = get_field('event-featured') ? 'class="featured"' : ''; ?>

                            <?php
                                $index++;

                                if ($index > 5) {
                                    break;
                                }

                                $colsize = 4;
                                if ($index <= 2) {
                                    $colsize = 6;
                                }
                            ?>
                            <div class="col-md-<?php echo $colsize?> event-card">
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

                                            $venueArr = [];
                                            $venue = '-';
                                            $venueTax = wp_get_post_terms( $upcomingEvents->post->ID, 'venue' );
                                            foreach ($venueTax as $vt) {
                                                $venueArr[] = $vt->name;
                                            }
                                            if (!empty($venueArr)) {
                                                $venue = implode(', ', $venueArr);
                                            }
                                        ?>
                                        <a class="event-link" href="<?php echo get_permalink();?>">
                                            <h2 class="display-2 card-title"><?php the_title(); ?></h2>
                                        </a>
                                        <div class="card-text">

                                            Date: <?php echo date('d F Y', strtotime(get_field( 'event-start-date' ))); ?><br />
                                            Time: <?php echo $eventTime; ?><br />
                                            Venue: <?php echo $venue; ?><br />

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
                        <?php endwhile; ?>

                    </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php
                            $slug = 'events';
                            $page = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE post_name = '".$slug."' AND post_status = 'publish'");

                        ?>
                        <a class="btn btn-primary" href="<?php echo get_permalink($page->ID) ?>" >View All Events</a>
                    </div>
                </div>
                    <!--div class = "event-pagination">
                        <?php
                            /***
                            $total_pages = $events->max_num_pages;

                            if ($total_pages > 1){

                                $current_page = max(1, get_query_var('paged'));

                                echo paginate_links(array(
                                    'base' => get_pagenum_link(1) . '%_%',
                                    'format' => '/page/%#%',
                                    'current' => $current_page,
                                    'total' => $total_pages,
                                    'prev_text'    => __('« Prev'),
                                    'next_text'    => __('Next »'),
                                ));

                            }

                            wp_reset_postdata();
                            **/
                        ?>
                    </div-->
                <?php endif; ?>
            </div>

        </div>

	</div>


</main>
<!-- End Main -->

<?php
get_footer();

?>