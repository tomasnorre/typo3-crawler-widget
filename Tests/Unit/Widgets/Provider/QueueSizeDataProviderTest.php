<?php

declare(strict_types=1);

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

namespace FriendsOfCrawler\CrawlerWidget\Unit\Tests\Widgets\Provider\QueueSizeDataProvider;

use AOE\Crawler\Domain\Repository\QueueRepository;
use FriendsOfCrawler\CrawlerWidget\Widgets\Provider\QueueSizeDataProvider;
use PHPUnit\Framework\TestCase;

class QueueSizeDataProviderTest extends TestCase
{
    /**
     * @test
     */
    public function getNumberReturnsCorrectResult(): void
    {
        $queueRepositoryStub = $this->createStub(QueueRepository::class);
        $queueRepositoryStub
            ->method('getUnprocessedItems')
            ->willReturn([[1], [2], [3], [4]]);

        $subject = new QueueSizeDataProvider($queueRepositoryStub);

        self::assertSame(4, $subject->getNumber());
    }
}
