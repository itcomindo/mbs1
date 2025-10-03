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


    if (is_front_page()) {
        //call flickity from cdn
        // wp_enqueue_style('flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css', array(), '2.3.0', 'all');
        // wp_enqueue_script('flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js', array('jquery'), '2.3.0', true);

        // call swipper from cdn
        wp_enqueue_style('swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css', array(), '11.0.5', 'all');
        wp_enqueue_script('swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', array('jquery'), '11.0.5', true);

        // call front-page.min.js from assets/js
        wp_enqueue_script('front-page', MBS_URL . '/assets/js/front-page.min.js', array('jquery', 'swiper-js'), MBS_VERSION, true);
    }

    // call global.min.css from assets/css
    wp_enqueue_style('global', MBS_URL . '/assets/css/global.min.css', array('normalize'), MBS_VERSION, 'all');


    // call global.min.js from assets/js
    wp_enqueue_script('global', MBS_URL . '/assets/js/global.min.js', array('jquery'), MBS_VERSION, true);
});
