<?php

namespace App\Http\Livewire;

use Facades\App\Clients\RandomWords;
use Illuminate\Support\Str;
use Livewire\Component;

class ShowCodename extends Component
{
    public $random;
    public $codename;

    public $codenames = [
        'foo-bar',
        'baz-foo',
        'boo-foo'
    ];


    public function render()
    {
        $this->codename = $this->getCodeName();
        return view('livewire.show-codename');
    }

    public function getCodeName()
    {
        return RandomWords::get();
    }
}
