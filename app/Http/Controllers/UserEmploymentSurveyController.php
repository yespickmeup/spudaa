<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserEmploymentSurvey;

class UserEmploymentSurveyController extends Controller {

    public function getSurvey($user_id) {
        $survey = UserEmploymentSurvey::where('user_id', '=', $user_id)->first();
        return response()->json(['survey' => $survey]);
    }

    public function postUpdateSurvey(Request $request) {

        $employmentSurvey = $request->get('survey');
        $user_id = $employmentSurvey['user_id'];
        
        $UserEmploymentSurvey = UserEmploymentSurvey::where('user_id', '=',$user_id )->first();

        
        $UserEmploymentSurvey->work_status = $employmentSurvey['work_status'];
        $UserEmploymentSurvey->work_status_others = $employmentSurvey['work_status_others'];
        $UserEmploymentSurvey->sat_challenge = $employmentSurvey['sat_challenge'];
        $UserEmploymentSurvey->sat_job_security = $employmentSurvey['sat_job_security'];
        $UserEmploymentSurvey->sat_salary = $employmentSurvey['sat_salary'];
        $UserEmploymentSurvey->sat_potential = $employmentSurvey['sat_potential'];
        $UserEmploymentSurvey->sat_support = $employmentSurvey['sat_support'];
        $UserEmploymentSurvey->sat_quality_of_service = $employmentSurvey['sat_quality_of_service'];
        $UserEmploymentSurvey->sat_org_ethics = $employmentSurvey['sat_org_ethics'];
        $UserEmploymentSurvey->job_course_relation = $employmentSurvey['job_course_relation'];
        $UserEmploymentSurvey->seek_relavant_job = $employmentSurvey['seek_relavant_job'];
        $UserEmploymentSurvey->unemployment_reason = $employmentSurvey['unemployment_reason'];
        $UserEmploymentSurvey->seeking_employment = $employmentSurvey['seeking_employment'];
        $UserEmploymentSurvey->status = 1;
        

        if ($UserEmploymentSurvey->save()) {
            return response()->json(['message' => 'successfully added', 'survey' => $UserEmploymentSurvey]);
        }
        return response()->json(['message' => 'error', 'data' => $UserEmploymentSurvey]);
    }

}
