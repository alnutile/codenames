<?php

namespace App\Clients;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

/**
 * Using https://random-data-api.com/documentation
 */
class RandomWords
{

    protected $base_url = "https://random-data-api.com/api";
    protected $client = null;
    protected $used = [];
    protected $groupings = [
        [
            "uri" => "/color/random_color",
            "key" => "color_name"
        ],
        [
            "uri" => "/beer/random_beer",
            "key" => "hop"
        ],
        [
            "uri" => "/food/random_food",
            "key" => "ingredient"
        ],
        [
            "uri" => "/hipster/random_hipster_stuff",
            "key" => "word"
        ]
    ];


    public function get()
    {
        $word_1 = $this->request("/color/random_color");
        $word_1 = $this->returnFirstWord($word_1->json()['color_name']);

        $word_2 = $this->request("/beer/random_beer");
        $word_2 = $this->returnFirstWord($word_2->json()['hop']);

        return Str::lower(sprintf("%s-%s", $word_1, $word_2));
    }

    protected function request($uri)
    {
        return Http::get(sprintf("%s/%s", $this->base_url, $uri));
    }

    protected function returnFirstWord($string)
    {
        return Str::of($string)->explode(" ")[0];
    }
}
