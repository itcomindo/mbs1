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





});