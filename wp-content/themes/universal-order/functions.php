<?php

//Enable Menus
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}

//Enable Thumbnails
add_theme_support( 'post-thumbnails' );

//Add Read More link to Excerpts
function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
//add_filter( 'excerpt_more', 'new_excerpt_more' );

//Add Event Type 
add_action( 'init', 'create_event_type' );
function create_event_type() {
	
	$labels = array(
		'name'                       => _x( 'Event Types', 'taxonomy general name' ),
		'singular_name'              => _x( 'Event Type', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Event Types' ),
		'popular_items'              => __( 'Popular Event Types' ),
		'all_items'                  => __( 'All Event Types' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Event Type' ),
		'update_item'                => __( 'Update Event Type' ),
		'add_new_item'               => __( 'Add New Event Type' ),
		'new_item_name'              => __( 'New Event Type' ),
		'separate_items_with_commas' => __( 'Separate event types with commas' ),
		'add_or_remove_items'        => __( 'Add or remove event types' ),
		'choose_from_most_used'      => __( 'Choose from the most used event types' ),
		'not_found'                  => __( 'No event types found.' ),
		'menu_name'                  => __( 'Event Types' ),
	);
	
	$args = array(
		'hierarchical'          => true,
		'with_front'			=> true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => false,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'event_type' ),
	);

	register_taxonomy('event_type','event',$args);

}

//Custom Post Type - Event
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'event',
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'events', 'with_front' => false),
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
		'taxonomies' => array('event_type'),
		)
	);
}


function my_rewrite_flush() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'my_rewrite_flush' );

/*
// Add Excerpts for Pages
add_action('init', 'my_custom_init');
function my_custom_init() {
	add_post_type_support( 'page', 'excerpt' );
}
*/

function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );


function my_scripts_method() {
wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js', array('jquery'), '1.8.6');
wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/js/site.js',array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>