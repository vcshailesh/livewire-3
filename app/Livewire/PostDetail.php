<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class PostDetail extends Component
{
    #[Reactive]
    public Posts $post;

    public function mount()
    {
        sleep(2);
    }

    public function placeholder()
    {
        return view('livewire.placeholder.post-item');
    }

    public function render()
    {
        return view('livewire.post-detail');
    }
}
