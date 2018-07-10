<?php declare(strict_types=1);

namespace PHPDIDefinitions\Tests;

use ApiClients\Tools\TestUtilities\TestCase;
use PHPDIDefinitions\Dummy;

final class DummyTest extends TestCase
{
    public function testDummy()
    {
        self::assertTrue(true);
        self::assertInstanceOf(Dummy::class, new Dummy());
    }
}
