<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
if (file_exists(dirname(__DIR__, 2) . '/bitrix/php_interface/init.php'))
{
	/** @noinspection PhpIncludeInspection */
	require_once dirname(__DIR__, 2) . '/bitrix/php_interface/init.php';
}

if (file_exists(dirname(__DIR__) . '/vendor/autoload.php'))
{
	require_once dirname(__DIR__) . '/vendor/autoload.php';
}
if (file_exists(__DIR__ . '/events.php'))
{
	require_once __DIR__ . '/events.php';
}

\Bitrix\Main\EventManager::getInstance()->addEventHandler('main', 'onProlog', function () {
    global $APPLICATION;
    $findPosition = strpos( $APPLICATION->GetCurPage(false), "/crm/deal/details/");
    if( $findPosition !== false ) {
        $asset = \Bitrix\Main\Page\Asset::getInstance();
        $asset->addjs('/local/customize_interface/script.js');
        $asset->addCss('/local/customize_interface/style.css');
    }
});
