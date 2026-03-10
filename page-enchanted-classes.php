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

        <!-- Class List -->
        <div class="classes-list">
            <!-- Little Builders Club -->
            <article class="class-item">
                <button class="class-header" type="button">
                    <div class="class-header-main">
                        <span class="class-icon">🛠️</span>
                        <h2 class="class-title">Little Builders Club</h2>
                        <p class="class-meta">Woodworking Workshop | Ages 7–9 &amp; 10–12 • Class Fee: $20</p>
                    </div>
                    <span class="class-toggle-icon" aria-hidden="true">+</span>
                </button>
                <div class="class-body">
                    <p>Young makers step into the workshop to learn the art of real woodworking. With guidance from Mr. Shope, children safely use simple tools to create beautiful wooden projects they can proudly take home. Projects may include birdhouses, wooden name signs, and seasonal creations.</p>
                    <p>Working with wood helps children develop focus, patience, creativity, and confidence while experiencing the satisfaction of building something with their own hands. A perfect class for children who love to build, design, and create.</p>
                    <div class="class-actions">
                        <button class="btn btn-primary class-register-btn" type="button" disabled>Register on SimpleTix (Coming Soon)</button>
                    </div>
                </div>
            </article>

            <!-- Potions with the Pocket Fairy -->
            <article class="class-item">
                <button class="class-header" type="button">
                    <div class="class-header-main">
                        <span class="class-icon">🧪</span>
                        <h2 class="class-title">Potions with the Pocket Fairy</h2>
                        <p class="class-meta">Whimsical Science Lab | Ages 6–9 • Class Fee: $15</p>
                    </div>
                    <span class="class-toggle-icon" aria-hidden="true">+</span>
                </button>
                <div class="class-body">
                    <p>A curious little fairy lives in the maze… and she has a lot of pockets. Inside them she keeps mysterious powders, sparkling crystals, colorful liquids, and fascinating ingredients for her magical experiments.</p>
                    <p>In each class, children join the Pocket Fairy’s Potion Lab to perform five or six fun science experiments, discovering bubbling reactions, color transformations, surprising mixtures, and more. With laughter, curiosity, and a little fairy mischief, children discover that science itself can feel like magic.</p>
                    <div class="class-actions">
                        <button class="btn btn-primary class-register-btn" type="button" disabled>Register on SimpleTix (Coming Soon)</button>
                    </div>
                </div>
            </article>

            <!-- My Grown-Up & Me Storybook Yoga -->
            <article class="class-item">
                <button class="class-header" type="button">
                    <div class="class-header-main">
                        <span class="class-icon">🧘‍♀️</span>
                        <h2 class="class-title">My Grown-Up &amp; Me Storybook Yoga</h2>
                        <p class="class-meta">Partner Yoga | Ages 3+</p>
                    </div>
                    <span class="class-toggle-icon" aria-hidden="true">+</span>
                </button>
                <div class="class-body">
                    <p>This gentle class invites children and their grown-ups to move together through a playful yoga journey inspired by stories and imagination.</p>
                    <p>Through simple poses, breathing games, and cooperative partner movements, families stretch, balance, and relax while sharing special moments together. Expect giggles, connection, and peaceful calm in this joyful bonding experience. Perfect for parents, grandparents, and caregivers.</p>
                    <div class="class-actions">
                        <button class="btn btn-primary class-register-btn" type="button" disabled>Register on SimpleTix (Coming Soon)</button>
                    </div>
                </div>
            </article>

            <!-- Knight & Princess Yoga Training -->
            <article class="class-item">
                <button class="class-header" type="button">
                    <div class="class-header-main">
                        <span class="class-icon">🏰</span>
                        <h2 class="class-title">Knight &amp; Princess Yoga Training</h2>
                        <p class="class-meta">Mindful Movement Adventure | Ages 6+</p>
                    </div>
                    <span class="class-toggle-icon" aria-hidden="true">+</span>
                </button>
                <div class="class-body">
                    <p>Young knights and princesses are invited to train their strength, balance, and bravery. In this story-inspired yoga class held throughout the maze, children practice gentle poses, stretches, and mindful breathing while imagining themselves on a royal adventure.</p>
                    <ul>
                        <li>Stand tall like brave knights</li>
                        <li>Balance like graceful princesses</li>
                        <li>Stretch like dragons waking from sleep</li>
                        <li>Practice calm focus like wise rulers</li>
                    </ul>
                    <p>This class builds confidence, body awareness, and inner calm through imaginative movement.</p>
                    <div class="class-actions">
                        <button class="btn btn-primary class-register-btn" type="button" disabled>Register on SimpleTix (Coming Soon)</button>
                    </div>
                </div>
            </article>

            <!-- Fairytale Improv Theatre -->
            <article class="class-item">
                <button class="class-header" type="button">
                    <div class="class-header-main">
                        <span class="class-icon">🎭</span>
                        <h2 class="class-title">Fairytale Improv Theatre</h2>
                        <p class="class-meta">Drama &amp; Storytelling | Ages 8–12</p>
                    </div>
                    <span class="class-toggle-icon" aria-hidden="true">+</span>
                </button>
                <div class="class-body">
                    <p>Led by a professional actor, this lively class invites children to step into the world of spontaneous storytelling and theater.</p>
                    <p>Through improv games and creative exercises, students will invent characters, create fairytale adventures, and act out magical scenes together.</p>
                    <p>Improv builds:</p>
                    <ul>
                        <li>Confidence</li>
                        <li>Creativity</li>
                        <li>Communication skills</li>
                        <li>Quick thinking</li>
                    </ul>
                    <p>No memorization required—just imagination.</p>
                    <div class="class-actions">
                        <button class="btn btn-primary class-register-btn" type="button" disabled>Register on SimpleTix (Coming Soon)</button>
                    </div>
                </div>
            </article>

            <!-- Waldorf-inspired Preschool Circle Time -->
            <article class="class-item">
                <button class="class-header" type="button">
                    <div class="class-header-main">
                        <span class="class-icon">🎶</span>
                        <h2 class="class-title">Waldorf-inspired Preschool Circle Time</h2>
                        <p class="class-meta">Songs, Story &amp; Art | Preschool</p>
                    </div>
                    <span class="class-toggle-icon" aria-hidden="true">+</span>
                </button>
                <div class="class-body">
                    <p>This gentle class offers the warmth and rhythm of a traditional Waldorf-inspired circle time.</p>
                    <p>Children gather for songs, movement, finger plays, and seasonal verses before enjoying a simple story or puppet tale. The class ends with a small art or craft activity inspired by the season.</p>
                    <p>The experience is designed to nourish imagination while creating a peaceful, joyful rhythm for young children.</p>
                    <div class="class-actions">
                        <button class="btn btn-primary class-register-btn" type="button" disabled>Register on SimpleTix (Coming Soon)</button>
                    </div>
                </div>
            </article>

            <!-- Woodland Creatures Club -->
            <article class="class-item">
                <button class="class-header" type="button">
                    <div class="class-header-main">
                        <span class="class-icon">🦊</span>
                        <h2 class="class-title">Woodland Creatures Club</h2>
                        <p class="class-meta">Animal &amp; Nature Discovery | Ages 6+</p>
                    </div>
                    <span class="class-toggle-icon" aria-hidden="true">+</span>
                </button>
                <div class="class-body">
                    <p>Each week, children explore the fascinating life of a different woodland animal. Through science, storytelling, poetry, art, and crafts, children learn about creatures such as foxes, owls, deer, chipmunks, and otters.</p>
                    <p>Club members will:</p>
                    <ul>
                        <li>Learn fun nature facts</li>
                        <li>Hear a story or folktale about the animal</li>
                        <li>Create an art or craft project</li>
                        <li>Recite the Woodland Protector Pledge, promising to care for animals and the natural world</li>
                    </ul>
                    <p>This class encourages curiosity, compassion, and connection with nature.</p>
                    <div class="class-actions">
                        <button class="btn btn-primary class-register-btn" type="button" disabled>Register on SimpleTix (Coming Soon)</button>
                    </div>
                </div>
            </article>

            <!-- Seasonal Crafting -->
            <article class="class-item">
                <button class="class-header" type="button">
                    <div class="class-header-main">
                        <span class="class-icon">🎨</span>
                        <h2 class="class-title">Seasonal Crafting</h2>
                        <p class="class-meta">Nature-Inspired Art | Ages 6+</p>
                    </div>
                    <span class="class-toggle-icon" aria-hidden="true">+</span>
                </button>
                <div class="class-body">
                    <p>In this peaceful crafting class, children create beautiful handmade projects inspired by the changing seasons of nature. Using natural materials and traditional techniques, children may create:</p>
                    <ul>
                        <li>Autumn lanterns</li>
                        <li>Winter wool crafts</li>
                        <li>Spring flower art</li>
                        <li>Summer fairy gardens</li>
                    </ul>
                    <p>Each craft reflects the beauty of the season and invites children to slow down and enjoy the creative process.</p>
                    <div class="class-actions">
                        <button class="btn btn-primary class-register-btn" type="button" disabled>Register on SimpleTix (Coming Soon)</button>
                    </div>
                </div>
            </article>
        </div>

        <!-- Registration Details -->
        <section class="classes-registration">
            <h2 class="section-title">Registration &amp; Class Details</h2>
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

