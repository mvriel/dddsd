<?php

namespace BlogPost;

final class CommentsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_contain_a_series_of_comments()
    {
        $comments = [ Comment::fromString('abc') ];

        $commentsCollection = new Comments($comments);

        $this->assertSame($comments, iterator_to_array($commentsCollection));
    }
}
