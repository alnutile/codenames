<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CodenamesApiControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testOk()
    {
        $response = $this->json("GET", '/api/codenames');

        $response->assertStatus(200)->assertJsonStructure(['data']);
    }
}
