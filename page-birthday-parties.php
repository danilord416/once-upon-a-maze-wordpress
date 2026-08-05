<?php
/**
 * Template Name: Birthday Parties
 * Description: Dedicated page for birthday parties information.
 */

get_header(); ?>

<?php get_template_part('template-parts/navbar'); ?>



<!-- Birthday Parties Content (reusing party section styling) -->
<section class="party-section">
    <div class="container">
        <div class="party-header">
            <h2 class="section-title">Birthday Parties at Once Upon a Maze</h2>
            <p class="section-subtitle">Celebrate in a storybook way!</p>
            <p class="party-excitement">Host an unforgettable birthday party in one of our enchanting themed party rooms and explore the magic of the maze!</p>
            <p class="party-adults-note">Adults admitted free for parties</p>
        </div>

        <div class="party-packages-section">
            <h3 class="party-packages-heading">Choose Your Party Package</h3>
            <div class="party-package-grid">
                <article class="party-package-card party-package-storybook">
                    <p class="party-package-tier">Storybook Party</p>
                    <p class="party-package-capacity">Up to 10 Kids</p>
                    <p class="party-package-price-tag">$300</p>
                    <ul class="party-package-includes">
                        <li>Room rental for 2 hours</li>
                        <li>Up to 10 kids entry into the maze (parents are free!)</li>
                        <li>Welcome to bring your own decorations, food &amp; drinks (alcohol excluded)</li>
                    </ul>
                </article>

                <article class="party-package-card party-package-enchanted">
                    <p class="party-package-tier">Enchanted Party</p>
                    <p class="party-package-capacity">Up to 15 Kids</p>
                    <p class="party-package-price-tag">$375</p>
                    <ul class="party-package-includes">
                        <li>Room rental for 2 hours</li>
                        <li>Up to 15 kids entry into the maze (parents are free!)</li>
                        <li>Welcome to bring your own decorations, food &amp; drinks (alcohol excluded)</li>
                    </ul>
                </article>

                <article class="party-package-card party-package-royal">
                    <p class="party-package-tier">Royal Celebration</p>
                    <p class="party-package-capacity">Up to 20 Kids</p>
                    <p class="party-package-price-tag">$450</p>
                    <ul class="party-package-includes">
                        <li>Room rental for 2 hours</li>
                        <li>Up to 20 kids entry into the maze (parents are free!)</li>
                        <li>Welcome to bring your own decorations, food &amp; drinks (alcohol excluded)</li>
                    </ul>
                </article>
            </div>
            <p class="party-packages-summary">All parties include exclusive use of your chosen party room for 2 hours and entrance into the maze for up to the number of children in your package.</p>
        </div>

        <h3 class="party-rooms-heading">Choose Your Magical Party Room</h3>
        <div class="party-rooms">
            <div class="party-room">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fairy-2.png" alt="Fairy Party Room" class="party-room-image">
                <h3>Fairy Party Room</h3>
                <p>Full of sparkle, flowers, and woodland charm</p>
            </div>

            <div class="party-room">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dragon-2.png" alt="Dragon Party Room" class="party-room-image">
                <h3>Dragon Party Room</h3>
                <p>Bold, mystical, and full of adventure</p>
            </div>
        </div>

        <div class="party-details">
            <div class="party-details-content">
                <div class="party-addons">
                    <h3 class="party-addons-title">Add-On: Themed Goody Bags</h3>
                    <p class="party-addons-intro">Themed goody bags are available for <strong>$5 each</strong>. Purchase as many as you need for your guests!</p>
                </div>
            </div>
        </div>

        <div class="party-cta">
            <a href="mailto:onceuponamaze@gmail.com" class="btn btn-white btn-large">
                <i class="fas fa-envelope"></i>
                Email Us to Book Your Party
            </a>
            <p class="party-cta-note">Ready to plan a magical day? Email <a href="mailto:onceuponamaze@gmail.com">onceuponamaze@gmail.com</a> to book your party!</p>
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
