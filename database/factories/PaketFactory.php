<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paket>
 */
class PaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1, 5),
            'price' => fake()->randomNumber(5, true),
            'jumlah_tamu' => fake()->numberBetween(1, 100),
            'jumlah_foto' => fake()->numberBetween(1, 100),
            'jumlah_vidio' => fake()->numberBetween(1, 100),
            'masa_aktif' => fake()->numberBetween(1, 365),
        ];
    }
}
