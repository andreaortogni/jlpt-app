<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Inertia\Inertia;
use stdClass;

class HomeController extends Controller {
    
    public function create() {
        $levels = Level::getAllLevels();

        return Inertia::render("Welcome", [
            'levels' => $levels
        ]);
    }
}