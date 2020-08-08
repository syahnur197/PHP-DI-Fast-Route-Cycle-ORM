<?php

namespace App\Controllers;

use App\Repositories\ArticleRepository;
use Twig\Environment;

class ArticleController
{
    /**
     * @var ArticleRepository
     */
    private $repository;


    private $twig;

    public function __construct(ArticleRepository $repository, Environment $twig)
    {
        $this->repository = $repository;
        $this->twig = $twig;
    }

    public function show($id)
    {
        $article = $this->repository->getArticle($id);

        echo $this->twig->render('article.twig', [
            'article' => $article,
        ]);
    }
}
