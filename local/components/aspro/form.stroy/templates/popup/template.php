<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<?
$this->setFrameMode(false);
//$this->addExternalJS($this->GetFolder() . "/validate.js");

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>

    <div class="call-request-popup">
        <?= $arResult["FORM_HEADER"]; ?>
        <div class="call-request-popup__container">
            <p class="call-request-popup__title call-request-popup__title_big">
                Заявка на обратный
                <br>
                звонок
            </p>

            <div class="call-request-popup__error-container hidden">
                <? if ($arResult['isFormErrors'] == 'Y'): ?>
                    <div class="feedback-block__error alert alert-danger">
                        <?= $arResult['FORM_ERRORS_TEXT'] ?>
                    </div>
                <? endif; ?>
            </div>
            <div class="form__input-holder">
                <input type="<?= $arResult["QUESTIONS"]["NAME"]["FIELD_TYPE"]; ?>"
                       class="call-request-popup__input form__input text-input"
                       id="<?= $arResult["QUESTIONS"]["NAME"]["CODE"]; ?>"
                       name="<?= $arResult["QUESTIONS"]["NAME"]["CODE"]; ?>"
                       value="<?= $arResult["QUESTIONS"]["NAME"]["DEFAULT"]; ?>"
                       placeholder="<?= $arResult["QUESTIONS"]["NAME"]["HINT"]; ?>"
                       data-required="<?= $arResult["QUESTIONS"]["NAME"]["IS_REQUIRED"]; ?>"
                       data-required-message="<?=GetMessage("FORM_REQUIRED_INPUT") . $arResult["QUESTIONS"]["NAME"]["NAME"];?>">
            </div>
            <div class="form__input-holder">
                <input type="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["FIELD_TYPE"]; ?>"
                       class="call-request-popup__input form__input text-input phone"
                       id="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["CODE"]; ?>"
                       name="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["CODE"]; ?>"
                       value="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["DEFAULT"]; ?>"
                       placeholder="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["HINT"]; ?>"
                       data-required="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["IS_REQUIRED"]; ?>"
                       data-required-message="<?=GetMessage("FORM_REQUIRED_INPUT") . $arResult["QUESTIONS"]["PHONE_NUMBER"]["NAME"];?>">
            </div>

            <? if ($arParams["PERSONAL_CHECKBOX"]["ENABLED"] == "Y") { ?>
                <div class="call-request-popup__personal-info checkbox-label">
                    <div class="checkbox-personal__container-square js-checkbox-container-square checkbox-label__checkbox-pre-container">
                        <div class="checkbox-personal__container-personal checkbox-label__checkbox-container">
                            <input value="1"
                                   type="checkbox"
                                   class="js-checkbox js-checkbox-personal"
                                   id="PERSONAL"
                                   name="PERSONAL"
                                   data-checkbox-class="checkbox-personal checkbox-label__checkbox-generated-container"
                                   data-index="1"
                                   data-required="Y"
                                   data-required-message="<?= $arParams["PERSONAL_CHECKBOX"]["NOTICE"]; ?>">
                        </div>
                    </div>
                    <a href="#"
                       class="call-request-popup__input-personal-label checkbox-label__label-container link">
                        <?= $arParams["PERSONAL_CHECKBOX"]["TEXT"]; ?>
                    </a>
                </div>
            <? } ?>

            <button type="submit" class="call-request-popup__button button"
                    data-href="#thanks-for-request"><!-- js-popup-link-->
                Перезвоните мне
            </button>
            <input type="hidden" name="form_submit" value="1"/>
            <span class="call-request-popup__info">Перезвоним в течение 15 минут</span>
        </div>

        <?= $arResult["FORM_FOOTER"]; ?>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        formValidator = new FormValidator('<?=$arResult["FORM_ID"];?>', "call-request-popup__error-container", '<?=$arParams["~ERROR_MESSAGE_TEMPLATE"];?>');
        formValidator.Init();
    });
</script>
