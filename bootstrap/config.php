<?php

use App\Services\Implementations\DbArticleService;
use App\Services\Interfaces\ArticleService;
use Twig\Environment;

use function DI\autowire;
use Cycle\Bootstrap;
use Twig\Loader\FilesystemLoader;

return [
    // Bind an interface to an implementation
    ArticleService::class => autowire(DbArticleService::class),

    // Configure Twig
    Environment::class => function () {
        $loader = new FilesystemLoader(__DIR__ . '/../App/Views');
        return new Environment($loader);
    },

    'ORM' => function() {
        $config = Bootstrap\Config::forDatabase(
            'mysql:host=127.0.0.1;dbname=myapp', // connection dsn
            'root',                                // username
            ''                                 // password
         );
         
         // which directory contains our entities
         $config = $config->withEntityDirectory(__DIR__ . DIRECTORY_SEPARATOR . '..\app\Entities');
         
         return Bootstrap\Bootstrap::fromConfig($config);
    }
];
