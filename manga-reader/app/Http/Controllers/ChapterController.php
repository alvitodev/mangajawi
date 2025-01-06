<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;
use App\Models\Chapter;

class ChapterController extends Controller
{
    public function show(Manga $manga, Chapter $chapter){
        return view('chapters.show', compact('manga', 'chapter'));
    }
}
