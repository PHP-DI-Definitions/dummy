<?php

declare(strict_types=1);

use PHPDIDefinitions\Dummy;

return [
    Dummy::class => static function () {
        return new Dummy();
    },
];
