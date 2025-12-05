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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fairy-1.png" alt="Fairy Room" class="party-room-image">
                <h3>The Fairy Room</h3>
                <p>Full of sparkle, flowers, and woodland charm</p>
            </div>

            <div class="party-room">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dragon-1.png" alt="Dragon Room" class="party-room-image">
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
                    <p class="party-package-price">Room rental is $100 for two hours.</p>
                    <p class="party-package-note">(Tickets to the Once Upon a Maze experience are purchased separately so you can tailor your visit.)</p>
                </div>

                <div class="party-addons">
                    <h3 class="party-addons-title">Add-On Options</h3>
                    <p class="party-addons-intro">Enhance your celebration with optional add-ons:</p>
                    <ul class="party-addons-list">
                        <li><strong>Party Essentials</strong> – plates, napkins, juice boxes, tablecloths, and cake-cutting utensils ($3 per person)</li>
                        <li><strong>Party Favor Bags</strong> – fun themed trinkets for each child ($5 per child)</li>
                        <li><strong>Pizza Package</strong> – kid-friendly pizza for your guests ($5 per person)</li>
                    </ul>
                </div>

                <div class="party-fairytale">
                    <h3 class="party-fairytale-title">Explore FairyTale Village for Just $10/Guest</h3>
                    <p>Make the celebration even more magical! Party guests can add admission to <a href="https://fairytalevillage.com" target="_blank" rel="noopener noreferrer">FairyTale Village</a> for only $10 per person when purchased on the same day as your party. This rate applies to all party guests and must be added at the time of your visit.</p>
                </div>

                <div class="party-customize">
                    <h3 class="party-customize-title">Customize Your Celebration</h3>
                    <p>Add balloon decorations or themed décor with our independent party stylist, Kathryn.</p>
                    <p>Contact her directly at <a href="tel:678-943-5469">678-943-5469</a> for details and pricing.</p>
                </div>
            </div>
        </div>

        <div class="party-cta">
            <a href="<?php echo home_url('/contact/'); ?>" class="btn btn-white btn-large">
                <i class="fas fa-birthday-cake"></i>
                Book Your Party Today!
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>


