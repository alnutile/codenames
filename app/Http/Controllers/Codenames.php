<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Codenames extends Controller
{
    public function __invoke()
    {
        return view("welcome", [
            'random' => random_int(1, 1000)
        ]);
    }
}
