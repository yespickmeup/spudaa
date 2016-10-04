/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/* global baseURL */



signupApp.controller('backgroundInfoController', ['$scope', '$http', 'courseService', function ($scope, $http, courseService) {

       
        
        $scope.$parent.startSpin();

        $http.get('../src/json/countries.json').success(function (data) {
            $scope.$parent.country = {
                availableOptions: data,
                selectedOption: {"name": "Philippines", "code": "PH"}
            };
            $scope.$parent.stopSpin();
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
            $scope.$parent.province = {
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

        $scope.$parent.level = {
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
        $scope.$parent.year = {
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
        $scope.$parent.course = {
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
        $scope.$parent.major = {
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

var compareTo = function () {
    return {
        require: "ngModel",
        scope: {
            otherModelValue: "=compareTo"
        },
        link: function (scope, element, attributes, ngModel) {

            ngModel.$validators.compareTo = function (modelValue) {
                return modelValue === scope.otherModelValue;
            };

            scope.$watch("otherModelValue", function () {
                ngModel.$validate();
            });
        }
    };
};

signupApp.directive("compareTo", compareTo);

signupApp.directive('emailAvailable', function ($timeout, $q, $http) {



    return {
        restrict: 'AE',
        require: 'ngModel',
        link: function (scope, elm, attr, model) {
            model.$asyncValidators.emailExists = function () {
                var defer = $q.defer();
                var getData = function getData() {
                    $http({
                        method: 'GET',
                        url: baseURL + '/api/user/exists/' + elm.val()
                    })
                            .success(function (data, status, headers, config) {
                                var user = data['user'];
                                if (user === null) {
                                    model.$setValidity('emailExists', false);
                                } else {
                                    model.$setValidity('emailExists', true);
                                }
                                defer.resolve;
                                defer.promise;
                            })
                            .error(function (data, status, headers, config) {
                                console.log('getlevels() error');
                            });

                };
                var user = getData();
                return defer.promise;
            };


        }
    };

});


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
    