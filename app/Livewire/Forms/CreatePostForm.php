<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class CreatePostForm extends Form
{
    #[Rule('required', message: 'This title field is required')]
    public $title;
    #[Rule('required', message: 'This description field is required')]
    public $description;
    #[Rule('required', message: 'This user field is required')]
    public $userId;

    public function resetForm()
    {
        $this->title = '';
        $this->description = '';
        $this->userId = null;
    }
}
