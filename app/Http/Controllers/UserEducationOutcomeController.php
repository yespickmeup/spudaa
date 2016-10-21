<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UserEducationOutcomeExperience;
use App\UserEducationOutcomeStandard;

class UserEducationOutcomeController extends Controller {

    public function getSurvey($user_id) {
        $survey = UserEducationOutcomeExperience::where('user_id', '=', $user_id)->first();
        return response()->json(['experience' => $survey]);
    }

    public function postUpdateOutcome(Request $request) {

        $user_id = $request->get('user_id');
       
        $educationOutcomeExperiences = $request->get('education_outcome_experiences');
        $educationOutcomeStandards = $request->get('education_outcome_standards');

        $UserEducationOutcomeExperience =  UserEducationOutcomeExperience::where('user_id', '=', $user_id)->first();
       
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
       

        $UserEducationOutcomeStandard = UserEducationOutcomeStandard::where('user_id', '=', $user_id)->first();
        
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
        


        if ($UserEducationOutcomeExperience->save() && $UserEducationOutcomeStandard->save()) {
            return response()->json(['message' => 'successfully added', 'survey' => $UserEducationOutcomeExperience]);
        }
        return response()->json(['message' => 'error', 'data' => $educationOutcomeExperiences]);
    }

}
