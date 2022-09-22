<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

 <?$APPLICATION->IncludeComponent(
	"intervolga:class",
	"default",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "zad"
	)
);?><br><?
		require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
		?>
