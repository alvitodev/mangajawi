<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\ChapterController;
use App\Livewire\MangaList;
use App\Livewire\MangaDetail;

//return welcome
Route::get('/', function () {
    return view('welcome');
});

//return manga
Route::get('/mangas', [MangaController::class, 'index'])->name('mangas.index');
Route::get('/mangas/{manga}', [MangaController::class, 'show'])->name('mangas.show');
Route::get('/mangas', MangaList::class)->name('mangas.index');
Route::get('/mangas/{manga}', MangaDetail::class)->name('mangas.show');
Route::get('/mangas/{manga}/chapters/{chapter}', [ChapterController::class, 'show'])->name('chapters.show');








