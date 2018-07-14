$(function () {

    //Header choose city balloon
    (function () {
        $('#choose-city-button').click(function () {
            $('#choose-city-balloon').fadeOut(300);
        });
    })();

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

    //Select-2
    (function () {
        $('.js-select').select2({
            minimumResultsForSearch: -1
        });
        $('.js-select-fw').select2({
            minimumResultsForSearch: -1,
            width: 'style',
            dropdownCssClass: "fw"
        });
        $('.js-select-fw').on("select2:open", function (e) {
            $(".select2-dropdown").css("min-width", ($(this).next(".select2").outerWidth()));
        });
    })();


    //Mobile menu open
    (function () {
        var $burger = $('.js-header-burger'),
            $menu = $('#mobile-menu'),
            $close = $('#mobile-menu-close');
        var $overlay = $(".js-overlay");

        $burger.click(function () {
            $menu.addClass('mobile-menu_open');
            $overlay.addClass("_active");

            return false;
        });
        $close.click(function () {
            $menu.removeClass('mobile-menu_open');
            $overlay.removeClass("_active");

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


    (function () {
        //$(document).ready(function () {

        jQuery.validator.addMethod("checkMask", function (value, element) {
            return /\+\d{1} \(\d{3}\) \d{3}-\d{2}-\d{2}/g.test(value);
        });

        // пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅ пїЅпїЅпїЅпїЅпїЅ
        $("#basket_form").validate({
            // пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅ
            //errorContainer: ".js-account__error-message-container",
            //errorLabelContainer: ".js-account__error-message-container",
            errorClass: "field-error",
            focusInvalid: false,
            focusCleanup: true,
            onclick: false,
            onkeyup: false,
            onfocusout: false,
            rules: {
                // пїЅпїЅпїЅпїЅ пїЅ пїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅ.
                // пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅ пїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ
                ORDER_PROP_8: "required",
                ORDER_PROP_3: {
                    checkMask: true
                },
                ORDER_PROP_2: {
                    required: true,
                    // пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ email
                    email: true
                },


            },
            messages: {
                ORDER_PROP_8: $(".basket-form").find('[name="ORDER_PROP_8"]').attr("data-error-message"),
                ORDER_PROP_3: {
                    checkMask: $(".basket-form").find('[name="ORDER_PROP_3"]').attr("data-error-message")
                },
                /*password: {
                 required: "Please provide a password",
                 minlength: "Your password must be at least 5 characters long"
                 },*/
                ORDER_PROP_2: $(".basket-form").find('[name="ORDER_PROP_2"]').attr("data-error-message"),

            },
            invalidHandler: function (e, validator) {

            },
            submitHandler: function (form) {


                $(".js-preloader-Wait").show();


                var action = $("#basket_form").attr('action');
                var inputData = $("#basket_form").serialize();


                $.post(action, inputData, function (data) {


                    if (data.order.ERROR) {

                        var strError = "";

                        for (var key in data.order.ERROR.PROPERTY) {
                            var $input = form.find('[data-key="' + key + '"]');
                            $input.addClass("input-error");
                            $input.next().html(data.order.ERROR.PROPERTY[key]);
                            strError += '<p class="global-error__visible">' + data.order.ERROR.PROPERTY[key] + '</p>';

                        }

                        $(".js-basket-form__error-text").html(strError);

                    } else {
                        //yandex ecommerce


                        var item;
                        var products = [];
                        for (i in data.order.ORDER_DATA.items) {
                            item = data.order.ORDER_DATA.items[i];
                            products.push({
                                "id": item.id,
                                "name": item.name,
                                "price": item.price,
                                "brand": "��������",
                                "category": item.category,
                                "quantity": item.quantity
                            });
                        }

                        dataLayer.push({
                            "ecommerce": {
                                "purchase": {
                                    "actionField": {
                                        "id": data.order.ID,
                                        "affiliation": "��������",
                                        "revenue": data.order.ORDER_DATA.order.price,
                                        "shipping": "0"
                                    },
                                    "products": products
                                }
                            }
                        });


                        //google ecommerce

                        ga('require', 'ecommerce', 'ecommerce.js'); // пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅ. пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ
                        ga('ecommerce:addTransaction', {
                            "id": data.order.ID,
                            "affiliation": "��������",
                            "revenue": data.order.ORDER_DATA.order.price,
                            "shipping": "0"
                        });
                        for (i in data.order.ORDER_DATA.items) {
                            item = data.order.ORDER_DATA.items[i];
                            ga('ecommerce:addItem', {
                                "id": item.id,
                                "sku": item.id,
                                "name": item.name,
                                "price": item.price,
                                "category": item.category,
                                "quantity": item.quantity
                            });
                        }
                        ga('ecommerce:send'); //пїЅпїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅ
                        ga('ecommerce:clear'); //пїЅпїЅпїЅпїЅпїЅпїЅпїЅ пїЅпїЅпїЅпїЅпїЅпїЅ

                        ga("send", "event", $("#basket_form").data("analytics-category"), $("#basket_form").data("analytics-action"));
                        yaCounter31874381.reachGoal($("#basket_form").data("metrika-goal"));

                        window.criteo_q = window.criteo_q || [];
                        window.criteo_q.push(
                            {event: "setAccount", account: accountId},
                            {event: "setSiteType", type: siteType},
                            {event: "setEmail", email: userEmail},
                            {event: "trackTransaction", id: Math.random().toString().substr(3, 9), item: CriteoItems});

                        openPopup("#added-order");
                    }


                    $(".js-preloader-Wait").hide();


                }, 'json');//


                return false;

            },
            showErrors: function (errorMap, errorList) {


                $(".basket-form").find(".basket-form__input").removeClass("input-error");
                $(".basket-form").find(".basket-form__input").next().html("");

                for (var key in errorMap) {
                    var $input = $(".basket-form").find('[name="' + key + '"]');
                    $input.addClass("input-error");
                    $input.next().html(errorMap[key]);
                    //strError += '<p class="global-error__visible">' + data.order.ERROR.PROPERTY[key] + '</p>';
                }

                this.defaultShowErrors();

            },
            errorPlacement: function (error, element) {
                //error.appendTo( ".js-account__error-message-container-hidden" );
            }
        });
    })();
});
