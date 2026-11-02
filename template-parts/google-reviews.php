<?php
$google_reviews = once_upon_a_maze_google_reviews();
$reviews = $google_reviews['reviews'];
$maps_url = $google_reviews['maps_url'] !== '' ? $google_reviews['maps_url'] : 'https://www.google.com/maps/search/?api=1&query=Once%20Upon%20a%20Maze&query_place_id=' . rawurlencode(ONCE_UPON_A_MAZE_GOOGLE_PLACE_ID);
?>
<section class="google-reviews-section" aria-label="Google reviews">
    <div class="container">
        <?php if ($reviews) : ?>
            <h2 class="section-title">What Families Are Saying</h2>
            <p class="google-reviews-note">Showing 5-star reviews from Google, in the order Google ranks them.</p>
            <div class="google-reviews-grid">
                <?php foreach ($reviews as $review) : ?>
                    <article class="google-review-card">
                        <div class="google-review-stars" aria-label="5 out of 5 stars">
                            <span aria-hidden="true">★★★★★</span>
                        </div>
                        <blockquote class="google-review-text"><?php echo esc_html($review['text']); ?></blockquote>
                        <div class="google-review-author">
                            <?php if ($review['author_photo'] !== '') : ?>
                                <img src="<?php echo esc_url($review['author_photo']); ?>" alt="" class="google-review-avatar" width="40" height="40">
                            <?php else : ?>
                                <span class="google-review-avatar google-review-avatar-fallback" aria-hidden="true"><?php echo esc_html(strtoupper(substr($review['author'], 0, 1))); ?></span>
                            <?php endif; ?>
                            <div class="google-review-author-meta">
                                <?php if ($review['author_url'] !== '') : ?>
                                    <a href="<?php echo esc_url($review['author_url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($review['author']); ?></a>
                                <?php else : ?>
                                    <span><?php echo esc_html($review['author']); ?></span>
                                <?php endif; ?>
                                <?php if ($review['when'] !== '') : ?>
                                    <p><?php echo esc_html($review['when']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($review['review_url'] !== '') : ?>
                            <a class="google-review-source" href="<?php echo esc_url($review['review_url']); ?>" target="_blank" rel="noopener noreferrer">View on Google</a>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="google-reviews-cta">
            <p>Loved your visit? Share your story on Google.</p>
            <a class="btn btn-primary" href="<?php echo esc_url(ONCE_UPON_A_MAZE_GOOGLE_REVIEW_URL); ?>" target="_blank" rel="noopener noreferrer">Leave a Google Review</a>
        </div>
        <p class="google-reviews-attribution">
            <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener noreferrer">Reviews from Google</a>
        </p>
    </div>
</section>
