<?php
/**
 * Template Name: Contact Page
 * The contact page template for Once Upon a Maze
 */

get_header(); ?>

<!-- Navigation -->
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Once-Upon-a Maze-Logo-2.png" alt="Once Upon a Maze Logo" class="logo-img">
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

<!-- Contact Page Hero -->
<section class="page-hero">
    <div class="hero-image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/Contact-Us-Header.png" alt="Contact Us Header" class="hero-header-img">
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="container">
        <div class="contact-form-container">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle" style="text-align: center;">Have a question or want to book a party? We'd love to hear from you!</p>
            <form class="contact-form" action="mailto:onceuponamaze@gmail.com" method="post" enctype="text/plain">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="inquiry">Your Inquiry *</label>
                    <textarea id="inquiry" name="inquiry" rows="5" required placeholder="Tell us about your question, party booking request, or any other inquiry..."></textarea>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary btn-large">
                        <i class="fas fa-paper-plane"></i>
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="contact-info-section">
    <div class="container">
        <div class="contact-info-grid">
            <div class="contact-card">
                <h3>Visit Us</h3>
                <div class="contact-method">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>1000 North Point Cir<br>Alpharetta, GA 30022<br>2nd Floor, next to FairyTale Village</span>
                </div>
                <div class="contact-method">
                    <i class="fas fa-envelope"></i>
                    <span><a href="mailto:onceuponamaze@gmail.com">onceuponamaze@gmail.com</a></span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>