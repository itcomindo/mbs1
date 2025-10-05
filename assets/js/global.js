window.addEventListener('DOMContentLoaded', (event) => {

    //---------------------------------------
    // header menu Start
    //---------------------------------------
    function headerMenuToggle() {
        jQuery('.header-menu-toggle').on('click', function () {
            jQuery('body').toggleClass('header-menu-open');
            jQuery('#header-menu-nav').toggleClass('active');
            jQuery(this).toggleClass('active');

            // close menu on click outside or escape key or link within menu.
            jQuery(document).on('click keyup', function (e) {
                if (e.type === 'click' && !jQuery(e.target).closest('#header-menu-nav, .header-menu-toggle').length) {
                    jQuery('body').removeClass('header-menu-open');
                    jQuery('#header-menu-nav').removeClass('active');
                    jQuery('.header-menu-toggle').removeClass('active');
                }
                if (e.type === 'keyup' && e.key === 'Escape') {
                    jQuery('body').removeClass('header-menu-open');
                    jQuery('#header-menu-nav').removeClass('active');
                    jQuery('.header-menu-toggle').removeClass('active');
                }
                if (e.type === 'click' && jQuery(e.target).closest('#header-menu-nav a').length) {
                    jQuery('body').removeClass('header-menu-open');
                    jQuery('#header-menu-nav').removeClass('active');
                    jQuery('.header-menu-toggle').removeClass('active');
                }
            });

        });
    }
    headerMenuToggle();
    //----------------------------------------
    // header menu End
    //----------------------------------------




    //---------------------------------------
    // productMenu Start
    //---------------------------------------
    function productMenu() {
        // Menangani klik pada item menu utama
        jQuery('#product-menu-list li.parent').on('click', function (e) {
            e.stopPropagation();
            var wasActive = jQuery(this).hasClass('active');

            // Menutup semua item menu lain yang terbuka
            jQuery('#product-menu-list li.parent').removeClass('active');
            jQuery('#product-menu-list li.parent').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');

            // Buka atau tutup item menu yang diklik
            if (!wasActive) {
                jQuery(this).addClass('active');
                jQuery(this).find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            }
        });

        // Menutup menu saat link di dalam menu diklik
        jQuery('#product-menu-list li.parent a').on('click', function (e) {
            e.stopPropagation(); // Menghentikan event agar tidak propegasi ke elemen parent
            jQuery(this).closest('li.parent').removeClass('active');
            jQuery(this).closest('li.parent').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        });

        // Menutup menu saat mengklik di mana pun di luar menu
        jQuery(document).on('click', function () {
            jQuery('#product-menu-list li.parent').removeClass('active');
            jQuery('#product-menu-list li.parent').find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        });
    }
    productMenu();














    //----------------------------------------
    // productMenu End
    //----------------------------------------


    // CLIENT LOGOS
    let elem = document.querySelector('.client-logo-wrapper');
    let flkty = new Flickity(elem, {
        // options
        cellAlign: 'center',
        contain: true,
        pageDots: false,
        autoPlay: 1500,
        wrapAround: true,
        prevNextButtons: false,
    });




});