<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePosts extends Component
{
    public $title = "Este es el texto de create post";

    public function render()
    {
        return view('livewire.posts.create-posts');
    }
}
