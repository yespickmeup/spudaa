/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


signupApp.controller('educactionOutcomesController', ['$scope', '$http', function ($scope, $http) {





        $scope.checkOutcome = function () {

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
            console.log('----------------------------------');
            console.log('creativity: ' + creativity_importance + ' : ' + creativity_impact);
            console.log('commitment: ' + commitment_importance + ' : ' + commitment_impact);
            console.log('ethics: ' + ethics_importance + ' : ' + ethics_impact);
            console.log('teamwork: ' + teamwork_importance + ' : ' + teamwork_impact);
            console.log('diversit: ' + diversity_importance + ' : ' + diversity_impact);
            console.log('effective_communication: ' + effective_communication_importance + ' : ' + effective_communication_impact);
            console.log('punctuality ' + punctuality_importance + ' : ' + punctuality_impact);
            console.log('adaptably: ' + adaptably_importance + ' : ' + adaptably_impact);


        };
        $scope.checkOutcome2 = function () {

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

            console.log('----------------------------------');
            console.log('nursing_care: ' + nursing_care_importance + ' : ' + nursing_care_impact);
            console.log('management_of_environment: ' + management_of_environment_importance + ' : ' + management_of_environment_impact);
            console.log('health_education: ' + health_education_importance + ' : ' + health_education_impact);
            console.log('profession: ' + profession_importance + ' : ' + profession_impact);
            console.log('legal_responsibilities: ' + legal_responsibilities_importance + ' : ' + legal_responsibilities_impact);
            console.log('ethico: ' + ethico_importance + ' : ' + ethico_impact);
            console.log('improvement: ' + improvement_importance + ' : ' + improvement_impact);
            console.log('records_management: ' + records_management_importance + ' : ' + records_management_impact);
            console.log('research: ' + research_importance + ' : ' + research_impact);
            console.log('collaboration_impact: ' + collaboration_importance + ' : ' + collaboration_impact);
            console.log('communication: ' + communication_importance + ' : ' + communication_impact);



        };
    }]);