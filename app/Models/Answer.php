<?php

namespace App\Models;

use App\Models\Enums\RenderType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer',
        'is_correct',
        'render_type',
    ];

    protected $casts = [
        'render_type' => RenderType::class,
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
