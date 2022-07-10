<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::all()->each(function (Quiz $quiz) {
            Question::factory()->count(4)->create(['quiz_id' => $quiz->id]);
        });
    }
}
