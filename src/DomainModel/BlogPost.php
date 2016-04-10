<?php

class BlogPost
{
    /** @var BlogPost\Title */
    private $title;

    /** @var BlogPost\Body */
    private $body;

    /** @var BlogPost\Comments */
    private $comments;

    public function __construct(BlogPost\Title $title, BlogPost\Body $body, BlogPost\Comments $comments = null)
    {
        $this->title = $title;
        $this->body = $body;
        $this->comments = $comments ?: new BlogPost\Comments();
    }

    public function title() : BlogPost\Title
    {
        return $this->title;
    }

    public function body() : BlogPost\Body
    {
        return $this->body;
    }

    public function comments() : BlogPost\Comments
    {
        return $this->comments;
    }
}
