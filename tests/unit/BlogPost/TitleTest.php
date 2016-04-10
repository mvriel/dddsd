<?php
namespace BlogPost;

final class TitleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_create_a_title_for_a_blog_post_from_a_string()
    {
        $titleString = 'title';

        $title = Title::fromString($titleString);

        $this->assertSame($titleString, (string)$title);
    }
}
