<div class="my-8">
    <h1 class="text-4xl font-bold mb-6 text-gray-800">Manga List</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($mangas as $manga)
            <div class="bg-white p-4 rounded shadow hover:shadow-lg transition-shadow duration-200">
                <a href="{{ route('mangas.show', $manga) }}">
                    <img src="{{ $manga->cover_image }}" alt="{{ $manga->title }}" class="w-full h-64 object-cover rounded mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $manga->title }}</h2>
                </a>
                <p class="text-gray-700">{{ Str::limit($manga->description, 100) }}</p>
            </div>
        @endforeach
    </div>
    <div class="mt-6">
        {{ $mangas->links() }} <!-- This will render the pagination links -->
    </div>
</div>
