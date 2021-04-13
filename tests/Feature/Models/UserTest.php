<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\User;

class UserTest extends TestCase
{
    use RefreshDatabase;// Hace las migraciones
    
    public function test_ej()
    {
        User::factory()->create([
            'email' => 'i@ima.com'
        ]);
        
        $this->assertDatabaseHas('users',[
            'email' => 'i@ima.com'
        ]);
        
        $this->assertDatabaseMissing('users',[
            'email' => 'i@noesto.com'
        ]);

    }
}
