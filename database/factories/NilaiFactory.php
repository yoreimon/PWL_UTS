<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nilai>
 */
class NilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nim' => $this->faker->unique()->numerify('##########'),
            'Proyek' => $this->faker->numberBetween(0, 100),
            'Manajemen_Proyek' => $this->faker->numberBetween(0, 100),
            'Jaringan_Komputer' => $this->faker->numberBetween(0, 100),
            'Kewarganegaraan' => $this->faker->numberBetween(0, 100),
            'PWL' => $this->faker->numberBetween(0, 100),
            'Praktikum_Jarkom' => $this->faker->numberBetween(0, 100),
            'Statkom' => $this->faker->numberBetween(0, 100),
            'Business_Intellegence' => $this->faker->numberBetween(0, 100),
            'ADBO' => $this->faker->numberBetween(0, 100),
        ];
    }
}
