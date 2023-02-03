<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiTranslation extends Model
{
    use HasFactory;

    public static function getTranslationById($translationId) {
        return KanjiTranslation::where('id', $translationId)->first();
    }
}
