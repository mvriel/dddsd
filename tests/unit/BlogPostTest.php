<?php

final class BlogPostTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_have_a_title_and_body()
    {
        $title = BlogPost\Title::fromString('Title');
        $body = BlogPost\Body::fromString('body');

        $blogPost = new BlogPost($title, $body);

        $this->assertSame($title, $blogPost->title());
        $this->assertSame($body, $blogPost->body());
    }
}
