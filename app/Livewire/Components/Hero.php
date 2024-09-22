<?php

namespace App\Livewire\Components;

use App\Models\Post;
use Livewire\Component;

class Hero extends Component
{
    public function render()
    {

        $latestMetropolitan = Post::whereHas('category', function ($query) {
            $query->where('name', 'Metropolitan');
        })
            ->latest()
            ->first();

        $metropolitans = Post::whereHas('category', function ($query) {
            $query->where('name', 'Metropolitan');
        })
            ->where('id', '!=', $latestMetropolitan->id)
            ->latest()
            ->take(5)
            ->get();

        return view('livewire.components.hero', compact('metropolitans', 'latestMetropolitan'));
    }
}
