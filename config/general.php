<?php
/**
* General Configuration
*
* All of your system's general configuration settings go in here. You can see a
* list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
*
* @see craft\config\GeneralConfig
*/
return [
// Global settings
	'*' => [
		'allowUpdates' => false,
		'cacheDuration' => 0,
		'defaultCpLanguage' => 'en',
		'defaultSearchTermOptions' => array(
			'subLeft' => true,
			'subRight' => true,
		),
		'defaultWeekStartDay' => 0,
		'devMode' => false,
		'useProjectConfigFile' => true,
		'extraAllowedFileExtensions' => 'json',
		'enableTemplateCaching' => true,
		// 'maxCachedCloudImageSize' => 0,
		'omitScriptNameInUrls' => true,
		'pageTrigger' => 'page/',
		'preventUserEnumeration' => true,
		// 'resourceBasePath' => '@webroot/cpresources',
		// 'resourceBaseUrl' => '@web/cpresources',
		'securityKey' => getenv('SECURITY_KEY'),
		'suppressTemplateErrors' => true,
		// 'setPasswordSuccessPath' => '',
		'useEmailAsUsername' => true,
		'aliases' => [
			'@basePath' => "././assets",
			'@baseUrl' => '/assets',
		],
		'custom' => [
			'staticAssetsVersion' => 14,
		]
	],
	'dev' => [
		'allowUpdates' => true,
		'devMode' => true,
		'enableTemplateCaching' => false,
		'backupOnUpdate' => false,
		'siteUrl' => [
			'mtpicksZh' => 'http://mt:8080/',
			'mtpicksEn' => 'http://mt:8080/en/',
		],
		'suppressTemplateErrors' => false,
		'custom' => [
			'staticAssetsVersion' => time(),
		]
	]
];