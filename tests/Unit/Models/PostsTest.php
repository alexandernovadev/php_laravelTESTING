<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Post;

class PostsTest extends TestCase
{
    public function test_set_name_in_lowercase()
    {
        $post = new Post;
        $post->name = 'Proyecto En PHP';

        // Aserciones de igual
        $this->assertEquals('proyecto en php',  $post->name);
    }

    public function test_get_slug()
    {
        $post = new Post;
        $post->name = 'Proyecto En PHP';

        // Aserciones de igual
        $this->assertEquals('proyecto-en-php',  $post->slug);
    }

    // it should return a url with slug
    public function test_get_href()
    {
        $post = new Post;
        $post->name = 'Proyecto En PHP';

        // Aserciones de igual
        $this->assertEquals('blog/proyecto-en-php',  $post->href());
    }
}
