<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'skill_name'=> $this->faker->name,
            'skill_status'=> $this->faker->randomElement([1,2,3,4,5]),
            'remarks'=> $this->faker->realText(148),
            'experience_years' => $this->faker->randomNumber(2)
        ];
    }
}
