<?php

defined('TYPO3') || die();

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:minigallery/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig">'
    );
});
