<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    public static function getAllLevels() {
        return Level::get();
    }

    public static function getLevelbyId($levelId) {
        return Level::where('id', $levelId)->first();
    }
}
