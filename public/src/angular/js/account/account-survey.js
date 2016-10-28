
/* global photo */


settingsApp.controller('accountSurveyController', ['$scope', '$http', 'accountSurveyService', function ($scope, $http, accountSurveyService) {


        $scope.showUpdateEmploymentSurveySuccess = false;
        $scope.showUpdateEducationalOutcomesSuccess = false;
        $scope.showUpdateSatisfactionSuccess = false;


        $scope.selected = '';




        accountSurveyService.getEmploymentSurvey($scope.my_id).then(function (resp) {
            var employment_survey = resp.data['survey'];
            $scope.aWork_status = employment_survey['work_status'];
            $scope.aWork_status_others = employment_survey['work_status_others'];
            $scope.aSat_challenge = employment_survey['sat_challenge'];
            $scope.aSat_job_security = employment_survey['sat_job_security'];
            $scope.aSat_salary = employment_survey['sat_salary'];
            $scope.aSat_potential = employment_survey['sat_potential'];
            $scope.aSat_support = employment_survey['sat_support'];
            $scope.aSat_quality_of_service = employment_survey['sat_quality_of_service'];
            $scope.aSat_org_ethics = employment_survey['sat_org_ethics'];
            $scope.aJob_course_relation = employment_survey['job_course_relation'];
            $scope.aSeek_relavant_job = employment_survey['seek_relavant_job'];
            $scope.aUnemployment_reason = employment_survey['unemployment_reason'];
            $scope.aSeeking_employment = employment_survey['seeking_employment'];
            $scope.work_statuses = {
                questionText: "",
                choices: [
                    {id: 1, text: "employed full time"},
                    {id: 2, text: "employed part time"},
                    {id: 3, text: "continuing education part time and employed"},
                    {id: 4, text: "unemployed, seeking employment"},
                    {id: 5, text: "unemployed, not seeking employment"}
                ]
            };
            $scope.sat_challenges = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}, {id: 5, text: ""}]};
            $scope.sat_job_securities = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}, {id: 5, text: ""}]};
            $scope.sat_salaries = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}, {id: 5, text: ""}]};
            $scope.sat_potentials = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}, {id: 5, text: ""}]};
            $scope.sat_supports = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}, {id: 5, text: ""}]};
            $scope.sat_quality_of_services = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}, {id: 5, text: ""}]};
            $scope.sat_org_ethicses = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}, {id: 5, text: ""}]};

            $scope.job_course_relations = {questionText: "", choices: [{id: 1, text: "highly related "}, {id: 2, text: "moderately related"}, {id: 3, text: "slightly related"}, {id: 4, text: "not related "}]};
            $scope.seek_relavant_jobs = {questionText: "", choices: [{id: 'yes', text: "yes"}, {id: 'no', text: "no"}]};
            $scope.unemployment_reasons = {questionText: "", choices: [{id: 1, text: "unable to find job since graduating from college"}, {id: 2, text: "quit to find another job"}, {id: 3, text: "removed by previous employer"}, {id: 4, text: "health/personal reasons"}, {id: 5, text: "no desire for employment as of this time"}]};
            $scope.seeking_employments = {questionText: "", choices: [{id: 1, text: "not seeking employment"}, {id: 2, text: "less than 1 month"}, {id: 3, text: "1-3 months"}, {id: 4, text: "3-6 months"}, {id: 5, text: "7-12 months"}, {id: 6, text: "over 12 months"}]};
        });

        accountSurveyService.getOutcomeExperiences($scope.my_id).then(function (resp) {
            var outcome_experiences = resp.data['experience'];
            $scope.aCreativity_importance = outcome_experiences['creativity_importance'];
            $scope.aCreativity_impact = outcome_experiences['creativity_impact'];
            $scope.aCommitment_importance = outcome_experiences['commitment_importance'];
            $scope.aCommitment_impact = outcome_experiences['commitment_impact'];
            $scope.aEthics_importance = outcome_experiences['ethics_importance'];
            $scope.aEthics_impact = outcome_experiences['ethics_impact'];
            $scope.aTeamwork_importance = outcome_experiences['teamwork_importance'];
            $scope.aTeamwork_impact = outcome_experiences['teamwork_impact'];
            $scope.aDiversity_importance = outcome_experiences['diversity_importance'];
            $scope.aDiversity_impact = outcome_experiences['diversity_impact'];
            $scope.aEffective_communication_importance = outcome_experiences['effective_communication_importance'];
            $scope.aEffective_communication_impact = outcome_experiences['effective_communication_impact'];
            $scope.aPunctuality_importance = outcome_experiences['punctuality_importance'];
            $scope.aPunctuality_impact = outcome_experiences['punctuality_impact'];
            $scope.aAdaptably_importance = outcome_experiences['adaptably_importance'];
            $scope.aAdaptably_impact = outcome_experiences['adaptably_impact'];

            $scope.importances = {questionText: "", choices: [{id: 4, text: ""}, {id: 3, text: ""}, {id: 2, text: ""}, {id: 1, text: ""}]};
            $scope.impacts = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}]};


        });

        accountSurveyService.getOutcomeStandards($scope.my_id).then(function (resp) {
            var standard = resp.data['standard'];

            $scope.aNursing_care_importance = standard['nursing_care_importance'];
            $scope.aNursing_care_impact = standard['nursing_care_impact'];
            $scope.aManagement_of_environment_importance = standard['management_of_environment_importance'];
            $scope.aManagement_of_environment_impact = standard['management_of_environment_impact'];
            $scope.aHealth_education_importance = standard['health_education_importance'];
            $scope.aHealth_education_impact = standard['health_education_impact'];
            $scope.aProfession_importance = standard['profession_importance'];
            $scope.aProfession_impact = standard['profession_impact'];
            $scope.aLegal_responsibilities_importance = standard['legal_responsibilities_importance'];
            $scope.aLegal_responsibilities_impact = standard['legal_responsibilities_impact'];
            $scope.aEthico_importance = standard['ethico_importance'];
            $scope.aEthico_impact = standard['ethico_impact'];
            $scope.aImprovement_importance = standard['improvement_importance'];
            $scope.aImprovement_impact = standard['improvement_impact'];
            $scope.aRecords_management_importance = standard['records_management_importance'];
            $scope.aRecords_management_impact = standard['records_management_impact'];
            $scope.aResearch_importance = standard['research_importance'];
            $scope.aResearch_impact = standard['research_impact'];
            $scope.aCollaboration_importance = standard['collaboration_importance'];
            $scope.aCollaboration_impact = standard['collaboration_impact'];
            $scope.aCommunication_importance = standard['communication_importance'];
            $scope.aCommunication_impact = standard['communication_impact'];



        });
        accountSurveyService.getSatiscationSurveys($scope.my_id).then(function (resp) {
            var satisfaction = resp.data['satisfaction'];

            $scope.aA1 = satisfaction['a1'];
            $scope.aA2 = satisfaction['a2'];
            $scope.aA3 = satisfaction['a3'];
            $scope.aA4 = satisfaction['a4'];
            $scope.aA5 = satisfaction['a5'];
            $scope.aA6 = satisfaction['a6'];
            $scope.aA7 = satisfaction['a7'];
            $scope.aA8 = satisfaction['a8'];

            $scope.aB1_1 = satisfaction['b1_1'];
            $scope.aB1_2 = satisfaction['b1_2'];
            $scope.aB1_3 = satisfaction['b1_3'];
            $scope.aB1_4 = satisfaction['b1_4'];
            $scope.aB1_5 = satisfaction['b1_5'];
            $scope.aB1_6 = satisfaction['b1_6'];

            $scope.aB2_1 = satisfaction['b2_1'];
            $scope.aB2_2 = satisfaction['b2_2'];
            $scope.aB2_3 = satisfaction['b2_3'];
            $scope.aB2_4 = satisfaction['b2_4'];
            $scope.aB2_5 = satisfaction['b2_5'];
            $scope.aB2_6 = satisfaction['b2_6'];

            $scope.aB3_1 = satisfaction['b3_1'];
            $scope.aB3_2 = satisfaction['b3_2'];
            $scope.aB3_3 = satisfaction['b3_3'];
            $scope.aB3_4 = satisfaction['b3_4'];
            $scope.aB3_5 = satisfaction['b3_5'];
            $scope.aB3_6 = satisfaction['b3_6'];

            $scope.aB4_1 = satisfaction['b4_1'];
            $scope.aB4_2 = satisfaction['b4_2'];

            $scope.aB5_1 = satisfaction['b5_1'];
            $scope.aB5_2 = satisfaction['b5_2'];

            $scope.aB6_1 = satisfaction['b6_1'];
            $scope.aB6_2 = satisfaction['b6_2'];


            $scope.aC1 = satisfaction['c1'];
            $scope.aC2 = satisfaction['c2'];
            $scope.aC3 = satisfaction['c3'];
            $scope.aC4 = satisfaction['c4'];
            $scope.aC5 = satisfaction['c5'];
            $scope.aC6 = satisfaction['c6'];
            $scope.aC7 = satisfaction['c7'];
            $scope.aC8 = satisfaction['c8'];
            $scope.aC9 = satisfaction['c9'];
            $scope.aC10 = satisfaction['c10'];
            $scope.aC11 = satisfaction['c11'];

            $scope.aD1 = satisfaction['d1'];
            $scope.aD2 = satisfaction['d2'];
            $scope.aD3 = satisfaction['d3'];
            $scope.aD4 = satisfaction['d4'];
            $scope.aD5 = satisfaction['d5'];

            $scope.aE1_1 = satisfaction['e1_1'];
            $scope.aE1_2 = satisfaction['e1_2'];
            $scope.aE1_3 = satisfaction['e1_3'];
            $scope.aE1_4 = satisfaction['e1_4'];
            $scope.aE1_5 = satisfaction['e1_5'];
            $scope.aE1_6 = satisfaction['e1_6'];
            $scope.aE1_7 = satisfaction['e1_7'];
            $scope.aE1_8 = satisfaction['e1_8'];
            $scope.aE1_9 = satisfaction['e1_9'];
            $scope.aE1_10 = satisfaction['e1_10'];
            $scope.aE1_11 = satisfaction['e1_11'];
            $scope.aE1_12 = satisfaction['e1_12'];

            $scope.aE2_1 = satisfaction['e2_1'];
            $scope.aE2_2 = satisfaction['e2_2'];
            $scope.aE2_3 = satisfaction['e2_3'];
            $scope.aE2_4 = satisfaction['e2_4'];
            $scope.aE2_5 = satisfaction['e2_5'];
            $scope.aE2_6 = satisfaction['e2_6'];
            $scope.aE2_7 = satisfaction['e2_7'];
            $scope.aE2_8 = satisfaction['e2_8'];
            $scope.aE2_9 = satisfaction['e2_9'];
            $scope.aE2_10 = satisfaction['e2_10'];
            $scope.aE2_11 = satisfaction['e2_11'];
            $scope.aE2_12 = satisfaction['e2_12'];
            $scope.aE2_13 = satisfaction['e2_13'];

            $scope.aE3_1 = satisfaction['e3_1'];
            $scope.aE3_2 = satisfaction['e3_2'];
            $scope.aE3_3 = satisfaction['e3_3'];
            $scope.aE3_4 = satisfaction['e3_4'];
            $scope.aE3_5 = satisfaction['e3_5'];

            $scope.aE4_1 = satisfaction['e4_1'];
            $scope.aE4_2 = satisfaction['e4_2'];
            $scope.aE4_3 = satisfaction['e4_3'];
            $scope.aE4_4 = satisfaction['e4_4'];
            $scope.aE4_5 = satisfaction['e4_5'];

            $scope.aE5_1 = satisfaction['e5_1'];
            $scope.aE5_2 = satisfaction['e5_2'];

            $scope.aE6_1 = satisfaction['e6_1'];
            $scope.aE6_2 = satisfaction['e6_2'];
            $scope.aE6_3 = satisfaction['e6_3'];
            $scope.aE6_4 = satisfaction['e6_4'];
            $scope.aE6_5 = satisfaction['e6_5'];
            $scope.aE6_6 = satisfaction['e6_6'];

            $scope.aE7_1 = satisfaction['e7_1'];
            $scope.aE7_2 = satisfaction['e7_2'];
            $scope.aE7_3 = satisfaction['e7_3'];

            $scope.aF1 = satisfaction['f1'];
            $scope.aF2 = satisfaction['f2'];
            $scope.aF3 = satisfaction['f3'];
            $scope.aF4 = satisfaction['f4'];

            $scope.aG1 = satisfaction['g1'];
            $scope.aG2 = satisfaction['g2'];
            $scope.aG3 = satisfaction['g3'];
            $scope.aG4 = satisfaction['g4'];
            
            $scope.aH1 = satisfaction['h1'];
            $scope.aH2 = satisfaction['h2'];
            $scope.aH3 = satisfaction['h3'];
            $scope.aH4 = satisfaction['h4'];
            
            $scope.suggestion = satisfaction['suggestion'];
            
            $scope.a1s = {questionText: "", choices: [{id: 1, text: ""}, {id: 2, text: ""}, {id: 3, text: ""}, {id: 4, text: ""}, {id: 5, text: ""}]};


        });



        $scope.updateEmploymentSurvey2 = function () {

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

            $scope.employment_survey = {
                user_id: $scope.my_id,
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

            accountSurveyService.updateEmploymentSurvey($scope.employment_survey).then(function (resp) {
                var message = JSON.stringify(resp.data['data']);
//                console.log('me:'+message);
                if (resp.status === 200) {
                    $scope.showUpdateEmploymentSurveySuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateEmploymentSurveySuccess = false;
                        });
                    }, 500);
                }
            });

        };

        $scope.updateEducationalOutcomes2 = function () {

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

            accountSurveyService.updateEducationalOutcomes(education_outcome_experiences, education_outcome_standards, $scope.my_id).then(function (resp) {
                var message = JSON.stringify(resp.data['data']);
//                console.log('me:'+message);
                if (resp.status === 200) {
                    $scope.showUpdateEducationalOutcomesSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateEducationalOutcomesSuccess = false;
                        });
                    }, 500);
                }
            });
        };

        $scope.updateSatisfaction = function () {

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
            var b1_3 = $('input[name="b1_3"]:checked').val() ? $('input[name="b1_3"]:checked').val() : 0;
            var b1_4 = $('input[name="b1_4"]:checked').val() ? $('input[name="b1_4"]:checked').val() : 0;
            var b1_5 = $('input[name="b1_5"]:checked').val() ? $('input[name="b1_5"]:checked').val() : 0;
            var b1_6 = $('input[name="b1_6"]:checked').val() ? $('input[name="b1_6"]:checked').val() : 0;
            var b2_1 = $('input[name="b2_1"]:checked').val() ? $('input[name="b2_1"]:checked').val() : 0;
            var b2_2 = $('input[name="b2_2"]:checked').val() ? $('input[name="b2_2"]:checked').val() : 0;
            var b2_3 = $('input[name="b2_3"]:checked').val() ? $('input[name="b2_3"]:checked').val() : 0;
            var b2_4 = $('input[name="b2_4"]:checked').val() ? $('input[name="b2_4"]:checked').val() : 0;
            var b2_5 = $('input[name="b2_5"]:checked').val() ? $('input[name="b2_5"]:checked').val() : 0;
            var b2_6 = $('input[name="b2_6"]:checked').val() ? $('input[name="b2_6"]:checked').val() : 0;
            var b3_1 = $('input[name="b3_1"]:checked').val() ? $('input[name="b3_1"]:checked').val() : 0;
            var b3_2 = $('input[name="b3_2"]:checked').val() ? $('input[name="b3_2"]:checked').val() : 0;
            var b3_3 = $('input[name="b3_3"]:checked').val() ? $('input[name="b3_3"]:checked').val() : 0;
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
            var suggestion = angular.element('#suggestion').val();
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
                b5_1: b5_1,
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

           
            accountSurveyService.updateSatisfaction(satisfaction_survey, $scope.my_id).then(function (resp) {
                var message = JSON.stringify(resp.data['data']);
//                console.log('me:'+message);
                if (resp.status === 200) {
                    $scope.showUpdateSatisfactionSuccess = true;
                    setTimeout(function () {
                        $scope.$apply(function () {
                            $scope.showUpdateSatisfactionSuccess = false;
                        });
                    }, 500);
                }
            });
        };
    }]);

