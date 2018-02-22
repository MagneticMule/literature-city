/**
 *  menuScroll.js
 */

// assign $ = jQuery as WP uses jQuery in compatibikity mode
(function($) {
        // Variables
        var topMenu = $("body").find("#top-menu");
        var pageHeader = $("body").find("#masthead");

        // If the windows has scrolled to or past the height of the page header then make the Top Menu "stick".
        function stickHeader() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop >= pageHeader.height())
                $(topMenu).addClass("fixed");
            } 
            else {
            $(topMenu).removeClass("fixed");
        }
    }

    $(window).on("scroll", function() {
        stickHeader();
    });
})(jQuery);