<?php

namespace App\Models\Enums;

enum QuestionType: string
{
    use EnumToArray;

    case MultipleChoice = 'multiple_choice';
    case FreeText = 'free_text';
}
