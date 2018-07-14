<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>
<?
$this->setFrameMode(false);
//$this->addExternalJS($this->GetFolder() . "/validate.js");

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>

    <div class="feedback-block"
         data-success-message="<?= $arParams["SUCCESS_MESSAGE"]; ?>">
        <?= $arResult["FORM_HEADER"]; ?>
        <div class="feedback-block__bg">
            <div class="feedback-block__container container">
                <div class="feedback-block__content">
				<span class="feedback-block__title">
					Ответим на вопросы, поможем подобрать программу
				</span>

                    <div class="feedback-block__pre-wrap feedback-block__phone-pre-wrap">
                        <div class="feedback-block__error-container hidden">
                            <? if ($arResult['isFormErrors'] == 'Y'): ?>
                                <div class="feedback-block__error alert alert-danger">
                                    <?= $arResult['FORM_ERRORS_TEXT'] ?>
                                </div>
                            <? endif; ?>
                        </div>
                        <div class="feedback-block__wrap feedback-block__phone-wrap">
                            <div class="feedback-block__column feedback-block__phone-column hidden-xs hidden-sm hidden-md">
                                <div class="feedback-block__phone-line">
                                    <span class="feedback-block__phone-title">+7 (8422) 42-50-71</span>
                                    <span class="feedback-block__phone-or">или</span>
                                </div>
                                <span class="feedback-block__note __text-align--left">Будни с 9:00 до 19:00: СБ: с 10 до 13, ВС: выходной</span>
                            </div>

                            <div class="feedback-block__column feedback-block__phone-input-column">
                                <div class="feedback-block__input-holder">
                                    <input type="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["FIELD_TYPE"]; ?>"
                                           class="feedback-block__input text-input phone"
                                           id="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["CODE"]; ?>"
                                           name="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["CODE"]; ?>"
                                           value="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["DEFAULT"]; ?>"
                                           placeholder="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["HINT"]; ?>"
                                           data-required="<?= $arResult["QUESTIONS"]["PHONE_NUMBER"]["IS_REQUIRED"]; ?>"
                                           data-required-message="<?=GetMessage("FORM_REQUIRED_INPUT") . $arResult["QUESTIONS"]["PHONE_NUMBER"]["NAME"];?>">
                                </div>
                                <? if ($arParams["PERSONAL_CHECKBOX"]["ENABLED"] == "Y") { ?>
                                    <div class="feedback-block__personal-info checkbox-label">
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
                                           class="feedback-block__input-personal-label checkbox-label__label-container link">
                                            <?= $arParams["PERSONAL_CHECKBOX"]["TEXT"]; ?>
                                        </a>
                                    </div>
                                <? } ?>
                            </div>

                            <div class="feedback-block__column feedback-block__button-column">
                                <div class="feedback-block__input-holder">
                                    <button type="submit"
                                            class="feedback-block__button button button__feedback-call-request">
                                        Перезвоните мне
                                    </button>
                                    <input type="hidden" name="form_submit" value="1"/>
                                </div>
                                <span class="feedback-block__note">Перезвоним за 15 минут</span>
                            </div>

                        </div>
                    </div>

                    <div class="feedback-block__wrap feedback-block__process-wrap">
                        <div class="feedback-process">
                            <div class="feedback-process__title hidden-lg">Как открыть сбережение</div>
                            <div class="feedback-process__list">
                                <div class="feedback-process__item">
                                    <div class="feedback-process__item-bg hidden-xs hidden-sm hidden-md">
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                    </div>
                                    <div class="feedback-process__item-number">
                                        <span>1</span>
                                    </div>
                                    <div class="feedback-process__item-text-container">
                                        <p class="feedback-process__item-title">Подать заявку</p>
                                        <p class="feedback-process__item-text">Оставьте заявку на сайте, позвоните
                                            по
                                            телефону или
                                            приезжайте</p>
                                    </div>
                                </div>
                                <div class="feedback-process__item">
                                    <div class="feedback-process__item-bg hidden-xs hidden-sm hidden-md">
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                        <div class="feedback-process__item-marker"></div>
                                    </div>
                                    <div class="feedback-process__item-number">
                                        <span>2</span>
                                    </div>
                                    <div class="feedback-process__item-text-container">
                                        <p class="feedback-process__item-title">Приехать в офис и заключить
                                            договор</p>
                                        <p class="feedback-process__item-text">Вас встретит менеджер и расскажет все
                                            условия.
                                            Для
                                            заключения договора нужен паспорт РФ</p>
                                    </div>
                                </div>
                                <div class="feedback-process__item">
                                    <div class="feedback-process__item-number">
                                        <span>3</span>
                                    </div>
                                    <div class="feedback-process__item-text-container">
                                        <p class="feedback-process__item-title">Открыть сбережение</p>
                                        <p class="feedback-process__item-text">После заключения договора получаете
                                            членскую
                                            книжку. Вносите деньги наличными или переводите на счёт</p>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
        <?= $arResult["FORM_FOOTER"]; ?>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            formValidator = new FormValidator('<?=$arResult["FORM_ID"];?>', "feedback-block__error-container", '<?=$arParams["~ERROR_MESSAGE_TEMPLATE"];?>');
            formValidator.Init();
        });
    </script>
