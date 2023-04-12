<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' => fake()->numerify('ID####'),
            'nama' => fake()->name(),
            'email' => fake()->freeEmail(),
            'jabatan' => fake()->jobTitle(),
            'alamat' => fake()->address(),
            'hp' => fake()->e164PhoneNumber(),
            'tanggal_masuk' => fake()->date('Y_m_d'),
        ];
    }
}