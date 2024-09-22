<?php

namespace App\Livewire\Components;

use App\Models\Post;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class SearchList extends Component
{
    public $title;
    public $category;
    public $tag;
    public $titlePage;

    protected $queryString = ['title', 'category', 'tag'];

    public function mount()
    {
        $this->title = request()->query('title', $this->title);
        $this->category = request()->query('category', $this->category);
        $this->tag = request()->query('tag', $this->tag);
        $this->setTitle();
    }

    public function updatingTitle($value)
    {
        $this->title = $this->setTitle();
    }

    public function render()
    {
        $posts = Post::search([
            'title' => $this->title,
            'category' => $this->category,
            'tag' => $this->tag,
        ])->get();

        $titlePage = $this->setTitle();

        return view('livewire.components.search-list', compact('posts', 'titlePage'))
            ->layoutData(['title' => $titlePage]);
    }

    protected function setTitle()
    {
        $baseTitle = 'Search Results For: ';
        $titles = array_filter([$this->title, $this->category, $this->tag]);

        if (!empty($titles)) {
            if (count($titles) > 1) {
                $lastTitle = array_pop($titles);
                return $baseTitle . implode(', ', $titles) . ' in ' . $lastTitle;
            }

            return $baseTitle . implode('', $titles);
        }

        return 'Search Results';
    }
}
