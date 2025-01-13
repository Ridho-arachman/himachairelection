<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vote;
use App\Models\Kandidat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    protected $model = Vote::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => User::whereNotIn('id', Vote::pluck('id_user'))->inRandomOrder()->first()->id, // Ambil id_user acak dari tabel users
            'nim_kandidat' => Kandidat::inRandomOrder()->first()->nim_kandidat,
        ];
    }
}
