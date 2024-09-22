<?php

namespace App\Livewire\Components;

use App\Models\Post;
use Livewire\Component;

class ArticleSlider extends Component
{
    public function render()
    {
        $entertaiments = Post::whereHas('category', function ($query) {
            $query->where('name', 'Entertaiment');
        })->latest()->get();
        return view('livewire.components.article-slider', compact('entertaiments'));
    }
}
