<?php

namespace Database\Factories;

use App\Models\Prodi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prodi>
 */
class ProdiFactory extends Factory
{
    protected $model = Prodi::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $prodiList = [
            'Sistem Informasi',
            'Teknik Industri',
            'Teknik Informatika',
            'Ilmu Komputer',
            'Teknik Elektro',
        ];
        return [
            'kd_prodi' => fake()->unique()->numerify('P-###'),
            'nama_prodi' => fake()->unique()->randomElement($prodiList),
        ];
    }
}
