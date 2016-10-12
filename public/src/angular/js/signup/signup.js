/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




/* global myToken */

var signupApp = angular.module('signupApp', ['angularSpinner', 'smart-table'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});



signupApp.controller('signupController', ['$scope', '$http', 'signupService', 'usSpinnerService', '$rootScope', '$timeout', '$filter', '$window', function ($scope, $http, signupService, usSpinnerService, $rootScope, $timeout, $filter, $window) {



//        Tab
        $scope.tab1 = 'active';
        $scope.tab2 = '';
        $scope.tab3 = '';
        $scope.tab4 = '';
        $scope.tab5 = '';
        $scope.tab6 = '';
        $scope.changeTab = function (tab) {
            if (tab === 1) {
                $scope.tab1 = 'active';
                $scope.tab2 = '';
                $scope.tab3 = '';
                $scope.tab4 = '';
                $scope.tab5 = '';
                $scope.tab6 = '';
            }
            if (tab === 2) {
                $scope.tab1 = '';
                $scope.tab2 = 'active';
                $scope.tab3 = '';
                $scope.tab4 = '';
                $scope.tab5 = '';
                $scope.tab6 = '';
            }
            if (tab === 3) {
                $scope.tab1 = '';
                $scope.tab2 = '';
                $scope.tab3 = 'active';
                $scope.tab4 = '';
                $scope.tab5 = '';
                $scope.tab6 = '';
            }
            if (tab === 4) {
                $scope.tab1 = '';
                $scope.tab2 = '';
                $scope.tab3 = '';
                $scope.tab4 = 'active';
                $scope.tab5 = '';
                $scope.tab6 = '';
            }
            if (tab === 5) {
                $scope.tab1 = '';
                $scope.tab2 = '';
                $scope.tab3 = '';
                $scope.tab4 = '';
                $scope.tab5 = 'active';
                $scope.tab6 = '';
            }
            if (tab === 6) {
                $scope.tab1 = '';
                $scope.tab2 = '';
                $scope.tab3 = '';
                $scope.tab4 = '';
                $scope.tab5 = '';
                $scope.tab6 = 'active';
            }
        };
//     Spinner
        $scope.startcounter = 0;
        $scope.startSpin = function () {

            if (!$scope.spinneractive) {
                usSpinnerService.spin('spinner-1');
                $scope.startcounter++;
            }
        };

        $scope.stopSpin = function () {

            if ($scope.spinneractive) {
                usSpinnerService.stop('spinner-1');
            }
        };
        $scope.spinneractive = false;

        $rootScope.$on('us-spinner:spin', function (event, key) {
            $scope.spinneractive = true;
        });

        $rootScope.$on('us-spinner:stop', function (event, key) {
            $scope.spinneractive = false;
        });

// End of Spinner
// Start of Initializations


// End of Initializations
// Start of User Background Information
        $scope.user = {
            student_no: '',
            first_name: '',
            middle_name: '',
            last_name: '',
            suffix_name: '',
            civil_status: '',
            gender: '',
            date_of_birth: '',
            blood_type: '',
            email: '',
            password: '',
            confirm_password: '',
            country: '',
            province: ' ',
            city: '',
            zip_code: '',
            home_address: '',
            present_address: '',
            landline_no: '',
            cellphone_no: '',
            level: '',
            year: '',
            course: '',
            major: '',
            father: '',
            father_is_paulinian: '',
            father_occupation: '',
            father_office_address: '',
            mother: '',
            mother_is_paulinian: '',
            mother_occupation: '',
            mother_office_address: ''
        };
        $scope.suggestion = '';
        $scope.country = {};
        $scope.province = {};
        $scope.city = {};
        $scope.level = {};
        $scope.year = {};
        $scope.course = {};
        $scope.major = {};
        $scope.suggestion = '';
// End of User Background Information


//      Start of School Activities
        $scope.activity_involvements = [];
//      End of School Activities
//      Start of ALumni Family Members
        $scope.alumni_family_members = [];
        $scope.alumni_professional_services = [];
        $scope.alumni_personal_services = [];
//      End of Alumni Family Members


        $scope.submitForm = function () {

            var isValid = true;
            if (isValid) {
                var email = $('input[name="email"]').val();
                var suggestion = angular.element('#suggestion').val();

                $scope.user.email = email;
                $scope.startSpin();
//                $timeout(function () {              
//                    console.log('update with timeout fired')
//                }, 3000);

//                User Details
                $scope.user.country = $scope.country.selectedOption.name;
                $scope.user.province = $scope.province.selectedOption.name;
                $scope.user.city = $scope.city.selectedOption.name;
                $scope.user.level = $scope.level.selectedOption.level;
                $scope.user.year = $scope.year.selectedOption.year;
                $scope.user.course = $scope.course.selectedOption.course;
                $scope.user.major = $scope.major.selectedOption.major;
                var father_is_paulinian = $('input[name="father_is_paulinian"]:checked').val() ? 1 : 0;
                var mother_is_paulinian = $('input[name="mother_is_paulinian"]:checked').val() ? 1 : 0;
                $scope.user.father_is_paulinian = father_is_paulinian;
                $scope.user.mother_is_paulinian = mother_is_paulinian;

                var _date = $filter('date')(new Date($scope.user.date_of_birth),
                        'yyyy-MM-dd');
//                End of User Details
//              Start of employment survey
                var work_status = $('input[name="work_status"]:checked').val() ? $('input[name="work_status"]:checked').val() : 0;
                var work_status_others = $('input[name="work_status_others"]').val();
                var sat_challenge = $('input[name="sat_challenge"]:checked').val() ? $('input[name="sat_challenge"]:checked').val() : 0;
                var sat_job_security = $('input[name="sat_job_security"]:checked').val() ? $('input[name="sat_job_security"]:checked').val() : 0;
                var sat_salary = $('input[name="sat_salary"]:checked').val() ? $('input[name="sat_salary"]:checked').val() : 0;
                var sat_potential = $('input[name="sat_potential"]:checked').val() ? $('input[name="sat_potential"]:checked').val() : 0;
                var sat_support = $('input[name="sat_support"]:checked').val() ? $('input[name="sat_support"]:checked').val() : 0;
                var sat_quality_of_service = $('input[name="sat_quality_of_service"]:checked').val() ? $('input[name="sat_quality_of_service"]:checked').val() : 0;
                var sat_org_ethics = $('input[name="sat_org_ethics"]:checked').val() ? $('input[name="sat_org_ethics"]:checked').val() : 0;
                var job_course_relation = $('input[name="job_course_relation"]:checked').val() ? $('input[name="job_course_relation"]:checked').val() : 0;
                var seek_relavant_job = $('input[name="seek_relavant_job"]:checked').val() ? $('input[name="seek_relavant_job"]:checked').val() : 'no';
                var unemployment_reason = $('input[name="unemployment_reason"]:checked').val() ? $('input[name="unemployment_reason"]:checked').val() : 0;
                var seeking_employment = $('input[name="seeking_employment"]:checked').val() ? $('input[name="seeking_employment"]:checked').val() : 0;

                var employment_survey = {
                    work_status: work_status,
                    work_status_others: work_status_others,
                    sat_challenge: sat_challenge,
                    sat_job_security: sat_job_security,
                    sat_salary: sat_salary,
                    sat_potential: sat_potential,
                    sat_support: sat_support,
                    sat_quality_of_service: sat_quality_of_service,
                    sat_org_ethics: sat_org_ethics,
                    job_course_relation: job_course_relation,
                    seek_relavant_job: seek_relavant_job,
                    unemployment_reason: unemployment_reason,
                    seeking_employment: seeking_employment
                };

//              End of Employment Survey
//              Start of Education Outcomes
                var creativity_importance = $('input[name="creativity_importance"]:checked').val() ? $('input[name="creativity_importance"]:checked').val() : 0;
                var creativity_impact = $('input[name="creativity_impact"]:checked').val() ? $('input[name="creativity_impact"]:checked').val() : 0;
                var commitment_importance = $('input[name="commitment_importance"]:checked').val() ? $('input[name="commitment_importance"]:checked').val() : 0;
                var commitment_impact = $('input[name="commitment_impact"]:checked').val() ? $('input[name="commitment_impact"]:checked').val() : 0;
                var ethics_importance = $('input[name="ethics_importance"]:checked').val() ? $('input[name="ethics_importance"]:checked').val() : 0;
                var ethics_impact = $('input[name="ethics_impact"]:checked').val() ? $('input[name="ethics_impact"]:checked').val() : 0;
                var teamwork_importance = $('input[name="teamwork_importance"]:checked').val() ? $('input[name="teamwork_importance"]:checked').val() : 0;
                var teamwork_impact = $('input[name="teamwork_impact"]:checked').val() ? $('input[name="teamwork_impact"]:checked').val() : 0;
                var diversity_importance = $('input[name="diversity_importance"]:checked').val() ? $('input[name="diversity_importance"]:checked').val() : 0;
                var diversity_impact = $('input[name="diversity_impact"]:checked').val() ? $('input[name="diversity_impact"]:checked').val() : 0;
                var effective_communication_importance = $('input[name="effective_communication_importance"]:checked').val() ? $('input[name="effective_communication_importance"]:checked').val() : 0;
                var effective_communication_impact = $('input[name="effective_communication_impact"]:checked').val() ? $('input[name="effective_communication_impact"]:checked').val() : 0;
                var punctuality_importance = $('input[name="punctuality_importance"]:checked').val() ? $('input[name="punctuality_importance"]:checked').val() : 0;
                var punctuality_impact = $('input[name="punctuality_impact"]:checked').val() ? $('input[name="punctuality_impact"]:checked').val() : 0;
                var adaptably_importance = $('input[name="adaptably_importance"]:checked').val() ? $('input[name="adaptably_importance"]:checked').val() : 0;
                var adaptably_impact = $('input[name="adaptably_impact"]:checked').val() ? $('input[name="adaptably_impact"]:checked').val() : 0;

                var education_outcome_experiences = {
                    creativity_importance: creativity_importance,
                    creativity_impact: creativity_impact,
                    commitment_importance: commitment_importance,
                    commitment_impact: commitment_impact,
                    ethics_importance: ethics_importance,
                    ethics_impact: ethics_impact,
                    teamwork_importance: teamwork_importance,
                    teamwork_impact: teamwork_impact,
                    diversity_importance: diversity_importance,
                    diversity_impact: diversity_impact,
                    effective_communication_importance: effective_communication_importance,
                    effective_communication_impact: effective_communication_impact,
                    punctuality_importance: punctuality_importance,
                    punctuality_impact: punctuality_impact,
                    adaptably_importance: adaptably_importance,
                    adaptably_impact: adaptably_impact

                };

                var nursing_care_importance = $('input[name="nursing_care_importance"]:checked').val() ? $('input[name="nursing_care_importance"]:checked').val() : 0;
                var nursing_care_impact = $('input[name="nursing_care_impact"]:checked').val() ? $('input[name="nursing_care_impact"]:checked').val() : 0;
                var management_of_environment_importance = $('input[name="management_of_environment_importance"]:checked').val() ? $('input[name="management_of_environment_importance"]:checked').val() : 0;
                var management_of_environment_impact = $('input[name="management_of_environment_impact"]:checked').val() ? $('input[name="management_of_environment_impact"]:checked').val() : 0;
                var health_education_importance = $('input[name="health_education_importance"]:checked').val() ? $('input[name="health_education_importance"]:checked').val() : 0;
                var health_education_impact = $('input[name="health_education_impact"]:checked').val() ? $('input[name="health_education_impact"]:checked').val() : 0;
                var profession_importance = $('input[name="profession_importance"]:checked').val() ? $('input[name="profession_importance"]:checked').val() : 0;
                var profession_impact = $('input[name="profession_impact"]:checked').val() ? $('input[name="profession_impact"]:checked').val() : 0;
                var legal_responsibilities_importance = $('input[name="legal_responsibilities_importance"]:checked').val() ? $('input[name="legal_responsibilities_importance"]:checked').val() : 0;
                var legal_responsibilities_impact = $('input[name="legal_responsibilities_impact"]:checked').val() ? $('input[name="legal_responsibilities_impact"]:checked').val() : 0;
                var ethico_importance = $('input[name="ethico_importance"]:checked').val() ? $('input[name="ethico_importance"]:checked').val() : 0;
                var ethico_impact = $('input[name="ethico_impact"]:checked').val() ? $('input[name="ethico_impact"]:checked').val() : 0;
                var improvement_importance = $('input[name="improvement_importance"]:checked').val() ? $('input[name="improvement_importance"]:checked').val() : 0;
                var improvement_impact = $('input[name="improvement_impact"]:checked').val() ? $('input[name="improvement_impact"]:checked').val() : 0;
                var records_management_importance = $('input[name="records_management_importance"]:checked').val() ? $('input[name="records_management_importance"]:checked').val() : 0;
                var records_management_impact = $('input[name="records_management_impact"]:checked').val() ? $('input[name="records_management_impact"]:checked').val() : 0;
                var research_importance = $('input[name="research_importance"]:checked').val() ? $('input[name="research_importance"]:checked').val() : 0;
                var research_impact = $('input[name="research_impact"]:checked').val() ? $('input[name="research_impact"]:checked').val() : 0;
                var collaboration_importance = $('input[name="collaboration_importance"]:checked').val() ? $('input[name="collaboration_importance"]:checked').val() : 0;
                var collaboration_impact = $('input[name="collaboration_impact"]:checked').val() ? $('input[name="collaboration_impact"]:checked').val() : 0;
                var communication_importance = $('input[name="communication_importance"]:checked').val() ? $('input[name="communication_importance"]:checked').val() : 0;
                var communication_impact = $('input[name="communication_impact"]:checked').val() ? $('input[name="communication_impact"]:checked').val() : 0;

                var education_outcome_standards = {
                    nursing_care_importance: nursing_care_importance,
                    nursing_care_impact: nursing_care_impact,
                    management_of_environment_importance: management_of_environment_importance,
                    management_of_environment_impact: management_of_environment_impact,
                    health_education_importance: health_education_importance,
                    health_education_impact: health_education_impact,
                    profession_importance: profession_importance,
                    profession_impact: profession_impact,
                    legal_responsibilities_importance: legal_responsibilities_importance,
                    legal_responsibilities_impact: legal_responsibilities_impact,
                    ethico_importance: ethico_importance,
                    ethico_impact: ethico_impact,
                    improvement_importance: improvement_importance,
                    improvement_impact: improvement_impact,
                    records_management_importance: records_management_importance,
                    records_management_impact: records_management_impact,
                    research_importance: research_importance,
                    research_impact: research_impact,
                    collaboration_importance: collaboration_importance,
                    collaboration_impact: collaboration_impact,
                    communication_importance: communication_importance,
                    communication_impact: communication_impact
                };
//              End of Education Outcomes
//              Start of Satisfaction Survey

                var a1 = $('input[name="a1"]:checked').val() ? $('input[name="a1"]:checked').val() : 0;
                var a2 = $('input[name="a2"]:checked').val() ? $('input[name="a2"]:checked').val() : 0;
                var a3 = $('input[name="a3"]:checked').val() ? $('input[name="a3"]:checked').val() : 0;
                var a4 = $('input[name="a4"]:checked').val() ? $('input[name="a4"]:checked').val() : 0;
                var a5 = $('input[name="a5"]:checked').val() ? $('input[name="a5"]:checked').val() : 0;
                var a6 = $('input[name="a6"]:checked').val() ? $('input[name="a6"]:checked').val() : 0;
                var a7 = $('input[name="a7"]:checked').val() ? $('input[name="a7"]:checked').val() : 0;
                var a8 = $('input[name="a8"]:checked').val() ? $('input[name="a8"]:checked').val() : 0;
                var b1_1 = $('input[name="b1_1"]:checked').val() ? $('input[name="b1_1"]:checked').val() : 0;
                var b1_2 = $('input[name="b1_2"]:checked').val() ? $('input[name="b1_2"]:checked').val() : 0;
                var b1_3 = $('input[name="="]:checked').val() ? $('input[name="="]:checked').val() : 0;
                var b1_4 = $('input[name="b1_4"]:checked').val() ? $('input[name="b1_4"]:checked').val() : 0;
                var b1_5 = $('input[name="b1_5"]:checked').val() ? $('input[name="b1_5"]:checked').val() : 0;
                var b1_6 = $('input[name="b1_6"]:checked').val() ? $('input[name="b1_6"]:checked').val() : 0;
                var b2_1 = $('input[name="b2_1"]:checked').val() ? $('input[name="b2_1"]:checked').val() : 0;
                var b2_2 = $('input[name="b2_2"]:checked').val() ? $('input[name="b2_2"]:checked').val() : 0;
                var b2_3 = $('input[name="="]:checked').val() ? $('input[name="="]:checked').val() : 0;
                var b2_4 = $('input[name="b2_4"]:checked').val() ? $('input[name="b2_4"]:checked').val() : 0;
                var b2_5 = $('input[name="b2_5"]:checked').val() ? $('input[name="b2_5"]:checked').val() : 0;
                var b2_6 = $('input[name="b2_6"]:checked').val() ? $('input[name="b2_6"]:checked').val() : 0;
                var b3_1 = $('input[name="b3_1"]:checked').val() ? $('input[name="b3_1"]:checked').val() : 0;
                var b3_2 = $('input[name="b3_2"]:checked').val() ? $('input[name="b3_2"]:checked').val() : 0;
                var b3_3 = $('input[name="="]:checked').val() ? $('input[name="="]:checked').val() : 0;
                var b3_4 = $('input[name="b3_4"]:checked').val() ? $('input[name="b3_4"]:checked').val() : 0;
                var b3_5 = $('input[name="b3_5"]:checked').val() ? $('input[name="b3_5"]:checked').val() : 0;
                var b3_6 = $('input[name="b3_6"]:checked').val() ? $('input[name="b3_6"]:checked').val() : 0;
                var b4_1 = $('input[name="b4_1"]:checked').val() ? $('input[name="b4_1"]:checked').val() : 0;
                var b4_2 = $('input[name="b4_2"]:checked').val() ? $('input[name="b4_2"]:checked').val() : 0;
                var b5_1 = $('input[name="b5_1"]:checked').val() ? $('input[name="b5_1"]:checked').val() : 0;
                var b5_2 = $('input[name="b5_2"]:checked').val() ? $('input[name="b5_2"]:checked').val() : 0;
                var b6_1 = $('input[name="b6_1"]:checked').val() ? $('input[name="b6_1"]:checked').val() : 0;
                var b6_2 = $('input[name="b6_2"]:checked').val() ? $('input[name="b6_2"]:checked').val() : 0;
                var c1 = $('input[name="c1"]:checked').val() ? $('input[name="c1"]:checked').val() : 0;
                var c2 = $('input[name="c2"]:checked').val() ? $('input[name="c2"]:checked').val() : 0;
                var c3 = $('input[name="c3"]:checked').val() ? $('input[name="c3"]:checked').val() : 0;
                var c4 = $('input[name="c4"]:checked').val() ? $('input[name="c4"]:checked').val() : 0;
                var c5 = $('input[name="c5"]:checked').val() ? $('input[name="c5"]:checked').val() : 0;
                var c6 = $('input[name="c6"]:checked').val() ? $('input[name="c6"]:checked').val() : 0;
                var c7 = $('input[name="c7"]:checked').val() ? $('input[name="c7"]:checked').val() : 0;
                var c8 = $('input[name="c8"]:checked').val() ? $('input[name="c8"]:checked').val() : 0;
                var c9 = $('input[name="c9"]:checked').val() ? $('input[name="c9"]:checked').val() : 0;
                var c10 = $('input[name="c10"]:checked').val() ? $('input[name="c10"]:checked').val() : 0;
                var c11 = $('input[name="c11"]:checked').val() ? $('input[name="c11"]:checked').val() : 0;
                var d1 = $('input[name="d1"]:checked').val() ? $('input[name="d1"]:checked').val() : 0;
                var d2 = $('input[name="d2"]:checked').val() ? $('input[name="d2"]:checked').val() : 0;
                var d3 = $('input[name="d3"]:checked').val() ? $('input[name="d3"]:checked').val() : 0;
                var d4 = $('input[name="d4"]:checked').val() ? $('input[name="d4"]:checked').val() : 0;
                var d5 = $('input[name="d5"]:checked').val() ? $('input[name="d5"]:checked').val() : 0;

                var e1_1 = $('input[name="e1_1"]:checked').val() ? $('input[name="e1_1"]:checked').val() : 0;
                var e1_2 = $('input[name="e1_2"]:checked').val() ? $('input[name="e1_2"]:checked').val() : 0;
                var e1_3 = $('input[name="e1_3"]:checked').val() ? $('input[name="e1_3"]:checked').val() : 0;
                var e1_4 = $('input[name="e1_4"]:checked').val() ? $('input[name="e1_4"]:checked').val() : 0;
                var e1_5 = $('input[name="e1_5"]:checked').val() ? $('input[name="e1_5"]:checked').val() : 0;
                var e1_6 = $('input[name="e1_6"]:checked').val() ? $('input[name="e1_6"]:checked').val() : 0;
                var e1_7 = $('input[name="e1_7"]:checked').val() ? $('input[name="e1_7"]:checked').val() : 0;
                var e1_8 = $('input[name="e1_8"]:checked').val() ? $('input[name="e1_8"]:checked').val() : 0;
                var e1_9 = $('input[name="e1_9"]:checked').val() ? $('input[name="e1_9"]:checked').val() : 0;
                var e1_10 = $('input[name="e1_10"]:checked').val() ? $('input[name="e1_10"]:checked').val() : 0;
                var e1_11 = $('input[name="e1_11"]:checked').val() ? $('input[name="e1_11"]:checked').val() : 0;
                var e1_12 = $('input[name="e1_12"]:checked').val() ? $('input[name="e1_12"]:checked').val() : 0;

                var e2_1 = $('input[name="e2_1"]:checked').val() ? $('input[name="e2_1"]:checked').val() : 0;
                var e2_2 = $('input[name="e2_2"]:checked').val() ? $('input[name="e2_2"]:checked').val() : 0;
                var e2_3 = $('input[name="e2_3"]:checked').val() ? $('input[name="e2_3"]:checked').val() : 0;
                var e2_4 = $('input[name="e2_4"]:checked').val() ? $('input[name="e2_4"]:checked').val() : 0;
                var e2_5 = $('input[name="e2_5"]:checked').val() ? $('input[name="e2_5"]:checked').val() : 0;
                var e2_6 = $('input[name="e2_6"]:checked').val() ? $('input[name="e2_6"]:checked').val() : 0;
                var e2_7 = $('input[name="e2_7"]:checked').val() ? $('input[name="e2_7"]:checked').val() : 0;
                var e2_8 = $('input[name="e2_8"]:checked').val() ? $('input[name="e2_8"]:checked').val() : 0;
                var e2_9 = $('input[name="e2_9"]:checked').val() ? $('input[name="e2_9"]:checked').val() : 0;
                var e2_10 = $('input[name="e2_10"]:checked').val() ? $('input[name="e2_10"]:checked').val() : 0;
                var e2_11 = $('input[name="e2_11"]:checked').val() ? $('input[name="e2_11"]:checked').val() : 0;
                var e2_12 = $('input[name="e2_12"]:checked').val() ? $('input[name="e2_12"]:checked').val() : 0;
                var e2_13 = $('input[name="e2_13"]:checked').val() ? $('input[name="e2_13"]:checked').val() : 0;
                var e3_1 = $('input[name="e3_1"]:checked').val() ? $('input[name="e3_1"]:checked').val() : 0;
                var e3_2 = $('input[name="e3_2"]:checked').val() ? $('input[name="e3_2"]:checked').val() : 0;
                var e3_3 = $('input[name="e3_3"]:checked').val() ? $('input[name="e3_3"]:checked').val() : 0;
                var e3_4 = $('input[name="e3_4"]:checked').val() ? $('input[name="e3_4"]:checked').val() : 0;
                var e3_5 = $('input[name="e3_5"]:checked').val() ? $('input[name="e3_5"]:checked').val() : 0;
                var e4_1 = $('input[name="e4_1"]:checked').val() ? $('input[name="e4_1"]:checked').val() : 0;
                var e4_2 = $('input[name="e4_2"]:checked').val() ? $('input[name="e4_2"]:checked').val() : 0;
                var e4_3 = $('input[name="e4_3"]:checked').val() ? $('input[name="e4_3"]:checked').val() : 0;
                var e4_4 = $('input[name="e4_4"]:checked').val() ? $('input[name="e4_4"]:checked').val() : 0;
                var e4_5 = $('input[name="e4_5"]:checked').val() ? $('input[name="e4_5"]:checked').val() : 0;
                var e5_1 = $('input[name="e5_1"]:checked').val() ? $('input[name="e5_1"]:checked').val() : 0;
                var e5_2 = $('input[name="e5_2"]:checked').val() ? $('input[name="e5_2"]:checked').val() : 0;
                var e6_1 = $('input[name="e6_1"]:checked').val() ? $('input[name="e6_1"]:checked').val() : 0;
                var e6_2 = $('input[name="e6_2"]:checked').val() ? $('input[name="e6_2"]:checked').val() : 0;
                var e6_3 = $('input[name="e6_3"]:checked').val() ? $('input[name="e6_3"]:checked').val() : 0;
                var e6_4 = $('input[name="e6_4"]:checked').val() ? $('input[name="e6_4"]:checked').val() : 0;
                var e6_5 = $('input[name="e6_5"]:checked').val() ? $('input[name="e6_5"]:checked').val() : 0;
                var e6_6 = $('input[name="e6_6"]:checked').val() ? $('input[name="e6_6"]:checked').val() : 0;
                var e7_1 = $('input[name="e7_1"]:checked').val() ? $('input[name="e7_1"]:checked').val() : 0;
                var e7_2 = $('input[name="e7_2"]:checked').val() ? $('input[name="e7_2"]:checked').val() : 0;
                var e7_3 = $('input[name="e7_3"]:checked').val() ? $('input[name="e7_3"]:checked').val() : 0;
                var f1 = $('input[name="f1"]:checked').val() ? $('input[name="f1"]:checked').val() : 0;
                var f2 = $('input[name="f2"]:checked').val() ? $('input[name="f2"]:checked').val() : 0;
                var f3 = $('input[name="f3"]:checked').val() ? $('input[name="f3"]:checked').val() : 0;
                var f4 = $('input[name="f4"]:checked').val() ? $('input[name="f4"]:checked').val() : 0;
                var g1 = $('input[name="g1"]:checked').val() ? $('input[name="g1"]:checked').val() : 0;
                var g2 = $('input[name="g2"]:checked').val() ? $('input[name="g2"]:checked').val() : 0;
                var g3 = $('input[name="g3"]:checked').val() ? $('input[name="g3"]:checked').val() : 0;
                var g4 = $('input[name="g4"]:checked').val() ? $('input[name="g4"]:checked').val() : 0;
                var h1 = $('input[name="h1"]:checked').val() ? $('input[name="h1"]:checked').val() : 0;
                var h2 = $('input[name="h2"]:checked').val() ? $('input[name="h2"]:checked').val() : 0;
                var h3 = $('input[name="h3"]:checked').val() ? $('input[name="h3"]:checked').val() : 0;
                var h4 = $('input[name="h4"]:checked').val() ? $('input[name="h4"]:checked').val() : 0;

                var satisfaction_survey = {
                    a1: a1,
                    a2: a2,
                    a3: a3,
                    a4: a4,
                    a5: a5,
                    a6: a6,
                    a7: a7,
                    a8: a8,
                    b1_1: b1_1,
                    b1_2: b1_2,
                    b1_3: b1_3,
                    b1_4: b1_4,
                    b1_5: b1_5,
                    b1_6: b1_6,
                    b2_1: b2_1,
                    b2_2: b2_2,
                    b2_3: b2_3,
                    b2_4: b2_4,
                    b2_5: b2_5,
                    b2_6: b2_6,
                    b3_1: b3_1,
                    b3_2: b3_2,
                    b3_3: b3_3,
                    b3_4: b3_4,
                    b3_5: b3_5,
                    b3_6: b3_6,
                    b4_1: b4_1,
                    b4_2: b4_2,
                    b5_1: b4_1,
                    b5_2: b5_2,
                    b6_1: b6_1,
                    b6_2: b6_2,
                    c1: c1,
                    c2: c2,
                    c3: c3,
                    c4: c4,
                    c5: c5,
                    c6: c6,
                    c7: c7,
                    c8: c8,
                    c9: c9,
                    c10: c10,
                    c11: c11,
                    d1: d1,
                    d2: d2,
                    d3: d3,
                    d4: d4,
                    d5: d5,
                    e1_1: e1_1,
                    e1_2: e1_2,
                    e1_3: e1_3,
                    e1_4: e1_4,
                    e1_5: e1_5,
                    e1_6: e1_6,
                    e1_7: e1_7,
                    e1_8: e1_8,
                    e1_9: e1_9,
                    e1_10: e1_10,
                    e1_11: e1_11,
                    e1_12: e1_12,
                    e2_1: e2_1,
                    e2_2: e2_2,
                    e2_3: e2_3,
                    e2_4: e2_4,
                    e2_5: e2_5,
                    e2_6: e2_6,
                    e2_7: e2_7,
                    e2_8: e2_8,
                    e2_9: e2_9,
                    e2_10: e2_10,
                    e2_11: e2_11,
                    e2_12: e2_12,
                    e2_13: e2_13,
                    e3_1: e3_1,
                    e3_2: e3_2,
                    e3_3: e3_3,
                    e3_4: e3_4,
                    e3_5: e3_5,
                    e4_1: e4_1,
                    e4_2: e4_2,
                    e4_3: e4_3,
                    e4_4: e4_4,
                    e4_5: e4_5,
                    e5_1: e5_1,
                    e5_2: e5_2,
                    e6_1: e6_1,
                    e6_2: e6_2,
                    e6_3: e6_3,
                    e6_4: e6_4,
                    e6_5: e6_5,
                    e6_6: e6_6,
                    e7_1: e7_1,
                    e7_2: e7_2,
                    e7_3: e7_3,
                    f1: f1,
                    f2: f2,
                    f3: f3,
                    f4: f4,
                    g1: g1,
                    g2: g2,
                    g3: g3,
                    g4: g4,
                    h1: h1,
                    h2: h2,
                    h3: h3,
                    h4: h4,
                    suggestion: suggestion
                };
                $scope.user.date_of_birth = _date;
                $data = {
                    '_token': myToken,
                    'user': $scope.user,
                    'employment_survey': employment_survey,
                    'education_outcome_experiences': education_outcome_experiences,
                    'education_outcome_standards': education_outcome_standards,
                    'activity_involvements': $scope.activity_involvements,
                    'alumni_family_members': $scope.alumni_family_members,
                    'alumni_professional_services': $scope.alumni_professional_services,
                    'alumni_personal_services': $scope.alumni_personal_services,
                    'satisfaction_survey': satisfaction_survey
                };



                $http.post('/api/user/signup', $data)
                        .success(function (data, status, headers, config) {

                            var message = data['message'];
                            var token = data['token'];
                            var user = data['user'];
                            var employmentSurvey = data['employmentSurvey'];
                            var educationOutcomeExperiences = data['educationOutcomeExperiences'];
                            var educationOutcomeStandards = data['educationOutcomeStandards'];
                            var activityInvolvements = data['activityInvolvements'];
                            var alumni_family_members = data['alumni_family_members'];
                            var alumni_personal_services = data['alumni_personal_services'];
                            var alumni_professional_services = data['alumni_professional_services'];
                            var satisfaction_survey = data['satisfaction_survey'];
                            console.log('successfully save!');
//                            console.log('user: ' + JSON.stringify(user));
//                            console.log('employmentSurvey: ' + JSON.stringify(employmentSurvey));
//                            console.log('educationOutcomeExperiences: ' + JSON.stringify(educationOutcomeExperiences));
//                            console.log('educationOutcomeStandards: ' + JSON.stringify(educationOutcomeStandards));
//                            console.log('activityInvolvements: ' + JSON.stringify(activityInvolvements));
//                            console.log('alumni_family_members: ' + JSON.stringify(alumni_family_members));
//                            console.log('family_names: ' + JSON.stringify(family_names));
//                            console.log('alumni_professional_services: ' + JSON.stringify(alumni_professional_services));
//                            console.log('alumni_personal_services: ' + JSON.stringify(alumni_personal_services));
//                            console.log('satisfaction_survey: ' + JSON.stringify(satisfaction_survey));
//                            window.location.href = loginUrl;
                            $window.location.href = '/registered';

                            $scope.stopSpin();
                        })
                        .error(function (data, status, headers, config) {
                            console.log(data);
                        });

            }
        };







    }]);





signupApp.service('signupService', function ($http) {



});
    