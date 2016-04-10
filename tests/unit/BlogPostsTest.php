<?php

final class BlogPostsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_contain_a_series_of_posts()
    {
        $posts = [ new BlogPost(BlogPost\Title::fromString('title'), BlogPost\Body::fromString('body')) ];

        $postsCollection = new BlogPosts($posts);

        $this->assertSame($posts, iterator_to_array($postsCollection));
    }
}
