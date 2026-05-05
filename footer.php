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

    <div id="site-refresh-popup" class="site-refresh-popup-overlay" aria-hidden="true">
        <div class="site-refresh-popup" role="dialog" aria-modal="true" aria-label="Temporary closure announcement">
            <button class="site-refresh-popup-close" aria-label="Close announcement">Close ✕</button>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/site-refresh-popup.png" alt="Once Upon a Maze temporary closure and summer season announcement" class="site-refresh-popup-image">
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var popup = document.getElementById('site-refresh-popup');
        if (!popup) return;

        function closePopup() {
            popup.classList.remove('is-visible');
            popup.setAttribute('aria-hidden', 'true');
        }

        popup.classList.add('is-visible');
        popup.setAttribute('aria-hidden', 'false');

        var closeBtn = popup.querySelector('.site-refresh-popup-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', closePopup);
        }

        popup.addEventListener('click', function (event) {
            if (event.target === popup) {
                closePopup();
            }
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && popup.classList.contains('is-visible')) {
                closePopup();
            }
        });
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>