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
        <a href="https://www.simpletix.com/e/once-upon-a-maze-tickets-246927" target="_blank" rel="noopener noreferrer" class="cta-button header-tickets-btn">Get Tickets</a>
        <a href="https://app.squareup.com/gift/MLMNZYDMGM3AS/order" target="_blank" rel="noopener noreferrer" class="cta-button header-gift-cards-btn">Gift Cards</a>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fairy-2.png" alt="Fairy Room" class="party-room-image">
                <h3>The Fairy Room</h3>
                <p>Full of sparkle, flowers, and woodland charm</p>
            </div>

            <div class="party-room">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dragon-2.png" alt="Dragon Room" class="party-room-image">
                <h3>The Dragon Room</h3>
                <p>Bold, mystical, and full of adventure</p>
            </div>
        </div>

        <div class="party-details">
            <div class="party-details-content">
                <p class="party-details-intro">Each room offers 1,000 sq. ft. of party space, with seating for up to 25 guests. You'll enjoy:</p>
                
                <ul class="party-features">
                    <li>Three heavy-duty 6-foot tables and 30 chairs</li>
                    <li>A dedicated gift space</li>
                    <li>A themed picture spot for those must-have memories</li>
                </ul>

                <div class="party-packages">
                    <h3 class="party-packages-title">Party Packages:</h3>
                    <p class="party-package-price">Room rental is $150 for two hours.</p>
                    <p class="party-package-note">(Tickets to the Once Upon a Maze experience are purchased separately so you can tailor your visit.)</p>
                </div>

                <div class="party-addons">
                    <h3 class="party-addons-title">Add-On Options</h3>
                    <p class="party-addons-intro">Enhance your celebration with optional add-ons:</p>
                    <ul class="party-addons-list">
                        <li><strong>Party Essentials</strong> – plates, napkins, juice boxes, tablecloths, and cake-cutting utensils ($3 per person)</li>
                        <li><strong>Party Favor Bags</strong> – fun themed trinkets for each child ($5 per child)</li>
                        <li><strong>Pizza Package</strong> – kid-friendly pizza for your guests ($6.50 per person)</li>
                    </ul>
                </div>

                <div class="party-fairytale">
                    <h3 class="party-fairytale-title">Explore FairyTale Village for Just $10/Guest</h3>
                    <p>In addition to booking Once Upon A Maze tickets for $12.50 per person with a minimum of 17, make the celebration even more magical! Add admission to <a href="https://fairytalevillage.com" target="_blank" rel="noopener noreferrer">FairyTale Village</a> for only $10 per person, 17 minimum. Ask us for details.</p>
                </div>

            </div>
        </div>

        <div class="party-cta">
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white btn-large">
                <i class="fas fa-birthday-cake"></i>
                Book Your Party Today!
            </a>
        </div>

        <section class="party-testimonial" aria-label="Birthday party testimonial">
            <p class="party-testimonial-stars" aria-hidden="true">★★★★★</p>
            <h3 class="party-testimonial-title">Parent Testimonial</h3>
            <blockquote>
                "It couldn’t have been better. Everyone, especially Brynley, was absolutely thrilled with the experience. The room decor and photo spots took it all over the top. Thank you so much!"
            </blockquote>
            <p class="party-testimonial-author">— Allison F.</p>
        </section>
    </div>
</section>

<?php get_footer(); ?>


