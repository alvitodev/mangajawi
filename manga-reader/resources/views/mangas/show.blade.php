@extends('components.layouts.app')
@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4">{{ $manga->title }}</h2>
        @livewire('manga-detail', ['manga' => $manga])
    </div>
@endsection
