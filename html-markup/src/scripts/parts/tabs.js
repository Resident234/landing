$(function () {
    
    // Popups
    (function () {
        var $tabsItem = $(".js-tabs-content__nav-item");

        $tabsItem.click(function () {
            $tabsItem.removeClass("_active");
            $(this).addClass("_active");

            var intSelectedNumber = $(this).data("section-id");

            var $tabsContainer = $(this).closest(".js-tabs-content__container");
            var $tabsListItem = $tabsContainer.find(".js-tabs-content__list-item");
            var $tabsSelectedListItem = $tabsContainer.find(".js-tabs-content__list-item[data-section-id='" + intSelectedNumber + "']");

            $tabsListItem.removeClass("_active");
            $tabsSelectedListItem.addClass("_active");
        });
    })();
});