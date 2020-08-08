<?php

namespace App\Controllers;

use App\Services\ArticleService;
use Twig\Environment;

class ArticleController
{
    private $articleService;


    private $twig;

    public function __construct(ArticleService $articleService, Environment $twig)
    {
        $this->articleService = $articleService;
        $this->twig = $twig;
    }

    public function show($id)
    {
        $article = $this->articleService->getArticle($id);

        echo $this->twig->render('article.twig', [
            'article' => $article,
        ]);
    }
}
