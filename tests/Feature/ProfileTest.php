<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProfileTest extends TestCase
{
    public function testUpload()
    {
        // Carga una image fake
        Storage::fake('local');

        $response = $this->post('profile', [
            'photo' => $photo = UploadedFile::fake()->image('photo.png')
        ]);
 
        Storage::disk('local')->assertExists("profiles/{$photo->hashName()}");
 
        $response->assertRedirect('profile');
    }

    // it should error porque there not file
    public function test_exist_file()
    {
        $response = $this->post('profile', [
            'photo' => ''
        ]);
        
        // esto vendria a ser un error con session
        $response->assertSessionHasErrors('photo');
    }
}
