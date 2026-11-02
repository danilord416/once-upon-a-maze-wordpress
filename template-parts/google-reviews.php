<?php
$maps_url = 'https://www.google.com/maps/search/?api=1&query=Once%20Upon%20a%20Maze&query_place_id=' . rawurlencode(ONCE_UPON_A_MAZE_GOOGLE_PLACE_ID);

$reviews = array(
    array(
        'author' => 'Lex N',
        'text' => "What a great experience! We were able to go at our own pace. My son loved collecting gems and looking at all the decorations.\n\nThere were interactive play areas, toy boxes, and benches for parents to relax while kids explore and play. Highly recommend!",
    ),
    array(
        'author' => 'Evan Forester',
        'text' => 'Took my 7-year-old girl and 4-year-old boy yesterday and they loved it! Spent an hour there and they’ve already asked to go back. Really nice people running the place too. Great activity for a rainy day or to beat the heat!',
    ),
    array(
        'author' => 'Taylor Gravitt',
        'text' => 'Today I took my 19 month old here and she LOVED it. There was so much for her to look at and play with. The owners are the sweetest people you’ll ever meet and you can tell they put their heart and soul into this place. Would be great for kids of all ages !',
    ),
    array(
        'author' => 'Drew',
        'text' => 'My toddler loved every second! If you\'re near North Point Mall with a little one, check out Once Upon a Maze! It’s a super fun kids maze/scavenger hunt and we spent about 45 min in walkthrough/maze. The fairy tale themes are really adorable and the whole experience is really well put together.',
    ),
    array(
        'author' => 'Daniel Koenig',
        'text' => 'Brought my 1.5 and 3 year olds. It was very cute and they were a perfect age (on the younger side of who would enjoy it.) We spent about 30 minutes wandering through but could probably have taken a full hour. The experience has a few small ‘mazes’ and different themed rooms with a few small interactive components. Overall very pleased.',
    ),
);

$google_mark = '<svg class="google-mark" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.4h6.5c-.3 1.5-1.1 2.8-2.4 3.6v3h3.9c2.3-2.1 3.5-5.2 3.5-8.7z"/><path fill="#34A853" d="M12 24c3.2 0 5.9-1.1 7.9-2.9l-3.9-3c-1.1.7-2.4 1.2-4 1.2-3.1 0-5.7-2.1-6.6-4.9H1.4v3.1C3.4 21.3 7.4 24 12 24z"/><path fill="#FBBC05" d="M5.4 14.4c-.2-.7-.4-1.5-.4-2.4s.1-1.7.4-2.4V6.5H1.4C.5 8.2 0 10.1 0 12s.5 3.8 1.4 5.5l4-3.1z"/><path fill="#EA4335" d="M12 4.8c1.7 0 3.3.6 4.5 1.8l3.4-3.4C17.9 1.1 15.2 0 12 0 7.4 0 3.4 2.7 1.4 6.5l4 3.1C6.3 6.8 8.9 4.8 12 4.8z"/></svg>';
?>
<section class="google-reviews-section" aria-label="Google reviews">
    <div class="container">
        <h2 class="section-title">What Families Are Saying</h2>

        <div class="google-reviews-slider" data-google-reviews>
            <div class="google-reviews-viewport">
                <div class="google-reviews-track">
                    <?php foreach ($reviews as $review) :
                        $author = $review['author'] !== '' ? $review['author'] : 'Google review';
                        $initial = $review['author'] !== '' ? strtoupper(substr($review['author'], 0, 1)) : '';
                        ?>
                        <article class="google-review-card">
                            <div class="google-review-card-top">
                                <div class="google-review-stars" aria-label="5 out of 5 stars">
                                    <span aria-hidden="true">★★★★★</span>
                                </div>
                                <?php echo $google_mark; ?>
                            </div>
                            <blockquote class="google-review-text"><?php echo esc_html($review['text']); ?></blockquote>
                            <div class="google-review-author">
                                <?php if ($initial !== '') : ?>
                                    <span class="google-review-avatar google-review-avatar-fallback" aria-hidden="true"><?php echo esc_html($initial); ?></span>
                                <?php else : ?>
                                    <span class="google-review-avatar google-review-avatar-google" aria-hidden="true"><?php echo $google_mark; ?></span>
                                <?php endif; ?>
                                <div class="google-review-author-meta">
                                    <span><?php echo esc_html($author); ?></span>
                                    <p class="google-review-posted">Posted on Google</p>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="google-reviews-controls">
                <button type="button" class="google-reviews-arrow google-reviews-prev" aria-label="Previous reviews">
                    <span aria-hidden="true">‹</span>
                </button>
                <div class="google-reviews-dots" role="tablist" aria-label="Choose a review"></div>
                <button type="button" class="google-reviews-arrow google-reviews-next" aria-label="Next reviews">
                    <span aria-hidden="true">›</span>
                </button>
            </div>
        </div>

        <div class="google-reviews-cta">
            <p>Loved your visit? Share your story on Google.</p>
            <a class="btn btn-primary" href="<?php echo esc_url(ONCE_UPON_A_MAZE_GOOGLE_REVIEW_URL); ?>" target="_blank" rel="noopener noreferrer">Leave a Google Review</a>
        </div>
        <p class="google-reviews-attribution">
            <a href="<?php echo esc_url($maps_url); ?>" target="_blank" rel="noopener noreferrer">Read all reviews on Google</a>
        </p>
    </div>
</section>
