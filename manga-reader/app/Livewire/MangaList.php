<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Manga;

class MangaList extends Component
{
    public function render()
    {
        $mangas = Manga::with('chapters')->paginate(10); // Paginate with 10 items per page
        return view('livewire.manga-list', compact('mangas'));
    }
}
