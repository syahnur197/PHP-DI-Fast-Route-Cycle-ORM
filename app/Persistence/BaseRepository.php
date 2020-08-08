<?php

namespace App\Persistence;

class BaseRepository
{
    protected $orm;

    public function __construct()
    {
        $container = require __DIR__ . '../../../bootstrap/app.php';
        $this->orm = $container->get('ORM');
    }
}