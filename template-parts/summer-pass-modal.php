<?php $summer_pass_url = once_upon_a_maze_summer_pass_url(); ?>
<div id="summer-pass-modal" class="summer-pass-modal-overlay" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="summer-pass-modal-title">
    <div class="summer-pass-modal">
        <button type="button" class="summer-pass-modal-close" aria-label="Close promotion">&times;</button>
        <h2 id="summer-pass-modal-title" class="summer-pass-modal-title">Upgrade Your Adventure!</h2>
        <p class="summer-pass-modal-text">Snag our exclusive Once Upon a Summer Pass for just $25 to unlock entry to both Once Upon a Maze &amp; FairyTale Village</p>
        <a href="<?php echo esc_url($summer_pass_url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary summer-pass-modal-cta">
            <i class="fas fa-ticket-alt"></i>
            Get Summer Pass
        </a>
    </div>
</div>
