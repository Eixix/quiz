<?php

namespace Database\Factories;

use App\Models\Enums\QuestionType;
use App\Models\Enums\RenderType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
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
            'question' => $this->faker->words(3, true) . '?',
            'type' => $this->faker->randomElement(QuestionType::cases()),
            'render_type' => $this->faker->randomElement(RenderType::cases()),
        ];
    }
}
