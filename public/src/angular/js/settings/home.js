



/* global baseURL, myToken, photo */

var homeApp = angular.module('homeApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


homeApp.controller('homeController', ['$scope', '$http', 'aboutService', '$sce', function ($scope, $http, aboutService, $sce) {


        $scope.preference = {
            id: 0,
            school_name: '',
            school_label: '',
            contact_no: '',
            email_address: '',
            address: '',
            about_us: ''
        };
        $scope.renderHtml = function (htmlCode) {
            htmlCode = htmlCode.substring(0, 500);
           
            return $sce.trustAsHtml(htmlCode);
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
//            var string = $scope.preference.about_us;


//            document.getElementById('about-details').innerHTML = string;
//            $("#about-details").append();
            var myDiv = $('#about-details');
            myDiv.text(myDiv.text().substring(0, 900));
        });

    }]);

homeApp.service('aboutService', function ($http) {

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