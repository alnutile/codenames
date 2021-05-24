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
        $this->codename = $this->getCodeName();
        return view('livewire.show-codename');
    }

    public function getCodeName()
    {
        $codename = Arr::random($this->codenames);
        if ($codename != $this->codename && !empty($codename)) {
            return $codename;
        } else {
            $this->getCodeName();
        }
    }
}
