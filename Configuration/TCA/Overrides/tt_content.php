<?php

defined('TYPO3') || die();

call_user_func(function () {
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['minigallery_minigallery'] = 'content-image';
    $tempColumns = [
        'tx_minigallery_imagecomposition' => [
            'config' => [
                'items' => [
                    [
                        'LLL:EXT:minigallery/Resources/Private/Language/locallang_db.xlf:tt_content.tx_minigallery_imagecomposition.I.0',
                        '1',
                    ],
                ],
                'renderType' => 'selectSingle',
                'type' => 'select',
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:minigallery/Resources/Private/Language/locallang_db.xlf:tt_content.tx_minigallery_imagecomposition',
        ],
        'tx_minigallery_images' => [
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'tx_minigallery_images',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                                ],
                            ],
                        ],
                    ],
                    'types' => [
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                        [
                            'showitem' => '--palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                        ],
                    ],
                ],
                'filter' => [
                    [
                        'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                    ],
                ],
                'appearance' => [
                    'useSortable' => '1',
                    'headerThumbnail' => [
                        'field' => 'uid_local',
                        'width' => '45',
                        'height' => '45c',
                    ],
                    'enabledControls' => [
                        'info' => 'tx_minigallery_images',
                        'new' => false,
                        'dragdrop' => 'tx_minigallery_images',
                        'sort' => false,
                        'hide' => 'tx_minigallery_images',
                        'delete' => 'tx_minigallery_images',
                    ],
                    'fileUploadAllowed' => '1',
                ],
            ],
            'exclude' => '1',
            'label' => 'LLL:EXT:minigallery/Resources/Private/Language/locallang_db.xlf:tt_content.tx_minigallery_images',
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
        'LLL:EXT:minigallery/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._minigallery_',
        '--div--',
    ];
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
        'LLL:EXT:minigallery/Resources/Private/Language/locallang_db.xlf:tt_content.CType.minigallery_minigallery',
        'minigallery_minigallery',
        'content-image',
    ];
    $tempTypes = [
        'minigallery_minigallery' => [
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'richtextConfiguration' => 'default',
                        'enableRichtext' => 1,
                    ],
                ],
            ],
            'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_minigallery_imagecomposition,tx_minigallery_images,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ],
    ];
    $GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'minigallery',
        'Configuration/TypoScript/',
        'minigallery'
    );
});
