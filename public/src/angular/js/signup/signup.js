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



signupApp.controller('signupController', ['$scope', '$http', 'usSpinnerService', '$rootScope', '$timeout', '$filter', '$window', 'courseService', function ($scope, $http, usSpinnerService, $rootScope, $timeout, $filter, $window, courseService) {



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
            civil_status: 'Single',
            gender: 'Male',
            date_of_birth: '',
            blood_type: 'O+',
            email: '',
            password: '',
            confirm_password: '',
            country: 'Philippines',
            province: '',
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


        $http.get('../src/json/countries.json').success(function (data) {
            $scope.country = {
                availableOptions: data,
                selectedOption: {"name": "Philippines", "code": "PH"}
            };
          
        });

        $scope.countryOnChange = function (country) {
            if (country.name !== 'Philippines') {
                $scope.province = {
                    availableOptions: [],
                    selectedOption: {}
                };
            } else {
                $scope.province = {
                    availableOptions: $scope.cacheProvinces,
                    selectedOption: {"name": "Negros Oriental", "region": "VII", "key": "NER"}
                };
            }
        };

        $scope.cacheProvinces = [];
        $http.get('../src/json/provinces.json').success(function (data) {
            $scope.cacheProvinces = data;
            $scope.province = {
                availableOptions: data,
                selectedOption: {"name": "Negros Oriental", "region": "VII", "key": "NER"}
            };
        });


        $scope.provinceOnChange = function (province) {

        };
        $scope.cacheCities = [];
        $http.get('../src/json/cities.json').success(function (data) {
            $scope.cacheCities = data;
            $.each(data, function (idx, obj) {
                if (obj.city) {
                    obj.name = obj.name + ' City';
                }
            });
            $scope.$parent.city = {
                availableOptions: data,
                selectedOption: {"name": "Dumaguete City", "province": "NER", "city": true}
            };
        });

        $scope.level = {
            availableOptions: [],
            selectedOption: {id: 0, level: ''}
        };
        courseService.getLevels().then(function (resp) {
            var levels = JSON.stringify(resp.data['levels']);
            $.each(JSON.parse(levels), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.level = obj.level;
                $scope.level.availableOptions.push(data);
            });
        });
        $scope.year = {
            availableOptions: [],
            selectedOption: {id: 0, year: ''}
        };
        courseService.getYears().then(function (resp) {
            var years = JSON.stringify(resp.data['years']);
            $.each(JSON.parse(years), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.year = obj.year;
                $scope.year.availableOptions.push(data);
            });
        });
        $scope.course = {
            availableOptions: [],
            selectedOption: {id: 0, course: ''}
        };
        courseService.getCourses().then(function (resp) {
            var courses = JSON.stringify(resp.data['courses']);
            $.each(JSON.parse(courses), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.course = obj.course;
                $scope.course.availableOptions.push(data);
            });
        });
        $scope.major = {
            availableOptions: [],
            selectedOption: {id: 0, major: ''}
        };
        courseService.getMajors().then(function (resp) {
            var majors = JSON.stringify(resp.data['majors']);
            $.each(JSON.parse(majors), function (idx, obj) {
                var data = {};
                data.id = obj.id;
                data.major = obj.major;
                $scope.major.availableOptions.push(data);
            });
        });




    }]);




signupApp.service('courseService', function ($http) {


    this.getLevels = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/levels'
        })
                .success(function (data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };


    this.getYears = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/years'
        })
                .success(function (data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('getYears() error');
                });
    };
    this.getCourses = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/courses'
        })
                .success(function (data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('getCourses() error');
                });
    };
    this.getMajors = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/majors'
        })
                .success(function (data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('getMajors() error');
                });
    };

    this.getUserExists = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/user/exists/' + $scope.user.email
        })
                .success(function (data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };
});
    