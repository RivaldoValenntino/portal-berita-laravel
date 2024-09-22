<?php

namespace App\Livewire\Partials;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{
    public $search = '';
    public $category = '';
    public $tag = '';

    protected $queryString = ['search', 'category', 'tag'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
        $this->category = request()->query('category', $this->category);
        $this->tag = request()->query('tag', $this->tag);
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.partials.navbar', compact('categories'));
    }
}
