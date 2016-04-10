<?php

namespace BlogPost;

class Title
{
    /** @var string */
    private $text;

    public static function fromString(string $title) : Title
    {
        return new static($title);
    }

    public function __toString() : string
    {
        return $this->text;
    }

    private function __construct(string $text)
    {
        $this->text = $text;
    }
}
