<?php

declare(strict_types=1);

$upgrades = [
    'v9.5' => [
        'typo3DbLegacyExtension' => [
            'typo3DbLegacyExtension' => \TYPO3\CMS\v95\Install\Updates\Typo3DbExtractionUpdate::class,
        ],
        'funcExtension' => [
            'funcExtension' => \TYPO3\CMS\v95\Install\Updates\FuncExtractionUpdate::class,
        ],
        'pagesUrltypeField' => [
            'pagesUrltypeField' => \TYPO3\CMS\v95\Install\Updates\MigrateUrlTypesInPagesUpdate::class,
        ],
        'separateSysHistoryFromLog' => [
            'separateSysHistoryFromLog' => \TYPO3\CMS\v95\Install\Updates\SeparateSysHistoryFromSysLogUpdate::class,
        ],
        'rdctExtension' => [
            'rdctExtension' => \TYPO3\CMS\v95\Install\Updates\RedirectExtractionUpdate::class,
        ],
        'pagesLanguageOverlay' => [
            'pagesLanguageOverlay' => \TYPO3\CMS\v95\Install\Updates\MigratePagesLanguageOverlayUpdate::class,
        ],
        'pagesLanguageOverlayBeGroupsAccessRights' => [
            'pagesLanguageOverlayBeGroupsAccessRights' => \TYPO3\CMS\v95\Install\Updates\MigratePagesLanguageOverlayBeGroupsAccessRights::class,
        ],
        'backendLayoutIcons' => [
            'backendLayoutIcons' => \TYPO3\CMS\v95\Install\Updates\BackendLayoutIconUpdateWizard::class,
        ],
        'redirects' => [
            'redirects' => \TYPO3\CMS\v95\Install\Updates\RedirectsExtensionUpdate::class,
        ],
        'adminpanelExtension' => [
            'adminpanelExtension' => \TYPO3\CMS\v95\Install\Updates\AdminPanelInstall::class,
        ],
        'pagesSlugs' => [
            'pagesSlugs' => \TYPO3\CMS\v95\Install\Updates\PopulatePageSlugs::class,
        ],
        'argon2iPasswordHashes' => [
            'argon2iPasswordHashes' => \TYPO3\CMS\v95\Install\Updates\Argon2iPasswordHashes::class,
        ],
        'backendUsersConfiguration' => [
            'backendUsersConfiguration' => \TYPO3\CMS\v95\Install\Updates\BackendUserConfigurationUpdate::class,
        ],
    ],
    'v10.4' => [
        'rsaauthExtension' => [
            'rsaauthExtension' => \TYPO3\CMS\v104\Install\Updates\RsaauthExtractionUpdate::class,
        ],
        'feeditExtension' => [
            'feeditExtension' => \TYPO3\CMS\v104\Install\Updates\FeeditExtractionUpdate::class,
        ],
        'taskcenterExtension' => [
            'taskcenterExtension' => \TYPO3\CMS\v104\Install\Updates\TaskcenterExtractionUpdate::class,
        ],
        'sysActionExtension' => [
            'sysActionExtension' => \TYPO3\CMS\v104\Install\Updates\SysActionExtractionUpdate::class,
        ],
        'databaseRowsUpdateWizard' => [
            'databaseRowsUpdateWizard' => \TYPO3\CMS\v104\Install\Updates\DatabaseRowsUpdateWizard::class,
        ],
    ],
];

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('felogin')) {
    $upgrades['v10.4']['TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPlugins'] = [
        'TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPlugins' => \TYPO3\CMS\v104\Install\Updates\MigrateFeloginPlugins::class,
    ];
    $upgrades['v10.4']['TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPluginsCtype'] = [
        'TYPO3\\CMS\\FrontendLogin\\Updates\\MigrateFeloginPluginsCtype' => \TYPO3\CMS\v104\Install\Updates\MigrateFeloginPluginsCtype::class,
    ];
}

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('form')) {
    $upgrades['v10.4']['formFileExtension'] = [
        'formFileExtension' => \TYPO3\CMS\v104\Install\Updates\FormFileExtensionUpdate::class,
    ];
}

return $upgrades;
