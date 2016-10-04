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

}
