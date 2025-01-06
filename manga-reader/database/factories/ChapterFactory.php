<?php

namespace Database\Factories;

use App\Models\Chapter;
use App\Models\Manga;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    protected $model = Chapter::class;

    public function definition()
    {
        return [
            'manga_id' => Manga::factory(),  // Creates a random Manga
            'chapter_number' => $this->faker->numberBetween(1, 100),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph()
        ];
    }
}
