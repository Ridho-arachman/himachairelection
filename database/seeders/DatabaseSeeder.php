<?php

namespace Database\Seeders;

use App\Filament\Widgets\Vote;
use App\Models\Kandidat;
use App\Models\Prodi;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProdiSeeder::class,
            UserSeeder::class,
            KandidatSeeder::class,
            VoteSeeder::class
        ]);
    }
}
