$(function () {
    
    // Popups
    (function () {
        var $popupLink = $(".js-popup-link");

        window.openPopup = function (href) {
            var effectIn = "fadeInDown",
                $href;

            if (typeof href !== "string") {
                console.log("Target does not defined");
                return false;
            }

            $href = $(href);
            if ($href.length < 1) {
                console.log("Target does not exist");
                return false;
            }

            $href.arcticmodal({
                overlay: {
                    css: {
                        backgroundColor: 'rgba(34, 34, 34, 0.90)',
                        opacity: 1
                    }
                },
                openEffect: {
                    type: 'fade',
                    speed: 400
                },
                closeEffect: {
                    type: 'none',
                    speed: 0
                }

            });

            $href.addClass("animated " + effectIn);
            $href.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $href.removeClass("animated " + effectIn);
            });

            return false;
        };

        $popupLink.click(function () {
            var $t = $(this),
                href = $t.attr("data-href");

            if (href !== '#personal-info') {
                $.arcticmodal('close');
                console.log("!");
            }

            openPopup(href);
            return false;
        });



    })();
    
});