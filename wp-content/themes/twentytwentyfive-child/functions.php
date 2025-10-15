<?php
// Load CSS của theme gốc trước
add_action( 'wp_enqueue_scripts', function() {
    // Load CSS theme gốc
    wp_enqueue_style( 'twentytwentyfive-style', get_template_directory_uri() . '/style.css' );

    // Load CSS child theme
    wp_enqueue_style( 'twentytwentyfive-child-style', get_stylesheet_directory_uri() . '/style.css', array('twentytwentyfive-style') );
} );

// Custom nút comment cho user logged-in
add_filter('comment_form_defaults', function($defaults) {
    if (is_user_logged_in()) {
        $defaults['label_submit'] = 'share';
    }
    return $defaults;
});
