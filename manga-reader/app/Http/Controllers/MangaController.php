<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller
{
    public function index(){
        $mangas = Manga::paginate(10); // Paginate with 10 items per page
        return view('mangas.index', compact('mangas'));
    }

    public function show(Manga $manga){

        $chapters = $manga->chapters()->orderBy('chapter_number', 'asc')->get();
        return view('mangas.show', compact('manga', 'chapters'));
    }
}
