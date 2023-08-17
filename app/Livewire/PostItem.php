<?php

namespace App\Livewire;

use Livewire\Component;

class PostItem extends Component
{
    public $post;   

    public function placeholder()
    {
        return view('livewire.placeholder.posts');
    }

    public function render()
    {
        return view('livewire.post-item');
    }
}
