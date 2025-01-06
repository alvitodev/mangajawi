<div class="my-8">
    <h1 class="text-4xl font-bold mb-6 text-gray-800">{{ $manga->title }}</h1>
    <div class="flex flex-col md:flex-row mb-8">
        <img src="{{ $manga->cover_image }}" alt="{{ $manga->title }}" class="w-full md:w-48 h-auto md:h-64 object-cover rounded mb-4 md:mb-0 md:mr-8">
        <div>
            <p class="text-gray-700 leading-relaxed">{{ $manga->description }}</p>
        </div>
    </div>

    <h2 class="text-3xl font-semibold mb-4 text-gray-800">Chapters</h2>
    <div class="space-y-4">
        @foreach ($chapter as $chapter)
            <div class="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow duration-200">
                <a href="{{ route('chapters.show', [$manga, $chapter]) }}" class="text-xl font-semibold text-blue-600 hover:text-blue-800">
                    Chapter {{ $chapter->chapter_number }}: {{ $chapter->title }}
                </a>
            </div>
        @endforeach
    </div>
</div>
