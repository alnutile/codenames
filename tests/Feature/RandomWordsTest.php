<?php

namespace Tests\Feature;

use App\Clients\RandomWords;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class RandomWordsTest extends TestCase
{
    public function testTalkToApi()
    {
        //test can get API Client as a facade and get data
        //$mocked = json_decode('{"id":6251,"uid":"a977fc1d-4c2d-41d1-9354-3c48799e8814","hex_value":"#0bce07","color_name":"sky","hsl_value":[219,0.14,0.26],"hsla_value":[321,0.69,0.28,0.2]}', true);

        Http::shouldReceive('get->json')->twice()
            ->andReturn(['color_name' => "foo"], ['hop' => "bar"]);
        $client = App::make(RandomWords::class);

        $results = $client->get();

        $this->assertNotEmpty($results);
        $this->assertEquals($results, "foo-bar");
    }

    public function testDealsWithThreeWords()
    {
        //test can get API Client as a facade and get data
        //$mocked = json_decode('{"id":6251,"uid":"a977fc1d-4c2d-41d1-9354-3c48799e8814","hex_value":"#0bce07","color_name":"sky","hsl_value":[219,0.14,0.26],"hsla_value":[321,0.69,0.28,0.2]}', true);

        Http::shouldReceive('get->json')->twice()
            ->andReturn(['color_name' => "foo baz"], ['hop' => "bar boo foo"]);
        $client = App::make(RandomWords::class);

        $results = $client->get();

        $this->assertNotEmpty($results);
        $this->assertEquals($results, "foo-bar");
    }

    public function testCanUseMoreThanOneService()
    {
        //test can get API Client as a facade and get data
        //$mocked = json_decode('{"id":6251,"uid":"a977fc1d-4c2d-41d1-9354-3c48799e8814","hex_value":"#0bce07","color_name":"sky","hsl_value":[219,0.14,0.26],"hsla_value":[321,0.69,0.28,0.2]}', true);


        Http::shouldReceive('get->json')->twice()
            ->andReturn(['color_name' => "foo baz"], ['hop' => "bar boo foo"]);

        $client = App::make(RandomWords::class);
        $client->setGroupings([
            [
                "uri" => "/color/random_color",
                "key" => "color_name"
            ],
            [
                "uri" => "/beer/random_beer",
                "key" => "hop"
            ]
        ]);

        $results = $client->get();

        $this->assertNotEmpty($results);

        $this->assertEquals($results, "foo-bar");
    }
}
