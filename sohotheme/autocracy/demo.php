<?php

/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 */
/* * ******************* META BOX DEFINITIONS ********************** */

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'YOUR_PREFIX_';

global $meta_boxes;

$meta_boxes = array();

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'featuredslides',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Featured Slides',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('featuredslides'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        
    ),
    );

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'faqs',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'FAQs',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('faqs'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Question',
            'id' => 'question',
            'type' => 'text',
        ),
        array(
            'name' => 'Answer',
            'id' => 'answer',
            'type' => 'text',
        ),
    ),
    );

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'featuredclients',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'More Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('featuredclients'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Info Area',
            'id' => 'infoarea',
            'type' => 'text',
        ),
        array(
            'name' => 'Link to Demo',
            'id' => 'linktowebsite',
            'type' => 'text',
        ),
        array(
            'name'             => 'Images',
            'id'               => "imagegallery",
            'type'             => 'plupload_image',
            'max_file_uploads' => 20,
            ),
    ),
    );

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'contactinfo',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Contact Info',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('contactinfo'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Header Text',
            'id' => 'contactheader',
            'type' => 'text',
        ),
        array(
            'name' => 'Contact Name',
            'id' => 'contact1',
            'type' => 'text',
        ),
        array(
            'name' => 'Contact Address',
            'id' => 'contact2',
            'type' => 'text',
        ),
        array(
            'name' => 'Contact City State Zip',
            'id' => 'contact3',
            'type' => 'text',
        ),
        array(
            'name' => 'Contact Telephone',
            'id' => 'contact4',
            'type' => 'text',
        ),
        array(
            'name' => 'Contact Fax',
            'id' => 'contact5',
            'type' => 'text',
        ),
        array(
            'name' => 'Contact Email',
            'id' => 'contact6',
            'type' => 'text',
        ),
    ),
    );



/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'YOUR_PREFIX_register_meta_boxes');