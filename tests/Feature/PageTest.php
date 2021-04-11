<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Page extends TestCase
{
 
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // it should show the page About 
    public function testAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
