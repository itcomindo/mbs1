<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

?>

<header id="part-header" class="section">
    <div class="inner-section h100">
        <div id="ph-left" class="item">
            <a href="/" title="<?php echo esc_attr(get_bloginfo('name')); ?>"><img src="<?php echo esc_url(MBS_URL . '/assets/images/logo-small.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
        </div>
        <div id="ph-mid" class="item">
            <!-- //create custom search form use font awesome icon zoom -->
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <label>
                    <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'mitra-build-sejahtera'); ?></span>
                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Find anything …', 'placeholder', 'mitra-build-sejahtera'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button type="submit" class="search-submit"><span class="fa fa-search"></span><span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'mitra-build-sejahtera'); ?></span></button>
            </form>

        </div>
        <div id="ph-right" class="item">
            <nav id="header-menu-nav" class="">
                <ul class="lns">
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Akrobat</a></li>
                    <li><a href="/">Security Fence</a></li>
                    <li><a href="/">HVM</a></li>
                    <li><a href="/">Habitap</a></li>
                    <li><a href="/">About Us</a></li>
                    <li><a href="/">Clients</a></li>
                    <li><a href="/">Contact Us</a></li>
                </ul>
            </nav>
            <div class="bars header-menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
    </div>
</header>