



/* global baseURL, myToken, photo */

var aboutUssApp = angular.module('aboutUssApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


aboutUssApp.controller('aboutUseController', ['$scope', '$http', 'aboutService', function ($scope, $http, aboutService) {


        $scope.preference = {
            id: 0,
            school_name: '',
            school_label: '',
            contact_no: '',
            email_address: '',
            address: '',
            about_us: ''
        };
        aboutService.getAbout().then(function (resp) {
            var preference = JSON.parse(resp.data['preference']);
            $scope.preference.id = preference[0].id;
            $scope.preference.school_name = preference[0].school_name;
            $scope.preference.school_label = preference[0].school_label;
            $scope.preference.contact_no = preference[0].contact_no;
            $scope.preference.email_address = preference[0].email_address;
            $scope.preference.address = preference[0].address;
            $scope.preference.about_us = preference[0].about_us;
            var string = $scope.preference.about_us;
            $("#details").append("<h1>About Us</h1><p>" + string + "</p>");

        });

    }]);

aboutUssApp.service('aboutService', function ($http) {

    this.getAbout = function () {
        return $http({
            method: 'GET',
            url: baseURL + '/api/preferences'
        })
                .success(function (data, status, headers, config) {
                    /*console.log('getlevels() success ');*/
                })
                .error(function (data, status, headers, config) {
                    console.log('getlevels() error');
                });
    };

});