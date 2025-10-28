<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="9841SaOiIaf5O9xHX8esXHkc-79bwSLF_X-pAF7a080" />
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php 
        if (is_home() || is_front_page()) {
            echo 'Step into a living storybook, where magic winds through enchanted pathways & whimsical rooms as familiar tales come to life.';
        } elseif (is_page('contact')) {
            echo 'Contact Once Upon a Maze for questions, party bookings, or to plan your magical adventure. Located in Alpharetta, GA at North Point Mall.';
        } else {
            echo get_bloginfo('description');
        }
    ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/Once-Upon-a Maze-Logo-2.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/Once-Upon-a Maze-Logo-2.png">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php 
        if (is_home() || is_front_page()) {
            echo 'Step into a living storybook, where magic winds through enchanted pathways & whimsical rooms as familiar tales come to life.';
        } elseif (is_page('contact')) {
            echo 'Contact Once Upon a Maze for questions, party bookings, or to plan your magical adventure. Located in Alpharetta, GA at North Point Mall.';
        } else {
            echo get_bloginfo('description');
        }
    ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/Once-Upon-a Maze-Logo-2.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo get_permalink(); ?>">
    <meta property="twitter:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="twitter:description" content="<?php 
        if (is_home() || is_front_page()) {
            echo 'Step into a living storybook, where magic winds through enchanted pathways & whimsical rooms as familiar tales come to life.';
        } elseif (is_page('contact')) {
            echo 'Contact Once Upon a Maze for questions, party bookings, or to plan your magical adventure. Located in Alpharetta, GA at North Point Mall.';
        } else {
            echo get_bloginfo('description');
        }
    ?>">
    <meta property="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/Once-Upon-a Maze-Logo-2.png">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Once Upon a Maze",
        "url": "<?php echo home_url(); ?>",
        "logo": "<?php echo get_template_directory_uri(); ?>/assets/images/Once-Upon-a Maze-Logo-2.png",
        "description": "Step into a living storybook, where magic winds through enchanted pathways & whimsical rooms as familiar tales come to life.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1000 North Point Cir",
            "addressLocality": "Alpharetta",
            "addressRegion": "GA",
            "postalCode": "30022",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "onceuponamaze@gmail.com"
        },
        "sameAs": [
            "<?php echo home_url(); ?>"
        ]
    }
    </script>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Crimson+Text:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>