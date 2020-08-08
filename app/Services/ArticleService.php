<?php

namespace App\Services;

use App\Entities\Article;
use App\Providers\Orm;

class ArticleService
{

    private $orm;
    private $repo;

    public function __construct(Orm $orm)
    {
        $this->orm = $orm->build();
        $this->repo = $this->orm->getRepository(Article::class);
    }

    public function getArticles()
    {
        return $this->repo->findAll();
    }

    public function getArticle($id)
    {
        return $this->repo->findByPK($id);
    }
}