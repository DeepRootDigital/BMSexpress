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

/* Register Custom Post Types */

function create_post_type() {
	register_post_type('featuredslides', array(
		'labels' => array(
			'name' => __('Featured Slides'),
			'singular_name' => __('Featured Slide')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'featuredslides'),
		'supports' => array('title','editor','thumbnail')
		)
	);
	register_post_type('jobopenings', array(
		'labels' => array(
			'name' => __('Job Openings'),
			'singular_name' => __('Job Opening')
			),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'featuredslides'),
		'supports' => array('title','editor')
		)
	);
}
add_action('init', 'create_post_type');

?>