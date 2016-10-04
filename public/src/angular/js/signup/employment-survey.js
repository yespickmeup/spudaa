/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


signupApp.controller('employmentSurveyController', ['$scope', '$http', function ($scope, $http) {


        $scope.uncheck = function (event) {
            console.log('asdadad');
            if ($scope.checked === event.target.value)
                $scope.checked === false;
        };


        $scope.checkSurvey = function () {

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

//            console.log('----------------------------------');
//            console.log('work_status: ' + work_status);
//            console.log('work_status_others: ' + work_status_others);
//            console.log('----------------------------------');
//            console.log('sat_challenge: ' + sat_challenge);
//            console.log('sat_job_security: ' + sat_job_security);
//            console.log('sat_salary: ' + sat_salary);
//            console.log('sat_potential: ' + sat_potential);
//            console.log('sat_support: ' + sat_support);
//            console.log('sat_quality_of_service: ' + sat_quality_of_service);
//            console.log('sat_org_ethics: ' + sat_org_ethics);
//            console.log('----------------------------------');
//            console.log('job_course_relation: ' + job_course_relation);
//            console.log('seek_relavant_job: ' + seek_relavant_job);
//            console.log('unemployment_reason: ' + unemployment_reason);
//            console.log('seeking_employment: ' + seeking_employment);


        };

    }]);