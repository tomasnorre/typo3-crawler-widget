<?php

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

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Crawler Widgets',
    'description' => 'Widgets for crawler extension',
    'category' => 'be',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'dashboard' => '10.4.0-11.5.99',
            'crawler' => '9.0.0-10.9.99'
        ],
    ],
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Tomas Norre Mikkelsen, Philipp Kuhlmay, Chris Müller',
    'author_email' => 'mail@treupo.de',
    'author_company' => 'FriendsOfCrawler',
    'version' => '1.2.0',
    'autoload' => [
        'psr-4' => [
            'FriendsOfCrawler\CrawlerWidget\\' => 'Classes'
        ]
    ],
];
