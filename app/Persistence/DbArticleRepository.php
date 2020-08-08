<?php

namespace App\Persistence;

use App\Entities\Article;
use App\Repositories\ArticleRepository;

class DbArticleRepository extends BaseRepository implements ArticleRepository
{


    public function getArticles()
    {
        $r = $this->orm->getRepository(Article::class);
        return $r->findAll();
    }

    public function getArticle($id)
    {
        $r = $this->orm->getRepository(Article::class);
        return $r->findByPk($id);
    }
}