<?php

namespace App\Services\Implementations;

use App\Repositories\ArticleRepository;
use App\Services\Interfaces\ArticleService;

class DbArticleService implements ArticleService
{

    private $repo;

    public function __construct(ArticleRepository $repo)
    {
        $this->repo = $repo;
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