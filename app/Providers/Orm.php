<?php

namespace App\Providers;

use Cycle\Bootstrap\Bootstrap;
use Cycle\Bootstrap\Config;

class Orm
{
    public function build()
    {
        $config = Config::forDatabase(
            'mysql:host=127.0.0.1;dbname=myapp',
            'root',
            ''
         );

         $config = $config->withEntityDirectory(__DIR__ . DIRECTORY_SEPARATOR . '..\..\app\Entities');
         return Bootstrap::fromConfig($config);
    }
}