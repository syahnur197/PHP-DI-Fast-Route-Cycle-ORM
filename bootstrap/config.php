<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [

    // Configure Twig
    Environment::class => function () {
        $loader = new FilesystemLoader(__DIR__ . '/../App/Views');
        return new Environment($loader);
    },
];
