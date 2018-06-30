$(function () {

    /*
    * ����� �������� ������ �������, ������� ��� �� ����������
    * ���� ����� �������� ������, �� � ����� parts ���� ���������� ����, ��� ������� �����, �� ����� ���������� ��� � main.js
    * ���� ����� �������� ������ ����������, �� ��������� ��� � parts, � ����� ������
    *
    * */


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
            $("#basket-form-phone").mask("+7 (999) 999-99-99");
        }
    })();

//Video link
    (function () {
        ww = $(window).width();
        if (ww <= 768) {
            /* var player, iframe;
             iframe = document.getElementById('player');

             $(document).on("click",".js-video-block-link",function (ev) {

                 ev.preventDefault();
                 var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;

                 if (requestFullScreen) {

                     iframe.requestFullScreen();

                     $(iframe).removeAttr("width");
                     $(iframe).removeAttr("height");

                     $(iframe).css({
                         position:"fixed",
                         top:"0",
                         left:"0",
                         width:"100%",
                         height: "100%",
                         zIndex: "9999"
                     });
                 }
             })*/

            $('.js-video-block-link').fancybox({
                padding: 0,
                margin: 0,
                width: "100%",
                height: "100%",
                closeBtn: true,
                aspectRatio: true,
                allowfullscreen: 'true',
                wrapCSS: "fullscreen kitchen",
                fs: '1',
                afterShow: function () {
                    $('#header-hide-for-video').fadeOut(300);
                    $(".fancybox-overlay").css("z-index", 99990);
                },
                afterClose: function () {
                    $('#header-hide-for-video').fadeIn(300);
                }
            });

        } else {
            $('.js-video-block-link').fancybox({
                padding: 0,
                margin: 50,
                closeBtn: true,
                aspectRatio: true,
                allowfullscreen: 'true',
                fs: '1',
                afterShow: function () {
                    $('#header-hide-for-video').fadeOut(300);
                    $(".fancybox-overlay").css("z-index", 99990);
                    $(".fancybox-wrap").css("z-index", 99999);
                },
                afterClose: function () {
                    $('#header-hide-for-video').fadeIn(300);
                }
            });
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
                },
                afterOpen: (function () {
                    $('.test-popup__select').chosen({
                        disable_search: false
                    });
                    $(".test-popup__photo-block-item").remove();
                    $(".test-popup__uploaded-file").prev().remove();
                    $(".test-popup__uploaded-file").remove();
                    $(".js-clear-all-inputs").find('input[type=text], textarea').val('');
                    $(".js-clear-input-comment").find('.js-REVIEW').val('');
                }),
                /*beforeClose: (function() {
                 if (href !== 'personal-info') {
                 $.arcticmodal('close');
                 }
                 })*/
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


        var $popupLinkTestimonials = $(".js-popup-link-testimonials");

        window.openPopupTestimonials = function (href) {
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
                },
                afterOpen: (function () {
                    $('.test-popup__select').chosen({
                        disable_search: false
                    });
                }),
                afterClose: (function () {
                    var newURL = $href.find("form").attr("data-current-url");
                    window.history.pushState(null, null, newURL);

                })

            });

            $href.addClass("animated " + effectIn);
            $href.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $href.removeClass("animated " + effectIn);
            });

            return false;
        };

        $popupLinkTestimonials.click(function () {
            var $t = $(this),
                href = $t.attr("data-href");

            $.arcticmodal('close');

            openPopupTestimonials(href);
            return false;
        });
    })();

    //City popup
    (function () {
        var $button = $('#city-popup__view-all'),
            $content = $('#city-popup-content');

        $button.click(function () {
            var $contentToHide = $('#city-popup__list-to-hide'),
                $contentToShow = $('#city-popup__content-to-show');

            $contentToHide.hide();
            $button.hide();
            $contentToShow.fadeIn(200);
            $content.addClass('city-popup__content_with-slider');

            (function () {
                var mySwiper = new Swiper('#city-popup-slider', {
                    direction: 'horizontal',
                    slidesPerView: 1,
                    spaceBetween: 50,
                    paginationClickable: true,
                    nextButton: '#city-popup-arrow-next',
                    prevButton: '#city-popup-arrow-prev',
                    pagination: '.city-popup__pagination'
                })
            })();
        });
    })();

    // Header dropdown
    (function () {
        var time = new Date();
        var diff = "";

        var $link = $('.js-menu-link'),
            $header = $('#main-header'),
            $fixedElements;
        // headerWidth = $header.width();

        var $fixedElementsHoverIn = "";
        var $fixedElementsHoverOut = "";


        $link.hover(
            function () {

                $('.js-dropdown').removeClass('active');


                var $t = $(this),
                    $currentDropdown = $t.find('.js-dropdown'),
                    $firstSection = $currentDropdown.find('.js-dropdown-content:eq(0)'),
                    $dropdownSlider = $firstSection.find('.js-dropdown-slider:eq(0)'),
                    $color = $dropdownSlider.parent().find('.dropdown__select-color');

                /*$('body').css({
                    "overflow": "hidden",
                    "margin-right": scrollbarWidth
                });*/

                /* if($fixedElementsHoverIn === ""){
                     $fixedElementsHoverIn = $('*').filter(function() {
                         return $(this).css('position') == 'fixed';
                     });
                 };

                 $fixedElementsHoverIn.css({
                     "margin-right": scrollbarWidth,
                 });*/

                /* $header.css({
                     "margin-right": scrollbarWidth,
                     //"width": headerWidth
                 });*/


                // Add active class to the current menu link
                $t.addClass('fixed-header__menu-item_active');

                // Show dropdown
                $currentDropdown.addClass('active');


                // Show first section in dropdown
                // $firstSection.addClass('active');

                // Initialize slider
                if ($dropdownSlider.data('init') == true) {
                    //$dropdownSlider.slick('unslick');
                } else {
                    $dropdownSlider.slick({
                        dots: false,
                        arrows: false,
                        infinite: false,
                        speed: 300,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        pauseOnHover: true,
                        accessibility: false,
                        fade: true,
                        draggable: false
                    });
                    $dropdownSlider.attr('data-init', true);
                }
                // Add clicks
                $color.click(function () {
                    var $t2 = $(this),
                        slide = $t2.data("slide");

                    $color.removeClass("select-color_active");
                    $t2.addClass("select-color_active");

                    $dropdownSlider.slick("slickGoTo", slide);
                    return false;
                });

                //time = new Date();
                //diff = time.getTime() - diff;

                //console.log("diff: " + diff);

                /*$currentDropdown.mouseout(function() {//mouseleave
                 $(this).removeClass('active');
                 });*/

                //return false;
            },
            function () {


                //diff = time.getTime();

                var $t = $(this),
                    $currentDropdown = $t.find('.js-dropdown');


                /*   $('body').css({
                       "overflow": "visible",
                       "margin-right": "0"
                   });*/

                /*if($fixedElementsHoverOut === "") {
                    $fixedElementsHoverOut = $('*').filter(function() {
                        return $(this).css('position') == 'fixed';
                    });
                }

                $fixedElementsHoverOut.css({
                    "margin-right": "0",
                });*/

                /* $header.css({
                     "margin-right": "0",
                     //"width": headerWidth
                 });*/

                // Hide dropdown
                $currentDropdown.removeClass('active');

                // Remove active class from the current menu link
                $t.removeClass('fixed-header__menu-item_active');

                //return false;
            }
        );

        $('.js-menu-link .fixed-header__menu-item-link').click(function () {
            //return false;
        });

        $('.js-fixed-header__menu').mouseleave(function () {//mouseleave
            $('.js-dropdown').removeClass('active');
        });


        function getScrollBarWidth() {
            var inner = document.createElement('p');
            inner.style.width = "100%";
            inner.style.height = "200px";

            var outer = document.createElement('div');
            outer.style.position = "absolute";
            outer.style.top = "0px";
            outer.style.left = "0px";
            outer.style.visibility = "hidden";
            outer.style.width = "200px";
            outer.style.height = "150px";
            outer.style.overflow = "hidden";
            outer.appendChild(inner);

            document.body.appendChild(outer);
            var w1 = inner.offsetWidth;
            outer.style.overflow = 'scroll';
            var w2 = inner.offsetWidth;
            if (w1 == w2) w2 = outer.clientWidth;

            document.body.removeChild(outer);

            return (w1 - w2);
            return 0;

        }

        var scrollbarWidth = getScrollBarWidth();

    })();

    //Header dropdown - content show
    (function () {
        var $collection = $('.js-dropdown-collection');

        $collection.mouseenter(function () {
            var $t = $(this),
                id = $t.data('id'),
                $parent = $t.closest('.js-parent'),
                $currentContent = $('#dropdown-content_' + id),
                $dropdownSlider = $currentContent.find('.js-dropdown-slider:eq(0)'),
                $color = $dropdownSlider.parent().find('.dropdown__select-color'),
                $tempParent = $('#dropdown-content_' + id),
                $firstContent,
                $firstListItem;

            $parent.find('.js-dropdown-collection').removeClass('active');
            $parent.find('.js-dropdown-content').removeClass('active');

            // Walk through all levels
            var i = 0;
            while ($tempParent.find('.js-parent').length > 0 && i < 5) {
                $tempParent = $tempParent.find('.js-parent:eq(0)');

                $firstContent = $tempParent.find('.js-dropdown-content:eq(0)');
                $firstListItem = $tempParent.find('.js-dropdown-collection:eq(0)');

                $firstContent.addClass('active');
                $firstListItem.addClass('active');
                i++;
            }

            $t.addClass('active');
            $currentContent.addClass('active');


            // Initialize slider
            if ($dropdownSlider.data('init') == true) {
                $dropdownSlider.slick('unslick');
            }
            $dropdownSlider.slick({
                dots: false,
                arrows: false,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: true,
                accessibility: false,
                fade: true,
                draggable: false
            });
            $dropdownSlider.attr('data-init', true);

            $color.click(function () {
                var $t2 = $(this),
                    slide = $t2.data("slide");

                $color.removeClass("select-color_active");
                $t2.addClass("select-color_active");

                $dropdownSlider.slick("slickGoTo", slide);
                return false;
            });

            return false;
        });
    })();

    //Scrollbar in dropdown
    (function () {
        $('.js-dropdown-nav-scrollable').mCustomScrollbar({
            axis: "y",
            theme: "light",
            scrollInertia: 0.5
        });
        $('.js-dropdown-text-wrap').mCustomScrollbar({
            axis: "y",
            theme: "light",
            scrollInertia: 0.5
        });
        $('.js-dropdown__collection-list').mCustomScrollbar({
            axis: "y",
            theme: "light",
            scrollInertia: 0.5
        });

    })();

    //Icheck for account popup
    (function () {
        $('.account-checkbox').iCheck({
            checkboxClass: "account-checkbox"
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


    //Change text on response
    (function () {
        var $text = $('.js-response-text-change'),
            ww = $(window).width();

        $text.each(function () {
            var $t = $(this),
                desktopText = $t.data('text-desktop'),
                responseText = $t.data('text-response');

            if (ww < 900) {
                $t.text(responseText);
            }
            else {
                $t.text(desktopText);
            }
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


    // MAIN PAGE ============================================================

    //Main video
    (function () {
        var $video = $('#main-video'),
            $bg = $('#main-bg-under-video'),
            ww = $(window).width();

        if (ww > 1000) {
            $bg.hide();
            $video.on('ended', function () {
                $video.fadeOut(300);
                $bg.fadeIn(400);
            });
        }

    })();

    //Video mute/unmute
    (function () {
        var $video = $('#main-video');

        $video.prop('muted', true);

        $('#mute-button').click(function () {
            var $t = $(this);

            if ($video.prop('muted')) {
                $video.prop('muted', false);
                $t.addClass('top-image-block__video-mute-button_unmuted').removeClass('top-image-block__video-mute-button_muted');
            } else {
                $video.prop('muted', true);
                $t.addClass('top-image-block__video-mute-button_muted').removeClass('top-image-block__video-mute-button_unmuted');
            }
        });
    })();

    //TIMER
    (function () {
        FlipClock.Lang.Russian = {

            'years': '���',
            'months': '�������',
            'days': '����',
            'hours': '�����',
            'minutes': '�����',
            'seconds': '������'

        };
        FlipClock.Lang['ru'] = FlipClock.Lang.Russian;
        var clock = $('#bf-timer').FlipClock({
            clockFace: 'DailyCounter',
            autoStart: false,
            language: 'ru'
        });
        var nowDate = new Date();
        var bfDate = new Date(2017, 10, 23, 19, 0, 0, 0); // // 1 ������ 2011, 00:00:00
        clock.setTime((bfDate - nowDate) / 1000);
        clock.setCountdown(true);
        clock.start();
    })();

    //Good slider btn change on response
    (function () {
        var $button = $('.js-good-slider-button'),
            ww = $(window).width(),
            desktopText = $button.data('text-desc'),
            responseText = $button.data('text-response');

        if (ww > 500) {
            $button.text(desktopText);
            $button.removeClass('btn_block');
        }
        else {
            $button.text(responseText);
            $button.addClass('btn_block');
        }
    })();

    //ICheck - in subscribe block
    (function () {
        var $greenCheckbox = $('.checkbox-styled-green-border'),
            $redCheckbox = $('.checkbox-styled-red-border'),
            $liteCheckbox = $('.checkbox-lite-style');


        $greenCheckbox.each(function () {
            var $t = $(this),
                value = $t.attr("data-value");

            $t.iCheck({
                checkboxClass: "checkbox-styled-green-border",
                insert: value
            });
        });

        $redCheckbox.each(function () {
            var $t = $(this),
                value = $t.attr("data-value");

            $t.iCheck({
                checkboxClass: "checkbox-styled-red-border",
                insert: value
            });
        });

        $liteCheckbox.each(function () {
            var $t = $(this),
                value = $t.attr("data-value");

            $t.iCheck({
                checkboxClass: "checkbox-lite-style",
                insert: value
            });
        });

    })();

    //ICheck - in shop filters block
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

    //ICheck - in choose good type
    (function () {
        var $radioStyledGreen = $(".radio-styled-green");


        $radioStyledGreen.each(function () {
            var $t = $(this),
                value = $t.attr("data-value");

            $t.iCheck({
                radioClass: "radio-styled-green",
                insert: value
            });
        });

    })();

    // Hovers on catalog items
    (function () {
        var ww = $(window).width();

        if (ww > 1024) {
            var $clone;

            var mouseenter = function () {
                var $t = $(this);

                $clone = $t.clone();
                $clone.addClass(function () {
                    return "cart-item_hover cart-item_hover-cloned";
                }).hide();
                $clone.fadeIn(300);

                //chosen-container
                //if(!$clone.find('.cart-item__value-select').next().hasClass("chosen-container")) {
                $clone.find('.cart-item__value-select').chosen({
                    disable_search: true
                });
                //}

                $t.append($clone);

                return false;
            };

            $(document).one({
                "mouseenter.catalog": mouseenter
            }, ".js-cart-item");

            $(document).on({
                "mouseleave.catalog": function () {
                    var $t = $(this);

                    $clone = null;
                    $(".cart-item_hover").remove();

                    $(document).one({
                        mouseenter: mouseenter
                    }, ".js-cart-item");

                    return false;
                }
            }, ".js-cart-item");
        }

    })();

    //Top slide star points
    (function () {
        var $point = $('.js-point-star'),
            $allCarts = $('.js-choose-good-type'),
            $container = $('.js-cards-container'),
            $blocksWrapper = $('.js-blocks-wrapper'),
            ww = $(window).width();

        $point.click(function () {
            var $t = $(this),
                $clone = $t.clone(),
                pointPosition = $t.position(),
                positionLeft = pointPosition.left,
                positionTop = pointPosition.top,
                pointOffset = $t.offset(),
                offsetLeft = pointOffset.left,
                offsetTop = pointOffset.top,
                pointNumber = $t.data('item'),
                $item = $('#composition-good-cart-' + pointNumber),
                itemHeight = $item.height(),
                itemWidth = $item.width(),
                slideWidth = $container.width(),
                itemActive = $item.hasClass('cart-item_visible');

            // Reset all point and items of $parent
            $('.point_active').remove();
            $allCarts.removeClass('choose-good-type_visible');


            //Check position of point to open card on the right or left side of point
            if (positionLeft > (slideWidth - itemWidth)) {

                if (itemActive) {
                    $clone.remove();
                    $allCarts.removeClass('choose-good-type_visible');
                }
                else {
                    $clone.remove();
                    $allCarts.removeClass('choose-good-type_visible');
                    $blocksWrapper.append($clone);
                    $clone.addClass('point_active');
                    $clone.addClass('point_right');
                    $item.addClass('choose-good-type_visible');
                    $item.addClass('choose-good-type_right');
                    $clone.css({
                        top: offsetTop + 'px',
                        left: offsetLeft + 'px'
                    });

                    if (ww <= 1440) {
                        $item.css({
                            top: positionTop - itemHeight / 2 + 'px',
                            left: positionLeft - itemWidth - 18 + 'px'
                        });
                    }
                    else {
                        $item.css({
                            top: positionTop - itemHeight / 2 + 'px',
                            left: positionLeft - itemWidth - 24 - 9 + 'px'
                        });
                    }

                    $container.click(function () {
                        $clone.remove();
                        $item.removeClass('choose-good-type_visible');
                    });

                    return false;
                }
            }
            else {
                if (itemActive) {
                    $clone.remove();
                    $allCarts.removeClass('choose-good-type_visible');
                }
                else {
                    $clone.remove();
                    $allCarts.removeClass('choose-good-type_visible');
                    $blocksWrapper.append($clone);
                    $clone.addClass('point_active');
                    $item.addClass('choose-good-type_visible');
                    $clone.css({
                        top: offsetTop + 'px',
                        left: offsetLeft + 'px'
                    });

                    if (ww <= 1440) {
                        $item.css({
                            top: positionTop - itemHeight / 2 + 'px',
                            left: positionLeft + 18 + 30 + 'px'
                        });
                    }
                    else {
                        $item.css({
                            top: positionTop - itemHeight / 2 + 'px',
                            left: positionLeft + 24 + 30 + 'px'
                        });
                    }

                    $container.click(function () {
                        $clone.remove();
                        $item.removeClass('choose-good-type_visible');
                    });
                }
            }

            $clone.one('click', function () {
                $clone.remove();
                $item.removeClass('choose-good-type_visible');

                return false;
            });

            return false;

        });
    })();


    // NEWS INNER ============================================================

    //Detail points
    (function () {
        var $point = $('.js-pin-centered'),
            $allCarts = $('.js-detail-news-cart'),
            ww = $(window).width();

        $allCarts.removeClass('cart-item_visible');

        $point.click(function () {
            var $t = $(this),
                pointPosition = $t.position(),
                positionLeft = pointPosition.left,
                positionTop = pointPosition.top,
                pointNumber = $t.data('item'),
                $item = $('#news-detail-' + pointNumber),
                itemWidth = $item.width(),
                itemHeight = $item.height(),
                itemActive = $item.hasClass('cart-item_visible');

            if (itemActive) {
                $point.removeClass('point_active');
                $allCarts.removeClass('cart-item_visible');
            }
            else {
                $point.removeClass('point_active');
                $allCarts.removeClass('cart-item_visible');
                $t.addClass('point_active');
                $item.addClass('cart-item_visible');

                if (ww <= 1440) {
                    $item.css({
                        top: positionTop - itemHeight / 2 + 'px',
                        left: positionLeft - 7 + 'px'
                    });
                }
                else {
                    $item.css({
                        top: positionTop - itemHeight / 2 + 'px',
                        left: positionLeft + 'px'
                    });
                }


            }

            return false;
        });
    })();


    // SELLOUT PAGE ============================================================

    //Click on filters
    (function () {
        var $button = $('.js-filters-button');


        $button.click(function () {
            var $t = $(this);
            var $filtersBlockItemList = $t.parents(".filters-block__item-list");
            if ($t.hasClass('filters-block__item-list-button_all')) {
                $filtersBlockItemList.find('.js-filters-button').removeClass("filters-block__item-list-button_active");
            } else {
                $filtersBlockItemList.find('.filters-block__item-list-button_all').removeClass("filters-block__item-list-button_active");
            }
            $t.toggleClass('filters-block__item-list-button_active');
        });
    })();

    //Click on color filter
    (function () {
        var $filter = $('.js-filter-color');

        $filter.click(function () {
            var $t = $(this);
            var $filtersBlockItemList = $t.parents(".filters-block__item-list");
            if ($t.hasClass('filters-block__item-list-button_all')) {
                $filtersBlockItemList.find('.js-filter-color').removeClass("select-color_active");
                $t.toggleClass('filters-block__item-list-button_active');
            } else {
                $filtersBlockItemList.find('.filters-block__item-list-button_all').removeClass("filters-block__item-list-button_active");
                $t.toggleClass('select-color_active');
            }
        });
    })();


    // SEARCH PAGE ============================================================

    //Search page tabs filters
    /*(function() {
     var $button = $('.js-search-page__filters-item');

     $button.click(function() {
     var $t = $(this);

     $t.toggleClass('search-page__filters-item_active');
     })
     })();*/

    //Trunk8 - in -search items
    (function () {
        $('.js-search-page__content-text').trunk8({
            lines: 2,
            fill: '&hellip;'
        });


        $('.js-features-balloon-text').trunk8({
            lines: 5,
            fill: '&hellip; <a id="read-more" href="#" class="features-block__item-balloon-link">���������</a>'
        });

        $(document).on('click', '#read-more', function (event) {
            $(this).parent().trunk8('revert').append(' <a id="read-less" href="#" class="features-block__item-balloon-link">��������</a>');

            return false;
        });

        $(document).on('click', '#read-less', function (event) {
            $(this).parent().trunk8();

            return false;
        });
    })();

    // Highlighted result of search
    (function () {
        var $context = $('.js-context'),
            $input = $('.js-search-input'),
            value = $input.val();

        if ($context.length > 0) {
            $context.unhighlight();
            $context.highlight(value);
        }

    })();

    // WHERE TO BUY PAGE ============================================================

    // Hovers on catalog items
    (function () {
        var ww = window.innerWidth;
        if (ww > 1024) {
            var $clone;

            var mouseenter = function () {
                var $t = $(this);

                $clone = $t.clone();
                $clone.addClass("shop-list__item_hover").hide();
                $clone.fadeIn(300);


                $t.append($clone);

                return false;
            };

            $(document).one({
                "mouseenter.contacts": mouseenter
            }, ".js-shop-list-item");

            $(document).on({
                "mouseleave.contacts": function () {
                    var $t = $(this);

                    $clone = null;
                    $(".shop-list__item_hover").remove();

                    $(document).one({
                        "mouseenter.contacts": mouseenter
                    }, ".js-shop-list-item");

                    return false;
                }
            }, ".js-shop-list-item");
        }
    })();


    // WHERE TO BUY INNER ============================================================
    (function () {
        var $item = $('.js-vacancy-item');

        $item.removeClass('vacancy__item_open');

        $item.click(function () {
            var $t = $(this),
                isActive = $t.hasClass('vacancy__item_open');

            if (isActive) {
                $t.removeClass('vacancy__item_open');
                $item.removeClass('vacancy__item_open');
            }
            else {
                $item.removeClass('vacancy__item_open');
                $t.addClass('vacancy__item_open');
            }

        });
    })();


    // LK ============================================================

    //Hide-show password
    (function () {
        $('#toggle-password').hideShowPassword({
            show: false,
            innerToggle: true,
            toggle: {
                className: 'hideShowPassword-toggle'
            }
        });
    })();

    //Open/close orders
    /*(function() {
        var $order = $('.js-lk-orders-item');

     $order.click(function() {
     var $t = $(this),
     isOpen = $t.hasClass('lk-orders__item_open'),
     isNew = $t.hasClass('lk-orders__item_new');

     if (isNew) {
     $t.removeClass('lk-orders__item_new');
     }

     if (isOpen) {
     $order.removeClass('lk-orders__item_open');
     }
     else {
     $order.removeClass('lk-orders__item_open');

     $t.addClass('lk-orders__item_open');
     }
     setOrdersToCookie();
     });
     })();*/

    //Trunk8 for goods
    (function () {
        var ww = $(window).width();

        if (ww < 700) {
            $('.js-lk-goods-item-name').trunk8({
                lines: 1,
                fill: '&hellip;'
            });
        }
    })();

    // FAQ ============================================================

    //faq question opening
    (function () {
        var $item = $('.js-faq-item'),
            $answer = $('.js-faq-item-answer');

        $answer.hide();

        $item.click(function () {
            var $t = $(this),
                isOpen = $t.hasClass('faq__item_open'),
                $currentAnswer = $t.find('.js-faq-item-answer');

            if (isOpen) {
                $item.removeClass('faq__item_open');
                $answer.slideUp(300);
            }
            else {
                $item.removeClass('faq__item_open');
                $t.addClass('faq__item_open');
                $answer.slideUp(300);
                $currentAnswer.slideDown(300);
            }
        });
    })();


    // BUYERS PAGE ====================================================

    //Tabs
    (function () {
        var $tab = $('.js-buyer-nav-item'),
            $content = $('.js-buyer-content');

        $tab.click(function () {
            var $t = $(this),
                id = $t.data('id'),
                name = $t.text(),
                $currentContent = $('#buyer-content_' + id),
                $pageTitle = $('.js-page-title');

            $content.removeClass('buyer__content_active');
            $tab.removeClass('buyer__nav-item_active');

            $currentContent.addClass('buyer__content_active');
            $t.addClass('buyer__nav-item_active');

            $pageTitle.text(name);

            return false;
        });
    })();

    //Open-close block
    (function () {
        var $title = $('.js-buyer-top-line');

        $title.click(function () {
            var $t = $(this),
                $parent = $t.closest('.js-buyer-content-item');

            $parent.toggleClass('buyer__content-item_open');
        });
    })();

    //Show-hide text in balloon
    (function () {
        var $button = $('.js-features-block-balloon-text-open');

        $button.click(function () {
            var $t = $(this),
                hide = $t.data('text-hide'),
                show = $t.data('text-show'),
                $parent = $t.closest('.js-features-block-balloon'),
                $list = $parent.find('.js-features-block-balloon-text'),
                isOpen = $list.hasClass('features-block__item-balloon-text-wrap_open');

            if (isOpen) {
                $list.removeClass('features-block__item-balloon-text-wrap_open');
                $t.text(show);
            }

            else {
                $list.addClass('features-block__item-balloon-text-wrap_open');
                $t.text(hide);
            }

            return false;

        });

    })();


    // PARTNERS PAGE ====================================================
    (function () {
        var $item = $('.js-scroll-link'),
            $body = $("html, body");

        $item.click(function () {
            var $t = $(this),
                href = $t.attr("href"),
                $target = $(href),
                offset = $target.offset().top;

            $body.animate({
                scrollTop: offset - 200
            }, 300);

            return false;
        })
    })();


    // VALIDATION IN BASKET ====================================================

    // SHOW HIDDEN PHONE NUMBER ====================================================
    (function () {

        $(document).on('click', '.js-visible-phone', function (e) {
            e.preventDefault();
            var target = $(e.target);
            var phone = $(this).data('phone');
            var t = $(this);
            $(this).html(phone);

            var objPhone = $(this).closest(".js-shop-list-item").parent(".js-shop-list-item").find(".js-visible-phone");

            objPhone.each(function () {
                $(this).html($(this).data('phone'));
            });
            //objPhone.html(objPhone.data('phone'));

            if ($(this).closest('.shop-flagman').length) {
                ga('send', 'event', 'showNumber', 'click');
                yaCounter31874381.reachGoal('showNumber_click');
            } else if ($(this).closest('.shop-list__item__kitchen').length) {
                ga('send', 'event', 'showNumberRed', 'click');
                yaCounter31874381.reachGoal('showNumberRed_click');
            } else {
                ga('send', 'event', 'showNumberGreen', 'click');
                yaCounter31874381.reachGoal('showNumberGreen_click');
            }

            return false;

        });

    })();

    // Rating on forms ====================================================
    (function () {
        $(".js-star-rating__ico").on("click", function () {
            var jsFormInputHolder = $(this).closest(".js-form__input-holder__" + $(this).data("property-id"));
            jsFormInputHolder.find(".js-rating-selector").prop('selectedIndex', 0);
            //jsFormInputHolder.find(".js-rating-selector option[value='" + $(this).data("key") + "']").attr('selected', 'true');
            jsFormInputHolder.find(".js-rating-selector").prop('selectedIndex', parseInt($(this).data("num")) + 1);
            $(".js-form__input-holder__" + $(this).data("property-id") + " .js-star-rating__ico").removeClass("active");
            for (var i = 1; i <= $(this).data("num"); i++) {
                $(".js-form__input-holder__" + $(this).data("property-id") + " .js-star-rating__ico__" + i).addClass("active");
            }
        });
    })();


    // CREDIT CHECKBOX IN BASKET ====================================================
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


        $('.js-addresses-slider-item').click(function () {
            if ($(this).hasClass('addresses-slider__item_active')) {
                var address_id = $(this).find('.input_address_id').val();
                $('.basket-form').find('.input_address_id').val(address_id);

                $(this).find('.input_address').each(function () {
                    var id = $(this).attr('data-id');
                    $('.basket-form').find('[name="ORDER_PROP_' + id + '"]').val($(this).val());
                });
            }
            else {
                $('.basket-form').find('.input_address_id').val('');
            }
        });


        $('.js-added-order__button').click(function () {
            //location.reload();

            location.href = "/";

        });

        $('.link_one_click').click(function (ev) {
            var idItem = $(this).attr('data-artnumber');
            var price = $(this).attr('data-price');
            window.criteo_q = window.criteo_q || [];
            window.criteo_q.push(
                {event: "setAccount", account: accountId},
                {event: "setSiteType", type: siteType},
                {event: "setEmail", email: userEmail},
                {
                    event: "viewBasket", item: [
                    {id: idItem, price: price, quantity: 1}
                ]
                }
            );
        });

        $('.composition-item__button .add_cart').click(function (ev) {
            var linkOneCLick = $('.composition-item__button .link_one_click');
            var idItem = linkOneCLick.attr('data-artnumber');
            var price = linkOneCLick.attr('data-price');
            window.criteo_q = window.criteo_q || [];
            window.criteo_q.push(
                {event: "setAccount", account: accountId},
                {event: "setSiteType", type: siteType},
                {event: "setEmail", email: userEmail},
                {
                    event: "viewBasket", item: [
                    {id: idItem, price: price, quantity: 1}
                ]
                }
            );
        });

        $('#one-click-popup form button[type=submit]').click(function (ev) {
            var idItem = $('.link_one_click').attr('data-artnumber');
            var price = $('.link_one_click').attr('data-price');
            window.criteo_q = window.criteo_q || [];
            window.criteo_q.push(
                {event: "setAccount", account: accountId},
                {event: "setSiteType", type: siteType},
                {event: "setEmail", email: userEmail},
                {
                    event: "trackTransaction",
                    id: "oneClick_" + Math.random().toString().substr(3, 9),
                    item: [{id: idItem, price: price, quantity: 1}]
                });
        });

    })();


});

(function () {
    $('.link_one_click').click(function (ev) {
        var idItem = $(this).attr('data-artnumber');
        var price = $(this).attr('data-price');
        window.criteo_q = window.criteo_q || [];
        window.criteo_q.push(
            {event: "setAccount", account: accountId},
            {event: "setSiteType", type: siteType},
            {event: "setEmail", email: userEmail},
            {
                event: "trackTransaction",
                id: Math.random().toString().substr(3, 9),
                item: [{id: idItem, price: price, quantity: 1}]
            });
    });
}());

Array.prototype.UContains = function (closure) {
    var i, pLen = this.length;
    for (i = 0; i < pLen; i++) {
        if (closure(this[i])) {
            return i;
        }
    }
    return -1;
};