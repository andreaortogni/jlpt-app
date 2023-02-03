<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use stdClass;

class Kanji extends Model
{
    use HasFactory;

    public static function getKanjiListByLevel($levelId) {
        return Kanji::where('level_id', $levelId)->get();
    }

    public static function getKanjiListByLevelWithTranslations($levelId) {
        $kanjiList = Kanji::getKanjiListByLevel($levelId);
        $kanjiList = Kanji::addTranslationsToKanjiList($kanjiList);
        return $kanjiList;
    }

    private static function addTranslationsToKanjiList($kanjiList) {
        $kanjiListWithTranslation = [];

        foreach ($kanjiList as $kanji) {
            $kanjiWithTranslation = new stdClass();
            $kanjiWithTranslation->kanji = $kanji;
            $kanjiWithTranslation->translations = Kanji::getKanjiTranslation($kanji);

            array_push($kanjiListWithTranslation, $kanjiWithTranslation);
        }

        return $kanjiListWithTranslation;
    }

    private static function getKanjiTranslation($kanji) {
        $relations = KanjiTranslationRelation::getTranslationsByKanji($kanji->id);
        $translations = [];

        foreach ($relations as $relation) {
            array_push($translations, KanjiTranslation::getTranslationById($relation->translation_id));
        }

        return $translations;
    }
}
