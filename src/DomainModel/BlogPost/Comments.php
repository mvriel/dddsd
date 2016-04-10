<?php

namespace BlogPost;

class Comments implements \IteratorAggregate
{
    private $comments = [];

    public function __construct(array $comments = [])
    {
        $this->comments = $comments;
    }

    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->comments);
    }
}
