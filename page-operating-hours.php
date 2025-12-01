<?php
/**
 * Template Name: Operating Hours
 * Description: Dedicated page to display current operating hours via an embedded Canva design.
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
            'menu_class'     => 'nav-menu',
            'container'      => false,
            'fallback_cb'    => 'once_upon_a_maze_fallback_menu',
        ));
        ?>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>

<!-- Operating Hours Content -->
<section class="contact-info">
    <div class="container">
        <div class="contact-grid">
            <!-- Operating Hours Card -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Current Operating Hours</h3>
                <div class="contact-details">
                    <!-- Canva embed -->
                    <div class="hours-embed" style="max-width: 800px; margin: 0 auto;">
                        <div style="position: relative; width: 100%; height: 0; padding-top: 125.0000%;
                        padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                        border-radius: 8px; will-change: transform;">
                          <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                            src="https://www.canva.com/design/DAG6R7M-1sw/AWJzNFWohnWqce2Mf1bp5Q/view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
                          </iframe>
                        </div>
                    </div>
                </div>
                <div class="contact-extra">
                    <p><i class="fas fa-info-circle"></i> Hours are subject to change for holidays and special events.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


