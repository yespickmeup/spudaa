/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




/* global myToken, photo */

var signupApp = angular.module('signupApp', ['angularSpinner', 'smart-table', 'ngFileUpload'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});



signupApp.controller('signupController', ['$scope', '$http', 'signupService', 'usSpinnerService', '$rootScope', '$timeout', '$filter', '$window', 'Upload', function ($scope, $http, signupService, usSpinnerService, $rootScope, $timeout, $filter, $window, Upload) {



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
            mother_office_address: '',
            imageSource: photo + '/' + $scope.my_id + '.jpg'
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

        $scope.photoFile = null;
        $scope.fileNameChaged = function (element) {

            $scope.photoFile = element.files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                $scope.$apply(function () {
                    $scope.user.imageSource = e.target.result;

                });
            };
            reader.readAsDataURL(element.files[0]);
        };

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

//             
//             
                $scope.user.date_of_birth = _date;
                $data = {
                    '_token': myToken,
                    'user': $scope.user,
                    'activity_involvements': $scope.activity_involvements,
                    'alumni_family_members': $scope.alumni_family_members,
                    'alumni_professional_services': $scope.alumni_professional_services,
                    'alumni_personal_services': $scope.alumni_personal_services

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
//                            console.log('id: ' + user.id);
                            $scope.uploadImage(user.id);

                            $window.location.href = '/registered';

                            $scope.stopSpin();
                        })
                        .error(function (data, status, headers, config) {
                            console.log(data);
                        });

                $scope.uploadImage = function (filename) {

                    if ($scope.photoFile) {

                        $scope.photoFile.upload = Upload.upload({
                            url: '/fileUpload2',
                            data: {
                                _token: myToken,
                                file: $scope.photoFile,
                                filename: filename
                            }
                        });
                        $scope.photoFile.upload.then(function (response) {

                            $scope.uploadComplete = true;
                            setTimeout(function () {
                                $scope.$apply(function () {
                                    $scope.photoFile.result = response.data;
                                    $scope.uploadComplete = false;
                                });
                            }, 1000);

                        }, function (response) {
                            if (response.status > 0)
                                $scope.errorMsg = response.status + ': ' + response.data;
                        }, function (evt) {
                            $scope.photoFile.progress = Math.min(100, parseInt(100.0 *
                                    evt.loaded / evt.total));
//                    console.log($scope.photoFile.progress);
                        });
                    }
                }

            }
        };







    }]);





signupApp.service('signupService', function ($http) {



});
    