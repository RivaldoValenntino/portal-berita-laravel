<?php

use App\Livewire\Components\SearchList;
use App\Livewire\HomePage;
use App\Livewire\SingleNews;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class)->name('home');
Route::get('/search', SearchList::class)->name('search');
Route::get('/news/{slug}', SingleNews::class)->name('news.show');
