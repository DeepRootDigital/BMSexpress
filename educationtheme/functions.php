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
		'name' => 'Slider Area',
		'id' => 'education_slider',
		'before_widget' => '<div class="slider-area">',
		'after_widget' => '</div>',
	        )
        );
        register_sidebar( array(
		'name' => 'Social Area',
		'id' => 'social_area',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Page Sidearea',
		'id' => 'page_sidearea',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Triple Box 1',
		'id' => 'triple_sidearea1',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Triple Box 2',
		'id' => 'triple_sidearea2',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Triple Box 3',
		'id' => 'triple_sidearea3',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Double Box 1',
		'id' => 'double_sidearea1',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Double Box 2',
		'id' => 'double_sidearea2',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Three Box Area 1',
		'id' => 'three_area1',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Three Box Area 2',
		'id' => 'three_area2',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Three Box Area 3',
		'id' => 'three_area3',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Two Box Area 1',
		'id' => 'two_area1',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Two Box Area 2',
		'id' => 'two_area2',
		'before_widget' => '',
		'after_widget' => '',
	        )
        );
        register_sidebar( array(
		'name' => 'Contact Area',
		'id' => 'contactbox',
		'before_widget' => '<div class="contact-form">',
		'after_widget' => '</div>',
	        )
        );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/* Register Custom Post Types */

function create_post_type() {
        register_post_type('Jobs', array(
		'labels' => array(
			'name' => __('Jobs'),
			'singular_name' => __('Job'),
			),
		'taxonomies'=>array('category'),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'jobs'),
		'supports' => array( 'title', 'editor', 'thumbnail'),
		)
	);
        register_post_type('slider', array(
		'labels' => array(
			'name' => __('Slider'),
			'singular_name' => __('Slider'),
			),
		'taxonomies'=>array('slider'),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'slider'),
		'supports' => array( 'title', 'thumbnail'),
		)
	);
        register_post_type('contactinfo', array(
		'labels' => array(
			'name' => __('Contact'),
			'singular_name' => __('Contact'),
			),
		'taxonomies'=>array('contact'),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'contact'),
		'supports' => array( 'title', 'editor'),
		)
	);
        register_post_type('featuredlinks', array(
		'labels' => array(
			'name' => __('Featured Links'),
			'singular_name' => __('Featured Link'),
			),
		'taxonomies'=>array('contact'),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'featuredlinks'),
		'supports' => array( 'title', 'editor'),
		)
	);
}
add_action('init', 'create_post_type');

?>