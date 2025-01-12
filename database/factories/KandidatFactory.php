<?php

namespace Database\Factories;

use App\Models\Kandidat;
use App\Models\Prodi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kandidat>
 */
class KandidatFactory extends Factory
{
    protected $model = Kandidat::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nim_kandidat" => fake()->unique()->randomNumber(10),
            'kd_prodi' => Prodi::inRandomOrder()->first()->kd_prodi,
            "nama_kandidat" => fake()->name(),
            "foto" => fake()->imageUrl(),
            "visi_misi" => fake()->text(),
        ];
    }
}
