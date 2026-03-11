<?php
/**
 * Template Name: Enchanted Classes
 * Description: Class offerings for Once Upon A Maze.
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

<!-- Enchanted Classes Intro -->
<section class="classes-section">
    <div class="container">
        <div class="classes-header">
            <h1 class="content-title">Enchanted Classes</h1>
            <p class="classes-tagline">Classes that nurture imagination, creativity, and the joy of childhood.</p>
        </div>

        <!-- SimpleTix embedded class selector -->
        <div class="classes-selector">
            <link href="https://embed.prod.simpletix.com/assets/widget/widget.min.css?t=2026.02.18" rel="stylesheet" />
            <script src="https://embed.prod.simpletix.com/assets/widget/widget.min.js?t=2026.02.16"></script>
            <div class="smt-pin-board" id="smt_pinBoard">
                <input type="hidden" value="cfe48297-c2ce-48ed-840d-5f6cb5de6653" id="smt_hdnApplicationId" />
                <input type="hidden" value="Once Upon A Maze" id="smt_hdnStoreName" />
                <input type="hidden" value="0" id="smt_openEventPageType" />
                <input type="hidden" value="1" id="smt_isDisplayEventCategory" />
                <input type="hidden" value="Family &amp; Education" id="smt_selectedEventCategories" />
                <input type="hidden" value="Cal" id="smt_displayStyle" />
                <input type="hidden" value="Classes" id="smt_selectedInternalCategories" />
            </div>
        </div>

        <!-- Registration Details -->
        <section class="classes-registration">
            <div class="classes-registration-content">
                <div class="classes-registration-card">
                    <h3>Class Details</h3>
                    <ul>
                        <li>Classes are 50 minutes</li>
                        <li>Drop-off format (parents may explore the mall but must remain nearby and reachable)</li>
                        <li>Space is limited</li>
                        <li>Registration is required; walk-ins may be available if space allows</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Weekly Schedule -->
        <section class="classes-schedule">
            <h2 class="section-title">Weekly Class Schedule</h2>
            <div class="schedule-grid">
                <div class="schedule-column">
                    <h3>Fridays (For Homeschoolers!)</h3>
                    <ul>
                        <li><strong>10:00</strong> – Preschool Waldorf-Inspired Circle Time</li>
                        <li><strong>10:00</strong> – My Grown-Up &amp; Me Yoga</li>
                        <li><strong>11:00</strong> – Knight &amp; Princess Yoga Training</li>
                        <li><strong>12:00</strong> – Woodland Creatures Club</li>
                        <li><strong>1:00</strong> – Seasonal Crafting</li>
                    </ul>
                </div>
                <div class="schedule-column">
                    <h3>Saturdays</h3>
                    <ul>
                        <li><strong>10:00</strong> – Potions with the Pocket Fairy</li>
                        <li><strong>11:00</strong> – Little Builders Club (Ages 7–9)</li>
                        <li><strong>12:30</strong> – Little Builders Club (Ages 10–12)</li>
                        <li><strong>12:30</strong> – Woodland Creatures Club</li>
                        <li><strong>1:30</strong> – Fairytale Improv Theatre</li>
                    </ul>
                </div>
                <div class="schedule-column">
                    <h3>Sundays</h3>
                    <ul>
                        <li><strong>10:00</strong> – My Grown-Up &amp; Me Yoga</li>
                        <li><strong>11:00</strong> – Knight &amp; Princess Yoga Training</li>
                        <li><strong>2:00</strong> – Waldorf-inspired Seasonal Crafting</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Meet Our Teachers -->
        <section class="classes-teachers">
            <h2 class="section-title">Meet Our Teachers</h2>
            <div class="teachers-grid">
                <article class="teacher-card">
                    <h3>Sarah Barrett</h3>
                    <p>Sarah Barrett is a Waldorf-trained teacher and the founder of Lotus &amp; Ivy Waldorf-inspired virtual classes, as well as an owner of FairyTale Village and Once Upon A Maze. Before entering education, she worked as an engineer for The Walt Disney Company, where she developed a love for bringing stories to life.</p>
                    <p>Sarah is passionate about creating magical experiences where children can learn through imagination, creativity, and meaningful storytelling. Her work is guided by a deep belief in protecting the wonder of childhood and nurturing spaces where children can grow, explore, and thrive.</p>
                </article>

                <article class="teacher-card">
                    <h3>Nathan Shope</h3>
                    <p>Nathan Shope is a certified educator and has spent the past 7 years working as a middle school counselor, supporting students’ growth, confidence, and well-being. He is also a skilled woodworker who enjoys home remodeling and woodworking projects.</p>
                    <p>Nathan is the owner of Shope Construction and is one of the owners of Once Upon A Maze. In Little Builders Club, he loves helping children experience the satisfaction of creating something real with their own hands. He brings a calm, encouraging presence shaped by his training in child development and the desire to help all children reach their full potential.</p>
                </article>

                <article class="teacher-card">
                    <h3>Jasmine Fuchs</h3>
                    <p>Jasmine Fuchs holds a BFA in Acting and is a performer and educator. Working with children is her passion, and if she can entertain and educate at the same time, then it’s even better! She has taught numerous classes and workshops, from science to theatre to tennis.</p>
                    <p>Her favorite part about teaching kids is that you don’t have to be an expert—you’ll learn a few things along the way.</p>
                </article>

                <article class="teacher-card">
                    <h3>Coming Soon – Kesia</h3>
                    <p>More details coming soon.</p>
                </article>

                <article class="teacher-card">
                    <h3>Coming Soon – Yoga Teacher</h3>
                    <p>More details coming soon.</p>
                </article>
            </div>

            <div class="teachers-callout">
                <p>We are looking for warm, creative educators who share our passion for Waldorf-inspired learning and protecting the beauty of childhood. <a href="mailto:onceuponamaze@gmail.com">Email us</a> if you are interested!</p>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>

