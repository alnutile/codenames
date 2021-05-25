<?php

namespace App\Clients;

use Illuminate\Support\Arr;
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
        ],
        [
            "uri" => "/dessert/random_dessert",
            "key" => "variety"
        ]
    ];


    public function get()
    {
        $words = [];
        $groups = Arr::random($this->groupings, 2);
        foreach ($groups as $group) {
            $word = $this->request($group['uri']);
            array_push($words, $this->returnFirstWord($word->json()[$group['key']]));
        }
        return Str::lower(sprintf("%s-%s", $words[0], $words[1]));
    }

    public function setGroupings(array $items)
    {
        $this->groupings = $items;
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
