<?php

namespace App\Http\Controllers;

use App\Clients\CodenameGeneratorInterface;
use Illuminate\Http\Request;

class CodenamesApiController extends Controller
{
    public function __invoke(CodenameGeneratorInterface $codenames)
    {
        return response()->json($codenames->get());
    }
}
