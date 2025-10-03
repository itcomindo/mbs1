<?php

/**
 *
 * Silence is golden
 */

defined('ABSPATH') || die('No script kiddies please!');


function mm_hero_item_text()
{
?>
    <div id="ph-item-1" class="item text-slide">
        <h1 class="head medium">Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, delectus!</p>
        <a class="btn big btn-orange" href="/"><i class="fab fa-whatsapp"></i> Learn More</a>
    </div>
<?php
}


function mm_hero_item_video_1()
{
?>
    <div id="ph-item-2" class="item video-slide">
        <video class="background-video desktop" autoplay="" muted="" loop="" playsinline="" draggable="true">
            <source src="https://falltech.s3.us-east-2.amazonaws.com/Tower-Motion-Desktop-V2.mp4" type="video/mp4"> Your browser does not support the video tag.
        </video>
        <video class="background-video mobile" autoplay="" muted="" loop="" playsinline="">
            <source src="https://falltech.s3.us-east-2.amazonaws.com/Tower-Motion-Mobile-V3.mp4" type="video/mp4"> Your browser does not support the video tag.
        </video>
        <div class="shg-box shg-c video-overlay text-left">
            <div class="shg-box-overlay"></div>
        </div>
        <div class="content">
            <h2 class="head medium">Reach Higher with Conmfort and Safety</h2>
            <a href="#" class="btn big btn-orange text-uppercase">Learn More</a>
        </div>
    </div>
<?php
}

function mm_hero_item_video_2()
{
?>
    <div id="ph-item-3" class="item video-slide">
        <video class="background-video desktop" autoplay="" muted="" loop="" playsinline="" draggable="true">
            <source src="https://falltech.s3.us-east-2.amazonaws.com/ftrplus_v2_d.mp4" type="video/mp4"> Your browser does not support the video tag.
        </video> <video class="background-video mobile" autoplay="" muted="" loop="" playsinline="">
            <source src="https://falltech.s3.us-east-2.amazonaws.com/ftrplus_v2_m.mp4" type="video/mp4"> Your browser does not support the video tag.
        </video>
        <div class="shg-box shg-c video-overlay text-left">
            <div class="shg-box-overlay"></div>
            <div class="shg-box-content">
                <div class="shg-c shg-btn-wrapper ftbtn2 ftbtn-orange shg-align-left"> <a class="shg-btn shg-cse shg-btn-text " href="/ft-r-plus">Learn More</a>
                </div>
            </div>
        </div>
    </div>
<?php
}

?>


<section id="part-hero" class="section">
    <div class="inner-section h100">
        <!-- 1. Container utama dengan class "swiper" -->
        <div id="hero-slider-wr" class="swiper h100">
            <!-- 2. Wrapper wajib dengan class "swiper-wrapper" -->
            <div class="swiper-wrapper">
                <!-- 3. Setiap slide harus punya class "swiper-slide" -->
                <div class="swiper-slide">
                    <?php echo mm_hero_item_text(); ?>
                </div>
                <div class="swiper-slide">
                    <?php echo mm_hero_item_video_1(); ?>
                </div>
                <div class="swiper-slide">
                    <?php echo mm_hero_item_video_2(); ?>
                </div>
            </div>
            <!-- Opsional: Jika butuh page dots/pagination -->
            <!-- <div class="swiper-pagination"></div> -->
        </div>
    </div>
</section>