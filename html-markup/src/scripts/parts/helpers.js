$(function () {


    // SHOW/HIDE DETAIL DESCRIPTION ====================================================
    (function () {

        $(document).on('click', '.js-item-desc__detail-button', function (e) {
            e.preventDefault();

            var $parent = $(this).closest(".js-item-desc");
            var $descDetail = $parent.find(".js-item-desc__detail");
            $descDetail.toggleClass("display-none");

            var strTextDetail = $(this).data("text-detail");
            var strTextPreview = $(this).data("text-preview");
            var strTextCurrent = $(this).text();

            if(strTextCurrent === strTextDetail){
                $(this).text(strTextPreview);
            }else{
                $(this).text(strTextDetail);
            }

            return false;

        });

    })();


});