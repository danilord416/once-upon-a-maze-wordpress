    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <div class="footer-section">
                        <h4>Location</h4>
                        <p>1000 North Point Cir<br>Alpharetta, GA 30022</p>
                        <p>2nd Floor, next to FairyTale Village</p>
                    </div>
                    
                    <div class="footer-section">
                        <h4>Contact Us</h4>
                        <p><a href="mailto:onceuponamaze@gmail.com">onceuponamaze@gmail.com</a></p>
                        <p><a href="tel:+14702232990">470-223-2990</a></p>
                    </div>
                    
                    <div class="footer-section">
                        <h4>Join the Story</h4>
                        <p>Follow the magic as it unfolds!</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/share/1BahwM5YuF/?mibextid=wwXIfr" class="social-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/visitonceuponamaze/" class="social-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.tiktok.com/@visitonceuponamaze" class="social-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a>
                        </div>
                        <a href="http://eepurl.com/jzW8zg" class="btn btn-white btn-small" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-envelope"></i>
                            Join Our Storybook List
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-sister-section">
                <div class="footer-sister-content">
                    <a href="https://fairytalevillage.com" target="_blank" rel="noopener noreferrer" class="footer-sister-logo-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/FTV-Logo.png" alt="FairyTale Village Logo" class="footer-sister-logo">
                    </a>
                    <p>Visiting Once Upon a Maze? Your story doesn't have to end here. Step next door to our sister experience, <a href="https://fairytalevillage.com" target="_blank" rel="noopener noreferrer">FairyTale Village</a> - an enchanting walk-through adventure just steps away. <a href="https://fairytalevillage.com" target="_blank" rel="noopener noreferrer">Learn more about FairyTale Village</a></p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Once-Upon-a Maze-Logo-2.png" alt="Once Upon a Maze Logo" class="footer-logo-small">
                    <p>&copy; 2026 Once Upon a Maze. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Fairy Tale School promo popup -->
    <div id="fairy-tale-school-popup" class="fts-popup-overlay">
        <div class="fts-popup">
            <button class="fts-popup-close" aria-label="Close Fairy Tale School announcement">&times;</button>
            <div class="fts-popup-content">
                <h2>New: Fairy Tale School Classes</h2>
                <p>Story-rich classes in science, woodworking, arts & crafts, theatre, yoga, and more—right inside Once Upon a Maze.</p>
                <div class="fts-popup-actions">
                    <a href="<?php echo home_url('/enchanted-classes/'); ?>" class="btn btn-primary">Learn More &amp; Book a Class</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var popup = document.getElementById('fairy-tale-school-popup');
        if (!popup) return;

        var shouldShow = true;
        try {
            var lastDismissed = localStorage.getItem('ouam_fts_popup_dismissed_at');
            if (lastDismissed) {
                var lastTime = parseInt(lastDismissed, 10);
                if (!isNaN(lastTime)) {
                    var now = Date.now();
                    var oneDay = 24 * 60 * 60 * 1000;
                    if (now - lastTime < oneDay) {
                        shouldShow = false;
                    }
                }
            }
        } catch (e) {
            shouldShow = true;
        }

        if (shouldShow) {
            setTimeout(function() {
                popup.classList.add('fts-visible');
            }, 3000);
        }

        var closeBtn = popup.querySelector('.fts-popup-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                popup.classList.remove('fts-visible');
                try {
                    localStorage.setItem('ouam_fts_popup_dismissed_at', String(Date.now()));
                } catch (e) {}
            });
        }

        popup.addEventListener('click', function(e) {
            if (e.target === popup) {
                popup.classList.remove('fts-visible');
                try {
                    localStorage.setItem('ouam_fts_popup_dismissed_at', String(Date.now()));
                } catch (e) {}
            }
        });
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>