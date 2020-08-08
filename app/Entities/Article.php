<?php

namespace App\Entities;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Column;

/** 
 * @Entity(repository="\App\Repositories\ArticleRepository")
 * 
 * */
class Article
{
    /** @Column(type = "primary") */
    protected $id;

    /** @Column(type = "string") */
    protected $title;

    /** @Column(type = "text") */
    protected $content;

    public function __construct($id, $title, $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }
}
