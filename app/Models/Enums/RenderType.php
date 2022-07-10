<?php

namespace App\Models\Enums;

enum RenderType: string
{
    use EnumToArray;

    case Text = 'text';
    case Image = 'image';
}
