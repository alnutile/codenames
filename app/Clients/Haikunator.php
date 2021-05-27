<?php

namespace App\Clients;

use Atrox\Haikunator as HaikunatorLibrary;

class Haikunator
{

    public function get()
    {
        return HaikunatorLibrary::haikunate(["tokenLength" => 0]);
    }
}
