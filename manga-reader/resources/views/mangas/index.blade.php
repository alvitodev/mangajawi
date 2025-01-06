@extends('components.layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">Manga List</h2>
        <a href="{{ url('/mangas/1') }}"
           class="mt-6 inline-block rounded-md bg-gradient-to-r from-[#FF2D20] to-[#FF5733] px-6 py-3 text-white text-sm font-semibold shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl hover:from-[#FF5733] hover:to-[#FF2D20] focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20]">
            Go to Mangas
        </a>
        @livewire('manga-list')
    </div>
@endsection
