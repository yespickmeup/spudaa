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
            student_no: 'student_no',
            first_name: 'first_name',
            middle_name: 'middle_name',
            last_name: 'last_name',
            suffix_name: 'suffix_name',
            civil_status: 'Single',
            gender: 'Male',
            date_of_birth: '02/08/1991',
            blood_type: 'O+',
            email: 'dodong.ronald@gmail.com',
            password: 'password',
            confirm_password: 'password',
            country: 'Philippines',
            province: 'Negros Oriental',
            city: 'Dumaguete',
            zip_code: '6200',
            home_address: 'home_address',
            present_address: 'present_address',
            landline_no: 'landline_no',
            cellphone_no: 'cellphone_no',
            level: 'level',
            year: 'year',
            course: 'course',
            major: 'major',
            father: 'father',
            father_is_paulinian: '',
            father_occupation: 'father_occupation',
            father_office_address: 'father_office_address',
            mother: 'mother',
            mother_is_paulinian: '',
            mother_occupation: 'mother_occupation',
            mother_office_address: 'mother_office_address'
        };

        $scope.country = {};
        $scope.province = {};
        $scope.city = {};
        $scope.level = {};
        $scope.year = {};
        $scope.course = {};
        $scope.major = {};
// End of User Background Information
        $scope.user.father_is_paulinian = false;
        $scope.user.mother_is_paulinian = false;

//      Start of School Activities
        $scope.activity_involvements = [];
//      End of School Activities
//      Start of ALumni Family Members
        $scope.alumni_family_members = [];
        $scope.alumni_professional_services = [];
        $scope.alumni_personal_services = [];
//      End of Alumni Family Members


        $scope.submitForm = function (isValid) {



            if (isValid) {

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





                $scope.user.date_of_birth = _date;
                $data = {
                    '_token': myToken,
                    'user': $scope.user,
                    'employment_survey': employment_survey,
                    'education_outcome_experiences': education_outcome_experiences,
                    'education_outcome_standards': education_outcome_standards,
                    'activity_involvements': $scope.activity_involvements
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
//                            console.log('user: ' + JSON.stringify(user));
                            console.log('employmentSurvey: ' + JSON.stringify(employmentSurvey));
//                            console.log('educationOutcomeExperiences: ' + JSON.stringify(educationOutcomeExperiences));
//                            console.log('educationOutcomeStandards: ' + JSON.stringify(educationOutcomeStandards));
//                            console.log('activityInvolvements: ' + JSON.stringify(activityInvolvements));
//                            window.location.href = loginUrl;
//                            $window.location.href = '/registered';

                            $scope.stopSpin();
                        })
                        .error(function (data, status, headers, config) {
                            console.log(status);
                        });

            }
        };







    }]);





signupApp.service('signupService', function ($http) {



});
    