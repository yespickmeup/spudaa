/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



/* global baseURL */



signupApp.controller('backgroundInfoController', ['$scope', '$http', 'courseService', function ($scope, $http, courseService) {

       
        
        

        



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


