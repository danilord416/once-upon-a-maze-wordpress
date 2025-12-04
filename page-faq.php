<?php
/**
 * Template Name: FAQ
 * Description: Frequently Asked Questions page with accordion functionality.
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

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-intro">
            <h1 class="section-title">Frequently Asked Questions</h1>
            <p class="faq-intro-text">Welcome to Once Upon a Maze! Below you'll find answers to some of the most common questions we receive. If you still have questions, feel free to contact us at <a href="mailto:onceuponamaze@gmail.com">onceuponamaze@gmail.com</a> or <a href="tel:+14702232990">470-223-2990</a>.</p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What is Once Upon a Maze?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>It is self-paced life-size maze where you wander and explore fairytale themed areas. There is an optional scavenger hunt for those interested, fun activities, and many picture spots to capture memories.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Who is Once Upon a Maze for?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Once Upon a Maze is designed for families, kids, and anyone who loves stepping into whimsical, storybook-inspired worlds. It's perfect for curious explorers who enjoy self-paced, immersive experiences.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Where is Once Upon a Maze located?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We are located at NorthPoint Mall in Alpharetta, GA. The easiest way to find us is to park in the garage outside of Dillards. Once inside the Mall, head up to the 2nd floor. Choose the elevator just outside H& M and go up. We are on the right. If you take the escalator up we are on the left.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is there a fee to park?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>No, parking is free!</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does the experience take?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>You may spend as little as 30 minutes; however, you have a full hour to explore, play, and take pictures.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is Once Upon a Maze an indoor or outdoor attraction?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Once Upon a Maze is a fully indoor experience, making it a magical escape no matter the weather.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do I need to buy tickets in advance?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We recommend purchasing tickets in advance to reserve your preferred time slot. Walk-ins are welcome as space allows, but popular time slots may sell out.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is it scary or loud?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Not at all! Once Upon a Maze is intentionally designed to be playful and family-friendly. There are no jump scares, loud effects, or frightening imagery.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Is Once Upon a Maze wheelchair and stroller accessible?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We do have a maze route that is wheelchair and stroller accessible.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can we take photos or videos?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Photos are encouraged, however, no videoing is allowed inside Once Upon a Maze.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Are food and drinks allowed?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>To preserve the magic and protect our sets, food and drinks are not permitted inside the stroll through. However, snacks may be available in our gift shop area, and there is plenty of dining space in the Mall.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What is the ticket price for children ages 3 and under?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>Children under age 3 are free with a paid adult and must be carried by an adult throughout the stroll-through.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Are you looking for a similar but different experience?</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    <p>We invite you to explore next door at FairyTale Village</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// FAQ Accordion - Inline backup script
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const isActive = item.classList.contains('active');
                
                // Close all other FAQ items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                // Toggle current item
                if (isActive) {
                    item.classList.remove('active');
                } else {
                    item.classList.add('active');
                }
            });
        }
    });
});
</script>

<?php get_footer(); ?>

