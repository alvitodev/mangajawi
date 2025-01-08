@extends('components.layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Manga List</h2>
        <form action="{{ url('/mangas') }}" method="GET" class="mb-4">
            <input type="text" name="search" placeholder="Search for mangas..." class="border rounded px-4 py-2">
            <select name="genre" class="border rounded px-4 py-2 ml-2">
                <option value="">Select Genre</option>
                <option value="Action">Action</option>
                <option value="Adventure">Adventure</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Romance">Romance</option>
                <option value="Horror">Horror</option>
            </select>
            <button type="submit" class="ml-2 rounded-md bg-blue-500 px-4 py-2 text-white">Search</button>
        </form>
        <a href="{{ url('/mangas/1') }}"
           class="mt-6 inline-block rounded-md bg-gradient-to-r from-[#FF2D20] to-[#FF5733] px-6 py-3 text-white text-sm font-semibold shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl hover:from-[#FF5733] hover:to-[#FF2D20] focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20]">
            Go to Mangas
        </a>
        @livewire('manga-list')

        <div class="mt-4">
            {{ $mangas->links() }} <!-- Add pagination links -->
        </div>
    </div>
@endsection
