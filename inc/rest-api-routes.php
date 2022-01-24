<?php

function program_search_results($data) {
	$keyword = $data['term'];
	add_filter('posts_where', function ($where) use ($keyword) {
		global $wpdb;
		$post_type = 'page';
		$post_status = 'publish';
		$meta_key = '_wp_page_template';
		$meta_value = 'page-program.php';
		$where .= ' OR ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $keyword ) ) . '%\'';
		$where .= ' AND ' . $wpdb->posts . '.post_type LIKE \'%' . esc_sql( like_escape( $post_type ) ) . '%\'';
		$where .= ' AND ' . $wpdb->posts . '.post_status LIKE \'%' . esc_sql( like_escape( $post_status ) ) . '%\'';
		$where .= ' AND ' . $wpdb->postmeta . '.meta_key LIKE \'%' . esc_sql( like_escape( $meta_key ) ) . '%\'';
		$where .= ' AND ' . $wpdb->postmeta . '.meta_value LIKE \'%' . esc_sql( like_escape( $meta_value ) ) . '%\'';
		return $where;
	}, 10, 2);
	$programs = new WP_Query(array(
		'post_type' => 'page',
		'post_status' => 'publish',
		'meta_query' => array(
			'relation' => 'AND',
			array(
				'key' => '_wp_page_template',
				'compare' => '=',
				'value' => 'page-program.php'
			),
			array(
				'key' => 'key-information-text',
				'compare' => 'LIKE',
				'value' => $keyword
			)
		)
	));
	$results = array(
		'undergraduate' => array(),
		'graduate' => array(),
		'esl' => array()
	);
	while($programs->have_posts()) {
		$programs->the_post();
		$program_type = get_field('program-overview-type');
		if($program_type == 'undergraduate') {
			array_push($results['undergraduate'], array(
				'title' => get_the_title(),
				'permalink' => get_the_permalink(),
			));
		}
		if($program_type == 'graduate') {
			array_push($results['graduate'], array(
				'title' => get_the_title(),
				'permalink' => get_the_permalink(),
			));
		}
		if($program_type == 'english-as-a-second-language') {
			array_push($results['esl'], array(
				'title' => get_the_title(),
				'permalink' => get_the_permalink(),
			));
		}
	} wp_reset_postdata();
	return $results;
}
function custom_api_routes() {
	register_rest_route('up-college/v1', 'programs', array(
		'methods' => WP_REST_SERVER::READABLE,
		'callback' => 'program_search_results'
	));
}
add_action('rest_api_init', 'custom_api_routes');