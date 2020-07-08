<?php

defined('TYPO3_MODE') || die();

call_user_func(function () {

// Register content element icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'tx_minigallery_minigallery',
        \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
        [
        'name' => 'image',
    ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:minigallery/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:minigallery/Configuration/TsConfig/Page/BackendPreview.tsconfig">'
    );
    // Add backend preview hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['minigallery'] =
    SvenJuergens\Minigallery\Hooks\PageLayoutViewDrawItem::class;
});
