<?php

final class BlogPostTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_have_a_title_body_and_comments()
    {
        $title = BlogPost\Title::fromString('Title');
        $body = BlogPost\Body::fromString('body');
        $comments = new BlogPost\Comments();

        $blogPost = new BlogPost($title, $body, $comments);

        $this->assertSame($title, $blogPost->title());
        $this->assertSame($body, $blogPost->body());
        $this->assertSame($comments, $blogPost->comments());
    }

    /**
     * @test
     */
    public function it_should_be_possible_to_omit_comments_when_creating_a_post()
    {
        $title = BlogPost\Title::fromString('Title');
        $body = BlogPost\Body::fromString('body');

        $blogPost = new BlogPost($title, $body);

        $this->assertSame($title, $blogPost->title());
        $this->assertSame($body, $blogPost->body());
        $this->assertInstanceOf(BlogPost\Comments::class, $blogPost->comments());
        $this->assertSame(0, iterator_count($blogPost->comments()));
    }
}
