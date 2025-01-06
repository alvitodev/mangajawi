<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\ChapterController;
use App\Livewire\MangaList;
use App\Livewire\MangaDetail;

Route::get('/', MangaList::class)->name('mangas.index');
Route::get('/mangas/{manga}', MangaDetail::class)->name('mangas.show');
Route::get('/mangas/{manga}/chapters/{chapter}', [ChapterController::class, 'show'])->name('chapters.show');








