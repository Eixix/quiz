<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Enums\QuestionType;
use App\Models\Enums\RenderType;
use App\Models\Question;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::all()->each(function (Question $question) {
            if ($question->type == QuestionType::MultipleChoice) {
                Answer::factory()->count(1)->create(['question_id' => $question->id, 'is_correct' => true]);
                Answer::factory()->count(3)->create(['question_id' => $question->id]);
            } elseif ($question->type == QuestionType::FreeText) {
                Answer::factory()->count(1)->create(['question_id' => $question->id, 'is_correct' => true, 'render_type' => RenderType::Text]);
            }
        });
    }
}
