<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Major;

class MajorController extends Controller {

    public function getMajors() {
        $majors = Major::All();
        return response()->json(['majors' => $majors]);
    }

}
