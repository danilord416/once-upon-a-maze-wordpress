<?php
/**
 * Static front page template.
 *
 * Assign a published page titled "Home" under Settings → Reading so WordPress
 * treats the site root as a static homepage while this template renders the design.
 */

get_header();

get_template_part('template-parts/navbar');
get_template_part('template-parts/homepage');

get_footer();
