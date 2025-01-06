<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manga;

class MangaSeeder extends Seeder
{
    public function run()
    {
        Manga::factory(5) // Create 5 manga
            ->hasChapters(3) // Each manga has 3 chapters
            ->create();
    }
}
