<?php declare(strict_types=1);

namespace PHPDIDefinitions\Tests;

use ApiClients\Tools\TestUtilities\TestCase;
use PHPDIDefinitions\Dummy;

final class EtcDiTest extends TestCase
{
    public function testDefinitionsCount()
    {
        self::assertCount(1, require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'di' . DIRECTORY_SEPARATOR . 'dummy.php');
    }

    public function testDefinitionsEntryForDummyExists()
    {
        self::assertArrayHasKey(Dummy::class, require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'di' . DIRECTORY_SEPARATOR . 'dummy.php');
    }

    public function testDummy()
    {
        self::assertInstanceOf(Dummy::class, (function () {
            return (require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'di' . DIRECTORY_SEPARATOR . 'dummy.php')[Dummy::class];
        })()());
    }
}
