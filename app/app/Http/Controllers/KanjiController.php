<?php

namespace App\Http\Controllers;

use App\Models\Kanji;
use App\Models\Level;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KanjiController extends Controller {

    public function create(Request $request) {
        $levelId = $request->route('level_id');

        $level = Level::getLevelbyId($levelId);
        $kanjiList = Kanji::getKanjiListByLevelWithTranslations($levelId);

        return Inertia::render('Kanji', [
            'level' => $level,
            'kanjiList' => $kanjiList
        ]);
    }
}