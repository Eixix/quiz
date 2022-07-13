<?php

namespace Database\Factories;

use App\Models\Enums\RenderType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    use WithFaker;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'answer' => $this->faker->words(3, true) . '.',
            'is_correct' => $this->faker->boolean(),
            'render_type' => $this->faker->randomElement(RenderType::cases()),
        ];
    }
}
