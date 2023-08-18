<?php

namespace App\Livewire;

use Livewire\Attributes\Js;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Todos extends Component
{
    public $todo = '';
    public $todos = [
        'First Todo',
        'Second Todo'
    ];

    public function addTodo()
    {
        $this->todos[] = $this->todo;

        $this->todo = '';
    }
    
    #[Js]
    public function alert()
    {
        return <<<'JS'
            alert('Alert Clicked')
        JS;
    }

    #[Layout('components.layouts.app', ['title' => 'Todos'])]
    public function render()
    {
        return view('livewire.todos');
    }
}
