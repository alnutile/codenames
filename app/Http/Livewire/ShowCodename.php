<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowCodename extends Component
{
    public $random;

    public function render()
    {
        return view('livewire.show-codename');
    }
}
