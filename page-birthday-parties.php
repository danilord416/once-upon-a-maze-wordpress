<?php
/**
 * Template Name: Birthday Parties
 * Description: Dedicated page for birthday parties information.
 */

get_header(); ?>

<!-- Navigation -->
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Once-Upon-a Maze-Logo-2.png" alt="Once Upon a Maze Logo" class="logo-img">
        </div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-menu',
            'container' => false,
            'fallback_cb' => 'once_upon_a_maze_fallback_menu',
        ));
        ?>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>



<!-- Birthday Parties Content (reusing party section styling) -->
<section class="party-section">
    <div class="container">
        <div class="party-header">
            <h2 class="section-title">Celebrate in Storybook Style</h2>
            <p class="section-subtitle">Host your next birthday or special event inside our enchanting party rooms!</p>
            <p class="party-excitement">Make your special day truly magical with our unforgettable party experiences!</p>
        </div>

        <div class="party-rooms">
            <div class="party-room">
                <div class="party-icon">🧚‍♀️</div>
                <h3>The Fairy Room</h3>
                <p>Full of sparkle, flowers, and woodland charm</p>
            </div>

            <div class="party-room">
                <div class="party-icon">🐉</div>
                <h3>The Dragon Room</h3>
                <p>Bold, mystical, and full of adventure</p>
            </div>
        </div>

        <div class="party-cta">
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white">
                <i class="fas fa-birthday-cake"></i>
                Inquire About Parties
            </a>
            <p class="party-note">More details coming soon. In the meantime, reach out via our contact page to learn more!</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>


