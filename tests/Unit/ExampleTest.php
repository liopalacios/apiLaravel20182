<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

         $response = $this->json('POST', '/api/login', [
                    'email' => 'demo@demo.com',
                    'password' => 'secret'
                ]);

                $response->assertStatus(200)->assertJsonStructure([
                    'success' => ['token']
                ]);
    }
}
