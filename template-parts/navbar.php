<?php
$tickets_url = once_upon_a_maze_tickets_url();
$merry_maze_url = once_upon_a_maze_merry_maze_url();
?>
<!-- Navigation -->
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Once-Upon-a Maze-Logo-2.png" alt="Once Upon a Maze Logo" class="logo-img">
        </div>
        <a href="<?php echo esc_url($tickets_url); ?>" target="_blank" rel="noopener noreferrer" class="cta-button header-tickets-btn">Not-So-Spooky Maze</a>
        <a href="<?php echo esc_url($merry_maze_url); ?>" target="_blank" rel="noopener noreferrer" class="cta-button header-gift-cards-btn">Merry Maze</a>
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
