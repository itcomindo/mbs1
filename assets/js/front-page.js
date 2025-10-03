window.addEventListener('DOMContentLoaded', (event) => {

    //---------------------------------------
    // heroSlide Start
    //---------------------------------------
    function heroSlideFlickity() {
        jQuery('#hero-slider-wr').flickity({
            // options
            cellAlign: 'center',
            contain: true,
            wrapAround: true,
            autoPlay: false,
            pauseAutoPlayOnHover: false,
            prevNextButtons: false,
            pageDots: false,
            percentPosition: true
        });
    }
    // heroSlideFlickity();
    //----------------------------------------
    // heroSlide End
    //----------------------------------------


    console.log('heroSlide function called');


    //---------------------------------------
    // heroSlide dengan SwiperJS Start
    //---------------------------------------

    function heroSlide() {
        // 1. Gunakan selector jQuery dan simpan dalam variabel
        var $heroSlider = jQuery('#hero-slider-wr');

        // 2. Cek jika elemen ada dengan properti .length
        if ($heroSlider.length) {

            // 3. Inisialisasi Swiper.
            // Constructor Swiper bisa menerima selector string, jadi bagian ini tidak perlu diubah.
            const swiper = new Swiper('#hero-slider-wr', {
                // Opsi untuk membuat slide full-width
                slidesPerView: 1,

                // Opsi agar slider berputar terus menerus (sama seperti wrapAround)
                loop: true,

                // Konfigurasi Autoplay
                autoplay: {
                    delay: 10000, // 10 detik
                    disableOnInteraction: false, // Lanjutkan autoplay meski user berinteraksi
                    pauseOnMouseEnter: false, // Mirip pauseAutoPlayOnHover
                },

                // Opsi lainnya (jika dibutuhkan)
                // navigation: {
                //   nextEl: '.swiper-button-next',
                //   prevEl: '.swiper-button-prev',
                // },
                // pagination: {
                //   el: '.swiper-pagination',
                // },
            });
        }
    }

    // Panggil fungsi Anda di dalam document ready
    heroSlide();
    //----------------------------------------
    // heroSlide dengan SwiperJS End
    //----------------------------------------



});