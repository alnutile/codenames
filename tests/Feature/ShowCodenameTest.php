<?php

namespace Tests\Feature;

use App\Clients\GeneratorFacade;
use App\Clients\GeneratorFake;
use App\Clients\GenericGenerator;
use App\Clients\Haikunator;
use App\Http\Livewire\ShowCodename;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\App;
use Mockery;
use Mockery\MockInterface;

class ShowCodenameTest extends TestCase
{

    public function testRandomName()
    {
        $this->instance(
            "generator",
            Mockery::mock(GenericGenerator::class, function (MockInterface $mock) {
                $mock->shouldReceive('get')->once()->andReturn("foo-mocked");
            })
        );

        Livewire::test(ShowCodename::class)->assertSee("foo-mocked");
    }

    public function testClickButton()
    {

        $this->instance(
            "generator",
            Mockery::mock(GenericGenerator::class, function (MockInterface $mock) {
                $mock->shouldReceive('get')->times(3)->andReturn("foo-mocked");
            })
        );
        Livewire::test(ShowCodename::class)->call("getCodeName")->assertSee("foo-mocked");
    }
}
