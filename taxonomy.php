<?php
/**
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header(); ?>

<!-- Start Main -->
<main id="main" class="events">

    <div class="container">

        <?php
            global $post;

            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            //print '<pre>';print_r($term);print '</pre>';

            // Get BreadCrumb Component
    		get_template_part('template-parts/breadcrumb');

        ?>

        <?php while (have_posts()) : the_post();  ?>

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

                <div class="col-md-3 event-image" style="margin-top:2rem;">
                    <?php if( !empty( get_field( 'event-thumbnail' ) ) ): ?>
                        <img class="card-img-top" src="<?php echo get_field( 'event-thumbnail' )[ 'url' ]; ?>" alt="<?php echo get_field( 'event-thumbnail' )[ 'alt' ]; ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class = "event-pagination">
                <?php the_posts_navigation( array(
                    'prev_text'    => __('« Prev'),
                    'next_text'    => __('Next »'),
                ));?>
            </div>
        <?php endwhile; ?>

	</div>


</main>
<!-- End Main -->

<?php
get_footer();

?>