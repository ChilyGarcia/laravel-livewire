<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePosts extends Component
{
    public $title;
    
    public function render()
    {
        return view('livewire.posts.create-posts');
    }
}
