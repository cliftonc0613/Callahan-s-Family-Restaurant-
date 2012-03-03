<?php

// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to twentyten_header_image_width and twentyten_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentyten_header_image_width', 800 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentyten_header_image_height', 200 ) );
	
// Remove all:
	function remove_twentyTen_headers() {
	unregister_default_headers( array(
	'berries',
	'cherryblossom',
	'concave',
	'fern',
	'forestfloor',
	'inkwell',
	'path',
	'sunset'	
	));
}
	
	add_action('after_setup_theme','remove_twentyTen_headers',11);
	
register_default_headers( 
	array(
		'Callahans Home' => array(
			'url' => "%s/../callahansV2/images/Callahans_HEADER.jpg",
			'thumbnail_url' => "%s/../callahansV2/images/Callahans_HEADER_thumb.jpg",
			/* translators: header image description */
			'description' => __( 'Callahans Family Restuarant Header', 'twentyten' )
		)
	) 
);
	
// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header_nav' => __( 'Header Navigation', 'twentyten' ),
		'footer_nav' => __( 'Footer Navigation', 'twentyten' ),
		'left_sidebar_nav' => __( 'Left Sidebar', 'twentyten' ),
		
	) );
	
	function tnc_remove_default_menu() {
		unregister_nav_menu('primary');
	}
	
	add_action('after_setup_theme','tnc_remove_default_menu',11);
	
	// Remove parent theme widgets by calling unregister_sidebar() 
	function tnc_remove_widgets(){
		unregister_sidebar( 'fourth-footer-widget-area' );
	}

	add_action( 'widgets_init', 'tnc_remove_widgets', 11 );
	
	// Register new widgetized areas
	function tnc_widgets_init() {
	
	// Two new widgetized areas
	// Area 1a, below Area 1 to the left.
	register_sidebar( array(
		'name' => __( 'Left Widget Area', 'twentyten' ),
		'id' => 'left-widget-area',
		'description' => __( 'Left widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 1b, below Area 1 to the right.
	register_sidebar( array(
		'name' => __( 'Right Widget Area', 'twentyten' ),
		'id' => 'right-widget-area',
		'description' => __( 'Right widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		
	
	}
	
	
	/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
	add_action( 'widgets_init', 'tnc_widgets_init' );

	function field_func($atts) {
	   global $post;
	   $name = $atts['name'];
	   if (empty($name)) return;
	
	   return get_post_meta($post->ID, $name, true);
	}

		add_shortcode('field', 'field_func');

/*
 * -------------------------------------------------------
 * **	The End 
 * -------------------------------------------------------
 */
?>