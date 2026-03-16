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

<!-- Fairy Tale School Intro -->
<section class="classes-section">
    <div class="container">
        <div class="classes-header">
            <h1 class="content-title">Fairy Tale School</h1>
            <p class="classes-tagline">Classes that nurture imagination, creativity, and the joy of childhood.</p>
            <p class="classes-callout"><strong>Choose your class or become a member and enjoy unlimited classes.</strong></p>
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
                <input type="hidden" value="" id="smt_selectedEventCategories" />
                <input type="hidden" value="Next50" id="smt_displayStyle" />
                <input type="hidden" value="" id="smt_selectedInternalCategories" />
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

        <!-- Fairy Tale School Membership Highlight -->
        <section class="membership-highlight">
            <div class="membership-copy">
                <h2>Fairy Tale School Memberships</h2>
                <p>
                    Give your child the magic of Fairy Tale School all month long. Our memberships make it easy
                    to join as many age-appropriate classes as you’d like—no extra class fees at checkout.
                </p>
                <ul class="membership-details">
                    <li><strong>$60/month</strong> for the first child</li>
                    <li><strong>$49/month</strong> for the second child</li>
                    <li><strong>Unlimited entry</strong> to Once Upon a Maze</li>
                </ul>
                <p class="membership-note">
                    Members still reserve a spot for each class so we can save their seat—but there is no
                    additional cost at booking.
                </p>
            </div>
            <div class="membership-cta">
                <p class="membership-tagline">Ready to join Fairy Tale School?</p>
                <a href="#" class="btn primary-btn membership-btn">Become a Member</a>
                <p class="membership-soon">Online membership checkout coming soon.</p>
            </div>
        </section>
    </div>
</section>

<!-- Meet Our Teachers -->
<section class="classes-teachers">
    <div class="container">
        <h2 class="section-title">Meet Our Fairy Tale School Teachers</h2>
        <div class="teachers-grid">
                <article class="teacher-card">
                    <div class="teacher-media">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-sarah.jpg" alt="Portrait of teacher Sarah Barrett" class="teacher-photo" />
                    </div>
                    <div class="teacher-body">
                        <h3>Sarah Barrett</h3>
                        <p class="teacher-highlight">Waldorf-trained teacher, engineer-turned-educator, and co-owner of Once Upon A Maze and FairyTale Village.</p>
                        <details class="teacher-details">
                            <summary>Read full bio</summary>
                            <div class="teacher-bio-full">
                                <p>Sarah Barrett is a Waldorf-trained teacher and the founder of Lotus &amp; Ivy Waldorf-inspired virtual classes, as well as an owner of FairyTale Village and Once Upon A Maze. Before entering education, she worked as an engineer for The Walt Disney Company, where she developed a love for bringing stories to life.</p>
                                <p>Sarah is passionate about creating magical experiences where children can learn through imagination, creativity, and meaningful storytelling. Her work is guided by a deep belief in protecting the wonder of childhood and nurturing spaces where children can grow, explore, and thrive.</p>
                            </div>
                        </details>
                    </div>
                </article>

                <article class="teacher-card">
                    <div class="teacher-media">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-nathan.jpg" alt="Portrait of teacher Nathan Shope" class="teacher-photo" />
                    </div>
                    <div class="teacher-body">
                        <h3>Nathan Shope</h3>
                        <p class="teacher-highlight">Certified educator, middle school counselor, and woodworker guiding Little Builders Club.</p>
                        <details class="teacher-details">
                            <summary>Read full bio</summary>
                            <div class="teacher-bio-full">
                                <p>Nathan Shope is a certified educator and has spent the past 7 years working as a middle school counselor, supporting students’ growth, confidence, and well-being. He is also a skilled woodworker who enjoys home remodeling and woodworking projects.</p>
                                <p>Nathan is the owner of Shope Construction and is one of the owners of Once Upon A Maze. In Little Builders Club, he loves helping children experience the satisfaction of creating something real with their own hands. He brings a calm, encouraging presence shaped by his training in child development and the desire to help all children reach their full potential.</p>
                            </div>
                        </details>
                    </div>
                </article>

                <article class="teacher-card">
                    <div class="teacher-media">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-jasmine.jpg" alt="Portrait of teacher Jasmine Fuchs" class="teacher-photo teacher-photo-jasmine" />
                    </div>
                    <div class="teacher-body">
                        <h3>Jasmine Fuchs</h3>
                        <p class="teacher-highlight">BFA-trained actor and educator who blends storytelling, play, and learning.</p>
                        <details class="teacher-details">
                            <summary>Read full bio</summary>
                            <div class="teacher-bio-full">
                                <p>Jasmine Fuchs holds a BFA in Acting and is a performer and educator. Working with children is her passion, and if she can entertain and educate at the same time, then it’s even better! She has taught numerous classes and workshops, from science to theatre to tennis.</p>
                                <p>Her favorite part about teaching kids is that you don’t have to be an expert—you’ll learn a few things along the way.</p>
                            </div>
                        </details>
                    </div>
                </article>

                <article class="teacher-card">
                    <div class="teacher-media">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teacher-kezia.jpg" alt="Portrait of teacher Kezia Norton" class="teacher-photo teacher-photo-kezia" />
                    </div>
                    <div class="teacher-body">
                        <h3>Kezia Norton</h3>
                        <p class="teacher-highlight">Creative educator and coach who helps children stay curious, expressive, and confident.</p>
                        <details class="teacher-details">
                            <summary>Read full bio</summary>
                            <div class="teacher-bio-full">
                                <p>Kezia Norton enjoys working with children and encourages them to stay curious, be creative, and believe in themselves both in and out of the classroom. She taught preschool in Pacific Palisades, California, where the curriculum included all core subjects with a special emphasis on art and creative expression.</p>
                                <p>Kezia also taught acting classes to children ages 5–15 in Los Angeles before moving to Atlanta, focusing on commercial and theatrical script analysis as well as audition techniques.</p>
                                <p>In addition to her classroom experience, Kezia spent 18 years teaching ice skating—first at Chelsea Piers in New York and later at the Toyota Sports Center in Los Angeles.</p>
                            </div>
                        </details>
                    </div>
                </article>
            </div>

            <div class="teachers-callout">
                <p>We are looking for warm, creative educators who share our passion for Waldorf-inspired learning and protecting the beauty of childhood. <a href="mailto:onceuponamaze@gmail.com">Email us</a> if you are interested!</p>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>

