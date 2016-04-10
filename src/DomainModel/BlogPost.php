<?php

class BlogPost
{
    /** @var BlogPost\Title */
    private $title;

    /** @var BlogPost\Body */
    private $body;

    public function __construct(BlogPost\Title $title, BlogPost\Body $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    public function title() : BlogPost\Title
    {
        return $this->title;
    }

    public function body() : BlogPost\Body
    {
        return $this->body;
    }
}
