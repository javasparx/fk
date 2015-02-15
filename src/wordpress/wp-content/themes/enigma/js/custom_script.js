/*----------------------------------------------------*/
/*	Shrink menu on scroll down
 /*----------------------------------------------------*/
jQuery(document).ready(function () {

    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.header_section .shrink').hide();
            jQuery('.header_section .head-contact-info').css('padding-top', '20px');
        } else {
            jQuery('.header_section .head-contact-info').css('padding-top', '5px');
            jQuery('.header_section .shrink').show();
        }
    });

});