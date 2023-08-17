<?php

namespace App\Livewire;

use App\Livewire\Forms\CreatePostForm;
use App\Models\Posts;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreatePost extends Component
{
    public CreatePostForm $postData;

    #[Computed()]
    public function users()
    {
        return User::get()->pluck('name', 'id');
    }

    public function savePost()
    {
        $this->validate();
        
        Posts::create([
            'user_id' => $this->postData->userId,
            'title' => $this->postData->title,
            'description' => $this->postData->description
        ]);

        $this->postData->resetForm();

        $this->dispatch('createPostSuccessListener', message: 'Post created successfully.!');

        $this->redirect(route('posts.index'));
    }
   
    #[Layout('components.layouts.app', ['title' => 'Create Post'])]
    public function render()
    {
        return view('livewire.create-post');
    }
}
