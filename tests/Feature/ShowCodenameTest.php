<?php

namespace Tests\Feature;

use App\Http\Livewire\ShowCodename;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowCodenameTest extends TestCase
{
    public function testRandomName()
    {
        Livewire::test(ShowCodename::class)->assertSee("foo");
    }
}
