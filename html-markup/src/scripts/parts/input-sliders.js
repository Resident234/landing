$(function () {

    //инициализация сладйера с установокй  начальных значений + связь слайд -> инпуты
    var rangeSliders = $(".js-calculator-block__range-slider");

    rangeSliders.each(function () {

        var $input = $(this).closest(".js-calculator-block__range").find(".js-calculator-block__range-input .js-calculator-block__input");
        $input.val(Number($(this).attr("data-val")));

        $(this).slider({
            range: false,
            min: Number($(this).attr("data-min")),
            max: Number($(this).attr("data-max")),
            value: Number($(this).attr("data-val")),
            step: Number($(this).attr("data-step")),
            classes: {
                "ui-slider-handle": "calculator-block__range-slider-handle"
            },
            slide: function (event, ui) {
                $input.val(ui.value);
            }
        });
    });
});