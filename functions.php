<?php
function mindset_enqueues()
{
    // Load normalize.css on the front-end
    wp_enqueue_style(
        'mindset-normalize',
        'https://unpkg.com/@csstools/normalize.css',
        array(),
        '12.1.0'
    );
    // Load style.css on the front-end
    // Parameters: Unique handle, Source, Dependencies, Version number, Media
    wp_enqueue_style(
        'mindset-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );

    wp_enqueue_script(
        'mindset-scroll-to-top',
        get_theme_file_uri('assets/js/scroll-to-top.js'),
        array(),
        wp_get_theme()->get('Version'),
        array('strategy' => 'defer')
    );
}
add_action('wp_enqueue_scripts', 'mindset_enqueues');

function mindset_setup()
{
    add_editor_style(get_stylesheet_uri());

    // Crop images to 400px by 500px
    add_image_size('400x500', 400, 500, true);

    // Crop images to 200px by 250px
    add_image_size('200x250', 200, 250, true);
}
add_action('after_setup_theme', 'mindset_setup');

// Make custom sizes selectable from WordPress admin.
function mindset_add_custom_image_sizes($size_names)
{
    $new_sizes = array(
        '400x500' => __('400x500', 'mindset-theme'),
        '200x250' => __('200x250', 'mindset-theme'),
    );
    return array_merge($size_names, $new_sizes);
}
add_filter('image_size_names_choose', 'mindset_add_custom_image_sizes');
