<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\ActivationService;
use App\UserEmploymentSurvey;
use App\UserEducationOutcomeExperience;
use App\UserEducationOutcomeStandard;
use App\UserAlumniMember;
use App\UserAlumniProfessionalService;
use App\UserAlumniPersonalService;
use App\UserSatisfactionSurvey;

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
        $educationOutcomeStandards = $request->get('education_outcome_standards');
        $activityInvolvements = $request->get('activity_involvements');
        $alumni_family_members = $request->get('alumni_family_members');
        $alumni_professional_services = $request->get('alumni_professional_services');
        $alumni_personal_services = $request->get('alumni_personal_services');
        $satisfaction_survey = $request->get('satisfaction_survey');



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
        $user->year = $userInput['year'];
        $user->course = $userInput['course'];
        $user->father = $userInput['father'];
        $user->father_is_paulinian = $userInput['father_is_paulinian'];
        $user->father_occupation = $userInput['father_occupation'];
        $user->father_office_address = $userInput['father_office_address'];
        $user->mother = $userInput['mother'];
        $user->mother_is_paulinian = $userInput['mother_is_paulinian'];
        $user->mother_occupation = $userInput['mother_occupation'];
        $user->mother_office_address = $userInput['mother_office_address'];





        if ($user->save()) {
            $this->activationService->sendActivationMail($user);

            $UserEmploymentSurvey = new UserEmploymentSurvey();
            $UserEmploymentSurvey->user_id = $user->id;
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
            $UserEmploymentSurvey->save();

            $UserEducationOutcomeExperience = new UserEducationOutcomeExperience();
            $UserEducationOutcomeExperience->user_id = $user->id;
            $UserEducationOutcomeExperience->creativity_importance = $educationOutcomeExperiences['creativity_importance'];
            $UserEducationOutcomeExperience->creativity_impact = $educationOutcomeExperiences['creativity_impact'];
            $UserEducationOutcomeExperience->commitment_importance = $educationOutcomeExperiences['commitment_importance'];
            $UserEducationOutcomeExperience->commitment_impact = $educationOutcomeExperiences['commitment_impact'];
            $UserEducationOutcomeExperience->ethics_importance = $educationOutcomeExperiences['ethics_importance'];
            $UserEducationOutcomeExperience->ethics_impact = $educationOutcomeExperiences['ethics_impact'];
            $UserEducationOutcomeExperience->teamwork_importance = $educationOutcomeExperiences['teamwork_importance'];
            $UserEducationOutcomeExperience->teamwork_impact = $educationOutcomeExperiences['teamwork_impact'];
            $UserEducationOutcomeExperience->diversity_importance = $educationOutcomeExperiences['diversity_importance'];
            $UserEducationOutcomeExperience->diversity_impact = $educationOutcomeExperiences['diversity_impact'];
            $UserEducationOutcomeExperience->effective_communication_importance = $educationOutcomeExperiences['effective_communication_importance'];
            $UserEducationOutcomeExperience->effective_communication_impact = $educationOutcomeExperiences['effective_communication_impact'];
            $UserEducationOutcomeExperience->punctuality_importance = $educationOutcomeExperiences['punctuality_importance'];
            $UserEducationOutcomeExperience->punctuality_impact = $educationOutcomeExperiences['punctuality_impact'];
            $UserEducationOutcomeExperience->adaptably_importance = $educationOutcomeExperiences['adaptably_importance'];
            $UserEducationOutcomeExperience->adaptably_impact = $educationOutcomeExperiences['adaptably_impact'];
            $UserEducationOutcomeExperience->status = 1;
            $UserEducationOutcomeExperience->save();

            $UserEducationOutcomeStandard = new UserEducationOutcomeStandard();
            $UserEducationOutcomeStandard->user_id = $user->id;
            $UserEducationOutcomeStandard->nursing_care_importance = $educationOutcomeStandards['nursing_care_importance'];
            $UserEducationOutcomeStandard->nursing_care_impact = $educationOutcomeStandards['nursing_care_impact'];
            $UserEducationOutcomeStandard->management_of_environment_importance = $educationOutcomeStandards['management_of_environment_importance'];
            $UserEducationOutcomeStandard->management_of_environment_impact = $educationOutcomeStandards['management_of_environment_impact'];
            $UserEducationOutcomeStandard->health_education_importance = $educationOutcomeStandards['health_education_importance'];
            $UserEducationOutcomeStandard->health_education_impact = $educationOutcomeStandards['health_education_impact'];
            $UserEducationOutcomeStandard->profession_importance = $educationOutcomeStandards['profession_importance'];
            $UserEducationOutcomeStandard->profession_impact = $educationOutcomeStandards['profession_impact'];
            $UserEducationOutcomeStandard->legal_responsibilities_importance = $educationOutcomeStandards['legal_responsibilities_importance'];
            $UserEducationOutcomeStandard->legal_responsibilities_impact = $educationOutcomeStandards['legal_responsibilities_impact'];
            $UserEducationOutcomeStandard->ethico_importance = $educationOutcomeStandards['ethico_importance'];
            $UserEducationOutcomeStandard->ethico_impact = $educationOutcomeStandards['ethico_impact'];
            $UserEducationOutcomeStandard->improvement_importance = $educationOutcomeStandards['improvement_importance'];
            $UserEducationOutcomeStandard->improvement_impact = $educationOutcomeStandards['improvement_impact'];
            $UserEducationOutcomeStandard->records_management_importance = $educationOutcomeStandards['records_management_importance'];
            $UserEducationOutcomeStandard->records_management_impact = $educationOutcomeStandards['records_management_impact'];
            $UserEducationOutcomeStandard->research_importance = $educationOutcomeStandards['research_importance'];
            $UserEducationOutcomeStandard->research_impact = $educationOutcomeStandards['research_impact'];
            $UserEducationOutcomeStandard->collaboration_importance = $educationOutcomeStandards['collaboration_importance'];
            $UserEducationOutcomeStandard->collaboration_impact = $educationOutcomeStandards['collaboration_impact'];
            $UserEducationOutcomeStandard->communication_importance = $educationOutcomeStandards['communication_importance'];
            $UserEducationOutcomeStandard->communication_impact = $educationOutcomeStandards['communication_impact'];
            $UserEducationOutcomeStandard->status = 1;
            $UserEducationOutcomeStandard->save();
//            


            foreach ($alumni_family_members as $member) {
                $family = new UserAlumniMember();
                $family->user_id = $user->id;
                $family->name = $member['name'];
                $family->relation = $member['relation'];
                $family->name_before_married = $member['name_before_married'];
                $family->email = $member['email'];
                $family->contact_number = $member['contact_number'];
                $family->address = $member['address'];
                $family->occupation = $member['occupation'];
                $family->office_address = $member['office_address'];
                $family->status = 1;
                $user->member()->save($family);
            }

            foreach ($alumni_professional_services as $professional) {
                $proService = new UserAlumniProfessionalService();
                $proService->user_id = $user->id;
                $proService->service = $professional['service'];
                $proService->status = 1;
                $user->proService()->save($proService);
            }
            foreach ($alumni_personal_services as $personal) {
                $perService = new UserAlumniPersonalService();
                $perService->user_id = $user->id;
                $perService->service = $personal['service'];
                $perService->status = 1;
                $user->perService()->save($perService);
            }

//            Satisfaction Survey
            $satSurvey = new UserSatisfactionSurvey();
            $satSurvey->user_id = $user->id;
            $satSurvey->a1 = $satisfaction_survey['a1'];
            $satSurvey->a2 = $satisfaction_survey['a2'];
            $satSurvey->a3 = $satisfaction_survey['a3'];
            $satSurvey->a4 = $satisfaction_survey['a4'];
            $satSurvey->a5 = $satisfaction_survey['a5'];
            $satSurvey->a6 = $satisfaction_survey['a6'];
            $satSurvey->a7 = $satisfaction_survey['a7'];
            $satSurvey->a8 = $satisfaction_survey['a8'];

            $satSurvey->b1_1 = $satisfaction_survey['b1_1'];
            $satSurvey->b1_2 = $satisfaction_survey['b1_2'];
            $satSurvey->b1_3 = $satisfaction_survey['b1_3'];
            $satSurvey->b1_4 = $satisfaction_survey['b1_4'];
            $satSurvey->b1_5 = $satisfaction_survey['b1_5'];
            $satSurvey->b1_6 = $satisfaction_survey['b1_6'];

            $satSurvey->b2_1 = $satisfaction_survey['b2_1'];
            $satSurvey->b2_2 = $satisfaction_survey['b2_2'];
            $satSurvey->b2_3 = $satisfaction_survey['b2_3'];
            $satSurvey->b2_4 = $satisfaction_survey['b2_4'];
            $satSurvey->b2_5 = $satisfaction_survey['b2_5'];
            $satSurvey->b2_6 = $satisfaction_survey['b2_6'];

            $satSurvey->b3_1 = $satisfaction_survey['b3_1'];
            $satSurvey->b3_2 = $satisfaction_survey['b3_2'];
            $satSurvey->b3_3 = $satisfaction_survey['b3_3'];
            $satSurvey->b3_4 = $satisfaction_survey['b3_4'];
            $satSurvey->b3_5 = $satisfaction_survey['b3_5'];
            $satSurvey->b3_6 = $satisfaction_survey['b3_6'];

            $satSurvey->b4_1 = $satisfaction_survey['b4_1'];
            $satSurvey->b4_2 = $satisfaction_survey['b4_2'];

            $satSurvey->b5_1 = $satisfaction_survey['b5_1'];
            $satSurvey->b5_2 = $satisfaction_survey['b5_2'];

            $satSurvey->b6_1 = $satisfaction_survey['b6_1'];
            $satSurvey->b6_2 = $satisfaction_survey['b6_2'];

            $satSurvey->c1 = $satisfaction_survey['c1'];
            $satSurvey->c2 = $satisfaction_survey['c2'];
            $satSurvey->c3 = $satisfaction_survey['c3'];
            $satSurvey->c4 = $satisfaction_survey['c4'];
            $satSurvey->c5 = $satisfaction_survey['c5'];
            $satSurvey->c6 = $satisfaction_survey['c6'];
            $satSurvey->c7 = $satisfaction_survey['c7'];
            $satSurvey->c8 = $satisfaction_survey['c8'];
            $satSurvey->c9 = $satisfaction_survey['c9'];
            $satSurvey->c10 = $satisfaction_survey['c10'];
            $satSurvey->c11 = $satisfaction_survey['c11'];

            $satSurvey->d1 = $satisfaction_survey['d1'];
            $satSurvey->d2 = $satisfaction_survey['d2'];
            $satSurvey->d3 = $satisfaction_survey['d3'];
            $satSurvey->d4 = $satisfaction_survey['d4'];
            $satSurvey->d5 = $satisfaction_survey['d5'];

            $satSurvey->e1_1 = $satisfaction_survey['e1_1'];
            $satSurvey->e1_2 = $satisfaction_survey['e1_2'];
            $satSurvey->e1_3 = $satisfaction_survey['e1_3'];
            $satSurvey->e1_4 = $satisfaction_survey['e1_4'];
            $satSurvey->e1_5 = $satisfaction_survey['e1_5'];
            $satSurvey->e1_6 = $satisfaction_survey['e1_6'];
            $satSurvey->e1_7 = $satisfaction_survey['e1_7'];
            $satSurvey->e1_8 = $satisfaction_survey['e1_8'];
            $satSurvey->e1_9 = $satisfaction_survey['e1_9'];
            $satSurvey->e1_10 = $satisfaction_survey['e1_10'];
            $satSurvey->e1_11 = $satisfaction_survey['e1_11'];
            $satSurvey->e1_12 = $satisfaction_survey['e1_12'];

            $satSurvey->e2_1 = $satisfaction_survey['e2_1'];
            $satSurvey->e2_2 = $satisfaction_survey['e2_2'];
            $satSurvey->e2_3 = $satisfaction_survey['e2_3'];
            $satSurvey->e2_4 = $satisfaction_survey['e2_4'];
            $satSurvey->e2_5 = $satisfaction_survey['e2_5'];
            $satSurvey->e2_6 = $satisfaction_survey['e2_6'];
            $satSurvey->e2_7 = $satisfaction_survey['e2_7'];
            $satSurvey->e2_8 = $satisfaction_survey['e2_8'];
            $satSurvey->e2_9 = $satisfaction_survey['e2_9'];
            $satSurvey->e2_10 = $satisfaction_survey['e2_10'];
            $satSurvey->e2_11 = $satisfaction_survey['e2_11'];
            $satSurvey->e2_12 = $satisfaction_survey['e2_12'];
            $satSurvey->e2_13 = $satisfaction_survey['e2_13'];

            $satSurvey->e3_1 = $satisfaction_survey['e3_1'];
            $satSurvey->e3_2 = $satisfaction_survey['e3_2'];
            $satSurvey->e3_3 = $satisfaction_survey['e3_3'];

            $satSurvey->e4_1 = $satisfaction_survey['e4_1'];
            $satSurvey->e4_2 = $satisfaction_survey['e4_2'];
            $satSurvey->e4_3 = $satisfaction_survey['e4_3'];
            $satSurvey->e4_4 = $satisfaction_survey['e4_4'];
            $satSurvey->e4_5 = $satisfaction_survey['e4_5'];

            $satSurvey->e5_1 = $satisfaction_survey['e5_1'];
            $satSurvey->e5_2 = $satisfaction_survey['e5_2'];

            $satSurvey->e6_1 = $satisfaction_survey['e6_1'];
            $satSurvey->e6_2 = $satisfaction_survey['e6_2'];
            $satSurvey->e6_3 = $satisfaction_survey['e6_3'];
            $satSurvey->e6_4 = $satisfaction_survey['e6_4'];
            $satSurvey->e6_5 = $satisfaction_survey['e6_5'];
            $satSurvey->e6_6 = $satisfaction_survey['e6_6'];

            $satSurvey->e7_1 = $satisfaction_survey['e7_1'];
            $satSurvey->e7_2 = $satisfaction_survey['e7_2'];
            $satSurvey->e7_3 = $satisfaction_survey['e7_3'];

            $satSurvey->f1 = $satisfaction_survey['f1'];
            $satSurvey->f2 = $satisfaction_survey['f2'];
            $satSurvey->f3 = $satisfaction_survey['f3'];
            $satSurvey->f4 = $satisfaction_survey['f4'];

            $satSurvey->g1 = $satisfaction_survey['g1'];
            $satSurvey->g2 = $satisfaction_survey['g2'];
            $satSurvey->g3 = $satisfaction_survey['g3'];
            $satSurvey->g4 = $satisfaction_survey['g4'];

            $satSurvey->h1 = $satisfaction_survey['h1'];
            $satSurvey->h2 = $satisfaction_survey['h2'];
            $satSurvey->h3 = $satisfaction_survey['h3'];
            $satSurvey->h4 = $satisfaction_survey['h4'];
            $satSurvey->suggestion = $satisfaction_survey['suggestion'];
            $user->satSurvey()->save($satSurvey);

            return response()->json([
                        'all' => $data,
                        'token' => $token,
                        'user' => $user,
                        'employmentSurvey' => $employmentSurvey,
                        'educationOutcomeStandards' => $UserEducationOutcomeExperience,
                        'alumni_family_members' => $alumni_family_members,
                        'alumni_professional_services' => $alumni_professional_services,
                        'alumni_personal_services' => $alumni_personal_services,
                        'satisfaction_survey' => $satisfaction_survey,
                        'message' => 'successfully added!'
                            ], 200);
        }
        return response()->json([
                    'all' => $data,
                    'token' => $token,
                    'user' => $user,
                    'employmentSurvey' => $employmentSurvey,
                    'educationOutcomeExperiences' => $educationOutcomeExperiences,
                    'educationOutcomeStandards' => $educationOutcomeStandards,
                    'activityInvolvements' => $activityInvolvements,
                    'alumni_family_members' => $alumni_family_members,
                    'alumni_family_members' => $alumni_family_members,
                    'alumni_professional_services' => $alumni_professional_services,
                    'alumni_personal_services' => $alumni_personal_services,
                    'satisfaction_survey' => $satisfaction_survey,
                    'message' => 'successfully added!'
                        ], 200);
    }

    public function getCheckEmailIfExists($email) {
        $user = User::where('email', '=', $email)->first();
        return response()->json(['user' => $user]);
    }

}
