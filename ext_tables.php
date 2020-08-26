<?php
defined('TYPO3_MODE') or die();

/*
 * (c) 2020 FriendsOfCrawler <mail@treupo.de>
 *
 * This file is part of the TYPO3 Crawler Widgets Extension.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
    module.tx_dashboard {
        view {
            templateRootPaths.1596545239 = EXT:typo3_crawler_widget/Resources/Private/Templates/Widget/
            partialRootPaths.1596545239 = EXT:typo3_crawler_widget/Resources/Private/Partials/Widget/
            layoutRootPaths.1596545239 = EXT:typo3_crawler_widget/Resources/Private/Layouts/Widget/
        }
    }'
);