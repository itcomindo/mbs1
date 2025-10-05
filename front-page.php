<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

get_header();

get_template_part('template-parts/part', 'hero');
get_template_part('template-parts/part', 'about-us');
get_template_part('template-parts/part', 'service');
get_template_part('template-parts/part', 'client');
get_template_part('template-parts/part', 'contact-us');

get_footer();
