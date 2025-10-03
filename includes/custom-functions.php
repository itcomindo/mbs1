<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

/**
 * Disable guttenberg
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);


/**
 * Disable toolbar on front end
 */
add_filter('show_admin_bar', '__return_false');
