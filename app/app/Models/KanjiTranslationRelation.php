<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiTranslationRelation extends Model
{
    use HasFactory;

    public static function getTranslationsByKanji($kanjiId) {
        return KanjiTranslationRelation::where('kanji_id', $kanjiId)->get();
    }
}
