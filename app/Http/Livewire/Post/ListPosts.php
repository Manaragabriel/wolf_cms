<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class ListPosts extends Component
{
    public $number;
    public function render()
    {
        return view('livewire.post.list-posts');
    }
} 
