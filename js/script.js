jQuery(function() {
    jQuery('.drawer-icon').on('click', function(e) {
        e.preventDefault();
        jQuery('.drawer-icon').toggleClass('is-active');
        jQuery('.drawer-content').toggleClass('is-active');
        jQuery('.drawer-background').toggleClass('is-active');
        return false;
    })

    new WOW().init()
});