<?php
/**
 * Once Upon a Maze Theme Functions
 */

// Theme setup
function once_upon_a_maze_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'once-upon-a-maze'),
    ));
}
add_action('after_setup_theme', 'once_upon_a_maze_setup');

// Enqueue scripts and styles
function once_upon_a_maze_scripts() {
    wp_enqueue_style('once-upon-a-maze-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('once-upon-a-maze-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'once_upon_a_maze_scripts');

// Fallback menu function
function once_upon_a_maze_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . home_url() . '">Home</a></li>';
    echo '<li><a href="' . home_url('/contact/') . '">Contact</a></li>';
    echo '<li><a href="' . home_url('/birthday-parties/') . '">Birthday Parties</a></li>';
    echo '<li><a href="#">FAQ\'s</a></li>';
    echo '<li><a href="#" class="cta-button">Get Tickets</a></li>';
    echo '</ul>';
}

// Add custom body classes
function once_upon_a_maze_body_classes($classes) {
    if (is_page('contact')) {
        $classes[] = 'contact-page';
    }
    return $classes;
}
add_filter('body_class', 'once_upon_a_maze_body_classes');

// Force Contact Form 7 emails to go to the client's inbox
// This preserves the form's existing subject/body and only changes the recipient
add_filter('wpcf7_mail_components', function($components) {
    // Set the recipient email address
    $components['recipient'] = 'onceuponamaze@gmail.com';
    return $components;
});
?>