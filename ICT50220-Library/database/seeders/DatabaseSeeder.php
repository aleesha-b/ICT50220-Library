<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ItemStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            LanguageSeeder::class,
            CountrySeeder::class,
            FormatSeeder::class,
            GenreSeeder::class,
            PublisherSeeder::class,
            ItemStatus::class,
            AuthorSeeder::class,
            BookSeeder::class,
        ]);
        /* sail artisan migrate:fresh --seed */
        /* sail artisan migrate */
        /* sail artisan db:seed */
    }
}
