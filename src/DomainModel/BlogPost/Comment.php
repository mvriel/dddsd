<?php

namespace BlogPost;

class Comment
{
    /** @var Comment\Body */
    private $body;

    public static function fromString(string $body) : Comment
    {
        return new static(Comment\Body::fromString($body));
    }

    public function body() : Comment\Body
    {
        return $this->body;
    }

    private function __construct(Comment\Body $body)
    {
        $this->body = $body;
    }
}
