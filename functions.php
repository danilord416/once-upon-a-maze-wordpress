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
    // Always send to client inbox and from site domain
    $components['recipient'] = 'onceuponamaze@gmail.com';
    $components['sender'] = 'WordPress <wordpress@onceuponamaze.com>';

    // Build a message containing all submitted fields
    $submission = function_exists('WPCF7_Submission') ? WPCF7_Submission::get_instance() : null;
    if ($submission) {
        $posted_data = $submission->get_posted_data();
        if (is_array($posted_data)) {
            $ignore_keys = array(
                '_wpcf7', '_wpcf7_version', '_wpcf7_locale', '_wpcf7_unit_tag', '_wpcf7_container_post',
                '_wpcf7_posted_data_hash', '_wpcf7_recaptcha_response'
            );

            $lines = array();
            foreach ($posted_data as $key => $value) {
                if (in_array($key, $ignore_keys, true)) continue;
                if (is_array($value)) $value = implode(', ', $value);
                $pretty_key = ucwords(str_replace(array('-', '_'), ' ', (string)$key));
                $lines[] = $pretty_key . ': ' . (string)$value;
            }

            if (!empty($lines)) {
                $body_header = "New contact form submission:";
                $components['body'] = $body_header . "\n\n" . implode("\n", $lines) . "\n";
            }

            // Set Reply-To to visitor email if present
            $email_keys = array('your-email', 'email', 'your_email', 'contact-email');
            foreach ($email_keys as $ek) {
                if (!empty($posted_data[$ek]) && is_string($posted_data[$ek])) {
                    $visitor_email = trim((string)$posted_data[$ek]);
                    $headers = isset($components['additional_headers']) ? (string)$components['additional_headers'] : '';
                    // Append Reply-To if not already present
                    if (stripos($headers, 'Reply-To:') === false) {
                        $headers = trim($headers . "\nReply-To: " . $visitor_email);
                        $components['additional_headers'] = $headers;
                    }
                    break;
                }
            }
        }
    }

    // Ensure a helpful subject if none set
    if (empty($components['subject'])) {
        $site_name = get_bloginfo('name');
        $components['subject'] = '[' . $site_name . '] New contact form submission';
    }

    return $components;
});
?>