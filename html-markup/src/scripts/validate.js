function FormValidator(strFormID, strErrorContainerClass, strErrorMessageTemplate) {
    var _this = this;

    this.strFormClass = ".js-form__" + strFormID;
    this.$form = $(_this.strFormClass);
    this.strErrorContainerClass = strErrorContainerClass;
    this.$errorContainer = $("." + _this.strErrorContainerClass);
    this.strErrorMessageTemplate = strErrorMessageTemplate;

    this.objExtend = function (obj, src) {
        for (var key in src) {
            if (src.hasOwnProperty(key)) obj[key] = src[key];
        }
        return obj;
    };

    this.GetInputs = function () {
        var arRulesMessages = {};
        arRulesMessages["rules"] = {};
        arRulesMessages["messages"] = {};
        $(_this.strFormClass + " input").each(function (i, elem) {
            if ($(this).data("required") == "Y") {
                arRulesMessages["rules"][$(this).attr("id")] = {};
                arRulesMessages["messages"][$(this).attr("id")] = {};

                arRulesMessages["rules"][$(this).attr("id")] = "required";
                arRulesMessages["messages"][$(this).attr("id")] = $(this).data("required-message");
            }
        });
        return arRulesMessages;

    };

    this.arRulesMessages = _this.GetInputs();

    this.Init = function () {
        _this.$form.validate(
            _this.objExtend({
                    errorClass: "field-error",
                    focusInvalid: false,
                    focusCleanup: true,
                    onclick: false,
                    onkeyup: false,
                    onfocusout: false,

                    invalidHandler: function (e, validator) {

                    },
                    submitHandler: function (form) {
                        _this.$errorContainer.addClass("hidden");
                        form.submit();

                        $(".js-phone-number-result").html(_this.$form.find("#PHONE_NUMBER").val());
                        $.arcticmodal('close');
                        openPopup("#thanks-for-request");
                        BX.closeWait();
                    },
                    showErrors: function (errorMap, errorList) {

                        var strErrorsText = "";
                        var arErrorsText = [];

                        for (var strErrorMapItem in errorMap) {
                            arErrorsText.push(errorMap[strErrorMapItem]);
                        }

                        strErrorsText += arErrorsText.join("<br>");
                        strErrorsText = _this.strErrorMessageTemplate.replace("#content#", strErrorsText);

                        _this.$errorContainer.removeClass("hidden");
                        _this.$errorContainer.html(strErrorsText);

                        BX.closeWait();

                    }
                }, _this.arRulesMessages
            ));

    }

}