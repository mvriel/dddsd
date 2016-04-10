<?php

class BlogPosts implements \IteratorAggregate
{
    private $posts = [];

    public function __construct(array $posts = [])
    {
        $this->posts = $posts;
    }

    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->posts);
    }
}
