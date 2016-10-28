/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */






/* global baseURL, myToken, photo */

var aboutUssApp = angular.module('facultyApp', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});


aboutUssApp.controller('facultyController', ['$scope', '$http', 'aboutService', function ($scope, $http, aboutService) {



    }]);

