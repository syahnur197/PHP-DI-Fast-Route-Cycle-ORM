<?php

namespace App\Controllers;

use App\Services\Interfaces\ArticleService;
use Twig\Environment;

class HomeController
{
    /**
     * @var ArticleRepository
     */
    private $service;

    /**
     * @var Twig_Environment
     */
    private $twig;

    public function __construct(ArticleService $service, Environment $twig)
    {
        $this->service = $service;
        $this->twig = $twig;
    }

    /**
     * Example of an invokable class, i.e. a class that has an __invoke() method.
     *
     * @see http://php.net/manual/en/language.oop5.magic.php#object.invoke
     */
    public function __invoke()
    {
        echo $this->twig->render('home.twig', [
            'articles' => $this->service->getArticles(),
        ]);
    }
}
