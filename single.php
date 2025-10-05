<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

get_header();

if ('akrobat' === get_post_type()) {
    get_template_part('template-parts/template-post', 'akrobat');
} else {
    echo 'wait';
}


get_footer();
