<?php
/**
 * Template Name: Events list
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header(); ?>

<!-- Start Main -->
<main id="main" class="events">

    <div class="container">

        <div class="row py-5">
            <div class="col-md-9">
                <?php

                    // Get BreadCrumb Component
                    get_template_part('template-parts/breadcrumb');

                    $args = array(
                        'post_type' => 'events',
                        'post_status' => 'publish',
                        'posts_per_page' => 10,
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                        'meta_key' => 'event-start-date',
                        //'offset' => (max(1, get_query_var('paged')) - 1) * 10,
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
                    } else if (isset($_GET['organizer']) && !empty($_GET['organizer'])) {
                        $requestCat = $_GET['organizer'];
                        $tax_query = array(
                            array(
                                'taxonomy' => 'organizers',
                                'field' => 'slug',
                                'terms' => $requestCat,
                            )
                        );
                        $args['tax_query'] = $tax_query;

                        $term = get_term_by( 'slug', $requestCat, 'organizers');
                        //print 'xx<pre>';print_r($term);print '</pre>';

                        $preTitle = ' ' .$term->name . ' ';
                    } else if (isset($_GET['venue']) && !empty($_GET['venue'])) {
                        $requestCat = $_GET['venue'];
                        $tax_query = array(
                            array(
                                'taxonomy' => 'venue',
                                'field' => 'slug',
                                'terms' => $requestCat,
                            )
                        );
                        $args['tax_query'] = $tax_query;

                        $term = get_term_by( 'slug', $requestCat, 'venue');
                        //print 'xx<pre>';print_r($term);print '</pre>';

                        $preTitle = ' ' .$term->name . ' ';
                    }

                    $events =  new WP_Query( $args );


                ?>
                <h1><?php echo $preTitle ?><?php the_title(); ?></h1>

                <?php if( $events->have_posts() ): ?>
                    <?php while( $events->have_posts() ) : $events->the_post(); ?>

                        <?php $class = get_field('event-featured') ? 'class="featured"' : ''; ?>

                        <div class="row event-item">
                            <div class="col-md-9">
                                <a class="event-link" href="<?php echo get_permalink();?>">
                                    <h2 class="display-2"><?php the_title(); ?></h2>
                                </a>
                                <?php echo date('d F Y', strtotime(get_field( 'event-start-date' ))); ?>
                                <div class="event-teaser"><?php echo get_field( 'event-teaser' ); ?></div>

                                <a class="event-link" href="<?php echo get_permalink();?>">
                                    <div class="arrow-wrapper">
                                        <div class="wrapper-content">
                                            Read more
                                            <img class="arrow" src="<?php echo get_stylesheet_directory_uri();?>/images/red-arrow-short.png" alt="Read more" title="Read more">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-3 event-image">
                                <?php if( !empty( get_field( 'event-thumbnail' ) ) ): ?>
                                    <img class="card-img-top" src="<?php echo get_field( 'event-thumbnail' )[ 'url' ]; ?>" alt="<?php echo get_field( 'event-thumbnail' )[ 'alt' ]; ?>" />
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>




                    <div class = "event-pagination">
                        <?php

                            $total_pages = $events->max_num_pages;

                            if ($total_pages > 1){

                                $current_page = max(1, get_query_var('paged'));
                                $big = 999999999; // need an unlikely integer
                                echo paginate_links(array(
                                    //'base' => get_pagenum_link(1) . '%_%',
                                    //'format' => 'page/%#%',
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?page=%#%',
                                    'current' => $current_page,
                                    'total' => $total_pages,
                                    'prev_text'    => __('« Prev'),
                                    'next_text'    => __('Next »'),
                                ));

                            }

                            wp_reset_postdata();
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-3 d-none d-md-block">
                <?php if( is_active_sidebar( 'events-widget-side-bar' ) ) : ?>
                    <div class="sidebar-primary event-navigation">
                        <?php dynamic_sidebar( 'events-widget-side-bar' ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

	</div>


</main>
<!-- End Main -->

<?php
get_footer();

?>