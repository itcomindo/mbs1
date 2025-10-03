<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');


add_action('wp_enqueue_scripts', function () {

    // call normalize from cdn
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1', 'all');


    // call font-awesome from cdn
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0', 'all');

    // call global.min.css from assets/css
    wp_enqueue_style('global', MBS_URL . '/assets/css/global.min.css', array('normalize'), MBS_VERSION, 'all');


    // call global.min.js from assets/js
    wp_enqueue_script('global', MBS_URL . '/assets/js/global.min.js', array('jquery'), MBS_VERSION, true);
});
