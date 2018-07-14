$(function () {
    if (typeof BX !== 'undefined') {
        BX.addCustomEvent('onAjaxSuccess', function () {

            // masked input
            (function () {
                if (typeof $.fn.mask === 'function') {
                    $("#phone").mask("+7 (999) 999 99 99");
                    $(".phone").mask("+7 (999) 999 99 99");
                }
            })();

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



            (function () {
                var $jsCheckbox = $('.js-checkbox'),
                    $jsCheckboxSquare = $('.js-checkbox-square'),
                    $jsCheckboxContainerSquare = $('.js-checkbox-container-square'),
                    $jsCheckboxRectangle = $('.js-checkbox-rectangle'),
                    $jsCheckboxMark = $('.js-checkbox-mark'),
                    $jsRadio = $(".js-radio");

                $jsCheckboxContainerSquare.on("click", function () {
                    var $currentCheckboxSquare = $(this).find('.js-checkbox');
                    $currentCheckboxSquare.iCheck('toggle');
                });

                $jsCheckbox.each(function () {
                    var $t = $(this),
                        value = $t.attr("data-value"),
                        strCheckboxClass = $t.attr("data-checkbox-class");

                    $t.iCheck({
                        checkboxClass: strCheckboxClass,
                        insert: value
                    });
                });

                $jsCheckboxMark.each(function () {
                    var $t = $(this),
                        value = $t.attr("data-value");

                    $t.iCheck({
                        checkboxClass: "checkbox-mark",
                        insert: value
                    });
                });

                $jsCheckboxSquare.each(function () {
                    var $t = $(this),
                        value = $t.attr("data-value");

                    $t.iCheck({
                        checkboxClass: "checkbox-square checkbox-styled",
                        insert: value
                    });
                });

                $jsCheckboxRectangle.each(function () {
                    var $t = $(this),
                        value = $t.attr("data-value");

                    $t.iCheck({
                        checkboxClass: "checkbox-rectangle checkbox-styled",
                        insert: value
                    });
                });

                $jsRadio.each(function () {
                    var $t = $(this),
                        value = $t.attr("data-value"),
                        strRadioClass = $t.attr("data-radio-class");

                    $t.iCheck({
                        radioClass: strRadioClass,
                        insert: value
                    });
                });

                $jsRadio.on('ifChecked', function (event) {
                    var $t = $(this),
                        index = $t.data("index"),
                        $parent = $t.closest(".js-radio-parent"),
                        $inputs;

                    if (typeof index !== "undefined") {
                        $inputs = $parent.find(".js-radio");
                        $inputs.each(function (i) {
                            if (i === index) {
                                return true;
                            }
                            $(this).iCheck("uncheck");
                        });
                    }
                });
            })();


        });
    }
});
