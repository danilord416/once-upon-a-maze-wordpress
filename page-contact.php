<?php
/**
 * The contact page template for Once Upon a Maze
 */

get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>

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
            
            <?php echo do_shortcode('[fluentform id="3"]'); ?>
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