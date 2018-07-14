<?
/**
 *
 * Изменения в БД:
 * - Создать инфоблоки для форм обратной связи
 *
 */
require_once $_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php";
CModule::IncludeModule('iblock');

global $DB;
$ib = 0;
$strIblockTypeCode = 'forms';
$sids = array();

$intUsersAdminGroup = "1";
$intUsersGuestsGroup = "2";

$arPersonalCheckbox = array(
    "NAME" => "Согласен на обработку перс. данных",
    "ACTIVE" => "Y",
    "SORT" => "100",
    "CODE" => "PERSONAL",
    "PROPERTY_TYPE" => "L",
    "MULTIPLE" => "N",
    "IS_REQUIRED" => "Y",
    "VALUES" => array(
        array(
            "VALUE" => "Да",
            "DEF" => "N",
            "SORT" => "100"
        ),
        array(
            "VALUE" => "Нет",
            "DEF" => "Y",
            "SORT" => "200"
        )
    )
);

$arForms = [
    array(
        "CODE" => "call-request-inline",
        "NAME" => "Обратный звонок (встроенный)",
        "PROPS" => array(
            array(
                "NAME" => "Номер",
                "HINT" => "Введите ваш номер",
                "ACTIVE" => "Y",
                "SORT" => "100",
                "CODE" => "PHONE_NUMBER",
                "PROPERTY_TYPE" => "S",
                "IS_REQUIRED" => "Y"
            ),
            $arPersonalCheckbox
        )
    ),
    array(
        "CODE" => "call-request-popup",
        "NAME" => "Обратный звонок (поп-ап)",
        "PROPS" => array(
            array(
                "NAME" => "Имя",
                "ACTIVE" => "Y",
                "SORT" => "100",
                "CODE" => "NAME",
                "PROPERTY_TYPE" => "S",
                "IS_REQUIRED" => "Y"
            ),
            array(
                "NAME" => "Номер",
                "HINT" => "Введите ваш номер",
                "ACTIVE" => "Y",
                "SORT" => "100",
                "CODE" => "PHONE_NUMBER",
                "PROPERTY_TYPE" => "S",
                "IS_REQUIRED" => "Y"
            ),
            $arPersonalCheckbox
        )
    )
];

$arQuery = CSite::GetList($sort = "sort", $order = "desc", Array());

while ($res = $arQuery->Fetch()) {
    $sids[] = $res["ID"];
}

$arTypes = CIBlockType::GetByID($type);

if (!$arType = $arTypes->Fetch()) {
    $arFields = Array(
        'ID' => $strIblockTypeCode,
        'SECTIONS' => 'Y',
        'IN_RSS' => 'N',
        'SORT' => 100,
        'LANG' => Array(
            'ru' => Array(
                'NAME' => 'Формы',
                'SECTION_NAME' => 'Раздел',
                'ELEMENT_NAME' => 'Элемент'
            )
        ),
        "LIST_PAGE_URL" => '#SITE_DIR#/' . $strIblockTypeCode . '/',
        'SECTION_PAGE_URL' => '#SITE_DIR#/' . $strIblockTypeCode . '/#SECTION_CODE#/',
        'DETAIL_PAGE_URL' => '#SITE_DIR#/' . $strIblockTypeCode . '/#SECTION_CODE#/#ELEMENT_CODE#/'
    );
    $obBlocktype = new CIBlockType;
    $DB->StartTransaction();
    $res = $obBlocktype->Add($arFields);
    if (!$res) {
        $DB->Rollback();
        echo 'Error: ' . $obBlocktype->LAST_ERROR . '<br />';
        die("TYPE_ERROR");
    } else {
        $DB->Commit();
    }
}

$objIblockProperty = new CIBlockProperty;

foreach ($arForms as $arForm) {

    $res = CIBlock::GetList(
        Array(),
        Array(
            'TYPE' => $strIblockTypeCode,
            'SITE_ID' => $sids,
            'ACTIVE' => 'Y',
            "CNT_ACTIVE" => "Y",
            "=CODE" => $arForm["CODE"]
        ), true
    );
    while ($ar_res = $res->Fetch()) {
        $ib = $ar_res['ID'];
    }
    if ($ib == 0) {
        $arFields = Array(
            "ACTIVE" => "Y",
            "NAME" => $arForm["NAME"],
            "IBLOCK_TYPE_ID" => $strIblockTypeCode,
            "SITE_ID" => $sids,
            "CODE" => $arForm["CODE"],
            "GROUP_ID" => Array($intUsersGuestsGroup => "R", $intUsersAdminGroup => "X"),
            "INDEX_ELEMENT" => "Y",
            "INDEX_SECTION" => "Y"
        );
        $iblockB = new CIBlock();
        if ($iblockID = $iblockB->Add($arFields)) {
            $resIblockProperties = CIBlock::GetProperties($iblockID, Array(), Array());
            while ($arrIblockProperties = $resIblockProperties->Fetch()) {
                $arPropsCodesIB[] = $arrIblockProperties["CODE"];
            }
            foreach ($arForm["PROPS"] as $arProp) {
                $arProp["IBLOCK_ID"] = $iblockID;
                if (!in_array($arProp["CODE"], $arPropsCodesIB)) {
                    $objIblockProperty->Add($arProp);
                }
            }

        } else {
            echo 'Error: ' . $ib->LAST_ERROR . '<br />';
        }
    }

}
