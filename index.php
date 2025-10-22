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

<!-- Hero Section with Header Image -->
<section id="home" class="hero">
    <div class="hero-image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/Header-Image.png" alt="Once Upon a Maze" class="hero-header-img">
    </div>
    <div class="hero-content">
        <div class="container">
            <h1 class="hero-title">Welcome to Once Upon a Maze</h1>
            <p class="hero-subtitle">Step into a world of wonder and adventure where every turn leads to magic!</p>
            <div class="hero-buttons">
                <a href="#about" class="btn btn-primary">Explore the Magic</a>
                <a href="#contact" class="btn btn-secondary">Book Your Visit</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">About Our Magical Maze</h2>
            <p class="section-subtitle">Discover the enchanting world we've created just for you</p>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>Your Adventure Awaits</h3>
                <p>Once Upon a Maze is more than just an attraction – it's a journey into a world of wonder, mystery, and pure magic. Located in the heart of Alpharetta, Georgia, our maze offers an unforgettable experience for visitors of all ages.</p>
                <p>Every path tells a story, every corner holds a surprise, and every visit creates memories that will last a lifetime. Whether you're seeking adventure, fun with family and friends, or a unique date night experience, our maze promises to deliver magic at every turn.</p>
                <div class="about-features">
                    <div class="feature">
                        <i class="fas fa-map-marked-alt"></i>
                        <h4>Interactive Adventure</h4>
                        <p>Navigate through themed sections with puzzles and surprises</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-users"></i>
                        <h4>Perfect for All Ages</h4>
                        <p>Fun for families, friends, and couples alike</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-star"></i>
                        <h4>Memorable Experience</h4>
                        <p>Create lasting memories in our magical environment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Awaits Section -->
<section class="what-awaits-section">
    <div class="container">
        <div class="story-header">
            <h2 class="section-title">What Awaits Inside</h2>
            <p class="story-intro">Your journey begins with a choice: two paths, two beginnings, and endless possibilities within.</p>
        </div>
        
        <div class="story-grid">
            <div class="story-card">
                <div class="story-icon">🧜‍♀️</div>
                <h3>Mermaid Lagoon</h3>
                <p>Wander into a world of shimmering seas and explore a whimsical pirate ship made just for kids.</p>
            </div>
            
            <div class="story-card">
                <div class="story-icon">🏠</div>
                <h3>Seven Dwarfs Cottage</h3>
                <p>Peek inside the cozy cottage and discover what the dwarfs have been up to!</p>
            </div>
            
            <div class="story-card">
                <div class="story-icon">👸</div>
                <h3>Princess Castle</h3>
                <p>Enter the royal chambers and experience life as a princess in our magical castle.</p>
            </div>
            
            <div class="story-card">
                <div class="story-icon">🦄</div>
                <h3>Enchanted Forest</h3>
                <p>Discover mystical creatures and hidden treasures in our enchanted woodland area.</p>
            </div>
        </div>
        
        <div class="adventure-path">
            <div class="path-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/freepik-yellow-brick-road-that-looks-like-a-cartoon-or-dra_-9229.png" alt="Adventure Path">
            </div>
            <div class="path-content">
                <h3>Choose Your Adventure</h3>
                <p>Every visit is unique! With multiple paths and interactive elements, you'll discover something new each time you visit our magical maze.</p>
            </div>
        </div>
    </div>
</section>

<!-- Party Section -->
<section class="party-section">
    <div class="container">
        <div class="party-content">
            <div class="party-text">
                <h2>Book Your Magical Party</h2>
                <p>Make your special occasion unforgettable with a private party at Once Upon a Maze. Perfect for birthdays, celebrations, and group events.</p>
                <ul class="party-features">
                    <li><i class="fas fa-check"></i> Private maze access for your group</li>
                    <li><i class="fas fa-check"></i> Themed decorations and setup</li>
                    <li><i class="fas fa-check"></i> Special surprises and activities</li>
                    <li><i class="fas fa-check"></i> Flexible booking options</li>
                </ul>
                <a href="#contact" class="btn btn-primary">Book Your Party</a>
            </div>
            <div class="party-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Birthday-Image-2.png" alt="Party Celebration">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Ready for Your Adventure?</h2>
            <p class="section-subtitle">Contact us to plan your visit or book a magical party!</p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
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
                    <div class="contact-buttons">
                        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-primary">Get Directions</a>
                        <a href="mailto:onceuponamaze@gmail.com" class="btn btn-secondary">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Follow Our Story Section -->
<section class="story-section">
    <div class="container">
        <div class="story-content">
            <h2>Follow Our Story</h2>
            <p>Stay connected with Once Upon a Maze and be the first to know about new adventures, special events, and magical surprises!</p>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>