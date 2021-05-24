<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CodenamesTest extends TestCase
{

    public function testMainRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200)->assertSee("CodeNames As A Service")
            ->assertSee("Welcome");
    }
}
