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
    echo '<li><a href="' . home_url('/operating-hours/') . '">Operating Hours</a></li>';
    echo '<li><a href="' . home_url('/birthday-parties/') . '">Birthday Parties</a></li>';
    echo '<li><a href="' . home_url('/faq/') . '">FAQ\'s</a></li>';
    echo '<li><a href="' . home_url('/contact/') . '">Contact Us</a></li>';
    echo '<li><a href="https://www.simpletix.com/e/once-upon-a-maze-tickets-246927" target="_blank" rel="noopener noreferrer" class="cta-button mobile-tickets-btn">Get Tickets</a></li>';
    echo '<li><a href="https://app.squareup.com/gift/MLMNZYDMGM3AS/order" target="_blank" rel="noopener noreferrer" class="cta-button mobile-gift-cards-btn">Gift Cards</a></li>';
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

// Auto-update "Get Tickets" menu items to link to SimpleTix
add_filter('wp_setup_nav_menu_item', function($menu_item) {
    if (isset($menu_item->title) && stripos($menu_item->title, 'Get Tickets') !== false) {
        $menu_item->url = 'https://www.simpletix.com/e/once-upon-a-maze-tickets-246927';
        $menu_item->target = '_blank';
    }
    return $menu_item;
});

// Also filter nav menu output to add target="_blank" and rel attributes
add_filter('walker_nav_menu_start_el', function($item_output, $item, $depth, $args) {
    if (isset($item->title) && stripos($item->title, 'Get Tickets') !== false) {
        $ticket_url = 'https://www.simpletix.com/e/once-upon-a-maze-tickets-246927';
        // Replace href if it's different
        $item_output = preg_replace('/href="[^"]*"/', 'href="' . esc_url($ticket_url) . '"', $item_output);
        // Add target and rel if not present
        if (strpos($item_output, 'target=') === false) {
            $item_output = str_replace('<a ', '<a target="_blank" rel="noopener noreferrer" ', $item_output);
        }
    }
    return $item_output;
}, 10, 4);

// Store Contact Form 7 posted data so we can use it when building the email (reliable across environments)
$once_upon_a_maze_cf7_posted_data = array();

add_action('wpcf7_before_send_mail', function($contact_form) {
    global $once_upon_a_maze_cf7_posted_data;
    $once_upon_a_maze_cf7_posted_data = array();
    if (!function_exists('WPCF7_Submission') || !class_exists('WPCF7_Submission')) {
        return;
    }
    $submission = WPCF7_Submission::get_instance();
    if ($submission) {
        $once_upon_a_maze_cf7_posted_data = $submission->get_posted_data();
    }
}, 5, 1);

// Force Contact Form 7 emails to the client inbox and build body from actual submitted values
add_filter('wpcf7_mail_components', function($components) {
    global $once_upon_a_maze_cf7_posted_data;

    $components['recipient'] = 'onceuponamaze@gmail.com';
    $components['sender'] = 'WordPress <wordpress@onceuponamaze.com>';

    $posted_data = is_array($once_upon_a_maze_cf7_posted_data) ? $once_upon_a_maze_cf7_posted_data : array();
    if (empty($posted_data) && function_exists('WPCF7_Submission') && class_exists('WPCF7_Submission')) {
        $submission = WPCF7_Submission::get_instance();
        if ($submission) {
            $posted_data = $submission->get_posted_data();
        }
    }

    $ignore_keys = array(
        '_wpcf7', '_wpcf7_version', '_wpcf7_locale', '_wpcf7_unit_tag', '_wpcf7_container_post',
        '_wpcf7_posted_data_hash', '_wpcf7_recaptcha_response'
    );

    $lines = array();
    foreach ($posted_data as $key => $value) {
        if (in_array($key, $ignore_keys, true)) continue;
        if (is_array($value)) $value = implode(', ', $value);
        $value = trim((string)$value);
        if ($value === '') continue;
        $pretty_key = ucwords(str_replace(array('-', '_'), ' ', (string)$key));
        $lines[] = $pretty_key . ': ' . $value;
    }

    if (!empty($lines)) {
        $site_name = get_bloginfo('name');
        $components['body'] = "You received a new message from your website " . $site_name . ":\n\n"
            . implode("\n", $lines) . "\n\n"
            . "You can reply directly to this email to respond to the sender.";
    }

    // Reply-To so you can hit Reply and respond to the person who filled the form
    $email_keys = array('your-email', 'email', 'your_email', 'contact-email');
    foreach ($email_keys as $ek) {
        if (!empty($posted_data[$ek]) && is_string($posted_data[$ek])) {
            $visitor_email = trim((string)$posted_data[$ek]);
            $headers = isset($components['additional_headers']) ? (string)$components['additional_headers'] : '';
            if (stripos($headers, 'Reply-To:') === false) {
                $headers = trim($headers . "\nReply-To: " . $visitor_email);
                $components['additional_headers'] = $headers;
            }
            break;
        }
    }

    // Subject: include subject line from form if present, otherwise default
    $subject_line = '';
    foreach (array('your-subject', 'subject') as $sk) {
        if (!empty($posted_data[$sk]) && is_string($posted_data[$sk])) {
            $subject_line = trim((string)$posted_data[$sk]);
            break;
        }
    }
    $site_name = get_bloginfo('name');
    if ($subject_line !== '') {
        $components['subject'] = '[' . $site_name . '] ' . $subject_line;
    } elseif (empty($components['subject']) || strpos($components['subject'], '[') === false) {
        $components['subject'] = '[' . $site_name . '] New contact form submission';
    }

    return $components;
});
?>