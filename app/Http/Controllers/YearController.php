<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Year;

class YearController extends Controller {

    public function getYears() {
        $years = Year::all();
        return response()->json(['years' => $years]);
    }

    public function postAddYear(Request $request) {
        $data = $request->get('year');
        $year = new Year();
        $year->year = $data;
        $year->status = 1;
        if ($year->save()) {
            return response()->json(['message' => 'successfully added', 'year' => $year]);
        }
        return response()->json(['message' => 'error']);
    }

    public function postUpdateYear(Request $request) {
        $id = $request->get('id');
        $data_year = $request->get('year');

        $myYear = Year::find($id);
        $myYear->year = $data_year;

        if ($myYear->save()) {
            return response()->json(['message' => 'successfully updated'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

    public function postDeleteYear(Request $request) {
        $id = $request->get('id');
        $myYear = Year::find($id);

        if ($myYear->delete()) {
            return response()->json(['message' => 'successfully deleted'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

}
