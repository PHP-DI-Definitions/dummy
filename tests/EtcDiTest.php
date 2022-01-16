<?php

declare(strict_types=1);

namespace PHPDIDefinitions\Tests;

use PHPDIDefinitions\Dummy;
use WyriHaximus\TestUtilities\TestCase;

use function dirname;

use const DIRECTORY_SEPARATOR;

final class EtcDiTest extends TestCase
{
    public function testDefinitionsCount(): void
    {
        self::assertCount(1, require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'di' . DIRECTORY_SEPARATOR . 'dummy.php');
    }

    public function testDefinitionsEntryForDummyExists(): void
    {
        self::assertArrayHasKey(Dummy::class, require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'di' . DIRECTORY_SEPARATOR . 'dummy.php');
    }

    public function testDummy(): void
    {
        self::assertInstanceOf(Dummy::class, (static function () {
            return (require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'di' . DIRECTORY_SEPARATOR . 'dummy.php')[Dummy::class];
        })()());
    }
}
