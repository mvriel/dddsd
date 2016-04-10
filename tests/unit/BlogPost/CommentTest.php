<?php

namespace BlogPost;

final class CommentTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_create_a_comment_with_body_from_string()
    {
        $body = 'body';

        $comment = Comment::fromString($body);

        $this->assertSame($body, (string)$comment->body());
    }
}
