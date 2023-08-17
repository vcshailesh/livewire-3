<?php

namespace App\Livewire;

use App\Models\Posts as ModelsPosts;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Posts extends Component
{
    public $selected;
    
    public function mount()
    {
        $this->selected = $this->posts()->first();
    }

    #[Computed()]
    public function posts()
    {
        return ModelsPosts::with('user')->orderBy('id', 'DESC')->get();
    }

    public function selectPost(ModelsPosts $post)
    {          
        $this->selected = $post;
    }

    #[Layout('components.layouts.app', ['title' => 'Posts'])]
    public function render()
    {
        return view('livewire.posts');
    }
}
