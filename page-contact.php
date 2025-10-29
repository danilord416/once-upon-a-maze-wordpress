<?php
/**
 * The contact page template for Once Upon a Maze
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

<!-- Hero Section -->
<section class="page-hero">
    <div class="hero-image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Contact-Us-Header.png" alt="Contact Us Header" class="hero-header-img">
    </div>
</section>

<!-- Contact Form -->
<section class="contact-form-section">
    <div class="container">
        <div class="contact-form-container">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle" style="text-align: center;">Have a question or want to book a party? We'd love to hear from you!</p>
            
            <?php echo do_shortcode('[contact-form-7 id="84e6169" title="Once Upon a Maze Contact Form"]'); ?>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="contact-info">
    <div class="container">
        <div class="contact-grid">
            <!-- Location Card -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Visit Us</h3>
                <div class="contact-details">
                    <p><strong>Once Upon a Maze</strong></p>
                    <p>1000 North Point Cir</p>
                    <p>Alpharetta, GA 30022</p>
                    <p>2nd Floor, next to FairyTale Village</p>
                </div>
                <div class="contact-extra">
                    <p><i class="fas fa-parking"></i> Free parking available</p>
                    <p><i class="fas fa-wheelchair"></i> Wheelchair accessible</p>
                    <p><i class="fas fa-car"></i> Easy access from parking garage</p>
                </div>
            </div>

            <!-- Hours Card -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Operating Hours</h3>
                <div class="contact-details">
                    <div class="hours-row">
                        <span class="day">Fridays</span>
                        <span class="time">10:00 AM - 9:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span class="day">Saturdays</span>
                        <span class="time">10:00 AM - 9:00 PM</span>
                    </div>
                    <div class="hours-row">
                        <span class="day">Sundays</span>
                        <span class="time">12:00 PM - 7:00 PM</span>
                    </div>
                </div>
                <div class="contact-extra">
                    <p><i class="fas fa-ticket-alt"></i> Tickets available every 15 minutes</p>
                    <p><i class="fas fa-door-open"></i> Walk-ins welcome</p>
                </div>
            </div>

            <!-- Contact Methods Card -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Contact Us</h3>
                <div class="contact-details">
                    <div class="contact-method">
                        <i class="fas fa-envelope"></i>
                        <span><a href="mailto:onceuponamaze@gmail.com">onceuponamaze@gmail.com</a></span>
                    </div>
                    <div class="contact-method">
                        <i class="fas fa-phone"></i>
                        <span><a href="tel:+14702232990">470-223-2990</a></span>
                    </div>
                </div>
                <div class="contact-extra">
                    <p><i class="fas fa-clock"></i> Response within 24 hours</p>
                    <p><i class="fas fa-heart"></i> We love hearing from you!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>