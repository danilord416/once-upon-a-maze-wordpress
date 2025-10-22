<?php
/**
 * Once Upon a Maze Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

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
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'once-upon-a-maze'),
    ));
}
add_action('after_setup_theme', 'once_upon_a_maze_setup');

// Enqueue styles and scripts
function once_upon_a_maze_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('once-upon-a-maze-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue custom JavaScript
    wp_enqueue_script('once-upon-a-maze-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'once_upon_a_maze_scripts');

// Fallback menu function
function once_upon_a_maze_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . home_url() . '">Home</a></li>';
    echo '<li><a href="' . home_url() . '/contact">Contact</a></li>';
    echo '</ul>';
}

// Add customizer support
function once_upon_a_maze_customize_register($wp_customize) {
    // Hero Image Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'once-upon-a-maze'),
        'priority' => 30,
    ));
    
    // Hero Image Setting
    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Background Image', 'once-upon-a-maze'),
        'section' => 'hero_section',
        'mime_type' => 'image',
    )));
}
add_action('customize_register', 'once_upon_a_maze_customize_register');
?>