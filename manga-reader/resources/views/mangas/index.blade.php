@extends('components.layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-6">Manga List</h2>
        <form action="{{ url('/mangas') }}" method="GET" class="flex flex-wrap items-center mb-6">
            <input type="text" name="search" placeholder="Search for mangas..." class="border rounded px-4 py-2 mb-2 md:mb-0 md:mr-2 flex-grow">
            <select name="genre" class="border rounded px-4 py-2 mb-2 md:mb-0 md:mr-2">
                <option value="">Select Genre</option>
                <option value="Action">Action</option>
                <option value="Adventure">Adventure</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Romance">Romance</option>
                <option value="Horror">Horror</option>
            </select>
            <button type="submit" class="rounded-md bg-blue-500 px-4 py-2 text-white">Search</button>
        </form>
        <a href="{{ url('/mangas/1') }}"
           class="mt-6 inline-block rounded-md bg-gradient-to-r from-[#FF2D20] to-[#FF5733] px-6 py-3 text-white text-sm font-semibold shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl hover:from-[#FF5733] hover:to-[#FF2D20] focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20]">
            Go to Mangas
        </a>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @livewire('manga-list')
        </div>
        <div class="mt-6">
            {{ $mangas->links() }} <!-- Add pagination links -->
        </div>
    </div>
@endsection
