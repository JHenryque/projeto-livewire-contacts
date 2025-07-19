<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class MainComponent extends Component
{
    #[Title('livewire contacts')]

    public function render()
    {
        return view('livewire.main-component');
    }
}
