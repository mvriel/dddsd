<?php
namespace BlogPost\Comment;

final class BodyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_create_a_body_for_a_blog_post_from_a_string()
    {
        $bodyString = 'body';

        $body = Body::fromString($bodyString);

        $this->assertSame($bodyString, (string)$body);
    }
}
