<?php

namespace Tests\Feature;

use App\Http\Livewire\ShowCodename;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;

class ShowCodenameTest extends TestCase
{
    public function testRandomName()
    {
        Http::shouldReceive('get->json')->twice()
            ->andReturn(['color_name' => "foo baz"], ['hop' => "bar boo foo"]);
        Livewire::test(ShowCodename::class)->assertSee("foo-bar");
    }

    public function testClickButton()
    {
        Http::shouldReceive('get->json')->andReturn(
            ['color_name' => "foo baz"],
            ['hop' => "bar boo foo"],
            ['color_name' => "foo2 baz"],
            ['hop' => "bar2 boo foo"],
            ['color_name' => "foo3 baz"],
            ['hop' => "bar3 boo foo"],
        );
        Livewire::test(ShowCodename::class)->call("getCodeName")->assertSee("foo3-bar3");
    }
}
