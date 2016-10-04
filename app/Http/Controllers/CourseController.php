<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;

class CourseController extends Controller
{
     public function getCourses()
    {
        $courses = Course::All();
        return response()->json(['courses' => $courses]);
    }
}
