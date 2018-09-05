/*----------------------------------------------------------                                       
                        TEAM 
===========================================================*/
(function ($) {
    'use strict';
    $(function () {
        $("#team-members").owlCarousel({
            items: 3,
            autoplay: true,
            loop: true,
            smartSpeed: 700,
            autoplayHoverPause: true,
            responsive: {
                  0: {
                    items: 1
                  },
                  480: {
                    items: 2
                  },
                  768: {
                    items: 3
                  }
		      }
        });
    });
})(jQuery);
