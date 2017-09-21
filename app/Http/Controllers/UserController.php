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
use App\Role;
use DB;
use App\RoleUser;

class UserController extends Controller {

    public function getUsers() {
        $users = User::orderBy('last_name', 'asc')->get();
        return response()->json(['users' => $users]);
    }

    public function getUsers2() {

        $users = DB::table('users')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('role_user.role_id', '=', '3')
                ->orderBy('users.approved', 'asc')
                ->select(
                        'users.id', 'users.name', 'users.email', 'users.activated', 'users.approved', 'users.first_name', 'users.middle_name', 'users.last_name', 'users.suffix_name', 'users.active', 'users.image'
                        , 'role_user.role_id'
                        , 'roles.name as role'
                )
                ->orderBy('last_name', 'asc')->get();

        return response()->json(['users' => $users]);
    }

    public function getUsers3() {

        $users = DB::table('users')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->orderBy('users.last_name', 'asc')
                ->select(
                        'users.id', 'users.name', 'users.email', 'users.activated', 'users.approved', 'users.first_name', 'users.middle_name', 'users.last_name', 'users.suffix_name', 'users.active', 'users.image'
                        , 'role_user.role_id'
                        , 'roles.name as role'
                )
                ->get();

        return response()->json(['users' => $users]);
    }

    public function accountApproval(Request $request) {
        $user_id = $request->get('user_id');


        $user = User::find($user_id);

        $user->approved = 1;

        $user->save();
        return response()->json(['user' => $user]);
    }

    public function accountActivate(Request $request) {
        $user_id = $request->get('user_id');


        $user = User::find($user_id);

        $user->activated = 1;

        $user->save();
        return response()->json(['user' => $user]);
    }

    public function accountActive(Request $request) {
        $user_id = $request->get('user_id');
        $active = $request->get('active');

        $user = User::find($user_id);

        $user->active = $active;

        $user->save();
        return response()->json(['user' => $user]);
    }

    public function changeRole(Request $request) {
        $user_id = $request->get('user_id');
        $role_id = $request->get('role_id');
        $old_role = $request->get('old_role');

        $user = User::where('id', '=', $user_id)->first();
//        $role = Role::find($role_id);
//        $role->delete();
//        $role->users()->sync([]);
//
//        $role = RoleUser::where('user_id', '=', $user_id)->first();
//        $role->role_id = $role_id;
//        $role->save();

        $role = DB::update('update role_user set role_id = :new_role_id where user_id = :user_id ', ['new_role_id' => $role_id, 'user_id' => $user_id]);
//        DB::table('role_user')->where('user_id', '=', $user_id)->where('role_id', '=', $old_role)->get()->delete();
//
        if ($role) {
            return response()->json(['message' => 'success']);
        }

        return response()->json(['message' => $role]);
    }

    protected $activationService;

    public function __construct(ActivationService $activationService) {


        $this->activationService = $activationService;
    }

    public function postSignup(Request $request) {

        $data = $request->json()->all();
        $token = $request->get('_token');

        $userInput = $request->get('user');


        $activityInvolvements = $request->get('activity_involvements');
        $alumni_family_members = $request->get('alumni_family_members');
        $alumni_professional_services = $request->get('alumni_professional_services');
        $alumni_personal_services = $request->get('alumni_personal_services');




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
        $user->major = $userInput['major'];
        $user->father = $userInput['father'];
        $user->father_is_paulinian = $userInput['father_is_paulinian'];
        $user->father_occupation = $userInput['father_occupation'];
        $user->father_office_address = $userInput['father_office_address'];
        $user->mother = $userInput['mother'];
        $user->mother_is_paulinian = $userInput['mother_is_paulinian'];
        $user->mother_occupation = $userInput['mother_occupation'];
        $user->mother_office_address = $userInput['mother_office_address'];


       
        
        if ($user->save()) {

            if($userInput['image'] == ''){
                $user->image = 'user2-160x160.jpg';
            }else{
                $user->image = $user->id.'.'.$userInput['image'];
            }
            $user->save();

            $role = new Role();
            $role->id = 3;
            $user->roles()->attach($role->id);

            /*$this->activationService->sendActivationMail($user);*/

            $UserEmploymentSurvey = new UserEmploymentSurvey();
            $UserEmploymentSurvey->user_id = $user->id;
            $UserEmploymentSurvey->work_status = 0;
            $UserEmploymentSurvey->work_status_others = '';
            $UserEmploymentSurvey->sat_challenge = 0;
            $UserEmploymentSurvey->sat_job_security = 0;
            $UserEmploymentSurvey->sat_salary = 0;
            $UserEmploymentSurvey->sat_potential = 0;
            $UserEmploymentSurvey->sat_support = 0;
            $UserEmploymentSurvey->sat_quality_of_service = 0;
            $UserEmploymentSurvey->sat_org_ethics = 0;
            $UserEmploymentSurvey->job_course_relation = 0;
            $UserEmploymentSurvey->seek_relavant_job = 'no';
            $UserEmploymentSurvey->unemployment_reason = 0;
            $UserEmploymentSurvey->seeking_employment = 0;
            $UserEmploymentSurvey->status = 1;
            $UserEmploymentSurvey->save();

            $UserEducationOutcomeExperience = new UserEducationOutcomeExperience();
            $UserEducationOutcomeExperience->user_id = $user->id;
            $UserEducationOutcomeExperience->creativity_importance = 0;
            $UserEducationOutcomeExperience->creativity_impact = 0;
            $UserEducationOutcomeExperience->commitment_importance = 0;
            $UserEducationOutcomeExperience->commitment_impact = 0;
            $UserEducationOutcomeExperience->ethics_importance = 0;
            $UserEducationOutcomeExperience->ethics_impact = 0;
            $UserEducationOutcomeExperience->teamwork_importance = 0;
            $UserEducationOutcomeExperience->teamwork_impact = 0;
            $UserEducationOutcomeExperience->diversity_importance = 0;
            $UserEducationOutcomeExperience->diversity_impact = 0;
            $UserEducationOutcomeExperience->effective_communication_importance = 0;
            $UserEducationOutcomeExperience->effective_communication_impact = 0;
            $UserEducationOutcomeExperience->punctuality_importance = 0;
            $UserEducationOutcomeExperience->punctuality_impact = 0;
            $UserEducationOutcomeExperience->adaptably_importance = 0;
            $UserEducationOutcomeExperience->adaptably_impact = 0;
            $UserEducationOutcomeExperience->status = 1;
            $UserEducationOutcomeExperience->save();

            $UserEducationOutcomeStandard = new UserEducationOutcomeStandard();
            $UserEducationOutcomeStandard->user_id = $user->id;
            $UserEducationOutcomeStandard->nursing_care_importance = 0;
            $UserEducationOutcomeStandard->nursing_care_impact = 0;
            $UserEducationOutcomeStandard->management_of_environment_importance = 0;
            $UserEducationOutcomeStandard->management_of_environment_impact = 0;
            $UserEducationOutcomeStandard->health_education_importance = 0;
            $UserEducationOutcomeStandard->health_education_impact = 0;
            $UserEducationOutcomeStandard->profession_importance = 0;
            $UserEducationOutcomeStandard->profession_impact = 0;
            $UserEducationOutcomeStandard->legal_responsibilities_importance = 0;
            $UserEducationOutcomeStandard->legal_responsibilities_impact = 0;
            $UserEducationOutcomeStandard->ethico_importance = 0;
            $UserEducationOutcomeStandard->ethico_impact = 0;
            $UserEducationOutcomeStandard->improvement_importance = 0;
            $UserEducationOutcomeStandard->improvement_impact = 0;
            $UserEducationOutcomeStandard->records_management_importance = 0;
            $UserEducationOutcomeStandard->records_management_impact = 0;
            $UserEducationOutcomeStandard->research_importance = 0;
            $UserEducationOutcomeStandard->research_impact = 0;
            $UserEducationOutcomeStandard->collaboration_importance = 0;
            $UserEducationOutcomeStandard->collaboration_impact = 0;
            $UserEducationOutcomeStandard->communication_importance = 0;
            $UserEducationOutcomeStandard->communication_impact = 0;
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
            $satSurvey->a1 = 0;
            $satSurvey->a2 = 0;
            $satSurvey->a3 = 0;
            $satSurvey->a4 = 0;
            $satSurvey->a5 = 0;
            $satSurvey->a6 = 0;
            $satSurvey->a7 = 0;
            $satSurvey->a8 = 0;

            $satSurvey->b1_1 = 0;
            $satSurvey->b1_2 = 0;
            $satSurvey->b1_3 = 0;
            $satSurvey->b1_4 = 0;
            $satSurvey->b1_5 = 0;
            $satSurvey->b1_6 = 0;

            $satSurvey->b2_1 = 0;
            $satSurvey->b2_2 = 0;
            $satSurvey->b2_3 = 0;
            $satSurvey->b2_4 = 0;
            $satSurvey->b2_5 = 0;
            $satSurvey->b2_6 = 0;

            $satSurvey->b3_1 = 0;
            $satSurvey->b3_2 = 0;
            $satSurvey->b3_3 = 0;
            $satSurvey->b3_4 = 0;
            $satSurvey->b3_5 = 0;
            $satSurvey->b3_6 = 0;

            $satSurvey->b4_1 = 0;
            $satSurvey->b4_2 = 0;

            $satSurvey->b5_1 = 0;
            $satSurvey->b5_2 = 0;

            $satSurvey->b6_1 = 0;
            $satSurvey->b6_2 = 0;

            $satSurvey->c1 = 0;
            $satSurvey->c2 = 0;
            $satSurvey->c3 = 0;
            $satSurvey->c4 = 0;
            $satSurvey->c5 = 0;
            $satSurvey->c6 = 0;
            $satSurvey->c7 = 0;
            $satSurvey->c8 = 0;
            $satSurvey->c9 = 0;
            $satSurvey->c10 = 0;
            $satSurvey->c11 = 0;

            $satSurvey->d1 = 0;
            $satSurvey->d2 = 0;
            $satSurvey->d3 = 0;
            $satSurvey->d4 = 0;
            $satSurvey->d5 = 0;

            $satSurvey->e1_1 = 0;
            $satSurvey->e1_2 = 0;
            $satSurvey->e1_3 = 0;
            $satSurvey->e1_4 = 0;
            $satSurvey->e1_5 = 0;
            $satSurvey->e1_6 = 0;
            $satSurvey->e1_7 = 0;
            $satSurvey->e1_8 = 0;
            $satSurvey->e1_9 = 0;
            $satSurvey->e1_10 = 0;
            $satSurvey->e1_11 = 0;
            $satSurvey->e1_12 = 0;

            $satSurvey->e2_1 = 0;
            $satSurvey->e2_2 = 0;
            $satSurvey->e2_3 = 0;
            $satSurvey->e2_4 = 0;
            $satSurvey->e2_5 = 0;
            $satSurvey->e2_6 = 0;
            $satSurvey->e2_7 = 0;
            $satSurvey->e2_8 = 0;
            $satSurvey->e2_9 = 0;
            $satSurvey->e2_10 = 0;
            $satSurvey->e2_11 = 0;
            $satSurvey->e2_12 = 0;
            $satSurvey->e2_13 = 0;

            $satSurvey->e3_1 = 0;
            $satSurvey->e3_2 = 0;
            $satSurvey->e3_3 = 0;

            $satSurvey->e4_1 = 0;
            $satSurvey->e4_2 = 0;
            $satSurvey->e4_3 = 0;
            $satSurvey->e4_4 = 0;
            $satSurvey->e4_5 = 0;

            $satSurvey->e5_1 = 0;
            $satSurvey->e5_2 = 0;

            $satSurvey->e6_1 = 0;
            $satSurvey->e6_2 = 0;
            $satSurvey->e6_3 = 0;
            $satSurvey->e6_4 = 0;
            $satSurvey->e6_5 = 0;
            $satSurvey->e6_6 = 0;

            $satSurvey->e7_1 = 0;
            $satSurvey->e7_2 = 0;
            $satSurvey->e7_3 = 0;

            $satSurvey->f1 = 0;
            $satSurvey->f2 = 0;
            $satSurvey->f3 = 0;
            $satSurvey->f4 = 0;

            $satSurvey->g1 = 0;
            $satSurvey->g2 = 0;
            $satSurvey->g3 = 0;
            $satSurvey->g4 = 0;

            $satSurvey->h1 = 0;
            $satSurvey->h2 = 0;
            $satSurvey->h3 = 0;
            $satSurvey->h4 = 0;
            $satSurvey->suggestion = '';
            $user->satSurvey()->save($satSurvey);



            return response()->json([
                        'all' => $data,
                        'token' => $token,
                        'user' => $user,
                        'alumni_family_members' => $alumni_family_members,
                        'alumni_professional_services' => $alumni_professional_services,
                        'alumni_personal_services' => $alumni_personal_services,
                        'img' => $userInput['image'],
                            ], 200);
        }
        return response()->json([
                    'all' => $data,
                    'token' => $token,
                    'user' => $user,
                    'activityInvolvements' => $activityInvolvements,
                    'alumni_family_members' => $alumni_family_members,
                    'alumni_family_members' => $alumni_family_members,
                    'alumni_professional_services' => $alumni_professional_services,
                    'alumni_personal_services' => $alumni_personal_services,
                    'img' => $userInput['image'],
                    'message' => 'successfully added!'
                        ], 200);
    }

    public function accountUpdate(Request $request) {
        $data = $request->json()->all();
        $userInput = $request->get('user');
        $id = $request->get('id');
        $user = User::find($id);

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
        $user->major = $userInput['major'];
        $user->father = $userInput['father'];
        $user->father_is_paulinian = $userInput['father_is_paulinian'];
        $user->father_occupation = $userInput['father_occupation'];
        $user->father_office_address = $userInput['father_office_address'];
        $user->mother = $userInput['mother'];
        $user->mother_is_paulinian = $userInput['mother_is_paulinian'];
        $user->mother_occupation = $userInput['mother_occupation'];
        $user->mother_office_address = $userInput['mother_office_address'];

        if (!$user->save()) {
            return response()->json(['error' => 'record not updated!']);
        }
        return response()->json(['all' => $data, 'user' => $user]);
    }

   public function accountImageUpdate(Request $request) {
        $data = $request->json()->all();
        $userInput = $request->get('user');
        $id = $request->get('id');
        $user = User::find($id);

        $user->image = $userInput['image'];
 

        if (!$user->save()) {
            return response()->json(['error' => 'record not updated!']);
        }
        return response()->json(['all' => $data, 'user' => $user]);
    }
    public function getCheckEmailIfExists($email) {
        $user = User::where('email', '=', $email)->first();
        return response()->json(['user' => $user]);
    }

    public function getUser($id) {
        $user = User::where('id', '=', $id)->first();
        return response()->json(['user' => $user]);
    }

    public function postSendEmail(Request $request) {
        $user = new User();
        $user->email = 'dodong.ronald@gmail.com';
        $user->name = 'ronald';
        $user->activated = 1;
        $user->id = 0;
        if ($this->activationService->sendMail($user)) {
            return response()->json(['message' => 'email sent', 'user' => $user]);
        }
        return response()->json(['message' => 'failed']);
    }

}
