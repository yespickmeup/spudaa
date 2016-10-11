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

    public function postAddLevel(Request $request) {

        $data = $request->get('level');
        $level = new Level();
        $level->level = $data;
        $level->status = 1;
        if ($level->save()) {
            return response()->json(['message' => 'successfully added', 'level' => $level]);
        }
        return response()->json(['message' => 'error']);
    }

    public function postUpdateLevel(Request $request) {
        $id = $request->get('id');
        $data_level = $request->get('level');

        $myLevel = Level::find($id);
        $myLevel->level = $data_level;

        if ($myLevel->save()) {
            return response()->json(['message' => 'successfully updated'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

    public function postDeleteLevel(Request $request) {
        $id = $request->get('id');
        $myLevel = Level::find($id);

        if ($myLevel->delete()) {
            return response()->json(['message' => 'successfully deleted'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

}
