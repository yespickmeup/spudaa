<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;

class CourseController extends Controller {

    public function getCourses() {
        $courses = Course::All();
        return response()->json(['courses' => $courses]);
    }

    public function postAddCourse(Request $request) {
        $data = $request->get('course');
        $course = new Course();
        $course->course = $data;
        $course->level_id = 0;
        $course->year_id = 0;
        $course->status = 1;
        if ($course->save()) {
            return response()->json(['message' => 'successfully added', 'course' => $course]);
        }
        return response()->json(['message' => 'error']);
    }

    public function postUpdateCourse(Request $request) {
        $id = $request->get('id');
        $data_course = $request->get('course');

        $myCourse = Course::find($id);
        $myCourse->course = $data_course;

        if ($myCourse->save()) {
            return response()->json(['message' => 'successfully updated'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

    public function postDeleteCourse(Request $request) {
        $id = $request->get('id');
        $myCourse = Course::find($id);

        if ($myCourse->delete()) {
            return response()->json(['message' => 'successfully deleted'], 200);
        }
        return response()->json(['message' => 'error'], 500);
    }

}
