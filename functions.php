<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');


//Define Constants.
define('MBS_PATH', get_template_directory());
define('MBS_URL', get_template_directory_uri());
define('MBS_VERSION', wp_get_theme()->get('Version'));

// Add Theme Supports.
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

/**
 * Call necessary files.
 */
require_once MBS_PATH . '/assets/assets.php';
require_once MBS_PATH . '/includes/includes.php';
