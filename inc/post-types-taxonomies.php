<?php
function mindset_register_custom_post_types()
// Works CPT
{
    $labels = array(
        'name'                     => _x('Works', 'post type general name', 'mindset-theme'),
        'singular_name'            => _x('Work', 'post type singular name', 'mindset-theme'),
        'add_new'                  => _x('Add New', 'work', 'mindset-theme'),
        'add_new_item'             => __('Add New Work', 'mindset-theme'),
        'edit_item'                => __('Edit Work', 'mindset-theme'),
        'new_item'                 => __('New Work', 'mindset-theme'),
        'view_item'                => __('View Work', 'mindset-theme'),
        'view_items'               => __('View Works', 'mindset-theme'),
        'search_items'             => __('Search Works', 'mindset-theme'),
        'not_found'                => __('No works found.', 'mindset-theme'),
        'not_found_in_trash'       => __('No works found in Trash.', 'mindset-theme'),
        'parent_item_colon'        => __('Parent Works:', 'mindset-theme'),
        'all_items'                => __('All Works', 'mindset-theme'),
        'archives'                 => __('Work Archives', 'mindset-theme'),
        'attributes'               => __('Work Attributes', 'mindset-theme'),
        'insert_into_item'         => __('Insert into work', 'mindset-theme'),
        'uploaded_to_this_item'    => __('Uploaded to this work', 'mindset-theme'),
        'featured_image'           => __('Work featured image', 'mindset-theme'),
        'set_featured_image'       => __('Set work featured image', 'mindset-theme'),
        'remove_featured_image'    => __('Remove work featured image', 'mindset-theme'),
        'use_featured_image'       => __('Use as featured image', 'mindset-theme'),
        'menu_name'                => _x('Works', 'admin menu', 'mindset-theme'),
        'filter_items_list'        => __('Filter works list', 'mindset-theme'),
        'items_list_navigation'    => __('Works list navigation', 'mindset-theme'),
        'items_list'               => __('Works list', 'mindset-theme'),
        'item_published'           => __('Work published.', 'mindset-theme'),
        'item_published_privately' => __('Work published privately.', 'mindset-theme'),
        'item_revereted_to_draft'  => __('Work reverted to draft.', 'mindset-theme'),
        'item_trashed'             => __('Work trashed.', 'mindset-theme'),
        'item_scheduled'           => __('Work scheduled.', 'mindset-theme'),
        'item_updated'             => __('Work updated.', 'mindset-theme'),
        'item_link'                => __('Work link.', 'mindset-theme'),
        'item_link_description'    => __('A link to a work.', 'mindset-theme'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'works'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array('title', 'editor', 'thumbnail'),
    );
    register_post_type('fwd-work', $args);

    // Testimonials CPT
    $labels = array(
        'name'                  => _x('Testimonials', 'post type general name', 'mindset-theme'),
        'singular_name'         => _x('Testimonial', 'post type singular name', 'mindset-theme'),
        'menu_name'             => _x('Testimonials', 'admin menu', 'mindset-theme'),
        'add_new'               => _x('Add New', 'testimonial', 'mindset-theme'),
        'add_new_item'          => __('Add New Testimonial', 'mindset-theme'),
        'new_item'              => __('New Testimonial', 'mindset-theme'),
        'edit_item'             => __('Edit Testimonial', 'mindset-theme'),
        'view_item'             => __('View Testimonial', 'mindset-theme'),
        'all_items'             => __('All Testimonials', 'mindset-theme'),
        'search_items'          => __('Search Testimonials', 'mindset-theme'),
        'parent_item_colon'     => __('Parent Testimonials:', 'mindset-theme'),
        'not_found'             => __('No testimonials found.', 'mindset-theme'),
        'not_found_in_trash'    => __('No testimonials found in Trash.', 'mindset-theme'),
        'item_link'             => __('Testimonial link.', 'mindset-theme'),
        'item_link_description' => __('A link to a testimonial.', 'mindset-theme'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array('title', 'editor'),
        'template'           => array(array('core/pullquote')),
        'template_lock'      => 'all'
    );

    register_post_type('fwd-testimonial', $args);

    // Job Posting CPT
    $labels = array(
        'name'                  => _x('Job Postings', 'post type general name', 'mindset-theme'),
        'singular_name'         => _x('Job Posting', 'post type singular name', 'mindset-theme'),
        'menu_name'             => _x('Job Postings', 'admin menu', 'mindset-theme'),
        'add_new'               => _x('Add New', 'service', 'mindset-theme'),
        'add_new_item'          => __('Add New Job Posting', 'mindset-theme'),
        'new_item'              => __('New Job Posting', 'mindset-theme'),
        'edit_item'             => __('Edit Job Posting', 'mindset-theme'),
        'view_item'             => __('View Job Posting', 'mindset-theme'),
        'all_items'             => __('All Job Postings', 'mindset-theme'),
        'search_items'          => __('Search Job Postings', 'mindset-theme'),
        'parent_item_colon'     => __('Parent Job Postings:', 'mindset-theme'),
        'not_found'             => __('No Job Postings found.', 'mindset-theme'),
        'not_found_in_trash'    => __('No Job Postings found in Trash.', 'mindset-theme'),
        'insert_into_item'      => __('Insert into Job Posting', 'mindset-theme'),
        'uploaded_to_this_item' => __('Uploaded to this Job Posting', 'mindset-theme'),
        'item_link'             => __('Job Posting link.', 'mindset-theme'),
        'item_link_description' => __('A link to a job posting.', 'mindset-theme'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'careers'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-megaphone',
        'supports'           => array('title', 'editor'),
        'template'           => array(
            array('core/heading', array('level' => 3, 'content' => 'Role',)),
            array('core/paragraph', array('placeholder' => 'Describe the role...')),
            array('core/heading', array('level' => 3, 'content' => 'Requirements')),
            array('core/list'),
            array('core/heading', array('level' => 3, 'content' => 'Location')),
            array('core/paragraph'),
            array('core/heading', array('level' => 3, 'content' => 'How to Apply')),
            array('core/paragraph'),
        )
    );
    register_post_type('fwd-job-posting', $args);

    // Services CPT
    $labels = array(
        'name' => _x('Services', 'Post Type General Name', 'mindset-theme'),
        'singular_name' => _x('Service', 'Post Type Singular Name', 'mindset-theme'),
        'menu_name' => _x('Services', 'Admin Menu text', 'mindset-theme'),
        'name_admin_bar' => _x('Service', 'Add New on Toolbar', 'mindset-theme'),
        'archives' => __('Service Archives', 'mindset-theme'),
        'attributes' => __('Service Attributes', 'mindset-theme'),
        'parent_item_colon' => __('Parent Service:', 'mindset-theme'),
        'all_items' => __('All Services', 'mindset-theme'),
        'add_new_item' => __('Add New Service', 'mindset-theme'),
        'add_new' => __('Add New', 'mindset-theme'),
        'new_item' => __('New Service', 'mindset-theme'),
        'edit_item' => __('Edit Service', 'mindset-theme'),
        'update_item' => __('Update Service', 'mindset-theme'),
        'view_item' => __('View Service', 'mindset-theme'),
        'view_items' => __('View Services', 'mindset-theme'),
        'search_items' => __('Search Service', 'mindset-theme'),
        'not_found' => __('Not found', 'mindset-theme'),
        'not_found_in_trash' => __('Not found in Trash', 'mindset-theme'),
        'featured_image' => __('Featured Image', 'mindset-theme'),
        'set_featured_image' => __('Set featured image', 'mindset-theme'),
        'remove_featured_image' => __('Remove featured image', 'mindset-theme'),
        'use_featured_image' => __('Use as featured image', 'mindset-theme'),
        'insert_into_item' => __('Insert into Service', 'mindset-theme'),
        'uploaded_to_this_item' => __('Uploaded to this Service', 'mindset-theme'),
        'items_list' => __('Services list', 'mindset-theme'),
        'items_list_navigation' => __('Services list navigation', 'mindset-theme'),
        'filter_items_list' => __('Filter Services list', 'mindset-theme'),
    );
    $args = array(
        'label' => __('Service', 'mindset-theme'),
        'description' => __('List of services', 'mindset-theme'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'editor'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type('service', $args);
}
add_action('init', 'mindset_register_custom_post_types');

function mindset_rewrite_flush()
{
    mindset_register_custom_post_types();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'mindset_rewrite_flush');
