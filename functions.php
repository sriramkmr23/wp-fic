<?php
/**
 * DeakinCollege functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 *@package ECUColombo
 *
 */

if ( ! function_exists( 'up_college_setup' ) ) :
	/** Sets up theme defaults and registers support for various WordPress features. */
	function up_college_setup() {
		/* Theme support for document title */
		add_theme_support( 'title-tag' );

		/* Theme support for featured images */
//		add_theme_support( 'post-thumbnails' );

		/* Theme support for Wordpress core components */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/* Register navigation menus */
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'up-college' ),
		) );
	}
endif;

/** Enqueue scripts and styles */
function up_college_scripts() {
	wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css' );
	wp_enqueue_style( 'fancy-box', '//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css' );
	wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'up-college-main-style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array(), '1', true );
	wp_enqueue_script( 'popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1', true );
	wp_enqueue_script( 'bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '1', true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1', true );
	wp_enqueue_script( 'up-college-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1', true );

	//wp_enqueue_script('up-college-program-search-js', get_theme_file_uri('/js/programSearch.js'), array('jquery'), '1.0', true);

	/**
	 * Load Jquery-ui script for specific pages (FormAssembly)
	 */
	if( is_page( array( 'apply', 'fee-status-questionnaire', 'immigration-history-questionnaire', 'personal-statement-questionnaire', 'booking', 'airport-transfer-booking-form' ) ) ) {
		wp_enqueue_style( 'jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css' );
		wp_enqueue_script( 'jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), '1', true );
	}

	/**
	 * Load script on custom templates (English Calculator)
	 */
	if( is_page( 'calculator' ) ) {
		wp_enqueue_style( 'jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css' );
		wp_enqueue_script( 'jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), '1', true );
		wp_enqueue_script( 'calculator-js', get_template_directory_uri() . '/js/englishTest.js', array('jquery'), '1', true );
	}


	wp_localize_script('up-college-program-search-js', 'collegeData', array(
		'root_url' => site_url()
	));
}
add_action( 'wp_enqueue_scripts', 'up_college_scripts' );


/** Admin styles */
function admin_style() {
	$home_page = get_pages(array(
		'meta_key' => '_wp_page_template',
		'meta_value' => 'front-page.php',
		'post_type' => 'page',
		'post_status' => 'publish'
	));
	if(count($home_page) == 1) {
		global $post;
		if($post->ID == get_option('page_on_front')) {
			wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/css/admin.css' );
			wp_enqueue_script( 'admin-js', get_template_directory_uri().'/js/admin.js', array('jquery'), '1', true );
		}
	}
}
add_action('admin_enqueue_scripts', 'admin_style');

/** Add custom wysiwyg editors */
include 'inc/custom-editors.php';

/** Remove home page main editor */
function hide_editor() {
	remove_post_type_support('page', 'editor');
}
add_action( 'admin_init', 'hide_editor' );


/** Register Custom Navigation Walker */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/** Register New Menu */
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'UPCollege' ),
) );

/** Remove H1 from wysiwyg editor */
add_filter( 'tiny_mce_before_init', function( $settings ){
	$settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;';
	return $settings;
} );


/** Options Page */
if( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Sitewide Scripts',
		'menu_title'	=> 'Sitewide Scripts',
		'menu_slug' 	=> 'sitewide-scripts',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'footer',
		'icon_url' 		=> 'dashicons-admin-links'
	));

}


/** Add Excerpt Support for Pages */
function add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpt_support_for_pages' );

/** Load Supsystic Table to ACF Dropdown */
function load_tables_to_acf_dropdown($field) {
	global $wpdb;
	$table_name = $wpdb->prefix.'supsystic_tbl_tables';
	$tables = $wpdb->get_results('SELECT id, title FROM '.$table_name.' ORDER BY title');
	if(!empty($tables)) {
		foreach ($tables as $table) {
			$field['choices'][$table->id] = $table->title;
		}
	}

	return $field;
}

add_filter('acf/load_field/name=table_select', 'load_tables_to_acf_dropdown');


/** Modify Relevanssi search excerpts */
function search_excerpt_function($content, $post, $query) {
	$content = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
	return $content;
}
add_filter('relevanssi_excerpt_content', 'search_excerpt_function', 10, 3);


/** UP College REST API's */
include ('inc/rest-api-routes.php');

/** Remove Home Page Option from Template Dropdown */
function remove_home_page_template($pages_templates) {
	if(is_admin()) {
		$pages = get_pages(array(
			'meta_key' => '_wp_page_template',
			'meta_value' => 'front-page.php',
			'post_type' => 'page',
			'post_status' => 'publish'
		));
		if(count($pages) == 1) {
			global $post;
			$pagetemplate = get_post_meta( $post->ID, '_wp_page_template', true );
			if($pagetemplate !== 'front-page.php') {
				unset($pages_templates['front-page.php']);
			}
			return $pages_templates;
		}
	}
}
//add_filter('theme_page_templates', 'remove_home_page_template');

/** Generate 2nd level navigation pages automatically on desktop */
require_once get_template_directory() . '/inc/auto-child-page-menu.php';

/** Mobile Nav Walker Class */
require_once get_template_directory() . '/inc/mobile-navwalker.php';

/** Remove trailing dots from excerpts on search results page */
add_filter( 'relevanssi_ellipsis', '_return_empty_string' );

/** Get navigation included pages globally */
function navigation_excluded_pages() {
	global $excluded_page_ids;
	$exc_page_ids = '';
	$counter = 1;
	$exc_pages = new WP_Query(array(
		'post_type' => 'page',
		'posts_per_page' => -1,
		'meta_key' => 'exclude_page_from_navigation',
		'meta_value' => 'yes',
	));
	if($exc_pages->have_posts()) {
		while ($exc_pages->have_posts()) {
			$exc_pages->the_post();
			$exc_page_ids .= get_the_ID();
			if($counter < $exc_pages->found_posts) {
				$exc_page_ids .= ', ';
			}
			$counter++;
		}
	}
	$excluded_page_ids = $exc_page_ids;
}
add_action( 'init', 'navigation_excluded_pages' );

/** Get privacy policy content from Navitas.com */
function get_privacy_policy_content($language) {
	$url = 'https://www.navitas.com/api.json?model=Privacy&mode=first&options={"conditions":{"type":"privacy-policy","language":"'.$language.'"}}';
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	$results = json_decode($response);
	return $results->records->Privacy->content;
}
add_action('init', 'get_privacy_policy_content');

/** Get cookie policy content from Navitas.com */
function get_cookie_policy_content($language) {
	$url = 'https://www.navitas.com/api.json?model=Privacy&mode=first&options={"conditions":{"type":"cookie","language":"'.$language.'"}}';
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	$results = json_decode($response);
	return $results->records->Privacy->content;
}
add_action('init', 'get_cookie_policy_content');

/** Clean phone number format */
function clean_phone_format($value) {
	$result  = preg_replace('/[^a-zA-Z0-9_+]/s','',$value);
	return $result;
}


/******** Creating custom events widget ********/
class event_category_widget extends WP_Widget {

	function __construct() {
		parent::__construct(

		// Base ID of your widget
		'event_category_widget',

		// Widget name will appear in UI
		__('Event Categories Widget'),

		// Widget description
		array( 'description' => __( 'Event category widget' ), )
		);
	}

	// Creating widget front-end
	public function widget( $args, $instance ) {
		global $wpdb;

		$title = apply_filters( 'widget_title', $instance['title'] );

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		$terms = get_terms( array(
			//'taxonomy' => ['venue', 'organizers'],
			'taxonomy' => ['event_category'],
			'hide_empty' => false,
		) );

		$eventPost = get_post_type_object( 'events' );

		$page_slug = 'events';
		$post_type = 'page';
   		$eventPageId = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type= %s AND post_status = 'publish'", $page_slug, $post_type ) );
		$slug = get_permalink( $eventPageId);

		//echo '<form action="'. $eventPost->rewrite['slug'].'" method="get">';
		//echo '<select name="category" class="form-control event-select-widget" data-page-url="'.$eventPost->rewrite['slug'].'" >';

		echo '<form action="'. $slug.'" method="get">';
		echo '<select name="category" class="form-control event-select-widget" data-page-url="'.$slug.'" >';

		echo '<option value="">Select category</option>';
		foreach ($terms as $term) {
			//print '<pre>';print_r($terms);print '</pre>';
			//print '<li><a href="'.get_term_link($term->term_id) .'" title="'.$term->name.'">' . $term->name . '</a></li>';
			echo '<option value="'.$term->slug. '">'.$term->name. '</option>';
		}
		echo '</select>';
		//echo '<input type="submit" name="filter" value="Submit" class="mt-2 mb-2 btn btn-primary float-right" />';
		echo '</form>';

		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title' );
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
	<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	// Class wpb_widget ends here
}

// Register and load the widget
function event_category_load_widget() {
    register_widget( 'event_category_widget' );
}
add_action( 'widgets_init', 'event_category_load_widget' );

/********  End - Creating custom events widget ********/


/******** Creating custom future events widget ********/
class future_event_widget extends WP_Widget {

	function __construct() {
		parent::__construct(

		// Base ID of your widget
		'future_event_widget',

		// Widget name will appear in UI
		__('Future Event Widget'),

		// Widget description
		array( 'description' => __( 'Future Event widget' ), )
		);
	}

	// Creating widget front-end
	public function widget( $args, $instance ) {
		global $wpdb;

		$title = apply_filters( 'widget_title', $instance['title'] );

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];

		$nextMonth = [];

		$numMonth = 3;
		for ($i=0; $i<= $numMonth; $i++) {
			$nextMonth[$i] = array();
			$nextMonth[$i]['total_post'] = 0;
			$nextMonth[$i]['first_day'] = date('Ymd',strtotime('first day of +'.$i.' month')) ;
			$nextMonth[$i]['last_day'] = date('Ymd',strtotime('last day of +'.$i.' month')) ;
			$nextMonth[$i]['field_key'] = date('Y-m',strtotime('first day of +'.$i.' month')) ;
			$nextMonth[$i]['field_name'] = date('F',strtotime('first day of +'.$i.' month')) ;
		}

		foreach ($nextMonth as $index => $nm) {
			$postArgs = array(
							'post_type' => 'events',
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'meta_key' => 'event-start-date',
						);

			$meta_query = array(
							array(
								'key' => 'event-start-date',
								'value' => [$nm['first_day'], $nm['last_day']],
								'type'    => 'DATE',
								'compare' => 'between'
							)
						);
			$postArgs['meta_query'] = $meta_query;

			$events =  new WP_Query( $postArgs );

			$nextMonth[$index]['total_post'] = $events->post_count;

		}
		$eventPost = get_post_type_object( 'events' );

		$page_slug = 'events';
		$post_type = 'page';
   		$eventPageId = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type= %s AND post_status = 'publish'", $page_slug, $post_type ) );
		$slug = get_permalink( $eventPageId);

		//echo '<form action="'. $eventPost->rewrite['slug'].'" method="get" >';
		//echo '<select name="date" class="form-control event-select-widget" data-page-url="'.$eventPost->rewrite['slug'].'">';
		echo '<form action="'.$slug.'" method="get" >';
		echo '<select name="date" class="form-control event-select-widget" data-page-url="'.$slug.'">';
		echo '<option value="">Select month</option>';
		foreach ($nextMonth as $nm) {
			if ($nm['total_post'] > 0) {
				$optionName = $nm['field_name'];
				if (date('F') == $nm['field_name']) {
					$optionName = 'Current month';
				}
				echo '<option value="'.$nm['field_key']. '">'.$optionName. '</option>';
			}
		}
		echo '</select>';
		//echo '<input type="submit" name="filter" value="Submit" class="mt-2 mb-2 btn btn-primary float-right" />';
		echo '</form>';

		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title' );
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
	<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	// Class wpb_widget ends here
}

// Register and load the widget
function future_event_load_widget() {
    register_widget( 'future_event_widget' );
}
add_action( 'widgets_init', 'future_event_load_widget' );

/********  End - Creating custom future events widget ********/


/******** Creating custom event organizer widget ********/
class organizer_event_widget extends WP_Widget {

	function __construct() {
		parent::__construct(

		// Base ID of your widget
		'organizer_event_widget',

		// Widget name will appear in UI
		__('Organizer Event Widget'),

		// Widget description
		array( 'description' => __( 'Organizer Event widget' ), )
		);
	}

	// Creating widget front-end
	public function widget( $args, $instance ) {
		global $wpdb;

		$title = apply_filters( 'widget_title', $instance['title'] );

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		$terms = get_terms( array(
			//'taxonomy' => ['venue', 'event_category', 'organizers'],
			'taxonomy' => ['organizers'],
			'hide_empty' => false,
		) );

		$eventPost = get_post_type_object( 'events' );

		$page_slug = 'events';
		$post_type = 'page';
   		$eventPageId = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type= %s AND post_status = 'publish'", $page_slug, $post_type ) );
		$slug = get_permalink( $eventPageId);

		//echo '<form action="'. $eventPost->rewrite['slug'].'" method="get">';
		//echo '<select name="category" class="form-control event-select-widget" data-page-url="'.$eventPost->rewrite['slug'].'" >';

		echo '<form action="'. $slug.'" method="get">';
		echo '<select name="organizer" class="form-control event-select-widget" data-page-url="'.$slug.'" >';

		echo '<option value="">Select organizer</option>';
		foreach ($terms as $term) {
			//print '<pre>';print_r($terms);print '</pre>';
			//print '<li><a href="'.get_term_link($term->term_id) .'" title="'.$term->name.'">' . $term->name . '</a></li>';
			echo '<option value="'.$term->slug. '">'.$term->name. '</option>';
		}
		echo '</select>';
		//echo '<input type="submit" name="filter" value="Submit" class="mt-2 mb-2 btn btn-primary float-right" />';
		echo '</form>';

		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title' );
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	// Class wpb_widget ends here
}

// Register and load the widget
function organizer_event_load_widget() {
    register_widget( 'organizer_event_widget' );
}
add_action( 'widgets_init', 'organizer_event_load_widget' );
/********  End - Creating custom event organizer widget ********/


/******** Creating custom event venue widget ********/
class venue_event_widget extends WP_Widget {

	function __construct() {
		parent::__construct(

		// Base ID of your widget
		'venue_event_widget',

		// Widget name will appear in UI
		__('Venue Event Widget'),

		// Widget description
		array( 'description' => __( 'Venue Event widget' ), )
		);
	}

	// Creating widget front-end
	public function widget( $args, $instance ) {
		global $wpdb;

		$title = apply_filters( 'widget_title', $instance['title'] );

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		$terms = get_terms( array(
			//'taxonomy' => ['venue', 'event_category', 'organizers'],
			'taxonomy' => ['venue'],
			'hide_empty' => false,
		) );

		$eventPost = get_post_type_object( 'events' );

		$page_slug = 'events';
		$post_type = 'page';
   		$eventPageId = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type= %s AND post_status = 'publish'", $page_slug, $post_type ) );
		$slug = get_permalink( $eventPageId);

		//echo '<form action="'. $eventPost->rewrite['slug'].'" method="get">';
		//echo '<select name="category" class="form-control event-select-widget" data-page-url="'.$eventPost->rewrite['slug'].'" >';

		echo '<form action="'. $slug.'" method="get">';
		echo '<select name="venue" class="form-control event-select-widget" data-page-url="'.$slug.'" >';

		echo '<option value="">Select venue</option>';
		foreach ($terms as $term) {
			//print '<pre>';print_r($terms);print '</pre>';
			//print '<li><a href="'.get_term_link($term->term_id) .'" title="'.$term->name.'">' . $term->name . '</a></li>';
			echo '<option value="'.$term->slug. '">'.$term->name. '</option>';
		}
		echo '</select>';
		//echo '<input type="submit" name="filter" value="Submit" class="mt-2 mb-2 btn btn-primary float-right" />';
		echo '</form>';

		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title' );
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}

	// Class wpb_widget ends here
}

// Register and load the widget
function venue_event_load_widget() {
    register_widget( 'venue_event_widget' );
}
add_action( 'widgets_init', 'venue_event_load_widget' );
/********  End - Creating custom event venue widget ********/


/** Register Widget */
register_sidebar( array(
	'name'          => __( 'Sidebar Widgets', 'html5reset' ),
	'id'            => 'sidebar-primary',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
));

/**  Create Events Widget Sidebar **/
add_action( 'widgets_init', 'events_widget_sidebar' );
function events_widget_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Events Sidebar' ),
            'id' => 'events-widget-side-bar',
            'description' => __( 'Events Sidebar' ),
            'before_widget' => '<div class="widget-content mt-4 mb-2 clearfix">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}

/////////////////
