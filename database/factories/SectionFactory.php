<?php

namespace Database\Factories;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'class_id' => Classes::factory()->create()->id,
            'name' => $this->faker->name,
        ];
    }
}
