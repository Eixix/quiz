<?php

namespace App\Models;

use App\Models\Enums\QuestionType;
use App\Models\Enums\RenderType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'type',
        'render_type',
    ];

    protected $casts = [
        'type' => QuestionType::class,
        'redner_type' => RenderType::class,
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function answers()
    {
        return $this->hasMany(Answers::class);
    }
}
