@extends('components\layouts.app')

@section('content')
    <div class="my-8">
        <h1 class="text-3xl font-bold mb-4">{{ $manga->title }} - Chapter {{ $chapter->chapter_number }}</h1>

        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-semibold">{{ $chapter->title }}</h2>
            <div class="mt-4">
                {!! nl2br(e($chapter->content)) !!}
            </div>
        </div>
    </div>
@endsection
