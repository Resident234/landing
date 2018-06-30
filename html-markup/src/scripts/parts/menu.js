$(function () {

    var $menu = $(".js-menu");
    var $menuItem = $(".js-menu__item");

    var heightMenu = $menu.data("height");
    var arSectionsOffsetTop = [];
    var intMenuNumber = 0;
    var arMenuIDs = [];

    $menu.each(function () {
        var intMenuItemNumber = 0;
        var intMenuID = $(this).data("menu-id");
        arSectionsOffsetTop[intMenuID] = [];
        arMenuIDs.push(intMenuID);
        $(this).find($menuItem).each(function () {
            var sectionOffsetTop = getSectionOffsetTop($(this).attr('data-section-id'));
            if (sectionOffsetTop) {
                arSectionsOffsetTop[intMenuID].push(sectionOffsetTop);
            }
            intMenuItemNumber++;
        });
        intMenuNumber++;
    });

    function getSectionOffsetTop(dataSectionID) {
        var section = $("#" + dataSectionID);

        if (section.length) {
            return section.offset().top;
        } else {
            return false;
        }

    }

    $(window).on("scroll", function () {

        var scrollTop = $(document).scrollTop();

        arMenuIDs.forEach(function(intMenuID, i, arr) {

            var activeMenuItemIndex = 0;

            for (var i = 0; i < (arSectionsOffsetTop[intMenuID].length); i++) {
                var sectionsOffsetTopCurrent = arSectionsOffsetTop[intMenuID][i] - heightMenu;
                var sectionsOffsetTopNext = arSectionsOffsetTop[intMenuID][i + 1] - heightMenu;

                if (i == 0 && scrollTop < sectionsOffsetTopCurrent) {
                    activeMenuItemIndex = 0;
                    break;
                } else if (i == (arSectionsOffsetTop.length - 1)) {
                    activeMenuItemIndex = i;
                    break;
                } else {
                    if ((scrollTop >= sectionsOffsetTopCurrent && scrollTop < sectionsOffsetTopNext)) {
                        activeMenuItemIndex = i;
                        break;
                    }
                }
            }

            $(".js-menu[data-menu-id='" + intMenuID + "'] .js-menu__item").removeClass("_active");
            $(".js-menu[data-menu-id='" + intMenuID + "'] .js-menu__item[data-index='" + activeMenuItemIndex + "']").addClass("_active");

        });

    });

    $(document).on("click", ".js-menu__item", function (e) {
        e.preventDefault();
        var t = $(this);
        var sectionOffsetTop = getSectionOffsetTop($(this).attr('data-section-id'));
        if (sectionOffsetTop) {
            $('html, body').animate({scrollTop: sectionOffsetTop - heightMenu}, 800, function () {
                $(".js-menu__item").removeClass("_active");
                t.addClass("_active");
            });
        }
    });

});