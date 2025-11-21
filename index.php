<?php
/**
 * The main template file
 * This is the homepage template for Once Upon a Maze
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

<!-- Hero Section with Header Image -->
<section id="home" class="hero">
    <div class="hero-image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Header-Image.png" alt="Once Upon a Maze" class="hero-header-img">
    </div>
</section>

<!-- Main Content Section -->
<section class="main-content">
    <div class="container">
        <div class="content-header">
            <h1 class="content-title">Every Twist Tells a Tale</h1>
            <p class="content-subtitle">Step into a living storybook, where magic winds through enchanted pathways & whimsical rooms as familiar tales come to life.</p>
            <div class="content-description">
                <p>Next door to FairyTale Village, this all-new self-paced experience invites you to wander, wonder, and rediscover your favorite childhood stories — one turn at a time.</p>
            </div>
            <div class="hero-buttons">
                <a href="https://www.simpletix.com/e/once-upon-a-maze-tickets-246927" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                    <i class="fas fa-ticket-alt"></i>
                    Reserve Your Adventure
                </a>
                <p class="ticket-info">or visit us in person — tickets available online or at the door every 15 minutes!</p>
            </div>
        </div>
    </div>
</section>

<!-- What Awaits Inside Section -->
<section class="what-awaits-section">
    <div class="container">
        <div class="story-header">
            <h2 class="section-title">What Awaits Inside</h2>
            <p class="story-intro">Your journey begins with a choice: two paths, two beginnings, and endless possibilities within.</p>
        </div>
        
        <div class="story-grid">
            <div class="story-card">
                <div class="story-icon">🧜‍♀️</div>
                <h3>Mermaid Rock</h3>
                <p>Dive into a world of shimmering seas where mermaids and sea creatures bring the ocean to life.</p>
            </div>
            
            <div class="story-card">
                <div class="story-icon">🏴‍☠️</div>
                <h3>Pirate Cove</h3>
                <p>Climb aboard the pirate ship for a birds-eye view of Mermaid Rock and spy on sea life in the lagoon.</p>
            </div>
            
            <div class="story-card">
                <div class="story-icon">🏠</div>
                <h3>Seven Dwarfs Cottage</h3>
                <p>Peek inside the cozy cottage and discover what the dwarfs have been up to!</p>
            </div>
            
            <div class="story-card">
                <div class="story-icon">🍭</div>
                <h3>The Land of Candy</h3>
                <p>A sugary wonderland where gumdrops, candy canes, and peppermint paths lead the way.</p>
            </div>
            
            <div class="story-card">
                <div class="story-icon">🎩</div>
                <h3>Mad Hatter's Mirrors</h3>
                <p>Lose yourself (and find your laughter) in a topsy-turvy world of reflections and riddles.</p>
            </div>
            
            <div class="story-card">
                <div class="story-icon">🐉</div>
                <h3>Dragon's Secret Garden</h3>
                <p>A mystical realm where imagination blooms and a dragon keeps watch over its hidden wonders.</p>
            </div>
        </div>
        
        <div class="story-conclusion">
            <div class="magical-border">
                <p class="story-ending">Each twist of the maze reveals a new world to explore — part storybook, part adventure, all magic.</p>
                <div class="duration-badge">
                    <i class="fas fa-clock"></i>
                    <span>The full experience lasts 30–60 minutes depending on your curiosity and courage!</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plan Your Visit Section -->
<section class="plan-visit-section">
    <div class="container">
        <div class="plan-visit-header">
            <h2 class="section-title">Plan Your Visit</h2>
        </div>
        
        <div class="experience-grid-top">
            <div class="experience-card">
                <div class="experience-icon">⏰</div>
                <h3>Timed Entry</h3>
                <p>Every 15 minutes for a smooth experience</p>
            </div>
            
            <div class="experience-card">
                <div class="experience-icon">🎟️</div>
                <h3>Easy Booking</h3>
                <p>Tickets available online or at the door</p>
            </div>
            
            <div class="experience-card">
                <div class="experience-icon">👨‍👩‍👧‍👦</div>
                <h3>Perfect for Everyone</h3>
                <p>Children, families, friends, and anyone who believes in magic</p>
            </div>
        </div>
        
        <div class="experience-grid-bottom">
            <div class="experience-card">
                <div class="experience-icon">📍</div>
                <h3>Great Location</h3>
                <p>Inside North Point Mall, Alpharetta, GA<br>Next to FairyTale Village on the 2nd floor</p>
            </div>
            
            <div class="experience-card">
                <div class="experience-icon">🚗</div>
                <h3>Free Parking</h3>
                <p>Free parking and easy access from the parking garage mall entrance</p>
            </div>
        </div>
    </div>
</section>

<!-- Party Celebration Section -->
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
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-white">
                <i class="fas fa-birthday-cake"></i>
                Inquire About Parties
            </a>
        </div>
    </div>
</section>

<!-- Gift Shop -->
<section class="gift-shop">
    <div class="container">
        <div class="gift-shop-header">
            <div class="gift-shop-emoji">🛍️</div>
            <h2 class="section-title">The Whimsical Gift Shop</h2>
        </div>
        
        <p class="gift-shop-text">Before you leave, stop by our charming gift shop filled with treasures inspired by your favorite stories.<br>Take a piece of the maze home and keep the magic alive.</p>
    </div>
</section>

<?php get_footer(); ?>