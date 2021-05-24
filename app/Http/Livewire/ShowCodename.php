<?php

namespace App\Http\Livewire;

use Illuminate\Support\Arr;
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
        $this->codename = Arr::random($this->codenames);
        return view('livewire.show-codename');
    }
}
