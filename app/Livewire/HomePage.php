<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class HomePage extends Component
{
    #[Title('Home')]

    public $latestArticles;
    public $advertisement;

    public function render()
    {
        $international = Post::whereHas('category', function ($query) {
            $query->where('name', 'International');
        })
            ->latest()
            ->take(6)
            ->get();
        return view('livewire.home-page', compact('international'));
    }
}
