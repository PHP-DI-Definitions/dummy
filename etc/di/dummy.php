<?php declare(strict_types=1);

use PHPDIDefinitions\Dummy;

return [
    Dummy::class => function () {
        return new Dummy();
    },
];
