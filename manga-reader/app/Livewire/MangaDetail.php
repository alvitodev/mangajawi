<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Manga;

class MangaDetail extends Component
{
    public $manga;
    public $chapter;

    public function mount(Manga $manga){
        $this->manga = $manga;
        $this->chapter = $manga->chapters()->orderBy('chapter_number', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.manga-detail');
    }
}
