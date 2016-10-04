/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




/* global myToken */

var signupApp = angular.module('signupApp', ['angularSpinner','smart-table'], function ($interpolateProvider) {
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
            province: '',
            city: '',
            zip_code: '6200',
            home_address: 'Canlas Subdivision,Malang Suba, Lower Bagacay',
            present_address: 'Canlas Subdivision,Malang Suba, Lower Bagacay',
            landline_no: '255-0287',
            cellphone_no: '09161932567',
            level: '',
            year: '',
            course: '',
            major: '',
            father: 'Basilio A. Pascua Jr.',
            father_is_paulinian: 'true',
            father_occupation: 'Retired AFP',
            father_office_address: 'Canlas Subdivision,Malang Suba, Lower Bagacay',
            mother: 'Rosie Pascu',
            mother_is_paulinian: 'false',
            mother_occupation: 'Land Broker',
            mother_office_address: 'Canlas Subdivision,Malang Suba, Lower Bagacay'
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

        



        $scope.submitForm = function (isValid) {



            if (isValid) {

                $scope.startSpin();
//                $timeout(function () {              
//                    console.log('update with timeout fired')
//                }, 3000);
                $scope.user.country = $scope.country.selectedOption.name;
                $scope.user.province = $scope.province.selectedOption.name;
                $scope.user.city = $scope.city.selectedOption.name;
                $scope.user.level = $scope.level.selectedOption.level;
                $scope.user.year = $scope.year.selectedOption.year;
                $scope.user.course = $scope.course.selectedOption.course;
                $scope.user.major = $scope.major.selectedOption.major;

                var _date = $filter('date')(new Date($scope.user.date_of_birth),
                        'yyyy-MM-dd');
                $scope.user.date_of_birth = _date;
                $data = {
                    '_token': myToken,
                    'user': $scope.user
                };


                $http.post('/api/user/signup', $data)
                        .success(function (data, status, headers, config) {

                            var message = data['message'];
                            var token = data['token'];
                            var user = data['user'];

                            console.log('user: ' + JSON.stringify(user));
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
    