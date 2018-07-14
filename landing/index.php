<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Лендинг");

use Bitrix\Main\Page\Asset;

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <? $APPLICATION->ShowHead(); ?>
        <title><? $APPLICATION->ShowTitle(); ?></title>

        <!-- STYLES -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <link rel="apple-touch-icon" sizes="57x57" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= HTML_MARKUP_BUILD_PATH; ?>/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"
              href="<?= HTML_MARKUP_BUILD_PATH; ?>/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= HTML_MARKUP_BUILD_PATH; ?>/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= HTML_MARKUP_BUILD_PATH; ?>/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= HTML_MARKUP_BUILD_PATH; ?>/favicon-16x16.png">
        <link rel="manifest" href="<?= HTML_MARKUP_BUILD_PATH; ?>/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= HTML_MARKUP_BUILD_PATH; ?>/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <?
        //styles
        Asset::getInstance()->addCss(HTML_MARKUP_BUILD_PATH . "/css/main.css");

        //scripts
        Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?lang=ru_RU");
        Asset::getInstance()->addJs(HTML_MARKUP_BUILD_PATH . "/scripts/app.min.js");
        Asset::getInstance()->addJs(HTML_MARKUP_BUILD_PATH . "/scripts/site.js");
        ?>
    </head>

    <body>

    <div class="header js-header">
        <div class="header-wrapper">

            <div class="header-body">
                <div class="header-body__left-part">
                    <a href="#" class="header-body__logo"></a>
                </div>

                <div class="header-body__pre-container">
                    <div class="header-body__container container">
                        <div class="header-body__list">
                            <div class="header-body__main-part">
                                <nav class="header-body__menu-block menu js-menu" data-height="115" data-menu-id="0">
                                    <a href="#" class="header-body__menu-item menu__item js-menu__item _active"
                                       data-index="0" data-section-id="calculator">Калькулятор</a>
                                    <a href="#" class="header-body__menu-item menu__item js-menu__item" data-index="1"
                                       data-section-id="programms">Программы</a>
                                    <a href="#" class="header-body__menu-item menu__item js-menu__item" data-index="2"
                                       data-section-id="about">О компании</a>
                                    <a href="#" class="header-body__menu-item menu__item js-menu__item" data-index="3"
                                       data-section-id="faq">Ответы на вопросы</a>
                                    <a href="#" class="header-body__menu-item menu__item js-menu__item" data-index="4"
                                       data-section-id="contacts">Контакты</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header-body__right-part">
                    <div class="header-body__column">
                        <a href="#" class="header-body__phone hidden-xs">+7 (8422) 42-50-71</a>
                        <a href="#"
                           class="header-body__call-request hidden-xs hidden-sm hidden-md button button__call-request js-popup-link"
                           data-href="#call-request-popup">Обратный звонок</a>
                    </div>
                    <div class="header-body__column">
                        <a href="#" class="header-body__burger js-header-burger">
                            <span class="header-body__burger-line"></span>
                            <span class="header-body__burger-line"></span>
                            <span class="header-body__burger-line"></span>
                        </a>
                    </div>
                </div>

            </div>


        </div>


    </div>


    <div class="blocks-wrapper js-blocks-wrapper">


        <div class="first-screen-block">
            <div class="first-screen-block__text-box">
                <div class="first-screen-block__bg">
                    <div class="first-screen-block__container container">
                        <div class="first-screen-block__content">
                            <div class="first-screen-block__title">
                                <span class="first-screen-block__title-line">Сбережения<br class="hidden-md hidden-lg"> в Ульяновске</span><br>
                                <span class="first-screen-block__title-line">с <span
                                            class="hidden-sm hidden-xs">доходом </span>от 10,5% до 17,0%</span>
                            </div>
                            <span class="first-screen-block__sub-title hidden-sm hidden-xs">Как вклад в банк, только выгоднее</span>
                            <div class="first-screen-block__benefits-wrap">
                                <div class="first-screen-block__benefits-line">
                                    <div class="first-screen-block__benefits-icon"></div>
                                    <div class="first-screen-block__benefits-name">
                                        Работаем под строгим контролем <br class="hidden-md hidden-lg">Центрального
                                        Банка РФ
                                    </div>
                                </div>
                                <div class="first-screen-block__benefits-line">
                                    <div class="first-screen-block__benefits-icon"></div>
                                    <div class="first-screen-block__benefits-name">
                                        Сбережения застрахованы <br class="hidden-md hidden-lg">на всю сумму
                                    </div>
                                </div>
                                <div class="first-screen-block__benefits-line">
                                    <div class="first-screen-block__benefits-icon"></div>
                                    <div class="first-screen-block__benefits-name">
                                        Принимаем сбережения <br class="hidden-md hidden-lg">от 1000 руб.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="calculator-block">
            <div class="calculator-block__container-absolute">
                <div class="calculator-block__container container">
                    <div class="calculator-block__content">
                        <a href="#" id="calculator"></a>
                        <div class="calculator-block__wrap calculator-block__inputs">
                            <div class="calculator-block__inputs-line-container">
                                <div class="calculator-block__inputs-holder">
                                    <span class="calculator-block__inputs-label">Сумма сбережений</span>
                                    <div class="calculator-block__inputs-line">
                                        <div class="calculator-block__range js-calculator-block__range">
                                            <div class="calculator-block__range-input js-calculator-block__range-input"
                                                 data-measure="Р">
                                                <input title="" type="text"
                                                       class="calculator-block__input js-calculator-block__input text-input"/>
                                            </div>
                                            <div class="calculator-block__range-slider js-calculator-block__range-slider"
                                                 data-min="1000" data-max="200000"
                                                 data-val="100000" data-step="1000">
                                            </div>
                                            <span class="calculator-block__range-measure rub"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="calculator-block__inputs-holder">
                                    <span class="calculator-block__inputs-label">На срок/ мес.</span>
                                    <div class="calculator-block__inputs-line js-radio-parent">
                                        <input type="radio" data-value="3"
                                               data-radio-class="checkbox-square checkbox-styled"
                                               class="js-radio js-radio-square" name="time"
                                               data-index="0" checked>
                                        <input type="radio" data-value="6"
                                               data-radio-class="checkbox-square checkbox-styled"
                                               class="js-radio js-radio-square" name="time"
                                               data-index="1">
                                        <input type="radio" data-value="12"
                                               data-radio-class="checkbox-square checkbox-styled"
                                               class="js-radio js-radio-square" name="time"
                                               data-index="2">
                                    </div>
                                </div>
                                <div class="calculator-block__inputs-holder">
                                    <span class="calculator-block__inputs-label">Ежемесячное пополнение</span>
                                    <div class="calculator-block__inputs-line">
                                        <div class="calculator-block__range js-calculator-block__range">
                                            <div class="calculator-block__range-input js-calculator-block__range-input"
                                                 data-measure="Р">
                                                <input title="" type="text"
                                                       class="calculator-block__input js-calculator-block__input text-input"/>
                                            </div>
                                            <div class="calculator-block__range-slider js-calculator-block__range-slider"
                                                 data-min="1000" data-max="200000"
                                                 data-val="2000" data-step="1000">
                                            </div>
                                            <span class="calculator-block__range-measure rub"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="calculator-block__inputs-holder">
                                    <span class="calculator-block__inputs-label">Выплата процентов</span>

                                    <div class="calculator-block__inputs-line js-radio-parent">
                                        <input type="radio" data-value="В конце срока"
                                               data-radio-class="checkbox-rectangle checkbox-styled"
                                               class="js-radio js-radio-rectangle" name="percents"
                                               data-index="0" checked>
                                        <input type="radio" data-value="Ежемесячно"
                                               data-radio-class="checkbox-rectangle checkbox-styled"
                                               class="js-radio js-radio-rectangle" name="percents"
                                               data-index="1">
                                    </div>

                                </div>

                            </div>
                            <div class="calculator-block__inputs-line-container">
                                <div class="calculator-block__input-mark checkbox-label">
                                    <div class="checkbox-mark__container-square js-checkbox-container-square checkbox-label__checkbox-pre-container">
                                        <div class="checkbox-mark__container-mark checkbox-label__checkbox-container">
                                            <input name="mark" value="1" type="checkbox"
                                                   class="js-checkbox js-checkbox-mark"
                                                   data-checkbox-class="checkbox-mark checkbox-label__checkbox-generated-container"
                                                   data-index="1">
                                        </div>
                                    </div>
                                    <span class="calculator-block__input-mark-label checkbox-label__label-container">
                                <span class="calculator-block__input-mark-label-value">+1%</span> <span
                                                class="calculator-block__input-mark-label-text">к ставке <br
                                                    class="hidden-lg">для пенсионеров</span>
                            </span>
                                </div>
                            </div>
                            <div class="calculator-block__inputs-triangle"></div>
                            <div class="calculator-block__inputs-send-button-container">
                                <button class="calculator-block__inputs-send-button button button__calculator-send-request js-popup-link"
                                        data-href="#call-request-popup">Отправить заявку
                                </button>
                            </div>
                        </div>

                        <div class="calculator-block__wrap calculator-block__info">
                            <div class="calculator-block__info-result-line">
                                <div class="calculator-block__info-result-column">
                                    <div class="calculator-block__info-result-key">
                                        Вы получите
                                    </div>
                                    <div class="calculator-block__info-result-value">
                                        234 000 <span class="rub"></span>
                                    </div>
                                </div>
                                <div class="calculator-block__info-result-column">
                                    <div class="calculator-block__info-result-key">
                                        Доход
                                    </div>
                                    <div class="calculator-block__info-result-value">
                                        34 000 <span class="rub"></span>
                                    </div>
                                </div>
                                <div class="calculator-block__info-result-column">
                                    <div class="calculator-block__info-result-key">
                                        Ставка
                                    </div>
                                    <div class="calculator-block__info-result-value __green-text">
                                        17%
                                    </div>
                                </div>
                                <div class="calculator-block__info-result-column __flex-row-element--right">
                                    <div class="calculator-block__info-result-label">
                                        <span class="calculator-block__info-result-label-title">Сбережение застраховано</span>
                                        <div class="calculator-block__info-result-label-logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator-block__info-links-line">
                                <a href="#" data-href="#full-conditions"
                                   class="calculator-block__info-link link __dashed-underline js-popup-link">
                                    <span>Полные условия</span>
                                </a>
                                <a href="#" data-href="#preliminary-calculation-charges"
                                   class="calculator-block__info-link link __dashed-underline js-popup-link">
                                    <span>График начислений</span>
                                </a>
                                <a href="#" class="calculator-block__info-link link">
                                    <div class="__icon-link icon-save"></div>
                                    <span class="__solid-underline">Сохранить результат</span>
                                </a>
                                <a href="#" class="calculator-block__info-link link">
                                    <div class="__icon-link icon-location"></div>
                                    <span class="__dashed-underline">Посмотреть адрес на карте</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="comparison-programs-block">
            <div class="comparison-programs-block__bg">
                <div class="comparison-programs-block__container container">
                    <div class="comparison-programs-block__content">
                        <a href="#" id="programms"></a>
                        <span class="comparison-programs-block__title">
					Сравнение программ
				</span>
                        <span class="comparison-programs-block__sub-title">
					При сбережении <br class="hidden-md hidden-lg">100 000 рублей на 12 месяцев
				</span>

                        <div class="comparison-programs-block__programs-wrap-absolute">
                            <div class="comparison-programs-block__programs-wrap">

                                <div class="comparison-programs-block__program-column">
                                    <div class="comparison-programs-block__program-title">
                                        <span class="comparison-programs-block__program-title-line">доход</span>
                                        <span class="comparison-programs-block__program-title-line">Пенсионный</span>
                                    </div>
                                    <div class="comparison-programs-block__program-info">
                                        <div class="comparison-programs-block__program-list">
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Вы получите
                                                </div>
                                                <div class="comparison-programs-block__program-value _large-text">
                                                    232 000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Доход по программе
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    32 000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Процентная ставка
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    16%
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Минимальное сбережение
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    от 1000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Пополнение
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    от 1000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Начисление и выплата процентов
                                                </div>
                                                <div class="comparison-programs-block__program-value _medium-text">
                                                    В конце срока или ежемесячно
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"
                                           data-href="#full-conditions"
                                           class="comparison-programs-block__program-detail-button button button__program-detail hidden-xs hidden-sm hidden-md js-popup-link">
                                            Полные условия
                                        </a>
                                    </div>
                                </div>

                                <div class="comparison-programs-block__program-column">
                                    <div class="comparison-programs-block__program-title">
                                        <span class="comparison-programs-block__program-title-line">копилка</span>
                                        <span class="comparison-programs-block__program-title-line">Семейная</span>
                                    </div>
                                    <div class="comparison-programs-block__program-info">
                                        <div class="comparison-programs-block__program-list">
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Вы получите
                                                </div>
                                                <div class="comparison-programs-block__program-value _large-text">
                                                    232 000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Доход по программе
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    32 000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Процентная ставка
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    15.5%
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Минимальное сбережение
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    от 1000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Пополнение
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    от 1000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Начисление и выплата процентов
                                                </div>
                                                <div class="comparison-programs-block__program-value _medium-text">
                                                    В конце срока или ежемесячно
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"
                                           data-href="#full-conditions"
                                           class="comparison-programs-block__program-detail-button button button__program-detail hidden-xs hidden-sm hidden-md js-popup-link">
                                            Полные условия
                                        </a>
                                    </div>
                                </div>

                                <div class="comparison-programs-block__program-column">
                                    <div class="comparison-programs-block__program-title">
                                        <span class="comparison-programs-block__program-title-line">Полгода</span>
                                    </div>
                                    <div class="comparison-programs-block__program-info">
                                        <div class="comparison-programs-block__program-list">
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Вы получите
                                                </div>
                                                <div class="comparison-programs-block__program-value _large-text">
                                                    232 000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Доход по программе
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    32 000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Процентная ставка
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    15%
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Минимальное сбережение
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    от 1000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Пополнение
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    от 1000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Начисление и выплата процентов
                                                </div>
                                                <div class="comparison-programs-block__program-value _medium-text">
                                                    В конце срока или ежемесячно
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"
                                           data-href="#full-conditions"
                                           class="comparison-programs-block__program-detail-button button button__program-detail hidden-xs hidden-sm hidden-md js-popup-link">
                                            Полные условия
                                        </a>
                                    </div>
                                </div>

                                <div class="comparison-programs-block__program-column">
                                    <div class="comparison-programs-block__program-title">
                                        <span class="comparison-programs-block__program-title-line">вания</span>
                                        <span class="comparison-programs-block__program-title-line">До востребо-</span>
                                    </div>
                                    <div class="comparison-programs-block__program-info">
                                        <div class="comparison-programs-block__program-list">
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Вы получите
                                                </div>
                                                <div class="comparison-programs-block__program-value _large-text">
                                                    232 000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Доход по программе
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    32 000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Процентная ставка
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    13.5%
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Минимальное сбережение
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    от 1000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Пополнение
                                                </div>
                                                <div class="comparison-programs-block__program-value">
                                                    от 1000 <span class="rub"></span>
                                                </div>
                                            </div>
                                            <div class="comparison-programs-block__program-line">
                                                <div class="comparison-programs-block__program-key">
                                                    Начисление и выплата процентов
                                                </div>
                                                <div class="comparison-programs-block__program-value _medium-text">
                                                    В конце срока или ежемесячно
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#"
                                           data-href="#full-conditions"
                                           class="comparison-programs-block__program-detail-button button button__program-detail hidden-xs hidden-sm hidden-md js-popup-link">
                                            Полные условия
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <? $APPLICATION->IncludeComponent(
            "aspro:form.stroy",
            "feedback-inline",
            Array(
                "IBLOCK_TYPE" => "forms",
                "IBLOCK_ID" => "10",
                "USE_CAPTCHA" => "N",
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "AJAX_OPTION_HISTORY" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "100000",
                "AJAX_OPTION_ADDITIONAL" => "",
                //"IS_PLACEHOLDER" => "Y",
                "SUCCESS_MESSAGE" => "Спасибо! Специалист перезвонит вам по номеру",
                "ERROR_MESSAGE_TEMPLATE" => '<div class="feedback-block__error alert alert-danger">#content#</div>',
                "POPUP" => "N",
                "PERSONAL_CHECKBOX" => array(
                    "ENABLED" => "Y",
                    "TEXT" => "Согласен на обработку перс. данных",
                    "NOTICE" => "Вам необходимо дать согласие на обработку персональных данных"
                )
            )
        ); ?>


        <div class="map-block">
            <div class="map-block__info">
                <div class="map-block__info-bg">
                    <div class="map-block__info-image"></div>
                    <div class="map-block__info-wrap">
                        <div class="map-block__info-line">
                            <p class="map-block__info-key">Адрес</p>
                            <p class="map-block__info-value">г. Ульяновск, 2-й пер. Мира, д. 28/3</p>
                        </div>
                        <button class="map-block__info-button hidden-lg button button__map-block-info">Посмотреть на
                            карте
                        </button>
                        <div class="map-block__info-line">
                            <p class="map-block__info-key">Телефон</p>
                            <p class="map-block__info-value">8 (8422) 425-071</p>
                        </div>
                        <div class="map-block__info-line">
                            <p class="map-block__info-key">Режим работы</p>
                            <p class="map-block__info-value">Будни: с 9:00 до 19:00</p>
                            <p class="map-block__info-value">Суббота: с 10:00 до 13:00</p>
                            <p class="map-block__info-value">Воскресенье: выходные</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-block__itself" id="map"></div>
        </div>


        <footer class="footer">
            <div class="footer__container container">

            </div>
        </footer>


        <div class="mobile-menu" id="mobile-menu">
            <div class="mobile-menu__main-part">
                <a href="#" class="mobile-menu__close button__close-big" id="mobile-menu-close"></a>
                <div class="mobile-menu__header">
                    <span class="mobile-menu__title">Меню</span>
                </div>
                <div class="mobile-menu__list-wrap">
                    <div class="mobile-menu__list menu menu_green js-menu" data-height="128" data-is-popup="1"
                         data-menu-id="1">
                        <a href="#" class="mobile-menu__item menu__item js-menu__item _active" data-index="0"
                           data-section-id="calculator">
                            <span class="__bottom-border">Калькулятор</span>
                        </a>
                        <a href="#" class="mobile-menu__item menu__item js-menu__item" data-index="1"
                           data-section-id="programms">
                            <span class="__bottom-border">Программы</span>
                        </a>
                        <a href="#" class="mobile-menu__item menu__item js-menu__item" data-index="2"
                           data-section-id="about">
                            <span class="__bottom-border">О компании</span>
                        </a>
                        <a href="#" class="mobile-menu__item menu__item js-menu__item" data-index="3"
                           data-section-id="faq">
                            <span class="__bottom-border">Ответы на вопросы</span>
                        </a>
                        <a href="#" class="mobile-menu__item menu__item js-menu__item" data-index="4"
                           data-section-id="contacts">
                            <span class="__bottom-border">Контакты</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div style="display: none;">


            <div class="box-modal" id="call-request-popup">
                <a href="#" class="box-modal__close button__close arcticmodal-close hidden-xs hidden-sm"></a>

                <div class="box-modal__content">

                    <? $APPLICATION->IncludeComponent(
                        "aspro:form.stroy",
                        "popup",
                        Array(
                            "IBLOCK_TYPE" => "forms",
                            "IBLOCK_ID" => "11",
                            "USE_CAPTCHA" => "N",
                            "AJAX_MODE" => "Y",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "AJAX_OPTION_HISTORY" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "100000",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            //"IS_PLACEHOLDER" => "Y",
                            "SUCCESS_MESSAGE" => "Спасибо! Специалист перезвонит вам по номеру",
                            "POPUP" => "N",
                            "ERROR_MESSAGE_TEMPLATE" => '<div class="feedback-block__error alert alert-danger">#content#</div>',
                            "PERSONAL_CHECKBOX" => array(
                                "ENABLED" => "Y",
                                "TEXT" => "Согласен на обработку перс. данных",
                                "NOTICE" => "Вам необходимо дать согласие на обработку персональных данных"
                            )
                        )
                    ); ?>

                </div>
            </div>


            <div class="box-modal" id="thanks-for-request">
                <a href="#" class="box-modal__close button__close arcticmodal-close hidden-xs hidden-sm"></a>

                <div class="box-modal__content">
                    <div class="call-request-popup test-popup_thank-you">
                        <form>
                            <div class="call-request-popup__container">
                                <p class="call-request-popup__title __text-align--lg-center">
                                    Спасибо!
                                </p>
                                <p class="call-request-popup__text">
                                    Специалист перезвонит вам<br>по номеру
                                </p>

                                <p class="call-request-popup__text call-request-popup__phone-number js-phone-number-result"></p>

                                <button type="submit" class="call-request-popup__button arcticmodal-close button">хорошо
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <div class="box-modal" id="full-conditions">
                <a href="#"
                   class="box-modal__close button__close button__close-big-height-popup arcticmodal-close hidden-xs hidden-sm"></a>

                <div class="box-modal__content">
                    <div class="full-conditions-popup info-popup">
                        <div class="full-conditions-popup__container info-popup__container">
                            <p class="full-conditions-popup__title info-popup__title">
                                Полные условия сбережений
                            </p>

                            <div class="info-popup__holder js-tabs-content__container">

                                <div class="full-conditions-popup__nav">
                                    <a href="#"
                                       class="full-conditions-popup__nav-item js-tabs-content__nav-item _active button button__tabs"
                                       data-section-id="0">Пенсионный доход</a>
                                    <a href="#"
                                       class="full-conditions-popup__nav-item js-tabs-content__nav-item button button__tabs"
                                       data-section-id="1">Семейная копилка</a>
                                    <a href="#"
                                       class="full-conditions-popup__nav-item js-tabs-content__nav-item button button__tabs"
                                       data-section-id="2">Срочный доход</a>
                                </div>


                                <div class="full-conditions-popup__list">

                                    <div class="full-conditions-popup__item info-popup__item js-tabs-content__list-item _active"
                                         data-section-id="0">
                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Максимальная ставка (tab1)
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                17% годовых
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Минимальная сумма взноса
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                От 1000 руб.

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Максимальная сумма взноса
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Согласно действующему законодательству РФ

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Сумма пополнения
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Без пополнения

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Срок размещения
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                12 месяца

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Выплата процентов
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Ежемесячная или в конце срока действия договора

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Необходимые документы
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Паспорт гражданина РФ, пенсионное удостоверение

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Пролонгация
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Возможна
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                <span>Дополнительные взносы</span>
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Пайщик имеет право пополнять сумму сбережения в течении срока действия
                                                настоящего
                                                договора, но не позднее, чем за 90 календарных дней до окончания срока
                                                действия
                                                настоящего договора. Минимальная сумма пополнения
                                                по договору составляет 1000 рублей
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Налогообложение
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                КПК удерживает НДФЛ с начисленных целевых компенсационных выплат по
                                                личным сбережениям в соответствии с налоговым законодательством
                                                Российской
                                                Федерации
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Досрочное расторжение
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                В случае досрочного снятия всей суммы сбережения, договор подлежит
                                                расторжению,
                                                а компенсационные выплаты на сумму сбережения начисляются в размере
                                                0,35 % годовых. Заявление, о досрочном расторжении договора, подается
                                                Сберегателем
                                                в письменной форме за 14 календарных дней
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Частичное снятие
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Частичное снятие денежных средств по договору не допускается

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Дополнительные условия
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Разница между суммой процентов, причитающихся Клиенту (сберегателю) в
                                                случае
                                                досрочного расторжения договора, и суммой уже выплаченных процентов,
                                                удерживается
                                                из основной суммы сбережений Доход по сбережениям подлежит
                                                налогообложению
                                                по ставке на доходы физических лиц. Сбережения принимаются только
                                                от членов (пайщиков) кооператива в соответствии с Федеральным законом
                                                №190-ФЗ
                                                «О кредитной кооперации»
                                            </div>
                                        </div>


                                    </div>

                                    <div class="full-conditions-popup__item info-popup__item js-tabs-content__list-item"
                                         data-section-id="1">
                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Максимальная ставка (tab2)
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                17% годовых
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Минимальная сумма взноса
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                От 1000 руб.

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Максимальная сумма взноса
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Согласно действующему законодательству РФ

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Сумма пополнения
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Без пополнения

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Срок размещения
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                12 месяца

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Выплата процентов
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Ежемесячная или в конце срока действия договора

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Необходимые документы
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Паспорт гражданина РФ, пенсионное удостоверение

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Пролонгация
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Возможна
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Дополнительные взносы
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Пайщик имеет право пополнять сумму сбережения в течении срока действия
                                                настоящего
                                                договора, но не позднее, чем за 90 календарных дней до окончания срока
                                                действия
                                                настоящего договора. Минимальная сумма пополнения
                                                по договору составляет 1000 рублей
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Налогообложение
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                КПК удерживает НДФЛ с начисленных целевых компенсационных выплат по
                                                личным сбережениям в соответствии с налоговым законодательством
                                                Российской
                                                Федерации
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Досрочное расторжение
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                В случае досрочного снятия всей суммы сбережения, договор подлежит
                                                расторжению,
                                                а компенсационные выплаты на сумму сбережения начисляются в размере
                                                0,35 % годовых. Заявление, о досрочном расторжении договора, подается
                                                Сберегателем
                                                в письменной форме за 14 календарных дней
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Частичное снятие
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Частичное снятие денежных средств по договору не допускается

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Дополнительные условия
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Разница между суммой процентов, причитающихся Клиенту (сберегателю) в
                                                случае
                                                досрочного расторжения договора, и суммой уже выплаченных процентов,
                                                удерживается
                                                из основной суммы сбережений Доход по сбережениям подлежит
                                                налогообложению
                                                по ставке на доходы физических лиц. Сбережения принимаются только
                                                от членов (пайщиков) кооператива в соответствии с Федеральным законом
                                                №190-ФЗ
                                                «О кредитной кооперации»
                                            </div>
                                        </div>

                                    </div>

                                    <div class="full-conditions-popup__item info-popup__item js-tabs-content__list-item"
                                         data-section-id="2">
                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Максимальная ставка (tab3)
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                17% годовых
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Минимальная сумма взноса
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                От 1000 руб.

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Максимальная сумма взноса
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Согласно действующему законодательству РФ

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Сумма пополнения
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Без пополнения

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Срок размещения
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                12 месяца

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Выплата процентов
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Ежемесячная или в конце срока действия договора

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Необходимые документы
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Паспорт гражданина РФ, пенсионное удостоверение

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Пролонгация
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Возможна
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Дополнительные взносы
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Пайщик имеет право пополнять сумму сбережения в течении срока действия
                                                настоящего
                                                договора, но не позднее, чем за 90 календарных дней до окончания срока
                                                действия
                                                настоящего договора. Минимальная сумма пополнения
                                                по договору составляет 1000 рублей
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Налогообложение
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                КПК удерживает НДФЛ с начисленных целевых компенсационных выплат по
                                                личным сбережениям в соответствии с налоговым законодательством
                                                Российской
                                                Федерации
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Досрочное расторжение
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                В случае досрочного снятия всей суммы сбережения, договор подлежит
                                                расторжению,
                                                а компенсационные выплаты на сумму сбережения начисляются в размере
                                                0,35 % годовых. Заявление, о досрочном расторжении договора, подается
                                                Сберегателем
                                                в письменной форме за 14 календарных дней
                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Частичное снятие
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Частичное снятие денежных средств по договору не допускается

                                            </div>
                                        </div>

                                        <div class="full-conditions-popup__item-row info-popup__item-row">
                                            <div class="full-conditions-popup__item-key info-popup__item-key">
                                                Дополнительные условия
                                            </div>
                                            <div class="full-conditions-popup__item-value info-popup__item-value">
                                                Разница между суммой процентов, причитающихся Клиенту (сберегателю) в
                                                случае
                                                досрочного расторжения договора, и суммой уже выплаченных процентов,
                                                удерживается
                                                из основной суммы сбережений Доход по сбережениям подлежит
                                                налогообложению
                                                по ставке на доходы физических лиц. Сбережения принимаются только
                                                от членов (пайщиков) кооператива в соответствии с Федеральным законом
                                                №190-ФЗ
                                                «О кредитной кооперации»
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>


            <div class="box-modal" id="preliminary-calculation-charges">
                <a href="#"
                   class="box-modal__close button__close button__close-big-height-popup arcticmodal-close hidden-xs hidden-sm"></a>

                <div class="box-modal__content">
                    <div class="preliminary-calculation-charges-popup info-popup">

                        <div class="preliminary-calculation-charges-popup__container info-popup__container">
                            <p class="preliminary-calculation-charges-popup__title info-popup__title">
                                Предварительный расчёт начислений
                            </p>

                            <div class="info-popup__holder">
                                <div class="preliminary-calculation-charges-popup__item info-popup__item _active">
                                    <div class="preliminary-calculation-charges-popup__item-row info-popup__item-row">
                                        <div class="preliminary-calculation-charges-popup__item-key info-popup__item-key">
                                            Сумма сбережений
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__item-value info-popup__item-value">
                                            300000 руб.
                                        </div>
                                    </div>

                                    <div class="preliminary-calculation-charges-popup__item-row info-popup__item-row">
                                        <div class="preliminary-calculation-charges-popup__item-key info-popup__item-key">
                                            Процентная ставка
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__item-value info-popup__item-value">
                                            17,0%
                                        </div>
                                    </div>

                                    <div class="preliminary-calculation-charges-popup__item-row info-popup__item-row">
                                        <div class="preliminary-calculation-charges-popup__item-key info-popup__item-key">
                                            Срок сбережения
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__item-value info-popup__item-value">
                                            123 дня
                                        </div>
                                    </div>

                                    <div class="preliminary-calculation-charges-popup__item-row info-popup__item-row">
                                        <div class="preliminary-calculation-charges-popup__item-key info-popup__item-key">
                                            Выплата процентов
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__item-value info-popup__item-value">
                                            В конце срока
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="preliminary-calculation-charges-popup__container info-popup__container">
                            <p class="preliminary-calculation-charges-popup__title info-popup__title-small">
                                График начислений
                            </p>

                            <div class="info-popup__holder">

                                <div class="preliminary-calculation-charges-popup__header">
                                    <div class="preliminary-calculation-charges-popup__header-item info-popup__header-item">
                                        Номер месяца
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__header-item info-popup__header-item">
                                        Сумма сбережений
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__header-item info-popup__header-item">
                                        Пополнение
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__header-item info-popup__header-item">
                                        Сумма выплаченных процентов
                                    </div>
                                </div>

                                <div class="preliminary-calculation-charges-popup__content">
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            1
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            2
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            3
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            5
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            6
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            7
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            8
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            9
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            10
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            11
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__content-row">
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            12
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            300 000,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            0,00 <span class="rub"></span>
                                        </div>
                                        <div class="preliminary-calculation-charges-popup__content-item info-popup__content-item">
                                            4 410,59 <span class="rub"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="preliminary-calculation-charges-popup__footer">
                                    <div class="preliminary-calculation-charges-popup__footer-item info-popup__footer-item">
                                        Итого:
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__footer-item info-popup__footer-item">
                                        452 359,90 <span class="rub"></span>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__footer-item info-popup__footer-item">
                                        0,00 <span class="rub"></span>
                                    </div>
                                    <div class="preliminary-calculation-charges-popup__footer-item info-popup__footer-item">
                                        78 460,27 <span class="rub"></span>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="preliminary-calculation-charges-popup__container preliminary-calculation-charges-popup__note-button-block">
                            <div class="preliminary-calculation-charges-popup__note-text">
                                Данный расчет носит исключительно информационный характер,
                                показывающий динамику начислений по сбережению.
                            </div>
                            <button class="button button__preliminary-calculation-charges-popup">
                                Распечатать
                            </button>
                        </div>

                    </div>
                </div>
            </div>


        </div>


        <div class="__overlay js-overlay"></div>

    </div>


    <noindex>
        <script>
            $(function () {
                ymaps.ready(init);

                var myMap,
                    myPlacemark,
                    geolocation;

                function init() {
                    geolocation = ymaps.geolocation;

                    myMap = new ymaps.Map("map", {
                        center: [54.323007, 48.400784],
                        zoom: 16,
                        controls: []
                    }, {
                        searchControlProvider: 'yandex#search'
                    });

                    myPlacemark = window.myPlacemark = new ymaps.Placemark(myMap.getCenter(), {}, {
                        iconLayout: 'default#image',
                        iconImageClipRect: [[0, 0], [105, 151]],
                        iconImageHref: '/html-markup/build/img/sprite_map.png',
                        iconImageSize: [105 / 2, 151 / 2],
                        iconImageOffset: [-(105 / 4), -(151 / 2)]
                    });

                    myMap.geoObjects.add(myPlacemark);
                }
            });
        </script>
    </noindex>


    </body>
    </html>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>