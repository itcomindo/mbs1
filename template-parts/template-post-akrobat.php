<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

?>

<section id="template-post-akrobat" class="section">
    <div class="inner-section">
        <div class="container">
            <div class="top">

                <h1 class="head medium">
                    <?php
                    echo esc_html(get_the_title());
                    ?>
                </h1>
            </div>
            <div class="bot">
                <div id="the-content">
                    <?php
                    the_content();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>