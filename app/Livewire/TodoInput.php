<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class TodoInput extends Component
{
    #[Modelable]
    public $value;

    public function render()
    {
        return view('livewire.todo-input');
    }
}
