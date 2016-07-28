<?php

namespace Blogger\BlogBundle\Tests\Entity;

use Blogger\BlogBundle\Entity\Blog;

class BlogTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider slugifyDataProvider
     * @param $expected
     * @param $actual
     */
    public function testSlugify($expected, $actual)
    {
        $blog = new Blog();

        $this->assertEquals($expected, $blog->slugify($actual));
    }

    public function testSetSlug()
    {
        $blog = new Blog();

        $blog->setSlug('Symfony2 Blog');
        $this->assertEquals('symfony2-blog', $blog->getSlug());
    }

    public function testSetTitle()
    {
        $blog = new Blog();

        $blog->setTitle('Hello World');
        $this->assertEquals('hello-world', $blog->getSlug());
    }

    public function slugifyDataProvider()
    {
        return [
            ['hello-world', 'Hello World'],
            ['a-day-with-symfony2', 'A Day With Symfony2'],
        ];
    }
}