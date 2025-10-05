<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');

get_header();

if (is_category()) {
    $page_title = single_cat_title('', false);
} else {
    $page_title = 'Blog';
}


?>
<section id="the-category" class="section">
    <div class="inner-section">
        <div class="container">
            <h1><?php echo esc_html($page_title); ?></h1>


            <?php
            $args = array(
                'post_type' => 'akrobat'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<h2>' . get_the_title() . '</h2>';
                }
                wp_reset_postdata();
            }

            ?>



        </div>
    </div>
</section>
<?php
get_footer();
