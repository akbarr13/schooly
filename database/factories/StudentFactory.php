<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $gender = ['pria', 'wanita'];

        return [
            'name' => fake()->firstName(),
            'major_id' => mt_rand(1, 4),
            'gender' => $gender[mt_rand(0, 1)],
        ];
    }
}
