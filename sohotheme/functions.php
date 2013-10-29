<?php

// Re-define meta box path and URL
define('RWMB_URL', trailingslashit(get_stylesheet_directory_uri() . '/autocracy/API/'));
define('RWMB_DIR', trailingslashit(get_template_directory() . '/autocracy/API/'));
// Include the meta box script
require_once RWMB_DIR . '/meta-box.php';
include get_template_directory() . '/autocracy/demo.php';

add_theme_support('post-thumbnails');
add_theme_support('menus');
register_nav_menu('Header Nav', 'Navigation Menu');

function autoc_get_img($id) {

	global $wpdb;
	$images = get_post_meta( get_the_ID(), $id, false );
	$images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
	$images = $wpdb->get_col( "
		SELECT ID FROM {$wpdb->posts}
		WHERE post_type = 'attachment'
		AND ID in ({$images})
		ORDER BY menu_order ASC
		" );

	foreach ( $images as $att )
	{
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
		$src = wp_get_attachment_image_src( $att, 'full' );
		$src = $src[0];
    // Show image
		echo "<img src='{$src}' />";
	}

}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'soho slider',
		'id' => 'soho_slider',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* Register Custom Post Types */

function create_post_type() {
	register_post_type('frontpageslider', array(
		'labels' => array(
			'name' => __('Front Page Slider'),
			'singular_name' => __('Front Page Slider')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'frontpageslider'),
		'supports' => array('title','thumbnail')
		)
	);
	register_post_type('featuredclients', array(
		'labels' => array(
			'name' => __('Featured Clients'),
			'singular_name' => __('Featured Client')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'featuredclients'),
		'supports' => array('title','editor','thumbnail')
		)
	);
	register_taxonomy_for_object_type( 'category', 'featuredclients' );
	register_post_type('testimonials', array(
		'labels' => array(
			'name' => __('Testimonials'),
			'singular_name' => __('Testimonial')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'testimonials'),
		'supports' => array('title','editor','thumbnail')
		)
	);
	register_post_type('faqs', array(
		'labels' => array(
			'name' => __('faqs'),
			'singular_name' => __('faq')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'faqs'),
		'supports' => array('title','thumbnail')
		)
	);
	register_post_type('newsevents', array(
		'labels' => array(
			'name' => __('News & Events'),
			'singular_name' => __('News & Events')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'newsevents'),
		'supports' => array('title','editor','thumbnail')
		)
	);
}
add_action('init', 'create_post_type');

?>