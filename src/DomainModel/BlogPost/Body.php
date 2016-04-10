<?php

namespace BlogPost;

class Body
{
    /** @var string */
    private $text;

    public static function fromString(string $body) : Body
    {
        return new static($body);
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
