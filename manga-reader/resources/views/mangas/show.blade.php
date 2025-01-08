@extends('components.layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">{{ $manga->title }}</h2>
        @livewire('manga-detail', ['manga' => $manga])

        <h3 class="text-2xl font-bold mt-6">Ratings and Reviews</h3>
        <div class="mb-4">
            @foreach($ratings as $rating)
                <div class="border p-4 mb-2">
                    <strong>User ID: {{ $rating->user_id }}</strong>
                    <p>Rating: {{ $rating->rating }}</p>
                    <p>Review: {{ $rating->review }}</p>
                </div>
            @endforeach
        </div>

        <h3 class="text-2xl font-bold mt-6">Submit Your Review</h3>
        <form action="{{ route('manga.submitReview', $manga->id) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="rating" class="block text-lg font-medium">Rating (1-5):</label>
                <input type="number" id="rating" name="rating" class="w-full p-2 border rounded" min="1" max="5" required>
            </div>
            <div class="mb-4">
                <label for="review" class="block text-lg font-medium">Review:</label>
                <textarea id="review" name="review" class="w-full p-2 border rounded" rows="4" required></textarea>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit Review</button>
            </div>
        </form>
    </div>
@endsection
