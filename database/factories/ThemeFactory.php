<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Theme>
 */
class ThemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'link' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque culpa doloremque in, impedit fuga explicabo pariatur eos amet, velit eius adipisci dolores, excepturi eum cum magni. Architecto labore asperiores doloremque.'
        ];
    }
}
