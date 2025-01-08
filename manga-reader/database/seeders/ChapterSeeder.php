<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chapter;
use App\Models\Manga;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Log; // Import the Log facade

class ChapterSeeder extends Seeder
{
    public function run()
    {
        $mangas = Manga::all(); // Get all existing mangas
        $faker = Faker::create();

        foreach ($mangas as $manga) {
            // Generate a random number of chapters for each manga
            $chapterCount = rand(1, 5); // Randomly create between 1 to 5 chapters

            for ($i = 0; $i < $chapterCount; $i++) {
                try {
                    Chapter::factory()->create([
                        'manga_id' => $manga->id, // Associate chapter with existing manga
                        'title' => $faker->sentence(), // Generate a random title
                        'content' => $faker->paragraphs(rand(3, 7), true), // Generate random content
                    ]);
                } catch (\Exception $e) {
                    // Log the error message
                    Log::error('Error creating chapter: ' . $e->getMessage());
                }
            }
        }
    }
}
