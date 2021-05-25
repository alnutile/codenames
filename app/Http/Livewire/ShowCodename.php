<?php

namespace App\Http\Livewire;

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
        $start = FakeComposer::class;
        $end = Str::random(20);
        return sprintf("%s-%s", $start, $end);;
    }
}
