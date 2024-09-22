<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class SingleNews extends Component
{
    public $news;

    public function mount($slug)
    {
        $this->news = Post::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.single-news')->title($this->news->title);
    }
}
