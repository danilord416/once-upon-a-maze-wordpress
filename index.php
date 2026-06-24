<?php
/**
 * Main template fallback.
 * Shows the custom homepage layout when the site uses "Your latest posts" as the front page.
 */

get_header();

get_template_part('template-parts/navbar');
get_template_part('template-parts/homepage');

get_footer();
