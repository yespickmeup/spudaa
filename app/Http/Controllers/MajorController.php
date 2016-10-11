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

    public function postAddMajor(Request $request) {
        $data = $request->get('major');
        $data_level_id = $request->get('level_id');
        $data_year_id = $request->get('year_id');
        $data_course_id = $request->get('course_id');

        $major = new Major();
        $major->major = $data;
        $major->level_id = $data_level_id;
        $major->year_id = $data_year_id;
        $major->course_id = $data_course_id;

        $major->status = 1;


        if ($major->save()) {
            return response()->json(['message' => 'successfully added', 'major' => $major]);
        }
        return response()->json(['message' => 'error']);
    }

    public function postUpdateMajor(Request $request) {
        $id = $request->get('id');
        $data_major = $request->get('major');

        $myMajor = Major::find($id);
        $myMajor->major = $data_major;

        if ($myMajor->save()) {
            return response()->json(['message' => 'successfully updated'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

    public function postDeleteMajor(Request $request) {
        $id = $request->get('id');
        $myMajor = Major::find($id);

        if ($myMajor->delete()) {
            return response()->json(['message' => 'successfully deleted'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

}
