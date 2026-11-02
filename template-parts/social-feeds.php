<section class="social-feeds-section" id="social-feeds">
    <div class="container">
        <div class="social-feeds-header">
            <h2 class="section-title">Follow Our Magic</h2>
            <p class="social-feeds-subtitle">See the latest adventures from Once Upon a Maze on social media</p>
        </div>
        <div class="social-feeds-grid">
            <div class="social-feed-card">
                <div class="social-feed-card-header">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <h3>Instagram</h3>
                </div>
                <div class="social-feed-embed social-feed-embed-instagram">
                    <iframe
                        src="https://www.instagram.com/visitonceuponamaze/embed"
                        title="Once Upon a Maze Instagram feed"
                        class="instagram-feed-iframe"
                        loading="lazy"
                        allowtransparency="true"
                        scrolling="no"
                        frameborder="0"
                    ></iframe>
                </div>
                <a href="https://www.instagram.com/visitonceuponamaze/" target="_blank" rel="noopener noreferrer" class="social-feed-link">
                    @visitonceuponamaze
                    <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                </a>
            </div>
            <div class="social-feed-card">
                <div class="social-feed-card-header">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <h3>Facebook</h3>
                </div>
                <div class="social-feed-embed social-feed-embed-facebook">
                    <div class="facebook-feed-stack">
                        <?php
                        // Facebook's Page Plugin timeline currently renders the page header
                        // and leaves the posts area blank. These official post and video
                        // embeds are the recent posts from the page.
                        $facebook_posts = array(
                            array(
                                'type' => 'post',
                                'url' => 'https://www.facebook.com/permalink.php?story_fbid=pfbid02Uyk1LojaeduXHnyH3UMwxsBJMbttADKCRagT57AvdAXJdnRMsKAb37SKq9uQaSM3l&id=61582774421478',
                                'title' => 'Once Upon a Maze Facebook post about the Merry Maze opening November 13th',
                            ),
                            array(
                                'type' => 'post',
                                'url' => 'https://www.facebook.com/permalink.php?story_fbid=pfbid02eeY5UjwPfZaGfRQHTQSzmo2HNpd2Xmd15fB77DKeGVQEBSxhYyR2w4Th5o4zbKoRl&id=61582774421478',
                                'title' => 'Once Upon a Maze Facebook Halloween post',
                            ),
                            array(
                                'type' => 'video',
                                'url' => 'https://www.facebook.com/reel/1142522718316943/',
                                'title' => 'Once Upon a Maze Facebook reel about the gift shop',
                            ),
                        );

                        foreach ($facebook_posts as $facebook_post) :
                            $plugin = $facebook_post['type'] === 'video' ? 'video' : 'post';
                            $embed_src = 'https://www.facebook.com/plugins/' . $plugin . '.php?href=' . rawurlencode($facebook_post['url']) . '&show_text=true&width=500';
                            ?>
                            <iframe
                                src="<?php echo esc_url($embed_src); ?>"
                                title="<?php echo esc_attr($facebook_post['title']); ?>"
                                class="facebook-post-iframe<?php echo $facebook_post['type'] === 'video' ? ' facebook-post-iframe-video' : ''; ?>"
                                loading="lazy"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                allowfullscreen="true"
                            ></iframe>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="https://www.facebook.com/people/Once-Upon-a-Maze/61582774421478/" target="_blank" rel="noopener noreferrer" class="social-feed-link">
                    Once Upon a Maze on Facebook
                    <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</section>
