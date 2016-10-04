<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Level;

class LevelController extends Controller {

    public function getLevels() {
        $levels = Level::all();

        return response()->json(['levels' => $levels]);
    }

}
