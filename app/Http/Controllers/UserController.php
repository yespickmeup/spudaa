<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\ActivationService;

class UserController extends Controller {

    protected $activationService;

    public function __construct(ActivationService $activationService) {


        $this->activationService = $activationService;
    }

    public function postSignup(Request $request) {

        $data = $request->json()->all();
        $token = $request->get('_token');

        $userInput = $request->get('user');
        $employmentSurvey = $request->get('employment_survey');
        $educationOutcomeExperiences = $request->get('education_outcome_experiences');
        $educationOutcomeStandards =    $request->get('education_outcome_standards');
        $activityInvolvements =    $request->get('activity_involvements');
        
        
        $user = new User();
        $user->name = $userInput['first_name'] . ' ' . $userInput['middle_name'] . ' ' . $userInput['last_name'];
        $user->email = $userInput['email'];
        $user->password = bcrypt($userInput['password']);
        $user->activated = 0;
        $user->approved = 0;
        $user->student_no = $userInput['student_no'];
        $user->first_name = $userInput['first_name'];
        $user->middle_name = $userInput['middle_name'];
        $user->last_name = $userInput['last_name'];
        $user->suffix_name = $userInput['suffix_name'];
        $user->civil_status = $userInput['civil_status'];
        $user->gender = $userInput['gender'];
        $user->date_of_birth = $userInput['date_of_birth'];
        $user->blood_type = $userInput['blood_type'];
        $user->country = $userInput['country'];
        $user->province = $userInput['province'];
        $user->city = $userInput['city'];
        $user->zip_code = $userInput['zip_code'];
        $user->home_address = $userInput['home_address'];
        $user->present_address = $userInput['present_address'];
        $user->landline_no = $userInput['landline_no'];
        $user->cellphone_no = $userInput['cellphone_no'];
        $user->level = $userInput['level'];
        $user->course = $userInput['course'];
        $user->father = $userInput['father'];
        $user->father_is_paulinian = $userInput['father_is_paulinian'];
        $user->father_occupation = $userInput['father_occupation'];
        $user->father_office_address = $userInput['father_office_address'];
        $user->mother = $userInput['mother'];
        $user->mother_is_paulinian = $userInput['mother_is_paulinian'];
        $user->mother_occupation = $userInput['mother_occupation'];
        $user->mother_office_address = $userInput['mother_office_address'];



//
//        if ($user->save()) {
//            $this->activationService->sendActivationMail($user);
//            return response()->json([
//                        'all' => $data,
//                        'token' => $token,
//                        'user' => $user,
//                        'message' => 'successfully added!'
//                            ], 200);
//        }


        return response()->json([
                    'all' => $data,
                    'token' => $token,
                    'user' => $user,
                    'employmentSurvey' => $employmentSurvey,
                    'educationOutcomeExperiences' => $educationOutcomeExperiences,
                    'educationOutcomeStandards' => $educationOutcomeStandards,
                    'activityInvolvements' => $activityInvolvements,
                    'message' => 'successfully added!'
                        ], 200);
    }

    public function getCheckEmailIfExists($email) {
        $user = User::where('email', '=', $email)->first();
        return response()->json(['user' => $user]);
    }

}
