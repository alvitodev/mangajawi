<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller
{
    public function index(){
        $query = request('search'); // Get the search query from the request
        $genre = request('genre'); // Get the genre from the request
        $mangas = Manga::when($query, function($queryBuilder) use ($query) {
            return $queryBuilder->where('title', 'like', "%{$query}%");
        })->when($genre, function($queryBuilder) use ($genre) {
            return $queryBuilder->where('genre', $genre); // Filter by genre
        })->paginate(10); // Paginate with 10 items per page
        return view('mangas.index', compact('mangas'));
    }

    public function storeRating(Request $request, Manga $manga)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'nullable|string',
        ]);

        $manga->ratings()->create([
            'user_id' => 0, // Default user ID for guest users
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }

    public function show(Manga $manga)
    {
        $chapters = $manga->chapters()->orderBy('chapter_number', 'asc')->get();
        $ratings = $manga->ratings()->with('user')->get(); // Retrieve ratings for the manga
        return view('mangas.show', compact('manga', 'chapters', 'ratings'));
    }
}
