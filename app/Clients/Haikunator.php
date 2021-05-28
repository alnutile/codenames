<?php

namespace App\Clients;

use Atrox\Haikunator as HaikunatorLibrary;

class Haikunator implements CodenameGeneratorInterface
{

    public function get()
    {
        return HaikunatorLibrary::haikunate(["tokenLength" => 0]);
    }
}
