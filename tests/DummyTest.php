<?php

declare(strict_types=1);

namespace PHPDIDefinitions\Tests;

use PHPDIDefinitions\Dummy;
use WyriHaximus\TestUtilities\TestCase;

final class DummyTest extends TestCase
{
    public function testDummy(): void
    {
        self::assertInstanceOf(Dummy::class, new Dummy());
    }
}
