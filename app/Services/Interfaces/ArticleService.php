<?php

namespace App\Services\Interfaces;

interface ArticleService
{
    /**
     * @return Article[]
     */
    public function getArticles();

    /**
     * @param string $id
     * @return Article
     */
    public function getArticle($id);
}