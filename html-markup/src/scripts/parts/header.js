$(function () {

    // Fixed header
    (function () {

        var scrollTop = $(window).scrollTop();
        var $header = $('.js-header');
        var $body = $('body');

        $(window).on("scroll load resize", function () {
            var scrollTop = $(window).scrollTop();
            headerMove(scrollTop);
        });

        function headerMove(scrollTop) {
            if (scrollTop > 10) {
                $body.addClass('_scroll');
            }
            else if (scrollTop <= 10) {
                $body.removeClass('_scroll');
            }
        }

    })();

});